<?
switch($_GET['action'])
{
    case 'eps':
        $fileName = 'content/eps.php';
        break;
    case 'directory':
        $fileName = 'content/directory.php';
        break;
    case 'classified':
        $fileName = 'content/classified.php';
        break;
    case 'pp-booster':
        $fileName = 'content/pp-booster.php';
        break;
    case 'pp-html-files':
        $fileName = 'content/pp-html-files.php';
        break;
    case 'pp-links':
        $fileName = 'content/pp-links.php';
        break;
    case 'pp-tools':
        $fileName = 'content/pp-tools.php';
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