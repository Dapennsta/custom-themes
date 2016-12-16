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
	
<?php 
	$args = array (
				'posts_per_page'	=> 4,
				'category_name'		=> 'feat'	);
	$feat_posts = get_posts( $args );

	if ( !empty( $feat_posts ) ) :
?>
<div id="hero-info">
	<?php foreach ($feat_posts as $post)	{ ?>
		<div class="hero-title"> <?php echo $post -> post_title; ?> </div>
		<div class="hero-content"> <?php echo wp_trim_words($post -> post_content, 19, "..."); ?> </div>
	<?php } ?>
</div>

<div id="hero">
	<div id="herobg"></div>
	<div id="hero-img">
		<?php for ( $i=0; $i<4; $i++ ) {
			if ( $i == 0 ) { echo '<div class="hero-images hero-img-sel" id="hero-img-'.$i.'">'; }
			else { echo '<div class="hero-images" id="hero-img-'.$i.'">'; }
			echo wp_get_attachment_image( get_post_thumbnail_id( $feat_posts[$i] -> ID ), array( '500', '500') );
			echo '</div>';
		} ?>
	</div>
	<div id="hero-text">
		<h2 id="hero-title"><?php echo $feat_posts[0] -> post_title ?></h2>
		<p id="hero-content"><?php echo wp_trim_words($feat_posts[0] -> post_content, 19, "..."); ?></p>
				 
	</div>
	<div id="hero-btn">
			<div class="button">Read More</div>
	</div>
	<div id="hero-shadow">
		<img src="wp-content/themes/blanktheme/hero-shadow.png" />
	</div>
	<div id="hero-nav">
		<?php 
			for($nav = 1; $nav <= 4; $nav++) {
				if ($nav == 1) {
					echo '<div class="hero-nav-sel hero-nav-box" id="hero-nav-'.$nav.'"></div>';
				} else {
					echo '<div class="hero-nav-box" id="hero-nav-'.$nav.'"></div>';
				}
			}
		?>
	</div>
</div>

<?php endif; ?>

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

<?php //<div class="banner"><span>Check Out Our Latest Video</span></div> ?>
<div id="media">
	<span>Check out our latest videos<div class="arrow-down-sm"></div></span>
	<span>Check out our latest music<div class="arrow-down-sm"></div></span>
</div>
<div id="media-box">
	<div class="media-video">
		<p>WAKE UP</p><span class="media-bg"></span>
		<iframe id="player1" class="ytplayer" width="100%" height="100%" 
		src="https://www.youtube.com/embed/n679wI_P160?enablejsapi=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="media-video">
		<p>All UP TO YOU</p><span class="media-bg"></span>
		<iframe id="player2" class="ytplayer" width="100%" height="100%"
		src="https://www.youtube.com/embed/aBP2CPV8wlI?enablejsapi=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="media-video">
		<p>FIRST OVERALL</p><span class="media-bg"></span>
		<iframe id="player3" class="ytplayer" width="100%" height="100%" 
		src="https://www.youtube.com/embed/6A67AD4gl8Y?enablejsapi=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="media-video">
		<p>MUTINY</p><span class="media-bg"></span>
		<iframe id="player4" class="ytplayer" width="100%" height="100%" 
		src="https://www.youtube.com/embed/QTh25hmf4GU?enablejsapi=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div id="posts">
	<?php if ( have_posts() ): ?>
	<div class="title"><h3>NEWS</h3></div>	
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
								<img src="http://placehold.it/300x300">
						<?php endif; ?>
					</div>
					<div class="post-text">
						<?php the_content(); ?>
					</div>
					<div class="post-btn">
						<div class="button">Read More</div>
					</div>
					<div class="post-img-shad">
						<img src='wp-content/themes/blanktheme/thumb-shadow.png' />
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