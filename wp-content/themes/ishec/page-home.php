<?php get_header();?>
<link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css" type="text/css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css" type="text/css" rel="stylesheet" />

<?php
$GLOBALS['isehc_default_theme_options_values'] = isehc_get_options_value();
global $isehc_default_theme_options_values;
//$noOfVideoCount = get_theme_mod('isehc_youtube_video_count');	
?>
	   <section class="banner-section" id="about-us">
		 <!-- #introSlider3 -->
		 <div class="owl-carousel" id="introSlider">
			<?php 
				for($i=1;$i<=4;$i++){
					$sliderTitle = $isehc_default_theme_options_values['isehc_slider_title'.$i];
					$sliderUrl = $isehc_default_theme_options_values['isehc_slider_image_link'.$i];
				?>
			  <div class="item">
					<div class="hero-banner" style="background:url('<?php echo $sliderUrl ?>');">
						<div class="container">
							<div class="hero-banner-title">
								<h1>
									<span><?php echo $sliderTitle ?></span>
								</h1>	
								<img src="<?php echo get_template_directory_uri();?>/img/vasevi-trust-logo.png" class="hero-img">
								<p>
									SRI VASEVI TRUST is a non profitable non-governmental organization, it is a registered trust under the Indian Trust Act. The trust is located in Madurai district of Tamilnadu State, India. The main objective of the trust is to service the poor people and vulnerable.
								</p>
							</div>
						</div>
					</div>				
			   </div>
			   <?php
			   }
			?>
		</div>
		<div class="introcarousel-lft-nav"><i class="ion-chevron-left"></i></div>
		<!-- introslider Scroll Details left side arrow -->
		<div class="introcarousel-rgt-nav"><i class="ion-chevron-right"></i></div>
	</section>
	
	<section class="vision-mission">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ">
					<h2>VISION</h2>
					<p>
					“To serve the poor and undeserved community, to serve for the 
					development of women and children, to serve the needy people and 
					eradicate poverty.” </p>
				</div>
				<div class="col-md-6">
					<h2>MISSION</h2>
				<p>“To work for the poor in poverty alleviation through awareness, 
					campaigning, capacity building and empowering for women, men, 
					children and differently abled community”</p>
				</div>
			</div>
		</div>
	</section>
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="tt">OBJECTIVES</h2>
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri();?>/img/aboutus.jpg" class="about-img">
				</div>
				<div class="col-md-6">
					<ul class="list-icon">
					<li><i class="ion-help-buoy"></i>To do social and charitable services among the people for the 	development of the society.</li>
						<li><i class="ion-help-buoy"></i>To help the poor and needy student in their education.</li>
						<li><i class="ion-help-buoy"></i>To arrange free legal aid to the poor people.</li>
						<li><i class="ion-help-buoy"></i>To help the physically challenged, backward people, women, widow, orphans, destitute and unemployed youths in making employment opportunities, marriages and extending other supports.</li>
						<li><i class="ion-help-buoy"></i>To rehabilitate drug addicts and alcoholics and creating awareness in AIDS</li>
					</ul>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<ul class="list-icon">
						
						<li><i class="ion-help-buoy"></i>To establish schools, colleges, polytechnics, study centres, tuition centres,
						libraries and run educational institutions, workshops, training institutes, computer centres, vocational skill training centres, educational centres, hospitals, nursing homes, medical relief centres, siddha medicine and research centre dispensaries to poor women, physically challenged and needy public.
						</li>
						<li><i class="ion-help-buoy"></i>To run homes for mentally, physically challenged, aged persons, destitute and orphans.</li>
						<li><i class="ion-help-buoy"></i>To help the poor students in distributing aids, books, sports materials etc.</li>
						<li><i class="ion-help-buoy"></i>To afford relief to distress people in natural calamities.</li>
						
					</ul>
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri();?>/img/aboutus-img-01.jpg" class="about-img">
				</div>				
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri();?>/img/aboutus-img-02.jpg" class="about-img">
				</div>
				<div class="col-md-6">
					<ul class="list-icon">
						<li><i class="ion-help-buoy"></i>To give awareness to the women in education, health,human rights, family 
