<div id="master">
<header>

	<!-- Logo linking back to home page -->
	<a href="<?php echo home_url(); ?>">
		<div id="logo">
			<img src="wp-content\themes\blanktheme\logo.png">
		</div>
	</a>

	<!-- Floating space possibly used for social media links -->
	<div id="floatpipe"> </div>

	<!-- Menu containitng links to pages -->
	<div class="menu">
		<ul>
			<!-- diplaying page TITLES by POST DATE excluding CONTACT page -->
			<?php 
				$args = array(
					'title_li' => '',
					'sort_column' => 'post_date',
					'exclude' => 30,
				);
				$pages = get_pages($args);
				foreach($pages as $page) {
					echo '<a href="'.get_page_link( $page->ID ).'"><li>'.$page->post_title.'</li></a>';
				}

			?>
		</ul>
	</div>

</header>
