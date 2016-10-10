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
	<div class="HeroiPad"><img src="http://localhost/images/iPad.png"></div>
	<div class="HeroText">
		<h1>Share your<br>beautiful designs</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
		<div class="button">Get it now!</div>	
	</div>
</div>

<div id="introducing">
	<h1>Introducing goDesigner</h1>
	<p>Share your designs wherever you go</p>
	<div class="IntroBox1"><img src="http://localhost/images/IntroPic1.png"><h2>Loaded with features!</h2></div>
	<div class="IntroBox2"><img src="http://localhost/images/IntroPic2.png"><h2>Easy to use!</h2></div>
	<div class="IntroBox3"><img src="http://localhost/images/IntroPic3.png"><h2>Mix, sort, and share!</h2></div>
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
</div>
<div id="getitnow">	
	<h1>Get it in the app store now!</h1>
	<div class="button"><a href="#"><img src="http://localhost/images/AppStoreButton.png"></a></div>	
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>