<?
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 

function anchor($url, $extra, $displayText)
{
    return '<a href="'.$url.'" '.$extra.'>'.$displayText.'</a>'; 
}

function img($url, $extra, $altText)
{
    return '<img src="'.$url.'" '.$extra.' alt="'.$altText.'" title="'.$altText.'"/>'; 
}

$dir = '../../';
$aff = 'poptart';
$nusLink = 'http://ultimateneobuxstrategy.com/?r='.$aff;
$nusImg = 'http://ultimateneobuxstrategy.com/images/banners/ebook1.jpg';
$msLink = 'http://ultimateneobuxstrategy.com/minisite/?r='.$aff;

switch($_GET[page])
{
	case 'cashsurveys':
		$meta = array(
            'title' => 'Get Cash For Surveys', 
            'tags' => 'get cash for surveys, getcashforsurveys, paid surveys',
            'desc' => 'Start learning how to take paid surveys online with Get Cash For Surveys!'); 
		
		$file = 'cashsurveys.html';
		break; 
	case 'surveys4income':
		$meta = array(
            'title' => 'Get Cash For Surveys', 
            'tags' => 'Paid Surveys, Focus Groups, Market Research, Surveys, Mystery Shopping, Work From Home, Earn From Home, Home Employment',
            'desc' => 'Earn Extra Income from Home with our Paid Surveys. Now with Additional Payment Options'); 
		
		$file = 'surveys4income.html';
		break; 
	case 'socialmediajobs':
		$meta = array(
            'title' => 'Paid Social Media Jobs', 
            'tags' => 'online jobs, online job, online tutoring jobs, work from home jobs, work at home jobs, making money from home, legitimate work at home jobs, online',
            'desc' => 'Online jobs and work at home opportunities for everyone. Access home based businesses and online jobs from home. Make money typing ads online. Make money working from home today.'); 
		
		$file = 'socialmediajobs.html';
		break; 
	case 'legitonlinejobs':
		$meta = array(
            'title' => 'Legit Online Jobs - Real Online Jobs and Work From Home Opportunities!', 
            'tags' => 'online jobs, online job, online tutoring jobs, work from home jobs, work at home jobs, making money from home, legitimate work at home jobs, online',
            'desc' => 'Online jobs and work at home opportunities for everyone. Access home based businesses and online jobs from home. Make money typing ads online. Make money working from home today.'); 
		
		$file = 'legitonlinejobs.html';
		break; 
    case 'home':
    default:
        $meta = array(
            'title' => 'Best PTC Sites', 
            'tags' => 'best ptc sites, earn by clicking sites, make money online, best ultimate strategy',
            'desc' => 'Join the best PTC sites in the world. Earn by clicking sites. Learn the best ultimate strategy to 
            use in order to profit from PTC sites'); 
        $file = 'home.html';
}

include('header.html');
include($file);
include('footer.html');
?>