<?php 
function check_url($url) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    $headers = curl_getinfo($ch);
    curl_close($ch);

    return $headers['http_code'];
}
?>

<h1 id="classified">Classified Ads Listing</h1>

<p>&nbsp;</p>

<p>Below is our database of classified ads that you use to promote your system. 
This list is updated frequently, so check back often for updates. </p>

<?php
$classifiedAds = array(

    'http://www.craigslist.org', 
    'http://www.classifiedads.com',
    'http://www.adsglobe.com', 
    'http://www.classifiedsforfree.com/',
    'http://www.clickindia.com/', 
    'http://www.biggestclassifieds.com/', 
    'http://www.salespider.com/', 
    'http://www.classifiedsciti.com/', 
    'http://www.zikbay.com/', 
    'http://www.ablewise.com/',
    'http://www.kijiji.ca/',
    'http://www.freeads.co.uk/', 
    'http://www.classifieds.ivarta.com/', 
    'http://www.quikr.com/', 
    'http://www.pennysaverusa.com/',
    'http://www.oodle.com/',  
    'http://www.locanto.in/',
    'http://www.claz.org/',
    'http://www.porkypost.com/', 
    'http://www.khojle.in/', 
    'http://www.adsciti.com/',
    'http://www.webindia123.com/', 
    'http://www.geebo.com/',
    'http://www.freeadscity.com/',
    'http://www.global-free-classified-ads.com/', 
    'https://hub.fm/home.html',
    'http://www.freeclassifieds.com/',
    'http://www.webclassifieds.us/',
    'http://www.hoobly.com/',
    'http://www.sell.com/',
    'http://www.recycler.com/',
    'http://www.buysellcommunity.com/',
    'http://www.thisismyindia.com/', 
    'http://www.ebayclassifieds.com/',
    'http://www.1second.com/1america.htm', 
    'http://www.1second.com/freead.htm',
    'http://www.adpost.com/',
    'http://www.adlandpro.com',
    'http://www.metromkt.net/',
    'http://www.buysellcommunity.com/',	
    'http://www.cdncc.com/',
    'http://www.absolutelyfreebies.com/classified_section/free_classified.html',
	'http://www.ecki.com/links', 
    'http://www.recycler.com',
    'http://www.theadnet.com',
    'http://bestmall.com/class/submit.html',
);

echo '<table width="100%">
    <tr>
        <td>';

foreach($classifiedAds as $url) {
	
    echo '<p><a href="'.$url.'" target="_blank">'.$url.'</a></p>';
	
}


echo '  </td>
    </tr>
</table>';
?>

<p>&nbsp;</p>
<p>&nbsp;</p>