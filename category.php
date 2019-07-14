<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

		<div class="row holiday_oth">
			<div class="col-md-9 holiday_inner postcontainer">
				<?php
				//~ $paged = (get_query_var('page')) ? get_query_var('page') : 1;
				//~ $arg = array(
				//~ 'posts_per_page' => 3,
				//~ );
				//~ global $wp_query;
				//~ echo print_r($wp_query->query_vars);
				//~ $args = array_merge( $wp_query->query_vars, $arg );
				//~ query_posts( $args );
				//$query1 = new WP_Query( $args );
				//echo "<pre>";print_r($query1->max_num_pages);echo "</pre>";

				?>
				<?php if (have_posts() ) : ?>
					<header class="archive-header">
						<h1 class="archive-title"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>
						<?php $term_description = term_description();
							if ( ! empty( $term_description ) ) :
								printf( '<div class="taxonomy-description">%s</div>', $term_description );
							endif;
						?>
					</header><!-- .archive-header -->
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'custom' );?>
						<?php endwhile; ?>
						<?php twentyfourteen_paging_nav(); ?>
					<?php else :
						get_template_part( 'content', 'none' );
					endif;
					wp_reset_query();
					?>
			</div>
			<?php echo get_sidebar();?>
		</div>
<?php
get_footer();
