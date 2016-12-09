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
	<div id="hero-img">
		<img src="http://placehold.it/500x281" />
	</div>
	<div id="hero-text">
		<?php /** REPLACE WITH WORDPRESS PULLS */ ?>
		<h2>new: live shots from zaphods gig</h2>
		<p>Check out these cool shots from our Aug. 17 gig at Zaphod Beeblebrox. 
All photo credits to Worn Leather Media. </p>
	</div>
	<div id="hero-btn">
			<div class="button">Read More</div>
	</div>
	<div id="hero-nav">
		<?php 
			for($nav = 1; $nav <= 4; $nav++) {
				echo '<div id="hero-nav-'.$nav.'"></div>';
			}
		?>
	</div>
</div>

<div class="banner"><h2>Come See Us Play Live</h2></div>

<div id="gigs">
	<div id="gig-next">
		<h3>Next Gig:</h3>
		<p>Live Music featuring Arms of the Girl</p>
		<p>James Street Pub</p>
		<p>Ottawa, ON</p>
		<h4>Friday October 21, 2016</h4>
		<p>More Info...</p>
	</div>
	<div id="gig-more">
		<h3>Upcoming Gigs:</h3>
		<p>Oct 21 - James Street Pub - Ottawa, ON</p>
		<p>Nov 19 - Piranha Bar - Montreal, QC</p>
		<p>Nov 26 - LIVE! on Elgin - Ottawa, ON</p>
	</div>
	<div id="gig-btn">
		<div class="button">Book Us!</div>
	</div>
</div>

<div class="banner"></div>

<div id="posts">
	<?php if ( have_posts() ): ?>
	<div class="title"><h3>News</h3></div>	
	<ol>
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<div class="title-bar">
					<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</div>
				<div class="post">
					<div class="post-img">
						<?php if (has_post_thumbnail( $post -> ID ) ) : ?>
							  	<?php echo wp_get_attachment_image( get_post_thumbnail_id( $post -> ID ), 'medium'); ?> 
							 <?php else : ?> 
								<img src="http://placehold.it/280x158">
						<?php endif; ?>
					</div>
					<div class="post-text">
						<?php the_content(); ?>
					</div>
					<div class="post-btn">
						<div class="button">Read More</div>
					</div>
				</div>
			</article>
		</li>
	<?php endwhile; ?>
	</ol>
	<?php else: ?>
	<h2>No posts to display</h2>
	<?php endif; ?>
	<div id="pic-bar"></div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>