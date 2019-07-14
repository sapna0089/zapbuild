<?php
/*
 * template name: Home 
 * 
 * 
 * 
*/
?>

<?php get_header();?>	
		<div class="row holiday_oth">
			<div class="col-md-9 holiday_inner postcontainer">
				
				<?php
				$paged = (get_query_var('page')) ? get_query_var('page') : 1;
				$args = array(
				'post_type'     =>  'post',
				'post_status'	=> 'publish',
				'posts_per_page' => 6,
				'paged' => $paged,
				
				);
				query_posts($args);
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php get_template_part( 'content', 'custom' );?>
					<?php endwhile; ?>
					<?php twentyfourteen_paging_nav(); ?>
				<?php endif;?>
			</div>
			<?php echo get_sidebar();?>
		</div>
<?php get_footer();?>	
