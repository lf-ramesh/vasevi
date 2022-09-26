<?php
/**
 * Template name: Gallery Page Template
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ishec
 * @since ishec 1.0
 */
 ?>
<?php get_header();?>
<link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css" type="text/css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css" type="text/css" rel="stylesheet" />


<?php
$GLOBALS['isehc_default_theme_options_values'] = isehc_get_options_value();
global $isehc_default_theme_options_values;

/*echo "<pre>";
print_r($isehc_default_theme_options_values);
echo "</pre>";
echo "<br><br><br>";
echo "<br>";*/

?>

	<section class="main-title-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="mb-null"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	
		   

	  </section>
	
	<section class="alter-page-bg">
					<!-- 
						<div class="container">
						
					<div class="row">
						<div class="col-md-12" >					
							
							 <div class="owl-carousel" id="gallerySlider">
						   
								<?php 
									for($idx=1;$idx<4;$idx++){
										
										$sliderUrl = $isehc_default_theme_options_values['isehc_gallery_slider_image_link'.$idx];
									?>						
								  <div class="item">
										<div class="hero-gallery-banner">								
											<div class="container">
												<div class="hero-gallery-img">
													<img src="<?php echo $sliderUrl ?>" alt="<?php echo $sliderUrl ?>" class="banner-img">
												</div>									
											</div>								
										</div>				
								   </div>
								   <?php
								   }						
								?>
							</div>
							
								<div class="introcarousel-lft-nav gl-lft-nav"><i class="ion-chevron-left"></i></div>
								<div class="introcarousel-rgt-nav gl-rgt-nav"><i class="ion-chevron-right"></i></div>
							
							
							</div>
				
					</div>
				</div>
			</div>
			-->
			
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="alter-page-content-area">
						<?php if(have_posts()):?><?php while(have_posts()): the_post()?><?php the_content();?><?php endwhile; ?><?php endif; ?>		
					</div>
				</div>				
			</div>
			
		</div>
	</section>

<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js" ></script>
<script src="<?php echo get_template_directory_uri();?>/js/gallery-slider-script.js" ></script>
<script>

</script>

<?php get_footer();?>