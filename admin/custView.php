<?php
include('adminCode.php');

function getUser($userEmailOrID)
{
    global $conn; 
    
    if(strrpos($userEmailOrID, '@'))
        $selU = 'select * from users where email="'.$userEmailOrID.'" or email="'.$userEmailOrID.'"';
    else
        $selU = 'select * from users where id="'.$userEmailOrID.'"';

    $resU = mysql_query($selU, $conn) or print(mysql_error());
    
    return mysql_fetch_assoc($resU);
}

//get info from this sale 
$selS = 'select *, date_format(purchased, "%m/%d/%Y") as bought, date_format(expires, "%m/%d/%Y") as 
expires from sales where id="'.$_GET[id].'"';
$resS = mysql_query($selS, $conn) or die(mysql_error());

if($s = mysql_fetch_assoc($resS)) //sale array
{
    $s[notes] = stripslashes($s[notes]);
    $amount = '$'.number_format($s[amount], 2);
    
    //get all products 
    $selP = 'select * from products where id="'.$s[productID].'"';
    $resP = mysql_query($selP, $conn) or die(mysql_error());
    
    $p = mysql_fetch_assoc($resP); //product array
}

//check for expiration date
$today = time(); 
$salesDate = strtotime($s[purchased]); 
$expireSeconds = $p[expires] * 60 * 60; 

if(($today) <= ($salesDate + $expireSeconds))
{
    $downloadLinkStatus = 'Active';
    $disExtend = 'disabled'; 
}
else {
    $downloadLinkStatus = 'Expired';
}

//get the download link
$folder = $p[folder];
if($folder == '')
    $downloadLink = $websiteURL.'/?action=download&id='.$s[transID];
else
    $downloadLink = $websiteURL.'/'.$folder.'/?action=download&id='.$s[transID];

//extend the expiration date
if($_POST[extendExpires])
{
    $expireSeconds = $p[expires] * 60 * 60; 
     
    $newExpDate = time() + $expireSeconds;
    $newExpDate = date('Y-m-d h:m:i', $newExpDate);
    
    $upd = 'update sales set expires="'.$newExpDate.'" where id="'.$s[id].'"';
    $res = mysql_query($upd, $conn) or die(mysql_error());
}

if($_POST[makeAccount])
{
    $dbOptions = array(
    'tableName' => 'users',
    'dbFields' => array(
        'paypal' => $s[payerEmail],
        'email' => $s[contactEmail],
        'fname' => $s[firstName],
        'lname' => $s[lastName],
        'joinDate' => $s[purchased],
        'username' => genString(8),
        'password' => genString(8),
        )
    ); 
    
    if(dbInsert($dbOptions))
    {
        $newID = mysql_insert_id(); 
        $msg = 'Added affiliate account: <a href="updateProfile.php?id='.$newID.'">click here to view account</a>';
    }
}

if($_POST[updateNotes])
{
    $dbOptions = array(
    'tableName' => 'sales', 
    'dbFields' => array(
        'notes' => $_POST[notes]),
    'cond' => 'where id="'.$_GET[id].'"');
        
    if(dbUpdate($dbOptions))
        $msg = 'Updated notes for this sale';
    else
        $msg = 'Failed to update this sale';
}


$selU = 'select * from users where paypal="'.$s[payerEmail].'"';
$resU = mysql_query($selU, $conn) or die(mysql_error());

$u = mysql_fetch_assoc($resU);
$numAccounts = mysql_num_rows($resU);

if($numAccounts == 0 || empty($s['payerEmail']))
{
    $membersAccount = 'No';
}
else 
{
    $disAdd = 'disabled';
	$membersAccount = '<a href="updateProfile.php?id='.$u[id].'">Yes</a>';
}

$affID = $s[affiliate];
$affUser = getUser($affID);

if($msg)
	echo '<p><font color=red>'.$msg.'</font></p>';
?>
<table>
<tr valign="top">
    <td>
        <form method=post>

        <div class="moduleBlue"><h1>View Sale</h1>
        <div class="moduleBody">
            <table>
            <tr>
                <td>Transaction ID</td>
                <td><div title="header=[Paypal Transaction ID] body=[The unique transaction ID sent from Paypal upon purchase <br /> This is ID used in the download link]">
                    <a href="<?=$downloadLink?>" target=_blank><?=$s[transID]?></a> <img src="<?=$helpImg?>" /> </div>
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><?=$s[firstName].' '.$s[lastName]?></td>
            </tr>
            <tr>
                <td>Product</td>
                <td><?=$p[itemName]?></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><?=$amount?></td>
            </tr>
            <tr>
                <td>Payer Email</td>
                <td><?=$s[payerEmail]?></td>
            </tr>
            <tr>
                <td>Members account?</td><td><?=$membersAccount?></td>
            </tr>
            <tr>
                <td colspan=2 align=center><input type=submit name=makeAccount value=" Make Members Account "
                    onclick="confirm('Are you sure?');" <?=$disAdd?> /></td>
            </tr>
            <tr>
                <td>Purchased </td>
                <td><div title="header=[Purchase Date] body=[When the sale was made]">
                    <?=$s[bought]?> <img src="<?=$helpImg?>" /> </div></td>
            </tr>
            <tr>
                <td>Download Link Expires</td>
                <td><div title="header=[Download Link Expires] body=[When the download link expires <br /> The # of hours can be set in the product options]">
                    <?=$s[expires]?>  (<?=$p[expires]?> Hours) <img src="<?=$helpImg?>" /> </div></td>
            </tr>
            <tr>
                <td>Download Link Status</td>
                <td><?=$downloadLinkStatus?></td>
            </tr>
            <tr>
                <td colspan=2 align=center>
                    <input type=submit name=extendExpires value=" Extend Expiration Date " onclick="confirm('Are you sure?');" <?=$disExtend?> />
                </td>
            </tr>
            </table>
        </div>
        </div>
        </form>
        
    </td>
    <td width="10px"></td>
    <td>
        <div class="moduleBlue"><h1>Affiliate Details</h1>
        <div>
            <table>
            <tr>
                <td>Affiliate ID: </td>        
                <td><a href="updateProfile.php?id=<?=$s[affiliate]?>"><?=$s[affiliate]?></a></td>
            </tr>
            <tr>
                <td>Affiliate Username: </td>
                <td><a href="updateProfile.php?id=<?=$s[affiliate]?>"><?=$affUser[username]?></a></td>                        
            </tr>
            <tr>
                <td>Paid To Email: ?</td>
                <td><?=$s[paidTo]?></td>
            </tr>
            </table>
        </div>
        </div>
    </td>
</tr>
</table>

<p>&nbsp; </p>

<table>
<tr valign="top">
    <td>
        <div class="moduleBlue"><h1>Update Notes</h1>
        <div class="moduleBody">
            <form method=post>
                <textarea name="notes" rows=5 cols=50><?=$s[notes]?></textarea><br />
                <center><input type=submit name=updateNotes value="Update Notes" /></center>
            </form>    
        </div>
        </div>
    </td>
	<td>
        <div class="moduleBlue"><h1>More Options</h1>
        <div class="moduleBody">
            <a href="custManage.php?id=<?=$_GET[id]?>"><input type=button value="Edit Sales Details" onclick="alert('Warning: You are about to make changes to the database\nClick OK if you know what this means')"/></a>
        </div>
        </div>
    </td>
</tr>
</table>

<p>&nbsp; </p>
<?
include('adminFooter.php');  ?> 