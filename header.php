<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]><html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]><html> <![endif]-->
<!--[if !IE]><!--> <html><!--<![endif]-->
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php 
//~ $options = get_option('rails_theme_options');
//~ if($options && !empty($options['url'])){
	//~ define("SITE", $options['url']);	
//~ }
//~ else{
	//~ define("SITE", "");	
//~ }

$scripts = file_get_contents(SITE."/culture/headerculture"); 
$scripts = str_replace('href="/', 'href="' . SITE . "/", $scripts);
$scripts = str_replace('<link rel="canonical" href="http://www.zapbuild.com/culture/headerculture" />', '', $scripts);
echo $scripts = str_replace('src="/', 'src="' . SITE . "/", $scripts); ?>
<?php  wp_head(); ?>
</head>
<body>
 <script src="<?php bloginfo('template_url')?>/js/jquery.bxslider.min.js"></script>
 <script src="<?php bloginfo('template_url')?>/js/custom.js"></script>
<?php $header = file_get_contents(SITE."/culture/header");
$header = str_replace('href="/', 'href="' . SITE . "/", $header);
echo $header = str_replace('src="/', 'src="' . SITE . "/", $header); ?>
<div class="clearfix"></div>
	<div id="content">
		<!-- section class="slideshow" id="story-intel" anim-pause="1000"></section -->
			<div class="webdesign_artwork blog_banner">
				<div class="wrapper">
					<div class="services_banner">
						<?php if( get_post_type() == 'post' ) { ?>
						<h1><?php echo get_the_title(); ?></h1>
						<?php } else { ?>
						<h1>Bits N Tricks</h1>
						<p>A platform to contribute to the best of our knowledge so someone else can be benefited.</p>
						<?php } ?>
						<div class="breadcrumb_main">
							<div class="breadcrumb_main">
								<ul class="breadcrumb">
									<li><a href="<?php echo SITE; ?>" title="Home">Home</a></li>
									<li><span>Blogs</span></li>
									<li class="active"><span>Bits N Tricks</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
<?php if(!is_404()) { ?>
			<section id="second_section" class="sections section-2">
				<div class="container-fuild">
					<div class="wrapper">
<?php } ?>
