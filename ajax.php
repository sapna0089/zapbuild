<?php 
/*
 * template name: ajax loader
 * 
 */
?>
<?php get_header(); ?>

    <div class="col-md-12 content">
        <div class = "inner-box content no-right-margin darkviolet">
            <script type="text/javascript">
            jQuery(document).ready(function($) {
                var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
               function cvf_load_all_posts(page){
                    $(".cvf_pag_loading").fadeIn().css('background','#ccc');
                    // Data to receive from our server
                    // the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
                    var data = {
                        page: page,
                        action: "demo-pagination-load-posts"
                    };
                    // Send the data
                    $.post(ajaxurl, data, function(response) {
                        // If successful Append the data into our html container
                        $(".cvf_universal_container").html(response);
                        // End the transition
                        $(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
                    });
                }
               
                // Load page 1 as the default
                cvf_load_all_posts(1);
               
                // Handle the clicks
                $('.cvf_universal_container .cvf-universal-pagination li.active').on('click',function(){
                    var page = $(this).attr('p');
                    cvf_load_all_posts(page);
                   
                });
                           
            });
            </script>
            <div class = "cvf_pag_loading">
                <div class = "cvf_universal_container">
                    <div class="cvf-universal-content"></div>
                </div>
            </div>
           
        </div>     
    </div>
   
<?php get_footer(); ?>
