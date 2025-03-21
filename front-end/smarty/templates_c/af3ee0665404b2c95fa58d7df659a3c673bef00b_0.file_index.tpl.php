<?php
/* Smarty version 5.4.3, created on 2025-03-18 20:07:29
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67da0ac1e61359_53503733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af3ee0665404b2c95fa58d7df659a3c673bef00b' => 
    array (
      0 => 'index.tpl',
      1 => 1625866917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
))) {
function content_67da0ac1e61359_53503733 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'c:\\wamp64\\www\\ssd\\front-end\\smarty\\templates';
$_smarty_tpl->renderSubTemplate('file:inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div class="large-12 cell">
			<h1>Welcome to Foundation</h1>
		</div>
	</div>

	<div class="grid-x grid-padding-x">
		<div class="large-12 cell">
			<div class="callout">
				<h3>We&rsquo;re stoked you want to try Foundation!</h3>
				<p>To get going, this file (index.html) includes some basic
					styles you can modify, play around with, or totally destroy to get
					going.</p>
				<p>Once you've exhausted the fun in this document, you should
					check out:</p>
				<div class="grid-x grid-padding-x">
					<div class="large-4 medium-4 cell">
						<p>
							<a href="http://foundation.zurb.com/docs">Foundation
								Documentation</a><br />Everything you need to know about using the
							framework.
						</p>
					</div>
					<div class="large-4 medium-4 cell">
						<p>
							<a href="http://zurb.com/university/code-skills">Foundation
								Code Skills</a><br />These online courses offer you a chance to
							better understand how Foundation works and how you can master it
							to create awesome projects.
						</p>
					</div>
					<div class="large-4 medium-4 cell">
						<p>
							<a href="http://foundation.zurb.com/forum">Foundation Forum</a><br />Join
							the Foundation community to ask a question or show off your
							knowlege.
						</p>
					</div>
				</div>
				<div class="grid-x grid-padding-x">
					<div class="large-4 medium-4 medium-push-2 cell">
						<p>
							<a href="http://github.com/zurb/foundation">Foundation on
								Github</a><br />Latest code, issue reports, feature requests and
							more.
						</p>
					</div>
					<div class="large-4 medium-4 medium-pull-2 cell">
						<p>
							<a href="https://twitter.com/ZURBfoundation">@zurbfoundation</a><br />Ping
							us on Twitter if you have questions. When you build something
							with this we'd love to see it (and send you a totally boss
							sticker).
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="grid-x grid-padding-x">
		<div class="large-8 medium-8 cell">
			<h5>Here&rsquo;s your basic grid:</h5>
			<!-- Grid Example -->

			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<div class="primary callout">
						<p>
							<strong>This is a twelve cell section in a grid-x.</strong> Each
							of these includes a div.callout element so you can see where the
							cell are - it's not required at all for the grid.
						</p>
					</div>
				</div>
			</div>
			<div class="grid-x grid-padding-x">
				<div class="large-6 medium-6 cell">
					<div class="primary callout">
						<p>Six cell</p>
					</div>
				</div>
				<div class="large-6 medium-6 cell">
					<div class="primary callout">
						<p>Six cell</p>
					</div>
				</div>
			</div>
			<div class="grid-x grid-padding-x">
				<div class="large-4 medium-4 small-4 cell">
					<div class="primary callout">
						<p>Four cell</p>
					</div>
				</div>
				<div class="large-4 medium-4 small-4 cell">
					<div class="primary callout">
						<p>Four cell</p>
					</div>
				</div>
				<div class="large-4 medium-4 small-4 cell">
					<div class="primary callout">
						<p>Four cell</p>
					</div>
				</div>
			</div>

			<hr />

			<h5>We bet you&rsquo;ll need a form somewhere:</h5>
			<form>
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<label>Input Label</label> <input type="text"
							placeholder="large-12.cell" />
					</div>
				</div>
				<div class="grid-x grid-padding-x">
					<div class="large-4 medium-4 cell">
						<label>Input Label</label> <input type="text"
							placeholder="large-4.cell" />
					</div>
					<div class="large-4 medium-4 cell">
						<label>Input Label</label> <input type="text"
							placeholder="large-4.cell" />
					</div>
					<div class="large-4 medium-4 cell">
						<div class="grid-x">
							<label>Input Label</label>
							<div class="input-group">
								<input type="text" placeholder="small-9.cell"
									class="input-group-field" /> <span class="input-group-label">.com</span>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<label>Select Box</label> <select>
							<option value="husker">Husker</option>
							<option value="starbuck">Starbuck</option>
							<option value="hotdog">Hot Dog</option>
							<option value="apollo">Apollo</option>
						</select>
					</div>
				</div>
				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<label>Choose Your Favorite</label> <input type="radio"
							name="pokemon" value="Red" id="pokemonRed"><label
							for="pokemonRed">Radio 1</label> <input type="radio"
							name="pokemon" value="Blue" id="pokemonBlue"><label
							for="pokemonBlue">Radio 2</label>
					</div>
					<div class="large-6 medium-6 cell">
						<label>Check these out</label> <input id="checkbox1"
							type="checkbox"><label for="checkbox1">Checkbox 1</label>
						<input id="checkbox2" type="checkbox"><label
							for="checkbox2">Checkbox 2</label>
					</div>
				</div>
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<label>Textarea Label</label>
						<textarea placeholder="small-12.cell"></textarea>
					</div>
				</div>
			</form>
		</div>

		<div class="large-4 medium-4 cell">
			<h5>Try one of these buttons:</h5>
			<p>
				<a href="#" class="button">Simple Button</a><br /> <a href="#"
					class="success button">Success Btn</a><br /> <a href="#"
					class="alert button">Alert Btn</a><br /> <a href="#"
					class="secondary button">Secondary Btn</a>
			</p>
			<div class="callout">
				<h5>So many components, girl!</h5>
				<p>A whole kitchen sink of goodies comes with Foundation. Check
					out the docs to see them all, along with details on making them
					your own.</p>
				<a href="https://foundation.zurb.com/sites/docs/"
					class="small button">Go to Foundation Docs</a>
			</div>
		</div>
	</div>

	<div class="large-12 cell">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, temporibus a reprehenderit, adipisci expedita nam odio neque alias eligendi, consectetur sapiente dicta tenetur perspiciatis. Aspernatur modi provident obcaecati impedit dignissimos.</p>
		<p>Something other than generic lorem here. Make sure to find the You're Special book in your old home before setting out to start your epic Fallout journey...</p>
	</div>
</div>

<?php $_smarty_tpl->renderSubTemplate('file:inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
