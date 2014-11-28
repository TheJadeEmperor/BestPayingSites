<?
function validUserName($user, $conn)
{
    $sel = 'select username from users where username="'.$user.'"';
    $res = mysql_query($sel, $conn) or print(mysql_error());
    
    if(mysql_num_rows($res) > 0)
        return false; 
    else
        return true;
}


if($_POST[register])
{
    $id = 1;

    if($_POST['fname'] == '')
    {
        $errorMsg = 'First name cannot be blank<br />';
    }
    else 
    {
        if(!ctype_alnum($_POST['fname']))
        {
            $errorMsg = 'First name must contain only letters and/or numbers<br />';
        }         
    }
    
    if($_POST['lname'] == '')
    {
        $errorMsg .= 'Last name cannot be blank<br />';
    }
    else 
    {
        if(!ctype_alnum($_POST['lname']))
        {
            $errorMsg .= 'Last name must contain only letters and/or numbers<br />';
        }   
    }
    
    if($_POST['username'] == '')
    {
        $errorMsg .= 'Username cannot be blank<br>';
    }
    else
    {
        if(!validUserName($_POST['username'], $conn))
        {
            $errorMsg .= 'Username already taken. Please use another one.<br>';
        }
        
        if(!ctype_alnum($_POST['username']))
        {
            $errorMsg .= 'Username name must contain only letters and/or numbers<br />';
        }   
    }
    
    if($_POST[password] == '')
    {
        $errorMsg .= 'Password cannot be blank<br>';
    }
    else
    {
        if(strlen($_POST[password]) < 7)
            $errorMsg .= 'Password must be at least 8 characters long<br>';
    }
    
    if($_POST[email] == '')
    {
        $errorMsg .= 'Email cannot be blank<br>';
    }
    
    if($errorMsg == '') //enter new user into db
    {
        if($s[id] == '') //if no sponsor
            $s[id] = 1; //default sponsor is admin
    
        $dbFields = array(
        'fname' => '"'.$_POST[fname].'"',
        'lname' => '"'.$_POST[lname].'"',
        'username' => '"'.$_POST[username].'"',
        'password' => '"'.$_POST[password].'"',
        'email' => '"'.$_POST[email].'"',
        'paypal' => '"'.$_POST[paypal].'"',
        'joinDate' => 'now()');
        
        $fields = $values = array();
        
        foreach($dbFields as $fld => $val)
        {
            array_push($fields, $fld);
            array_push($values, $val);
        }
        
        $theFields = implode(',', $fields);
        $theValues = implode(',', $values);
        
        $ins = 'insert into users ('.$theFields.') values ('.$theValues.')';
        $res = mysql_query($ins, $conn) or print(mysql_error());
        
        $errorMsg = '<font color=red>You have successfully registered! A confirmation email
        has been sent to you. <a href="?action=login">Please log in now</a>.</font>';
        
        sendWelcomeEmail($id, $conn);
        
        $disField = 'disabled'; 
    }
    else
    {
        $errorMsg = '<font color=red>'.$errorMsg.'</font>';
    }
}

?>
<script type="text/javascript">
function AlphaNumberic(e)
{
    var keynum;
    var keychar;
    var charcheck;
    if(window.event) // IE
       keynum = e.keyCode;
    else if(e.which) // Netscape/Firefox/Opera
       keynum = e.which;
    keychar = String.fromCharCode(keynum);
    charcheck = /[a-zA-Z0-9\-]/;
    return charcheck.test(keychar);        
}

function validateEmail(e)
{
	 var keynum;
    var keychar;
    var charcheck;
    if(window.event) // IE
       keynum = e.keyCode;
    else if(e.which) // Netscape/Firefox/Opera
       keynum = e.which;
    keychar = String.fromCharCode(keynum);
    charcheck = /[a-zA-Z0-9\@\.]/;
    return charcheck.test(keychar);        
}
</script>
            
<p>&nbsp;</p>
<center>
<form name=form1 method=post>
<table style="border: 1px solid black; width:500px;" class="joinForm">
<tr>
    <th>Register for Affiliate Account</th>
</tr>
<tr>
    <td><p><?=$errorMsg?></p></td>
</tr>
<tr>
    <td>
        <p>First Name</p>
        <p><input class=activeField name=fname value="<?=$_POST[fname]?>" size=40
            title="Enter your first name" onKeyPress="return AlphaNumberic(event);" /></p>
    </td>
</tr>
<tr>
    <td>
        <p>Last Name</p>
        <p><input type=text class=activeField name=lname value="<?=$_POST[lname]?>" size=40
            title="Enter your last name" onKeyPress="return AlphaNumberic(event);" /></p>
    </td>
</tr>
<tr>
    <td>
        <p>Username</p>
        <p><input type=text class=activeField name=username value="<?=$_POST[username]?>" size=40
            title="Enter your desired username" onKeyPress="return AlphaNumberic(event);" />
    </td>
</tr>
<tr>
    <td><p>Password</p>
        <p><input type=text class=activeField name=password value="<?=$_POST[password]?>" size=40
            title="Enter your desired password" />
    </td>
</tr>
<tr>
    <td>   
        <p>Your <b>Preferred Contact</b> Email Address: <br />
        <i><font size="2">To receive our training newsletters</font></i>
        <p><input type=text class=activeField name=email value="<?=$_POST[email]?>" size=40
            title="Your preferred email address" onKeyPress="return validateEmail(event);" />
    </td>
</tr>
<tr>
    <td>
        <p>Your <b>Primary PayPal</b> Email Address: <br />
    <i><font size="2">To receive your Paypal commissions</font></i> <br>
    <p><input type=text class=activeField name=paypal value="<?=$_POST[paypal]?>" size=40 
        title="Where do we sent your payments to" onKeyPress="return validateEmail(event);" /> 
    </td>
</tr>
<tr>
    <td colspan=2 align=center>
        <input type=submit class="btn danger" name=register value="Register Now" <?=$disField?> />
        
        <p class="ps" align="center">
        <span class="red"><b>NOTICE:</b></span> We <b>HATE</b> SPAM, and will not 
        reuse your email address for any other purpose. </p>
    </td>
</tr>
</table>
</form>
</center>

