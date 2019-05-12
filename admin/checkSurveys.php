<?php
include('adminCode.php');

set_time_limit(0);

//get products info
$selS = 'select * from surveys order by name';
$resS = mysql_query($selS, $conn) or die(mysql_error());


echo '<table>';
while($s = mysql_fetch_assoc($resS)) {
	$url = $s['url'];
	
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_exec($ch);
	$retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	
	//echo $retcode;

	curl_close($ch);

	
	echo '<tr><td>'.$s['name'].'<td></td>
	<td><a href="'.$url.'" target="_BLANK">'.$url.'</a></td>
	<td>'.$retcode.'</td></tr>';
}

echo '</table>';

include('adminFooter.php');  ?>