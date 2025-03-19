<?php

// $src_folder = WEB_DOC_ROOT . 'src/';
// $function_dirs = scandir($src_folder);

// foreach ($function_dirs as $dir) {
//     $fdir = $src_folder . $dir;
//     if (is_dir($fdir) && $dir != '.' && $dir != '..') {
//         $files = scandir($fdir);
//         foreach ($files as $f) {
//             if (strpos($f, 'functions.php')) {
//                 require $fdir . '/' . $f;
//             }
//         }
//     }
// }

/**
 * ***************************************** GENERAL PAGE FUNCTIONS ************************************************
 */
function get_template()
{
    require(SMARTY_DIR . 'Smarty.class.php');
    $smarty = new Smarty\Smarty;
    $smarty->setTemplateDir(SMARTY_ROOT . 'templates');
    $smarty->setCompileDir(SMARTY_ROOT . 'templates_c');
    $smarty->setCacheDir(SMARTY_ROOT . 'cache');
    $smarty->setConfigDir(SMARTY_ROOT . 'configs');
    // $smarty->testInstall();
    return $smarty;
}

function get_defaults()
{
    $con = connect_db();
    $q = "SELECT * FROM page_settings LIMIT 1";
    return $con->query($q)->fetch();
}

function get_page_content()
{
    $con = connect_db();
    $page = "";

    if (isset($_GET['p1'])) {
        $i = 1;
        while ($_GET['p' . $i] != '') {
            $page .= $_GET['p' . $i] . "/";
            $i ++;
        }
        $page = substr($page, 0, - 1);
    }

    $q = "SELECT * FROM site_pages WHERE P_Link = ? AND P_Active = 1 LIMIT 1";
    $params = [$page];
    return $con->query($q, $params)->fetch();
}

function get_menu($parent=0,$position='')
{
    $returnVal = array();
    $con = connect_db();
    $q = "SELECT * FROM site_pages WHERE P_Active = 1 AND P_Parent = ? ";
    if($position != '') { $q .= "AND P_Position = ? "; }
    $q .= "ORDER BY P_Order";
    
    if($position != '') { $params = [$parent, $position]; }
    else  { $params = [$parent]; }
    
    $r = $con->query($q, $params)->fetchAll("assoc");
    
    foreach($r as $row){
        $returnVal[$row['P_Position']][] = $row;
    }
    return $returnVal;
}

// function get_base_page_content()
// {
//     $con = connect_db();
//     $page = "";

//     if (isset($_GET['p1'])) {
//         $page .= $_GET['p1'];
//     }

//     $q = "SELECT * FROM content WHERE C_Link = ? LIMIT 1";

//     $params = [
//         $page
//     ];
//     return $con->query($q, $params)->fetch();
// }

// function get_page_video()
// {
//     $page = isset($_GET['p1']) ? $_GET['p1'] : '';
//     $page2 = isset($_GET['p2']) ? $_GET['p2'] : '';
//     $video = '';

//     if($page == ''){
//         $video = 'fish.mp4'; //'the-future-is-ours.mp4' //'waves.mp4' //boats.mp4
//     }

//     if($page == 'marketing'){
//         $video = 'seo-2.mp4';
//     }
    
//     if($page == 'it-consulting'){
//         $video = 'computer-chart.mp4';
//     }

//     if($page == 'websites'){
//         $video = 'websites.mp4';
//         if($page2 == 'restaurants-and-bars'){
//             $video = 'restaurant.mp4';
//         }
//         if($page2 == 'cannabis'){
//             $video = 'cannabis1.mp4';
//         }
//         if($page2 == 'outdoors-hunting-and-fishing'){
//             $video = 'fishing.mp4';
//         }
//     }

//     return $video;
// }

function get_home_page($smarty)
{
    $con = connect_db();
    // $smarty->assign('callouts', get_homepage_callouts($con));
    // $smarty->assign('featured', get_featured_projects($con));
    // $smarty->assign('blogs', get_homepage_blogs($con));
    // $smarty->assign('testimonials', get_testimonial(""));
    $smarty->display('index.tpl');
}

?>