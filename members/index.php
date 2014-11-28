<?php
$dir = '../';
include($dir.'include/mysql.php'); 
include($dir.'include/config.php');
include($dir.'include/functions.php');
include($dir.'include/spmSettings.php');
session_start();

function affstats($userID)
{
    $selU = 'select * from affstats where userID="'.$userID.'"';
    $resU = mysql_query($selU) or die(mysql_error());
    
    while($s = mysql_fetch_assoc($resU))
    {
        $stats[$s['userID']][$s['productID']] = $s; 
    }
   
    $selP = 'select * from products where affcenter="Y"'; 
    $resP = mysql_query($selP) or die(mysql_error()); 
    
    while($p = mysql_fetch_assoc($resP))
    {
        $productID = $p['id'];
        $affstats .= '<tr><td>'.$p['itemName'].'</td>
        <td>'.$stats[$userID][$productID]['uniqueClicks'].'</td>
        <td>'.$stats[$userID][$productID]['rawClicks'].'</td>
        <td>'.$stats[$userID][$productID]['salesPaid'].'</td>
        <td>'.$stats[$userID][$productID]['sales'].'</td></tr>'; 
    }
    
    $affstats = '<table class="moduleBlue" cellspacing="0">
    <tr>
        <th>Product</th>
        <th>Unique Clicks </th>
        <th>Raw Clicks </th>
        <th>Sales Paid </th>
        <th>Sales Total </th>
    </tr>
    '.$affstats.'</table>' ;
    
    return $affstats; 
}


if($_POST['dl'])
{
    downloadLink($_POST['url']);
}

if($_GET['redirect'])
    $_SESSION['redirect'] = $_GET['redirect']; 
else
    unset($_SESSION['redirect']); 

	
$templateHeader = $val['memHeader'];
$templateFooter = $val['memFooter'];
$membersContent = $val['memAreaContent'];

if($_POST[login])
{
    //verify username/password
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(empty($username)) 
    {
            $_SESSION['error'] = 'Please enter a valid username!';
    }

    if(empty($password)) 
    {
            $_SESSION['error'] = 'Please enter a valid password!';
    }

    $selU = 'select * from users where username="'.$username.'" || email="'.$username.'"';
    $resU = mysql_query($selU, $conn) or print(mysql_error());
    $u = mysql_fetch_assoc($resU);

    if(mysql_num_rows($resU) == 0) //no user found 
    {
        $_SESSION['error'] = 'The username '.$username.' does not exist!';
    }
    else //user is found 
    {
        if($u[password] != $password)
        {
        	$_SESSION['error'] = 'The password is invalid!';
        }
        else
        {
            if(empty($u[email]))
                $u[email] = 'N / A';
                
            if(empty($u[paypal]))
                $u[paypal] = 'N / A';
                    
            $_SESSION[login] = $u;
            
            if($u[status] == 'B') //check if user is banned
            {
                $_SESSION['error'] = 'Unable to login - You have been banned from our system <br />
                If you feel this is in error, please contact our support desk';    
            }
            else //coming from blog 
            {
                if($_SESSION['redirect'])
                    header('Location: ../'.$_GET['redirect']);  
                else
                    header('Location: ./?action=affcenter');                
            }
        }
    }
}

//user info 
$u = $_SESSION[login];

//skip the upsell this session
if($_POST[skipUpsell])
{
    $_SESSION[login][skipUpsell] = true;
}


if(isset($u[id])) //logged in
{	
	switch($_GET[action])
	{
            //==========================
            case 'eps':
            case 'directory':
                $affmenu = true;
                $fileName = 'timedContent.php';
                break;
            //==========================
            default:
	    case 'affcenter': //affiliate center 
	        if($_SESSION[login][skipUpsell])
	        {
	            $fileName = 'affcenter.php';
	            $affmenu = true;
	            $pageTitle = 'Affiliate Center';
	    	}
	        else
	        {
	            $fileName = 'upsell.php';
	        }
	    	break;
	    case 'details': //update profile details 
	        $fileName = 'details.php';
	        $affmenu = true;
	        break;
	    case 'tools':   //affiliate tools 
	    	$fileName = 'afftools.php';
	    	$affmenu = true;
	    	break;
	    case 'sales':   //check affiliate sales 
	    	$fileName = 'affsales.php';
	    	$affmenu = true;
	    	break; 
	    case 'sale':    //transaction details
	        $fileName = 'salesDetail.php';
	        $affmenu = 'true'; 
	        break;
	    case 'logout':
	    	$fileName = 'logout.html';
	    	$affmenu = true;
	    	break;	 
	}
}
else //not logged in
{
	switch($_GET['action'])
	{
            case 'register': 
                $fileName = 'content/repairs.php';
	        //$fileName = 'affsignup.php';
	        break;
	    case 'confirm':
                $fileName = 'content/repairs.php';
	        //$fileName = 'register.php';
	        break;     
	    case 'forgot':  //forgot password
	        $fileName = 'forgot.php';
	        break;     
	    default:
	    	$fileName = 'login.html';
                break;
	}    	
}

if(file_exists($templateHeader))
include($templateHeader);

if($affmenu)
    echo affiliateMenu(); 

include($fileName);

if(file_exists($templateFooter))
include($templateFooter);
?>