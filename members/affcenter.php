<h1>Members Home</h1>
<p>&nbsp;</p> 

<? 
$opt = array(
    'tableName' => 'sales',
    'cond' => "WHERE productID='10' AND
    (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')"
);
    
$res = dbSelectQuery($opt); 

if($res->num_rows > 0) {
    ?>
    <fieldset>
        <h2>Paypal Booster</h2>
        
        <p><a href="?action=pp-booster">Paypal Booster Tutorial</a></p>
        
        <p><a href="?action=pp-html-files">Get the HTML Files</a></p>
              
        <p><a href="?action=pp-links">PP Booster Links</a></p>
                
        <p><a href="?action=pp-tools">Promotion Tools</a></p>
    </fieldset>

<?
}

$opt = array(
    'tableName' => 'sales',
    'cond' => "WHERE productID='12' AND
    (payerEmail = '".$_SESSION['login']['paypal']."' || payerEmail = '".$_SESSION['login']['email']."')"
);
    
$res = dbSelectQuery($opt); 

if($res->num_rows > 0) {
?>
    <br /><br />
    <fieldset>
        <h2>Email Profit System</h2>
        
    <p>To get started using the Email Profit System, go to the links below:</p>

    <p><a href="?action=eps">3 Steps to the Email Profit System</a></p>

    <p><a href="?action=classified">Classified Ads List</a></p>

    <p><a href="?action=directory">Paying Sites Directory</a></p>
    
    <p><a href="?action=tools">Promotion Tools</a></p>
    </fieldset>
<?
}
?>

<p>&nbsp;</p>
<p>&nbsp;</p>

<center>
    <p>Click here to claim your bonuses (worth over $1,000)</p>
    <a href="<?=$dir?>?action=bonus"><img src="<?=$dir?>images/members/bonus.png" /></a>
</center>

<p>&nbsp;</p>
<p>&nbsp;</p>