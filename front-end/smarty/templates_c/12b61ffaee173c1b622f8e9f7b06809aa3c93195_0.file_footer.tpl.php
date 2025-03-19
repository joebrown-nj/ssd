<?php
/* Smarty version 5.4.3, created on 2025-03-18 20:10:44
  from 'file:inc/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67da0b84160d67_11418468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b61ffaee173c1b622f8e9f7b06809aa3c93195' => 
    array (
      0 => 'inc/footer.tpl',
      1 => 1742343040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67da0b84160d67_11418468 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'c:\\wamp64\\www\\ssd\\front-end\\smarty\\templates\\inc';
?>    <footer>
		<div class="grid-x grid-padding-x grid-padding-y"><div class="large-12 cell"></div></div>

    	<div class="grid-x grid-padding-x grid-padding-y">
    		<div class="large-4 cell">
    			<h5>Important Links</h5>
    			<ul class="menu vertical">
    				<?php if ((true && (true && null !== ($_smarty_tpl->getValue('menu')['footer'] ?? null)))) {?>
        				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu')['footer'], 'item', false, NULL, 'name', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
        					<li><a href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);
echo $_smarty_tpl->getValue('item')['C_Link'];?>
" <?php if (((true && (true && null !== ($_GET['p1'] ?? null))) && $_GET['p1'] == $_smarty_tpl->getValue('item')['C_Link'])) {?>class="active"<?php }?> title="<?php echo $_smarty_tpl->getValue('item')['C_Menu_Title'];?>
"><?php echo $_smarty_tpl->getValue('item')['C_Menu_Title'];?>
</a></li>
        				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    				<?php }?>
					<li><a <?php if (((true && (true && null !== ($_GET['p1'] ?? null))) && $_GET['p1'] == 'free-website')) {?>class="active"<?php }?> href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);?>
free-websites" class="button">Free Websites</a></li>
    			</ul>
    		</div>

    		<div class="large-4 cell">
    			<h5>Free Websites</h5>
    			<form>
    				<div class="input-group">
    					<input class="input-group-field" type="text">
    					<div class="input-group-button">
    						<input type="submit" class="button" value="Go">
    					</div>
    				</div>

					<a <?php if (((true && (true && null !== ($_GET['p1'] ?? null))) && $_GET['p1'] == 'free-website')) {?>class="active"<?php }?> href="<?php echo (defined('WEB_ROOT') ? constant('WEB_ROOT') : null);?>
free-websites" class="button">Free Websites</a>
    			</ul>
    			</form>
    		</div>

    		<div class="large-4 cell">
    			<h5>Join The Mailing List</h5>
    			<form>
    				<div class="input-group">
    					<input class="input-group-field" type="text">
    					<div class="input-group-button">
    						<input type="submit" class="button" value="Go">
    					</div>
    				</div>
    			</form>
    		</div>
    	</div>

    	<div class="grid-x grid-padding-x grid-padding-y"><div class="large-12 cell"></div></div>

    	<div class="grid-x grid-padding-x grid-padding-y">
    		<div class="large-12 cell text-center">
    			<p>Copyright &copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y");?>
 Simple Solution Development</p>
    		</div>
    	</div>
    </footer>
</div>

<?php echo '<script'; ?>
 src="js/vendor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/foundation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
   	$(function(){
   		setTimeout(function(){
   			$('.splash-container').fadeOut('2500');
   			$('.splash').hide();
   		}, 4000);
   	});
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
