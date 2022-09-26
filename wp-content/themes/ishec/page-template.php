<?php
/**
 * Template name: Research Page Template
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ishec
 * @since ishec 1.0
 */
 ?>
<?php get_header();?>
	<section class="main-title-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="mb-null"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section class="alter-page-bg">
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

<script src="<?php echo get_template_directory_uri();?>/js/theia-sticky-sidebar.js" ></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.easings.min.js" ></script>
<script>
    jQuery('.cd-stickysidebar').theiaStickySidebar({
            additionalMarginTop: 60
        });
		
			$(document).on('click', 'a.page-scroll', function (event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top - 50
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
	
	
	$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();
				
		$('.page-section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
						$('.sidebar-nav a.active').removeClass('active');
						$('.sidebar-nav a').eq(i).addClass('active');
				}
		});
	}).scroll();


</script>
<?php get_footer();?>