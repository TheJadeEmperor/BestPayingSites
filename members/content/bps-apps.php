<div class="innerContent">
<h1>Surveys Database</h1>

<h2>Paying Apps</h2>
<?php
	$selS = 'SELECT * FROM surveys  WHERE category="paidapp" ORDER BY name';
    $resS = mysql_query($selS, $conn) or print(mysql_error()); 
    while($s = mysql_fetch_assoc($resS)){
		echo '<p><a target="_BLANK" href="'.$s['url'].'">'.$s['name'].'</a><br />'.$s['info'].'</p>';
	}
?>
<h2>GPT Sites</h2>
<?
	$selS = 'SELECT * FROM surveys WHERE category="gpt" ORDER BY name ';
    $resS = mysql_query($selS, $conn) or print(mysql_error()); 
    while($s = mysql_fetch_assoc($resS)){
		echo '<p><a target="_BLANK" href="'.$s['url'].'">'.$s['name'].'</a><br />'.$s['info'].'</p>';
	}
?>

</div>