<?php
$num1 = rand() % 10;
$num2 = rand() % 10;

if ($_POST['sendEmail']) {
    $error = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['emailAddress']) ? '' : 'INVALID EMAIL ADDRESS';

    $inputFields = array('Full Name' => 'fullName',
        'Email Address' => 'emailAddress',
        'Message' => 'emailMessage',
        'Anti-Spam Question' => 'noSpam');

    foreach ($inputFields as $key => $value) {

        if (empty($_POST[$value])) {
            $error .= '<br />The following fields are required: ' . $key;
        }
    }

    if ($_POST['noSpam'] != $_POST['num1'] + $_POST['num2']) {
        $error .= '<br />You answered the anti-spam question wrong!';
    }

    if (!$error) {
        $headers = "From: " .$adminEmail. "\n";
        $headers .= "Content-type: text/html;";
        $emailSubject = "Paypal Booster: Your Message Was Received";
        $emailContent = "<p>You have sent a message to Paypal Booster. The contents
		of the message are the following:</p>
		
		<p>Full Name: " . $_POST['fullName'] . "<br />
		Email: " . $_POST['emailAddress'] . "<br />
		Message: <br />" . $_POST['emailMessage'] . "</p>";

        if (@mail($_POST['emailAddress'] . ',' . $adminEmail, $emailSubject, $emailContent, $headers)) {
            $error = 'Message sent! You will receive a confirmation email shortly.';
            $dis = 'disabled';
        } else {
            $error = 'Error: message not sent! Please inform the administrator: ' . $adminEmail;
        }
    }
}
?>
<center>
    <p>&nbsp;</p>

    <h2>Contact Us Form</h2>
    <p align="left">Use the form below to contact us and leave us a message. Use this form if you have a question about
        our products, or if you have trouble logging into your members account.</p>
</center>        
<p><font color="red"><b><?= $error ?></b></font></p>


<center>        
    <p>&nbsp;</p>

    <form method="post">
        <table>
            <tr valign="top">
                <td align="left">
                    <label>* Full Name</label><br />
                        <input size="40" class="activeField" name="fullName" value="<?= $_POST['fullName'] ?>" <?= $dis ?> />
                    <br /><br />
                </td>
            </tr>		
            <tr valign="top">
                <td>
                    <label>* Email Address</label><br />
                        <input size="40" class="activeField" name="emailAddress" value="<?= $_POST['emailAddress'] ?>" <?= $dis ?> />
                        <br /><br />
                </td>
            </tr>		
            <tr valign="top">
                <td colspan="2" align="left">
                    <label for="message">* Message</label><br />
                    <textarea <?= $dis ?> class="activeField" class="activeField" name="emailMessage" rows="6" cols="40"><?= $_POST['emailMessage'] ?></textarea>
                    <br /><br />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="check">* What is <?= $num1 ?> + <?= $num2 ?> ?</label><br />
                        <input size="40" class="activeField" name="noSpam" value="" <?= $dis ?> /><br />
                        <span style="color: gray; font-size: 10px; margin-top: 5px;">* = Required field</span><br /><br />
                        
                    <input type="hidden" name="num1" value="<?= $num1 ?>" />
                    <input type="hidden" name="num2" value="<?= $num2 ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" class="btn success" name="sendEmail" value="Contact Us" <?= $dis ?> />
                </td>	
            </tr>	

        </table>
    </form>
</center>

<p>&nbsp;</p>