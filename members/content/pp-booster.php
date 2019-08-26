<center><h1>Paypal Booster Pro</h1>

<h3>Click to Download the PDF </h3>
<?php
$productID = 10;
$selD = 'select * from products where id="'.$productID.'"';
$resD = mysql_query($selD) or die(mysql_error());

$p = mysql_fetch_assoc($resD);

echo'<form method="post">
<input type=submit name="dl" class="btn success" value=" Download Now ">
<input type=hidden name=id value="'.$p['id'].'">
<input type=hidden name=url value="'.$p['download'].'">
</form>';

$upsellPage = 'http://ad.trwv.net/t.pl/57718/374163';
?>
<p>&nbsp;</p>

<table style="border: 1px solid black; padding: 10px; width: 700px;">
    <tr>
        <td>
            <p>How would you like to make $3,750 a month processing emails? 
            You can with the Email Profit System. Get paid $15 to $25 per email processed!</p>

            <p>Everything you need is inside the course - step by step instructions laid out for you - 
            all you have to do is copy and paste and get paid for every email you process! <br /><br />
            <a class="url" href="<?=$upsellPage?>" target="_blank">http://bestpayingsites.com/eps</a></p>
        </td>
        <td>
             <a href="http://bestpayingsites.com/eps" target="_blank"><img src="//bestpayingsites.com/images/eps/binder.jpg" width="250px" /></a>
        </td>
    </tr>
</table>
</center>

<p>&nbsp;</p>

<h1>Get Started Now</h1>

<table>
    <tr valign="top">
        <td><h3>Step 1: </h3>
        <p>Sign up for payment processors & blogger</p>

        <p><a href="?action=pp-links#pp">Click here for the links</a></p>

        <p><a href="http://www.blogger.com" target=_blank>Click here to join blogger</a></p>

        <p><a href="http://www.ghost.org" target=_blank>Click here to join Ghost</a></p>

        <p>&nbsp;</p>


        <h3>Step 2: </h3>

        <p>Set up your sales page </p>

        <p><a href="?action=pp-html-files">Click here for the HTML files</a></p>

        <p>&nbsp;</p>

        <h3>Step 3: </h3>

        <p>Advertise your sales page

        <p><a href="?action=pp-links#advertise">Click here for the links</a></p>
        </td>
        <td width="30px"></td>
        <td align="center">
            <h3>How to set up your blog</h3>
            <br />
            <iframe width="420" height="315" src="//www.youtube.com/embed/1IUlzf_Ya4g" frameborder="0" allowfullscreen></iframe>
        </td>
    </tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>