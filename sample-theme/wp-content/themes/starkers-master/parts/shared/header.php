<div id="master">
	<header>

		<a href="<?php echo home_url(); ?>">
			<div id="logo">
				<img src="http://localhost/wordpress/images/Logo.png"/>
			</div>
		</a>

		<div class="button">
			<a href="#">
				<img src="http://localhost/wordpress/images/AppStoreButton.png" />
			</a>
		</div>

		<div class="menu">
			<ul>
				<?php
					wp_list_pages('title_li=&sort_column=post_date');
				?>
			</ul>
		</div>

	</header>