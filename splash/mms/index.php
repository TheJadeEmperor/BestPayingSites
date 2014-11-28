<?
$imgDir = 'splash/mms/images/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<style type="text/css">
<!--
.infoWrap {
    height:25px;
    margin:7px auto;
    width:350px;
}
.infoWrap .textField {
    background-color:#fff;
    border:solid 1px transparent;
    color:#c13100;
    font:normal 20px Arial, Helvetica, sans-serif;
    height: 22px;
    margin: 10px 0px; 
    padding: 6px 0;
    text-align: center;
    width:350px;
}

.buttonWrap {
    clear:both;
    height:68px;
    margin:27px auto 0;
    width:327px;
}
.buttonWrap button {
    height:68px;
    overflow:visible;
    width:327px;
}
button.link, button.link {
    background:url(<?=$imgDir?>btnSubmit.png) no-repeat left top;
    border:none;
    cursor:pointer;
    display:block;
    margin:0;
    padding:0;
    text-indent:-9999px;
    -moz-user-select:text;
}
button.link:hover {
    background:url(<?=$imgDir?>btnSubmit.png) no-repeat left bottom;
}
-->
</style>
<script type="text/javascript" src="include/js/jquery.js"></script>
<script>
<!-- 
var NoExitPage = false; 

function ExitPage() 
{ 
    if(NoExitPage == false) { 
    NoExitPage=true; 
    location.href='http://tinyurl.com/surveys-paid-product'; 
    
    return"***********************************************\n\n"+ 
    " WAIT! Do you really want to close this window? \n\n"+ 
    " Don't you want to make $5 to $75 per survey? \n\n"+ 
    " Sign up for our FREE offers - no obligation whatsoever!\n\n"+ 
    "***********************************************"; 
    } 
} 
// --> 
</script>
</head>
<body onbeforeunload="return ExitPage();">
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td background="<?=$imgDir?>headerbg.jpg"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
        <td><img src="<?=$imgDir?>header.jpg" width="997" height="259" /></td>
	</tr>
    </table>
	</td>
</tr>
<tr>
    <td background="<?=$imgDir?>bodybg.jpg"><table width="997" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="<?=$imgDir?>body.jpg"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><img src="<?=$imgDir?>headline2.jpg" width="823" height="222" /></td>
          </tr>
        </table>
          <br />
          <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td rowspan="2"><img src="<?=$imgDir?>arrowleft.jpg" width="100" height="288" /></td>
              <td><img src="<?=$imgDir?>headeroptin.jpg" width="606" height="166" /></td>
              <td rowspan="2"><img src="<?=$imgDir?>arrowright.jpg" width="90" height="288" /></td>
            </tr>
            <tr>
              <td background="<?=$imgDir?>bodyoptin.jpg"><br />
                <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center">
					
						<form method="post" onsubmit="window.onbeforeunload=null;" action="http://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi">
						<label>
						
                        <div class="infoWrap">
						<input type=text id="da_email" name="da_email" value="Email Address" onclick="if(this.value=='Email Address') this.value='';" class="textField">

						<input type=hidden class="input" id="da_name" name="da_name" value="PTC User">
						<input type=hidden name="da_cust1" value="<?=$page?>" />
						<input type=hidden name="da_cust2" value="<?=$_SERVER[HTTP_REFERER]?>" />
						<input type=hidden name="da_cust3" value="<?=$campaign?>" />
						<input type=hidden name="trwvid" value="theemperor">
						<input type=hidden name="series" value="makemoneysurveys">
						<input type=hidden name="subscrLandingURL" value="<?=$subscrLandingURL?>">
						<input type=hidden name="confirmLandingURL" value="<?=$confirmLandingURL?>">
						
						</div>
                        </label>
                      
					  </td>
                    </tr>
                  </table>
                <br />
                <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
					
						<input type="image" value="Submit" id="submit" src="<?=$imgDir?>button.png">
						
						</form>
					<!--<img src="<?=$imgDir?>button.png" width="356" height="84" />-->
					
					</td>
                    </tr>
                </table></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><img src="<?=$imgDir?>footeroptin.jpg" width="606" height="58" /></td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td background="<?=$imgDir?>footerbg.jpg"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="<?=$imgDir?>footer.jpg" width="997" height="65" /></td>
      </tr>
    </table></td>
  </tr>
</table> 
</body>
</html>