<div class="holiday_contant_oth">
	<span class="holiday_images">
		<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
<!--
		<img src="<?php bloginfo('url');?>/timthumb.php?src=<?php echo $thumbnail[0];?>&w=848&h=322&zc=1&q=100" alt="<?php the_title()?>" width="848" height="322"/></span>
-->
        <a href="<?php the_permalink()?>" ><img src="<?php echo $thumbnail[0];?>" alt="<?php the_title()?>" width="848" height="322"/></a></span>
	<span class="day_of_holiday"><em><?php the_time('d'); ?></em><i><?php the_time('M, Y'); ?></i></span>
    <h4><a href="<?php the_permalink()?>" class="default_link"><?php the_title()?></a></h4>
	<?php the_excerpt()?>
	<div class="posted_oth">
		<span class="posted_contant"><em>Posted in:</em> <i><?php the_category(', '); ?></i></span>
		<div class="loadMore-creativeWorks read_more_holiday read_more_blog"><a href="<?php the_permalink()?>" class="button-1">Read More</a></div>
	</div>
</div>
