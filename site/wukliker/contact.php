<?php
//////////////////////////////////////
$adminEmail = 'tux.buks@gmail.com';
//////////////////////////////////////
if( $_POST[send_email] )
{	
	if($_POST[antispam] == 'security')
	{
		$headers = "From: ".$adminEmail."\n";
		$headers .= 'Content-type: text/html;';		
		$subject = 'New Message from BestPayingSites.com';
		
		$theMessage = '<table><tr><td>
	<fieldset><legend align=center>Contact Form</legend>
	<table>
	<tr>
		<td>Name</td><td>'.$_POST[name].'</td>
	</tr>
	<tr>
		<td>Email Address</td><td>'.$_POST[email].'</td>
	</tr>
	<tr>
		<td colspan=2>Comment or Question<br/>'.$_POST[comment].'</td>
	</tr>
	</table>
	</fieldset>
	</td>
	</tr></table>';
		
		mail($_POST[email], $subject, $theMessage, $headers);
		mail($adminEmail, $subject, $theMessage, $headers);
		
		$msg = '<font color = red>Your message has been successfully sent to the 
		administrator. We will respond to your inquiry as soon as possible.</font>';
	}	//if
	else
		$msg = '<font color = red>You did not type security into the box!</font>';
}//if

?>
<p>&nbsp;</p>
<center>
<h1>Contact the Admin</h1>
</center>
<p>If you have any suggestions or comments, or would like to ask the administrator a question, 
please use the form below. We look at all serious requests, so don't be afraid to give 
your input! Thank you.</p>

<?=$msg?>
<p>&nbsp;</p>
<center>
<form method=POST>
<table border=1>
<tr>
<td align="center">
	<h2>Contact Form</h2>
	<table>
	<tr>
		<td>Name or Nickname</td><td><input type=text name="name" value="<?=$_POST[name]?>" size=25/></td>
	</tr>
	<tr>
		<td>Email Address</td><td><input type=text name="email" value="<?=$_POST[email]?>" size=25/></td>
	</tr>
	<tr>
		<td colspan=2>Comment or Question<br/>
		<textarea name="comment" rows=5 cols=43><?=$_POST[comment]?></textarea></td>
	</tr>
	<tr>
		<td>Please type "security" into the box </td>
		<td>&nbsp; <input type=text name="antispam" size=24 /></td>
	</tr>
	<tr>
		<td align="center" colspan=3><input type=submit name="send_email" value="Send"></td>
	</tr>
	</table>
	</fieldset>
</td>
</tr>
</table>
</form>
</center>