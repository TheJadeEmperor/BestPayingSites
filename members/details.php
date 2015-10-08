<?php
if(!$_SESSION[login][id])
    header('Location: index.php');

function updateSession() {
    global $conn; 
    
    $sel = 'select * from users where username="'.$_SESSION[login][username].'" 
    || email="'.$_SESSION[login][email].'"';
    $res = mysql_query($sel, $conn) or die(mysql_error());
    
    $user = mysql_fetch_assoc($res); 
    $_SESSION[login] = $user; 
    return $user; 
}

$u = $_SESSION[login]; 

if($_POST[update])
{
    if($_POST[email] == '')
    {
        $msg = 'Email cannot be blank - please try again';
    }
    else {
        $upd = 'update users set email="'.$_POST[email].'" where id="'.$u[id].'"';
        mysql_query($upd, $conn) or die(mysql_error());
    }
    
    if($_POST[username] != $u[username])
    if($_POST[username] == '')
    {
        $msg .= '<br>Username cannot be blank - please try again';            
    }    
    else {
        //check for existing username
        $selU = 'select username from users where username="'.$_POST[username].'"';
        $resU = mysql_query($selU, $conn) or die(mysql_error());
        
        if(mysql_num_rows($resU) > 0)
        {
            $msg .= '<br>Username already is being used - please use another one';
        }
        else {
            $upd = 'update users set username="'.$_POST[username].'" where id="'.$u[id].'"';
            mysql_query($upd, $conn) or die(mysql_error());
        }
    }
    $u = updateSession();    
}

if($_POST[pw])
{
	if(!$_POST[newpw])
		$msg = 'Password is blank - please try again';
    else {
        if($_POST[newpw] != $_POST[verify]) 
            $msg = 'Passwords do not match - please try again';
        else {
            $upd = 'update users set password="'.$_POST[newpw].'" where username="'.$u[username].'"';
            mysql_query($upd, $conn) or die(mysql_error());
            
            $msg = 'Password updated';
            $u = updateSession();
        }
    }
}

$msg = '<font color=red><b>'.$msg.'</b></font>';

$username = $u['username'];
$password = $u['password'];
$email = $u['email'];
?>
<p>&nbsp;</p>

<center>
<?
echo $msg; 

if($_SESSION[login][username] == 'VIPUser' || $_SESSION[login][username] == 'vipuser') {
    $disable = 'disabled'; 

    echo '<center>
        <table>
<tr>
<td>
    <div class="moduleBlue"><h1>Update Profile</h1>
    <div class="moduleBody">
        <table>
        <tr>
            <td>Username: </td><td>'.$username.'</td>
        </tr>
        <tr>
            <td>Paypal Email:  </td><td>'.$paypalEmail.'</td>
        </tr>
        <tr>
            <td>Password:</td> <td>'.$password.'</td>
        </tr>
        </table>
    </div>
    </div>
    </td>
    </tr>
</table>
</center>';
}
else {
?>



<form method="POST">
<table>
<tr>
<td>
    <div class="moduleBlue"><h1>Account Profile</h1>
    <div class="moduleBody">
        <br />
        <table>
        <tr>
            <td align="right">Username: </td>
            <td>
                <input <?=$disable?> type="text" class="activeField" name="username" value="<?=$username?>" size="30" />
            </td>
        </tr>
        <tr>
            <td align="right">Paypal Email: </td>
            <td>
                <input <?=$disable?> type="text" class="activeField" name="email" value="<?=$email?>" size="30" /> 
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input <?=$disable?> type=submit name=update value="Update Profile" class="btn primary"  />
            </td>
        </tr>
        </table>
        <br/>
    </div>
    </div>
</td>
</tr>
</table>
</form>

<table>
<tr>
<td>
    <div class="moduleBlue"><h1>Change Password</h1>
    <div class="moduleBody">
        <form method=post>
        <table>
        <tr>
            <td>&nbsp;</td>
        </tr><tr align=center>
            <td align=right>New Password:</td>
            <td align=left><input <?=$disable?> type=text class=activeField name=newpw size=30>
            </td>
        </tr><tr>
            <td align=right>Confirm:</td>
            <td align=left><input <?=$disable?> type=text class=activeField name=verify size=30>
            </td>
        </tr><tr><td align=center colspan=2>
            <input <?=$disable?> type=submit name=pw value="Change Password" class="btn primary" /></td></tr>
            <tr><td>&nbsp;</td></tr>
        </table>
        </form>
    </div>
    </div>
</td>
</tr>
</table>
</center>
<?
}
?>
<p>&nbsp;</p>