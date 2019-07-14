<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

					
			<div class="col-md-3 sidebar blog_sidebar">
              <div class="blog_search">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <h6>Search</h6>
                <div class="search_main">
                  <span class="search_button"><button type="submit"  class="fa fa-search"></button></span>
                  <div class="search_input">
                    <input type="text" class="search-field" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
                  </div>
                </div>
                </form>
              </div>
              <div class="widget zappunity_post">
                <div class="more_zapbuild_blogs ">					
                  <div class="widget-title"><h6>See what we're doing</h6></div>
                  <?php 
					$args = array(
						'menu' => 'See what we\'re doing',
						'menu_class' => '',
						'container' => '',
						'before' => '<div class="zap_blogs">',
						'after' => '<i class="fa fa-arrow-right"></i></div>'
					);					
					wp_nav_menu( $args );					
                  ?>
                </div>
                <div class="latest_post latest_post_span ">
                  <div class="widget-title "><h6>Latest posts <span>#Bits N Tricks</span></h6></div>
                  <div class="latest_post_slider">
                  <ul>
					  <li>
						<?php
						$post_ids = array();
						$latestpost = new WP_Query(array(
							'post_status'	=> 'publish',
							'posts_per_page'=> 5,
							'order'			=>'DESC',
						));
						while($latestpost->have_posts()) : $latestpost->the_post(); 
							array_push($post_ids, get_the_ID()) ;
							$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail');
							//$img['post_id'] 		= $latestpost->ID;
							$img['thumb_image'] 	= $thumbnail[0];
						?>
							<div class="latest_post_row">
								<div class="widget-post-img widget_img"><img alt="" src="<?php echo $img['thumb_image']?>"></div>
								<div class="widget-post-content widget_content">
								  <h6><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h6>
								  <span><?php the_time('F, Y'); ?></span>
								</div>
						   </div>
						
					  <?php endwhile;  wp_reset_postdata();?>
                    </li>
					 <li>
						 <?php
						$latestpost = new WP_Query(array(
							'post_status'	=> 'publish',
							'posts_per_page'=> 5,
							'order'			=>'DESC',
							'post__not_in'	=> $post_ids
						));
						while($latestpost->have_posts()) : $latestpost->the_post(); 
							$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail');
							//$img['post_id'] 		= $latestpost->ID;
							$img['thumb_image'] 	= $thumbnail[0];
						?>
							<div class="latest_post_row">
								<div class="widget-post-img widget_img"><img alt="" src="<?php echo $img['thumb_image']?>"></div>
								<div class="widget-post-content widget_content">
								  <h6><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h6>
								  <span><?php the_time('F, Y'); ?></span>
								</div>
						   </div>
						
					  <?php endwhile; wp_reset_postdata(); ?>
                    </li>
                  </ul>
                 </div>
                </div>
              </div>
              <?php if(!is_single()){	?>
              <?php $hiring = file_get_contents(SITE."/culture/hiring");
              $hiring = str_replace('href="/', 'href="' . SITE . "/", $hiring);
			echo $hiring = str_replace('src="/', 'src="' . SITE . "/", $hiring); ?>
			<?php } ?>
            </div><!-- End sidebar -->
		


<!--div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<?php endif; ?>
</div-->
