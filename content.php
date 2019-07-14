<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<style>
	nav.navigation.post-navigation, #comments{display:none;}
</style>
<div class="holiday_contant_oth">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php // twentyfourteen_post_thumbnail(); ?>
		<span class="holiday_images">
			<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
<!--
			<img src="<?php bloginfo('url');?>/timthumb.php?src=<?php echo $thumbnail[0];?>&w=848&h=322&zc=1&q=100" alt="<?php the_title()?>" width="848" height="322"/>
-->
<img src="<?php echo $thumbnail[0];?>" alt="<?php the_title()?>" width="848" height="322"/></span>
		</span>
		<span class="day_of_holiday"><em><?php the_time('d'); ?></em><i><?php the_time('M, Y'); ?></i></span>
	


			<!-- <?php if ( is_single() ) :
				the_title( '<h4 class="entry-title">', '</h4>' );
			else :
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif;
		?> -->
		<br /><br />
		
		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					//twentyfourteen_posted_on();
				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<!--span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span-->
			<?php
				endif;

				//edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div --><!-- .entry-meta -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	<?php if (is_search() ) : ?>
		<div class="loadMore-creativeWorks read_more_holiday read_more_blog"><a href="<?php the_permalink()?>" class="button-1">Read More</a></div>
	<?php endif; ?>
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
			<div class="posted_oth">
				<span class="posted_contant"><em>Posted by: </em><i><?php echo get_the_author(); ?> / In: <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?> <?php the_tags( ' and Tagged ', ', ', '' ); ?></i></span>
			</div>
		<?php endif;?>
		<?php if( !is_search() ) : ?>
		<div class="video_blog">
			<?php 
				$carousel_shortcode = get_post_meta($post->ID, 'wonderplugin_carousel', TRUE);
				if(isset($carousel_shortcode)){
					echo do_shortcode($carousel_shortcode);
				}
			?>
			<!--img src="<?php //echo bloginfo('stylesheet_directory'); ?>/images/video.jpg" alt="Hey!!! It's Thanksgiving" width="849" height="150"/-->
		</div>
		<div class="oth_cam_div">
			<span class="cam_divider">
				<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/cam_divider.png" alt="Cam" width="18" height="46"/>
			</span>
			<div class="social-ul_1 social-ul_2">
				<?php dynamic_sidebar('social-links'); ?>
			</div><!--.social-ul_1 social-ul_2-->
		</div><!--.oth_cam_div-->
		<?php endif; ?>
	</article><!-- #post-## -->
	</div>


