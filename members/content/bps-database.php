
<div class="innerContent">
<h1>Surveys Database</h1>

<?php

$selS = 'SELECT * FROM surveys WHERE category="" ORDER BY name ';
$resS = mysql_query($selS, $conn) or print(mysql_error()); 
while($s = mysql_fetch_assoc($resS)){
	echo '<p><a target="_BLANK" href="'.$s['url'].'">'.$s['name'].'</a><br />'.$s['info'].'</p>';
}
	
?>

</div>