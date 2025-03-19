<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set("America/New_York");

include ("../config/env.php");
include (WEB_DOC_ROOT . "src/functions.php");
include (WEB_DOC_ROOT . "src/router.php");

?>