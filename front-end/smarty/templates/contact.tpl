{include file='inc/header.tpl'}

<div class="grid-x grid-padding-x grid-margin-x">
	<div class="medium-6 cell">
		<h2 class="page-title text-center">Questions? Comments? Concerns?</h2>
		<h5 class="text-center">Fill out the form below or contact me directly and I will get back to you within 1 business day.</h5>
		{$content.C_Text}
		{print_r($content)}
	</div>

	<div class="medium-6 cell">
		<div class="callout primary">
			{if isset($referrer_msg) && $referrer_msg != ""}
				{$referrer_msg}
			{/if}
	
			{if isset($results) && $results != ""}
				<div class="callout alert">
					<p class="alert-box success">
						{foreach from=$results item=item name=name}
							{$item}<br/>
						{/foreach}
					</p>
				</div>
			{/if}

			<form method="post" action="" enctype="multipart/form-data" data-abide novalidate>
				<div data-abide-error class="alert callout" style="display: none;">
					<p><i class="fi-alert"></i> There are some errors in your form.</p>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="small-12 cell">
						<label>
							Subject:
							<select name="reason" required>
								<option value=""></option>
								<option value="general">General</option>
								<option value="technical">Technical Issue</option>
								<option value="question">Question / Comment</option>
							</select>
							<span class="form-error">Subject is required</span>
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="small-12 cell">
						<label>
							<span class="req">*</span>Name:
							<input required class="" name="name" type="text" value="{if isset($smarty.session.contact.name)}{$smarty.session.contact.name}{/if}"/>
							<span class="form-error">Your name is required</span>
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="small-12 cell">
						<label>
							<span class="req">*</span>Email:
							<input required type="email" name="email" value="{if isset($smarty.session.contact.email)}{$smarty.session.contact.email}{/if}"/>
							<span class="form-error">A valid email address is required</span>
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="small-12 cell">
						<label>
							Phone:
							<input type="text" name="phone" value="{if isset($smarty.session.contact.phone)}{$smarty.session.contact.phone}{/if}"/>
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<label>
							<span class="req">*</span>Message:
							<textarea required class="grid-x grid-padding-xs" rows="0" cols="0" class="" name="message">{if isset($smarty.session.contact.message)}{$smarty.session.contact.message}{/if}</textarea>
							<span class="form-error">A message is required</span>
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<label><input class="checkbox" type="checkbox" name="mailing-list" checked="checked" value="1"/> Join my mailing list</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						{include file="inc/recaptcha.tpl"}
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<input value="contactForm" name="contactForm" type="hidden"/>
						<input style="color:#FFF;" type="submit" value="Submit" class="submit button expanded warning large"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

{include file='inc/footer.tpl'}