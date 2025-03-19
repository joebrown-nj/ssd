<?php

define("DOC_ROOT", "c:/wamp64/www/ssd/");

define("WEB_DOC_ROOT", DOC_ROOT . "front-end/");
define("WEB_ROOT", "/");
define("WEB_URL", "http://dev.ssd.com/");

define("SMARTY_ROOT", WEB_DOC_ROOT . "smarty/");
define("SMARTY_DIR", "c:/wamp64/Smarty/smarty-5/libs/");

# define("ADMIN_DOC_ROOT", DOC_ROOT . "admin/");
# define("ADMIN_WEB_ROOT", WEB_ROOT . "admin/");
# define("ADMIN_WEB_URL", WEB_URL . "admin/");
# define("ADMIN_SMARTY_ROOT", DOC_ROOT . "admin/templates/smarty/");

# define('RECAPTCHA_SECRET', '6Le-bgUTAAAAACNMbAG5TCekfZWh0Jnvzpqm51rD');
# define("ITEMS_PER_PAGE", 25);

define("DB_CREDS", "local");

if (DB_CREDS == "local") {
    $username = "root";
    $password = "joe1291984";
    $dbname = "2021_jbw";
}

if (DB_CREDS == "stage") {
    $username = "jbrownwe_joe";
    $password = "yE-HAsejeY4x@Gxz!";
    $dbname = "jbrownwe_stage";
}

if (DB_CREDS == "live") {
    $username = "jbrownwe_joe";
    $password = "yE-HAsejeY4x@Gxz!";
    $dbname = "jbrownwe_jbconsulting";
}

define("DB_HOST", "localhost");
define("DB_USER", $username);
define("DB_PASSWORD", $password);
define("DB_NAME", $dbname);


include("database/connect.php");

?>