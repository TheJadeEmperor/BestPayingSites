<?php
$dir = '../';
include($dir.'include/functions.php');
include($dir.'include/config.php');
include($dir.'include/spmSettings.php');
session_start();


if($_POST['dl']) {
    downloadLink($_POST['url']); exit;
}

if(is_int(strpos(__FILE__, 'C:\\'))) {//localhost
    error_reporting(E_ALL ^ E_NOTICE);
}
else { //live website
    error_reporting(0);
}

//values from spmSettings
$templateHeader = $val['memHeader'];
$templateFooter = $val['memFooter'];
$membersContent = $val['memAreaContent'];


if($_POST['login']) {
    //verify username/password
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(empty($username)) {
        $_SESSION['error'] = 'Please enter a valid username!';
    }

    if(empty($password)) {
        $_SESSION['error'] = 'Please enter a valid password!';
    }

    $selU = 'SELECT * FROM users where USERNAME="'.$username.'" || email="'.$username.'"';
    $resU = $conn->query($selU);

    $u = $resU->fetch_array();

    if(mysqli_num_rows($resU) == 0) { //no user found 
        $_SESSION['error'] = 'The username '.$username.' does not exist!';
    }
    else { //user is found 
        if($u['password'] != $password) {
            $_SESSION['error'] = 'The password is invalid!';
        }
        else {
            if(empty($u['email']))
                $u[email] = 'N / A';
                
            if(empty($u['paypal']))
                $u[paypal] = 'N / A';
                    
            $_SESSION['login'] = $u;
            
            if($u['status'] == 'B') { //check if user is banned
                $_SESSION['error'] = 'Unable to login - You have been banned from our system <br />
                If you feel this is in error, please contact our support desk';    
            }
            else { //login successful            
            	unset($_SESSION['error']); //remove the error message
               	header('Location: ./?action=affcenter');                
            }
        }
    }
}

$msg = $_SESSION['error'];

//user info 
$u = $_SESSION['login'];

//skip the upsell this session
if($_POST['skipUpsell']) {
    $_SESSION['login']['skipUpsell'] = true;
}

if(isset($u['id'])) { //logged in
	
    switch($_GET['action']) {
        //==========================
        default:
        case 'eps':
        case 'directory':
        case 'classified': 
        case 'pp-booster':
        case 'pp-html-files':
        case 'pp-links':
        case 'pp-tools':
            $affmenu = true;
            $fileName = 'timedContent.php';
            break;
        //==========================
        case 'affcenter': //affiliate center 
            if($_SESSION['login']['skipUpsell']) {
                $fileName = 'affcenter.php';
                $affmenu = true;
                $pageTitle = 'Affiliate Center';
            }
            else {
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
        case 'logout':
            $fileName = 'logout.html';
            $affmenu = true;
            break;	 
    }
}
else { //not logged in
    switch($_GET['action']) {
        case 'forgot':  //forgot password
            $fileName = 'forgot.php';
            break;    
        case 'register': 
        default:
            $fileName = 'login.html';
            break;
    }    	
}

if(file_exists($templateHeader))
include($templateHeader);

if($affmenu)
    echo $membersMenu; 

include($fileName);

if(file_exists($templateFooter))
include($templateFooter);
?>