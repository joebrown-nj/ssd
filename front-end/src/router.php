<?php

// log_page_visit();

$page = isset($_GET['p1']) && $_GET['p1'] != "" ? $_GET['p1'] : "";
$smarty = get_template();
$content = get_page_content();

// include (WEB_DOC_ROOT . 'src/scssphp-1.1.1/scss.inc.php');
// use ScssPhp\ScssPhp\Compiler;
// $scss = new Compiler();
// $smarty->assign('scss', $scss->compile(file_get_contents('splash/style.scss')));

$smarty->assign('content', $content);
$smarty->assign('menu', get_menu('home'));
$smarty->assign('defaults', get_defaults());
// $smarty->assign('meta', get_meta_data());
// $smarty->assign('video', get_page_video());
// $smarty->assign('allservices',get_services());

// $base_page = get_base_page_content();
// $smarty->assign('base_page',$base_page);

// if (isset($_GET['p1'])) {
//     $smarty->assign('subnav', get_subnav_menu($_GET['p1'], 'sub'));
// }

/*
 * if(!isset($_SESSION['first_visit']))
 * {
 * $smarty->assign('first_visit',true);
 * $_SESSION['first_visit'] = 1;
 * }
 *
 * if(isset($_POST['firstvisitform'])) {
 * $smarty->assign('first_visit_results',check_first_visit_form($_POST));
 * }
 */

switch ($page) {
    /*
     * case 'places-to-eat-survey':
     * get_places_to_eat_page($smarty);
     * break;
     */

    /*
     * case 'newsletters':
     * get_newsletter_page($smarty);
     * break;
     */

    /*
     * case 'email':
     * die("");
     * break;
     */

    case '':
        get_home_page($smarty);
        break;

    // case 'testimonials':
    //     get_testimonials($smarty);
    //     break;

    // online tetris tournament - giveaway - share on fb/tw/ig
    /*
     * case 'tetris':
     * {
     * get_tetris_page($smarty);
     * break;
     * }
     */

    /*
     * case 'blog':
     * get_news_page($smarty);
     * break;
     */

    // case 'services':
    //     get_services_page($smarty);
    //     break;

    // case 'contact':
    // case 'contact-us':
    //     get_contact_page($smarty);
    //     break;

    // case 'work':
    // case 'portfolio':
    //     get_portfolio_page($smarty);
    //     break;

    /*
     * case 'search':
     * get_search_page($smarty);
     * break;
     */

    /*
     * case 'rss':
     * get_rss_feed();
     * break;
     */

    // case '404':
    //     $smarty->display('404.tpl');
    //     break;

    // case 'site-map':
    //     $smarty->assign('sitemap', get_site_map());
    //     break;

    // case 'unsubscribe':
    //     get_unsubscribe_page($smarty);
    //     break;

    default:
        $smarty->display('subpage.tpl');
        break;
}

?>