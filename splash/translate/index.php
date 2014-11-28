<?php 
$redirURL = 'http://bestpayingsites.com/redirect.php?url=';
$subscrLandingURL = $confirmLandingURL = $redirURL.'http://tinyurl.com/real-translator-jobs-product';

if($_GET['e']) { //email address passed in url
    $emailField = '<input type="text" class="field" id="da_email" name="da_email" value="'.$_GET['e'].'" />';
}
else {
    $emailField = '<input type="text" class="field" name="da_email" id="da_email" value="Enter your best email" 
        title="Enter your best email" />';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Translator Jobs</title>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="css/images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/html5.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
<section id="wrapper">
    <section id="bg">
        <img src="css/images/bg.jpg" alt="" />
    </section>
    <!-- /#bg -->

    <section class="content-box">
        <img src='http://i.realtranslatorjobs.com/home-urgent.png' />
        <!--<h1 id="logo"><a href="#" class="notext"></a></h1>-->
        <section class="blackbox">
            <h2>Speak 2 Languages? Want to Get Paid For Your Skills?</h2>
            <p>Enter your email address to access our  <br /> database of translator jobs</p>
            
            <form method="post" onsubmit="window.onbeforeunload=null;" 
                action="http://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi">

                <input type=hidden name="da_name" id="da_name" value="Internet Marketer">
                <input type=hidden name="da_cust1" value="" />
                <input type=hidden name="da_cust2" value="<?=$_SERVER['HTTP_REFERER']?>" />
                <input type=hidden name="da_cust3" value="<?=$_GET['campaign']?>" />
                <input type=hidden name="trwvid" value="theemperor" />
                <input type=hidden name="series" value="translatorjobs" />
                <input type=hidden name="subscrLandingURL" value="<?=$subscrLandingURL?>" />
                <input type=hidden name="confirmLandingURL" value="<?=$confirmLandingURL?>" />

                <?=$emailField?>

                <input type="submit" name="submit" id="submit" class="submit" value="Get Instant Access">
            </form>
           
            <p>Your information will *never* be shared <br />or sold to a 3rd party.</p>
        </section>
        <!-- /.blackbox -->
        <footer class="footer">
            Created By <a href="http://www.bestpayingsites.com">Profit With PTC's</a>
        </footer>
    </section>
    <!-- /.content-box -->
</section>
</body>
</html>