<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="hero">
	<div class="heroipad">
		<img src="http://localhost/wordpress/images/iPad.png" />
	</div>
	<div class="herotext">
		<h1>Share your <br />
			Beautiful Designs</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
		<div class="button">
			Get it Now!
		</div>
	</div>
</div>

<div id="introducing">
	<h1>Introducing ThemeMonkey</h1>
	<p>Share your designs wherever you go</p>

	<div class="introbox1">
		<img src="http://localhost/wordpress/images/IntroPic1.png" />
		<h2>Loaded with features!</h2>
	</div>
	<div class="introbox2">
		<img src="http://localhost/wordpress/images/IntroPic2.png" />
		<h2>Easy to use!</h2>
	</div>
	<div class="introbox2">
		<img src="http://localhost/wordpress/images/IntroPic3.png" />
		<h2>Mix, sort, and share!</h2>
	</div>
</div>

<div id="siteloop">
	<?php if ( have_posts() ): ?>	
		<ol>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<article>
						<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
					</article>
				</li>
			<?php endwhile; ?>
		</ol>
	<?php else: ?>
		<h2>No posts to display</h2>
	<?php endif; ?>
	<div class="navigation">
		 <?php if (function_exists('wp_paginate')) { wp_paginate(); } ?>
	</div>
</div>

<div id="sidebar">
	<?php 
		include (TEMPLATEPATH . '/sidebar.php');
	?>
</div>

<div id="getitnow">
	<h1>Get it in the App Store now!</h1>
	<div class="button">
		<a href="#">
			<img src="http://localhost/wordpress/images/AppStoreButton.png" />
		</a>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>