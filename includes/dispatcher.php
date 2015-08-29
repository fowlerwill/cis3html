<?php
/**
 * DISPATCHER
 * Gets the given variables from the URL (assigned in the .htaccess file)
 * and parses them for the appropriate pages.
 * @author: Will Fowler
 * @date: 2015 Aug 28
 */
$page = '';

if( !empty($_GET['p']) && preg_match('/^[a-zA-Z]+$/', $_GET['p'])) {

    $reqPage = $_GET['p'];

    if( file_exists("pages/$reqPage.php") ) {
        $page = $reqPage;
    } else {
        $page = '404';
    }

} else {
    $page = 'home';
}

include "pages/$page.php";