planning, child care, hygienic principles, sanitation, Environmental issues, 
Socio – Economic Problem.</li>	
						<li><i class="ion-help-buoy"></i>To impart skill training in various kinds of trades or small business</li>
						<li><i class="ion-help-buoy"></i>To start handicraft industries for women and running small scale industries , 
cooperatives and cottages by SHG members.</li>
						<li><i class="ion-help-buoy"></i>To develop the Dalits and Tribal people on various skills and motivate them to 
participate in various activities.</li>
						<li><i class="ion-help-buoy"></i>To provide, organize, promote and maintain charitable and benevolent 
services to all fisher folk old homeless of civil disturbance, riots, famine, 
earthquake, Tsunami, flood, fire and other natural disturbances..</li>
						<li><i class="ion-help-buoy"></i>To work for environmental protection, afforestation, tree plantation and waste land management.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-offset-md-2 text-center">
					
				</div>
			</div>
			
			<div class="row">	
				<div class="col-md-3 col-xs-6">
					<h2 class="tt">TARGET GROUP</h2>
					<p class="sb-tt">Poor women, children, men, unemployed youth, unskilled labours, tribals, dalits, 
physically and mentally challenged person and other vulnerable in India.</p>
<p>PROGRAMME CONDUCTED FOR THE YEAR 2020-2021</p>				
				</div>
				
				<div class="col-md-3 col-xs-6">
					<div class="systems-img">
						<a href="target-group">
							<img src="<?php echo get_template_directory_uri();?>/img/tree-planting-service-img.jpg" alt="TREE PLANTATION PROGRAMME">
							<span>TREE PLANTATION PROGRAMME</span>
						</a>
					</div>					
				</div>
				
				<div class="col-md-3 col-xs-6">
					<div class="systems-img">
						<a href="target-group">
							<img src="<?php echo get_template_directory_uri();?>/img/free-food-for-poor-people-img-01.jpg" alt="FREE FOOD FOR POOR PEOPLE">
							<span>FREE FOOD FOR POOR PEOPLE</span>
						</a>
					</div>					
				</div>				
			   		<div class="col-md-3 col-xs-6">
					<div class="systems-img">
						<a href="target-group" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/img/free-food-for-poor-people-img-02.jpg" alt="COVID RELIEF LIVELIHOOD PROGRAMME">
							<span>COVID RELIEF LIVELIHOOD PROGRAMME</span>
						</a>
					</div>					
				</div>			
				
            </div>
			
			<div class="row">			
				
				
				<div class="col-md-3 col-xs-6">
					<div class="systems-img">
						<a href="target-group">
							<img src="<?php echo get_template_directory_uri();?>/img/women_empowerment_programme.jpg" alt="WOMEN EMPOWERMENT PROGRAMME">
							<span>WOMEN EMPOWERMENT PROGRAMME</span>
						</a>
					</div>					
				</div>				
			   				
				<div class="col-md-3 col-xs-6">
					<div class="systems-img">
						<a href="target-group" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/img/free-tuition-for-poor-people-img.jpg" alt="FREE TUITION FOR POOR">
							<span>FREE TUITION FOR POOR</span>
						</a>
					</div>					
				</div>	
				
				<div class="col-md-6 col-xs-6">
					<div class="systems-img">
						<a href="target-group">
							<img src="<?php echo get_template_directory_uri();?>/img/financial-inclusion-programme-img.jpg" alt="FINANCIAL INCLUSION PROGRAMME">
							<span>FINANCIAL INCLUSION PROGRAMME</span>
						</a>
					</div>					
				</div>
            </div>
			
			
		</div>
	</section>
	<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js" ></script>
	<script src="<?php echo get_template_directory_uri();?>/js/slider-script.js" ></script>

<?php //get_sidebar();?>
<?php get_footer();?>