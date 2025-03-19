<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Foundation for Sites</title>

		<link rel="stylesheet" href="{$smarty.const.WEB_ROOT}css/foundation.css">
		<link rel="stylesheet" href="{$smarty.const.WEB_ROOT}css/style.css">
		{if $scss}<style>{$scss}</style>{/if}

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
	{*if !isset($smarty.get.p1)}{include file='inc/splash.tpl'}{/if*}
	{*include file='inc/fish.tpl'*}

	<div class="top-bar title-bar title-bar-white hide-for-medium" style="position:fixed; width:100%; z-index:100; width:100%" data-responsive-toggle="responsive-menu" data-hide-for="medium">
		<div class="top-bar-left" onclick="window.location='{$smarty.const.WEB_URL}'" style="cursor:pointer;">
			{include file='inc/logo.tpl'}
		</div>

		<div class="top-bar-right">
			<ul class="menu {if !isset($smarty.get.p1)}home{/if}">
				<li class="show-for-small-only" style="margin-top:20px;margin-right:20px;">
					<a data-toggle="offCanvasNestedPush" class="menu-icon {if isset($smarty.get.p1)}menu-icon-dark{/if}" onclick="$('#mobile-nav-small').toggle();"><span></span></a>
				</li>
				<li class="show-for-medium-only" style="margin-top:20px;margin-right:20px;">
					<a data-toggle="offCanvasNestedPush" class="menu-icon {if isset($smarty.get.p1)}menu-icon-dark{/if}" onclick="$('#mobile-nav-med').toggle();"><span></span></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="top-bar title-bar title-bar-white show-for-large" style="position:fixed; width:100%; z-index:100;" data-responsive-toggle="responsive-menu" data-hide-for="medium" id="responsive-menu">
		<div class="top-bar-left" onclick="window.location='{$smarty.const.WEB_URL}'" style="cursor:pointer;">
			{include file='inc/logo.tpl'}
		</div>

 		<div class="top-bar-right">
			<ul class="dropdown menu align-right" data-dropdown-menu>
				{foreach from=$menu.main item=item name=name}
					<li><a href="{$smarty.const.WEB_ROOT}{$item.C_Link}" {if (isset($smarty.get.p1) && $smarty.get.p1 == $item.C_Link) || (!isset($smarty.get.p1) && $item.C_Link == '')}class="active"{/if} title="{$item.C_Menu_Title}">{$item.C_Menu_Title}</a></li>
				{/foreach}
			</ul>
		</div>
	</div>

	<div class="show-for-small-only" id="mobile-nav-small" style="display:none;">
		<div style="background:#000;" class="off-canvas position-left is-closed" id="offCanvasNestedPush" data-off-canvas>
			<ul class="menu vertical {if !isset($smarty.get.p1)}home{/if}">
				{foreach from=$menu.main item=item name=name}
					<li>
						<a class="bracket {if (isset($smarty.get.p1) && $smarty.get.p1 == $item.C_Link) || (!isset($smarty.get.p1) && $item.C_Link == "") || (isset($smarty.get.p2) && $smarty.get.p2 == $item.C_Link2)}active{/if}" href="{$smarty.const.WEB_ROOT}{$item.C_Link}" title="{$item.C_Title} | jbrown websites">{$item.C_Menu_Title}</a>
					</li>
				{/foreach}
			</ul>
		</div>
	</div>

	<div class="show-for-medium-only clearfix" id="mobile-nav-med" style="display:none;">
		<ul class="menu vertical {if !isset($smarty.get.p1)}home{/if}">
			{foreach from=$menu.main item=item name=name}
				<li>
					<a class="bracket {if (isset($smarty.get.p1) && $smarty.get.p1 == $item.C_Link) || (!isset($smarty.get.p1) && $item.C_Link == "") || (isset($smarty.get.p2) && $smarty.get.p2 == $item.C_Link2)}active{/if}" href="{$smarty.const.WEB_ROOT}{$item.C_Link}" title="{$item.C_Title} | jbrown websites">{$item.C_Menu_Title}</a>
				</li>
			{/foreach}
		</ul>
	</div>

	{if !isset($smarty.get.p1)}
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
   	{/if}

	<div class="kit-header">
		{if $video}
    		<video autoplay muted id="myVideo" loop>
    			<source src="{$smarty.const.WEB_ROOT}content/{$video}" type="video/mp4">
    		</video>
		{/if}

        <!-- <div class="content">
	        <h1>{$content.C_Header_Text}</h1>
        	<h1>Heading</h1>
        	<p>Lorem ipsum...</p>
        </div> -->
	</div>

	<div class="page-content-container">