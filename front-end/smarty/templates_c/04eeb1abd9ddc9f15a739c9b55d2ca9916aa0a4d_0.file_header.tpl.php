<?php
/* Smarty version 5.4.3, created on 2025-03-18 20:07:30
  from 'file:inc/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67da0ac20200d4_42067997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04eeb1abd9ddc9f15a739c9b55d2ca9916aa0a4d' => 
    array (
      0 => 'inc/header.tpl',
      1 => 1644952102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/logo.tpl' => 2,
  ),
))) {
function content_67da0ac20200d4_42067997 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'c:\\wamp64\\www\\ssd\\front-end\\smarty\\templates\\inc';
?><!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Foundation for Sites</title>

		<link rel="stylesheet" href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);?>
css/foundation.css">
		<link rel="stylesheet" href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);?>
css/style.css">
		<?php if ($_smarty_tpl->getValue('scss')) {?><style><?php echo $_smarty_tpl->getValue('scss');?>
</style><?php }?>

<!-- 		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff"> -->

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

	</head>
<body>
		
	<div class="top-bar title-bar title-bar-white hide-for-medium" style="position:fixed; width:100%; z-index:100; width:100%" data-responsive-toggle="responsive-menu" data-hide-for="medium">
		<div class="top-bar-left" onclick="window.location='<?php echo (defined('WEB_URL') ? constant('WEB_URL') : null);?>
'" style="cursor:pointer;">
			<?php $_smarty_tpl->renderSubTemplate('file:inc/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		</div>

		<div class="top-bar-right">
			<ul class="menu <?php if (!(true && (true && null !== ($_GET['p1'] ?? null)))) {?>home<?php }?>">
				<li class="show-for-small-only" style="margin-top:20px;margin-right:20px;">
					<a data-toggle="offCanvasNestedPush" class="menu-icon <?php if ((true && (true && null !== ($_GET['p1'] ?? null)))) {?>menu-icon-dark<?php }?>" onclick="$('#mobile-nav-small').toggle();"><span></span></a>
				</li>
				<li class="show-for-medium-only" style="margin-top:20px;margin-right:20px;">
					<a data-toggle="offCanvasNestedPush" class="menu-icon <?php if ((true && (true && null !== ($_GET['p1'] ?? null)))) {?>menu-icon-dark<?php }?>" onclick="$('#mobile-nav-med').toggle();"><span></span></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="top-bar title-bar title-bar-white show-for-large" style="position:fixed; width:100%; z-index:100;" data-responsive-toggle="responsive-menu" data-hide-for="medium" id="responsive-menu">
		<div class="top-bar-left" onclick="window.location='<?php echo (defined('WEB_URL') ? constant('WEB_URL') : null);?>
'" style="cursor:pointer;">
			<?php $_smarty_tpl->renderSubTemplate('file:inc/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		</div>

 		<div class="top-bar-right">
			<ul class="dropdown menu align-right" data-dropdown-menu>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu')['main'], 'item', false, NULL, 'name', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
					<li><a href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);
echo $_smarty_tpl->getValue('item')['C_Link'];?>
" <?php if (((true && (true && null !== ($_GET['p1'] ?? null))) && $_GET['p1'] == $_smarty_tpl->getValue('item')['C_Link']) || (!(true && (true && null !== ($_GET['p1'] ?? null))) && $_smarty_tpl->getValue('item')['C_Link'] == '')) {?>class="active"<?php }?> title="<?php echo $_smarty_tpl->getValue('item')['C_Menu_Title'];?>
"><?php echo $_smarty_tpl->getValue('item')['C_Menu_Title'];?>
</a></li>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>

	<div class="show-for-small-only" id="mobile-nav-small" style="display:none;">
		<div style="background:#000;" class="off-canvas position-left is-closed" id="offCanvasNestedPush" data-off-canvas>
			<ul class="menu vertical <?php if (!(true && (true && null !== ($_GET['p1'] ?? null)))) {?>home<?php }?>">
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu')['main'], 'item', false, NULL, 'name', array (
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
					<li>
						<a class="bracket <?php if (((true && (true && null !== ($_GET['p1'] ?? null))) && $_GET['p1'] == $_smarty_tpl->getValue('item')['C_Link']) || (!(true && (true && null !== ($_GET['p1'] ?? null))) && $_smarty_tpl->getValue('item')['C_Link'] == '') || ((true && (true && null !== ($_GET['p2'] ?? null))) && $_GET['p2'] == $_smarty_tpl->getValue('item')['C_Link2'])) {?>active<?php }?>" href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);
echo $_smarty_tpl->getValue('item')['C_Link'];?>
" title="<?php echo $_smarty_tpl->getValue('item')['C_Title'];?>
 | jbrown websites"><?php echo $_smarty_tpl->getValue('item')['C_Menu_Title'];?>
</a>
					</li>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>

	<div class="show-for-medium-only clearfix" id="mobile-nav-med" style="display:none;">
		<ul class="menu vertical <?php if (!(true && (true && null !== ($_GET['p1'] ?? null)))) {?>home<?php }?>">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu')['main'], 'item', false, NULL, 'name', array (
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach2DoElse = false;
?>
				<li>
					<a class="bracket <?php if (((true && (true && null !== ($_GET['p1'] ?? null))) && $_GET['p1'] == $_smarty_tpl->getValue('item')['C_Link']) || (!(true && (true && null !== ($_GET['p1'] ?? null))) && $_smarty_tpl->getValue('item')['C_Link'] == '') || ((true && (true && null !== ($_GET['p2'] ?? null))) && $_GET['p2'] == $_smarty_tpl->getValue('item')['C_Link2'])) {?>active<?php }?>" href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);
echo $_smarty_tpl->getValue('item')['C_Link'];?>
" title="<?php echo $_smarty_tpl->getValue('item')['C_Title'];?>
 | jbrown websites"><?php echo $_smarty_tpl->getValue('item')['C_Menu_Title'];?>
</a>
				</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ul>
	</div>

	<?php if (!(true && (true && null !== ($_GET['p1'] ?? null)))) {?>
		<div class="floating-form show-for-medium">
	       	<form method="post" action="" class="log-in-form">
		       	<h1 class="text-center" style="font-size:50px; font-family:'Radicals';">Schedule A Conversation</h1>
		       	<h4 class="text-center" style="font-size:20px; font-family:'Arial';">Skip the rest of this and let's talk!<br>Fill out the form below.</h4>
	
				<label>Name
				<input type="text" name="name" placeholder=""></label>
	
				<label>Email
				<input type="email" name="email" placeholder="somebody@example.com"></label>
	
				<label>Phone
				<input type="text" name="phone"></label>
	
				<label>Best Time To Call
				<input type="text" name="time-to-call"></label>
	
				<p><input type="submit" class="button expanded" value="Log in"></input></p>
			</form>
	   	</div>
   	<?php }?>

	<div class="kit-header">
		<?php if ($_smarty_tpl->getValue('video')) {?>
    		<video autoplay muted id="myVideo" loop>
    			<source src="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);?>
content/<?php echo $_smarty_tpl->getValue('video');?>
" type="video/mp4">
    		</video>
		<?php }?>

        <!-- <div class="content">
	        <h1><?php echo $_smarty_tpl->getValue('content')['C_Header_Text'];?>
</h1>
        	<h1>Heading</h1>
        	<p>Lorem ipsum...</p>
        </div> -->
	</div>

	<div class="page-content-container"><?php }
}
