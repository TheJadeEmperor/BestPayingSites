<?
switch($_GET['action'])
{
    case 'eps':
        $fileName = 'content/eps.php';
        break;
    case 'directory':
        $fileName = 'content/directory.php';
        break;
}


list($joinDate, $time) = split(' ', $u['joinDate']);
$joinDate = strtotime($joinDate);
$today = time(); 

$numDaysInSeconds = $numDays * 24 * 60 * 60;

if(($today) >= ($joinDate + $numDaysInSeconds)) //X days have passed
{
	include($fileName);
}
else //X days not passed yet, show coming soon page
{
	include('content/comingSoon.php');		
}
?>