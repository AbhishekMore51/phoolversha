<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
session_start();
// Set default Time Zone
date_default_timezone_set("Asia/Calcutta");

// Define prefix
define("sys_prefix", "phoolversha");

// Define 404 Page
$page_404 = "error-404.html";

/*= Set Default Relative Path Variable =*/
$relative_path = "";

// Check if the session is set
// if (isset($_SESSION['sys_session'])) {
//     echo 'Session is set';
// } else {
//     echo 'Session is not set';
// }

?>