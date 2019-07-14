<?php if(!is_404()) { ?>
				</div>
			</div>
		</section>
<?php } ?>
	<div class="clearfix"></div>
</div><!--  id content-->
<?php 
$footer = file_get_contents(SITE."/culture/footer"); 
$footer = str_replace('href="/', 'href="' . SITE . "/", $footer);
echo $footer = str_replace('src="/', 'src="' . SITE . "/", $footer); 
//echo "<pre>";
$plugin_active = get_option( 'active_plugins' ) ;
 //print_r( get_option( 'active_plugins' ));
 if(in_array('wonderplugin-carousel/wonderplugin-carousel.php', $plugin_active)) echo "hurray!";
?>
<?php wp_footer(); ?>

		<!-- Start :: Google Code for Remarketing Tag -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 971658869;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/971658869/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
		<!-- End :: Google Code for Remarketing Tag -->

    </body>
</html>

