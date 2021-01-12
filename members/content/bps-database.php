<div class="innerContent">
<h1>Surveys Database</h1>
<?
	$oneWeekAgo = 60 * 60 * 24 * 14;
	echo '<h4>Last Updated '.date('M d, Y', time()-$oneWeekAgo).'</h4>';

	echo $bpsSurveysContent;

?>
</div>