    <footer>
		<div class="grid-x grid-padding-x grid-padding-y"><div class="large-12 cell"></div></div>

    	<div class="grid-x grid-padding-x grid-padding-y">
    		<div class="large-4 cell">
    			<h5>Important Links</h5>
    			<ul class="menu vertical">
    				{if isset($menu.footer)}
        				{foreach from=$menu.footer item=item name=name}
        					<li><a href="{$smarty.const.WEB_ROOT}{$item.C_Link}" {if (isset($smarty.get.p1) && $smarty.get.p1 == $item.C_Link)}class="active"{/if} title="{$item.C_Menu_Title}">{$item.C_Menu_Title}</a></li>
        				{/foreach}
    				{/if}
					<li><a {if (isset($smarty.get.p1) && $smarty.get.p1 == 'free-website')}class="active"{/if} href="{$smarty.const.WEB_ROOT}free-websites" class="button">Free Websites</a></li>
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

					<a {if (isset($smarty.get.p1) && $smarty.get.p1 == 'free-website')}class="active"{/if} href="{$smarty.const.WEB_ROOT}free-websites" class="button">Free Websites</a>
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
    			<p>Copyright &copy; {$smarty.now|date_format:"%Y"} Simple Solution Development</p>
    		</div>
    	</div>
    </footer>
</div>

<script src="js/vendor.js"></script>
<script src="js/foundation.js"></script>
<script src="js/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>

<script>
   	$(function(){
   		setTimeout(function(){
   			$('.splash-container').fadeOut('2500');
   			$('.splash').hide();
   		}, 4000);
   	});
</script>

</body>
</html>