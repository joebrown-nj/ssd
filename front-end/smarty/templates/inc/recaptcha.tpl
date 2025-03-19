{if $smarty.server.SERVER_NAME != "localhost" && $smarty.server.SERVER_NAME != "192.168.1.7"}
	<div class="grid-x grid-padding-x captcha clearfix" style="margin:0 0 20px;">
		<div class="small-12 cell">
			<input type="text" name="call" value="" class="callform" style="position:absolute; top:-5000px;"/>
			<div class="g-recaptcha"></div>
		</div>
	</div>
{/if}