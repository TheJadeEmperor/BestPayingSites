<?php
switch($_GET['action']) {
    case 'eps':
        $fileName = 'content/eps.php';
        break;
    case 'classified':
        $fileName = 'content/classified.php';
        break;
    case 'directory':
        $fileName = 'content/directory.php';
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
	case 'bps-database':
        $fileName = 'content/bps-database.php';
        break;
	case 'bps-apps':
        $fileName = 'content/bps-apps.php';
        break;
	case 'bps-guide':
        $fileName = 'content/bps-guide.php';
        break;
}

include($fileName);

?>