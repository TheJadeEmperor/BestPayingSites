<?php 
$dir = '../';
$url = $_GET['url']; 

if (strpos($url,'http://') === false) { //no http in url
    $url = 'http://'.$url; //fix the url 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="5;url=<?=$url?>">
<style>
body {
    font-family: verdana;
    font-size: 12px; 
}
</style>
</head>
<body>
<center>
<table width="420px" cellpadding="10" style="border: 1px solid black; font-size: 12px;">
<tr valign="middle">
<td align="center">
    <p>Thank you for subscribing to our newsletters</p>
    <p>Remember to check your inbox for a confirmation email</p>
    <p><b>** Now Redirecting You to <br />"<?=$url?>" **</b></p>
    
    <p>Please wait...</p>
    
    <img src="<?=$dir?>images/waiting.gif" alt="Waiting">
</td>
</tr>
</table>

<p>&nbsp;</p>

</center>
</body></html>