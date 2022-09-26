<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>
	 <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title('');
    }?>
	</title>
	
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri();?>/css/ionicons.min.css" type="text/css" rel="stylesheet" />
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen">	
    <link href="<?php echo get_template_directory_uri();?>/css/custom-style.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri();?>/css/responsive-style.css" type="text/css" rel="stylesheet" />
	
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>	
	<?php wp_head();?>
	
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.4.min.js" ></script>
	<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js" ></script>
	
	<script>
		$(document).ready(function() {
			$( "#mbNav" ).click(function() {
			  $( ".header-menu" ).toggleClass( "show-menu");
			  $( ".menu-icon").toggleClass( "ion-navicon-round ion-close");
			});
        });
	</script>
	
	
</head>
<body >
	<header class="main-header">   
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
						<div class="header-info">
						<p class="sb-tt">Reg.No. 90/2020 Reg. Office : 2/418, P.R.C Colony, Kovilpappakudi  Panchayath, Podhumbu Post, Madurai -625018.</p>
						<a class="em-tt" href="mailto:srivasevitrust@gmail.com">srivasevitrust@gmail.com</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">				
					<div class="header-logo">        
						<a href="<?php bloginfo('home'); ?>">						
							<img src="<?php bloginfo('home'); ?>/wp-content/themes/ishec/img/sri-vasevi-trust-logo.png" width="70px" class="float-left" alt="">
							<span>SRI VASEVI TRUST </span>							
						</a>
					</div>  

						<div class="humburger-menu" id="mbNav">
							<i class="ion-navicon-round menu-icon"></i>
						</div>
					<nav class="header-menu">
						
						
						<?php
							wp_nav_menu( array(
								'menu'              => 'primary',
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => '',
								'container_class'   => '',                    
								)
							);
						?>
						
					</nav>
				</div>
			</div>
		</div>
    </header>