<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

		<div id="main-content" class="site-content row" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(2) ); ?>

				<div class='bg_img'>
					<img src="<?php echo $feat_image ?>" />	
				</div>


				<div id='title'>Dr. Laquercia</div>
				<ul id='menu'>
					<li>Referrals</li>
					<li>Publications</li>
					<li>Credentials</li>
					<li>Contact</li>
				</ul>



				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php echo $post->post_content ?>				

				</article><!-- #post -->

			<?php endwhile; ?>

		</div><!-- #content -->


		<div class="row" id="info-columns">
			<div class="col-md-4">
			<?php 
				$posts = query_posts('cat=2');
				echo $posts[0]->post_content;	
			?>
			</div>
			
			<div class="col-md-4" id="make_appt">
				<div id="talk">Need talk?</div>
				<a href="#">Make An Appointment</a>
			</div>
			
			<div class="col-md-4" id="credential">
				<a href="#">See <br />Dr.Laquercia's Credentials.</a>
			</div>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
