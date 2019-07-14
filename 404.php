<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section id="content-404">
	<div class="error_404_main">
		<div class="terms_oth">
			<div class="error_404_image"><img width="1600" height="308" src="http://www.zapbuild.com/assets/404.png" alt="Whoops! Page Not Found"></div>
			<div class="error_404_content">
				<p class="page_looking">The page you're looking for can't be found.</p>
				<p class="sorry_for">We're sorry for the inconvenience caused to you.</p>
				<p class="try_following">You can try the following things:</p>
				<br><br>
				<div class="wrapper try_following_main">
					<ul class="try_following_points">
					<li class="col-sm-6 col-xs-12"><span>Go to Homepage <a title="Zapbuild Technologies Pvt.Ltd" href="http://www.zapbuild.com/">http://www.zapbuild.com/</a></span></li>
					<li class="col-sm-6 col-xs-12"><span>You can write to us on <a title="Zapbuild Support" href="mailto:support@zapbuild.com">support@zapbuild.com</a></span></li>
				</ul>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
