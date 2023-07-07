<?php
include('adminCode.php');

set_time_limit(0);

//get products info
$selS = 'select * from surveys order by name';
$resS = $conn->query($selS) or die(mysqli_error($conn)); 

$count = 0;
echo '<table>';
while($s = $resS->fetch_assoc()) {
	$url = $s['url'];

	$count++;
	echo '<tr><td>'.$count.'</td><td>'.$s['name'].'<td></td>
	<td><a href="'.$url.'" target="_BLANK">'.$url.'</a></td>
	<td>'.$retcode.'</td></tr>';
}


echo '</table>';

include('adminFooter.php');  ?>