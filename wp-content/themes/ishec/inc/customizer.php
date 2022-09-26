<?php

/**

 * Free Blog Theme Customizer

 *

 * @package isehc

 */

if ( !function_exists('isehc_default_theme_options_values') ) :

    function isehc_default_theme_options_values() {



        $default_theme_options = array(


        	/*Top Header Section Default Value*/

        	'isehc_slider_title1'=>'Indian Solar Energy Harnessing' ,						
			'isehc_slider_image_link1' =>'',
        	'isehc_slider_title2'=>'Indian Solar Energy Harnessing' ,						
			'isehc_slider_image_link2' =>'',
        	'isehc_slider_title3'=>'Indian Solar Energy Harnessing' ,						
			'isehc_slider_image_link3' =>'',
        	'isehc_gallery_slider_title1'=>'Indian Solar Energy Harnessing' ,						
			'isehc_gallery_slider_image_link1' =>'',
        	'isehc_gallery_slider_title2'=>'Indian Solar Energy Harnessing' ,						
			'isehc_gallery_slider_image_link2' =>'',
        	'isehc_gallery_slider_title3'=>'Indian Solar Energy Harnessing' ,						
			'isehc_gallery_slider_image_link3' =>'',			
			
        
        );

        return apply_filters( 'isehc_default_theme_options_values', $default_theme_options );

    }

endif;



/**

 *  Free Blog Theme Options and Settings

 *

 * @since Free Blog 1.0.0

 *

 * @param null

 * @return array isehc_get_options_value

 *

 */

if ( !function_exists('isehc_get_options_value') ) :

    function isehc_get_options_value() {



        $isehc_default_theme_options_values = isehc_default_theme_options_values();
    

        $isehc_get_options_value = get_theme_mod( 'isehc_options');

        if( is_array( $isehc_get_options_value )){

            return array_merge( $isehc_default_theme_options_values, $isehc_get_options_value );

        }

        else{

            return $isehc_default_theme_options_values;

        }



    }

endif;



/**

 * Add postMessage support for site title and description for the Theme Customizer.

 *

 * @param WP_Customize_Manager $wp_customize Theme Customizer object.

 */

function isehc_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';

	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';



	if ( isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->selective_refresh->add_partial( 'blogname', array(

			'selector'        => '.site-title a',

			'render_callback' => 'isehc_customize_partial_blogname',

		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(

			'selector'        => '.site-description',

			'render_callback' => 'isehc_customize_partial_blogdescription',

		) );

	}



		$default = isehc_default_theme_options_values();



		/* Theme Options Panel */

	    $wp_customize->add_panel( 'isehc_panel', array(
	        'priority' => 30,
	        'capability' => 'edit_theme_options',
	        'title' => __( 'Theme Options', 'isehc' ),
	    ) );
		
		
		
	    /*Slider Options*/
	     $wp_customize->add_section( 'isehc_slider_section', array(
    	    'priority'       => 20,
    	    'capability'     => 'edit_theme_options',
    	    'theme_supports' => '',
    	    'title'          => __( 'Slider Section', 'isehc' ),
    	    'panel' 		 => 'isehc_panel',

	    ) );
		
	    /*Gallery Slider Options*/
		
	     $wp_customize->add_section( 'isehc_gallery_slider_section', array(
    	    'priority'       => 20,
    	    'capability'     => 'edit_theme_options',
    	    'theme_supports' => '',
    	    'title'          => __( 'Gallery Slider Section', 'isehc' ),
    	    'panel' 		 => 'isehc_panel',

	    ) );
		
	    /*Gallery Slider Options*/
		
	     $wp_customize->add_section( 'isehc_youtube_video_section', array(
    	    'priority'       => 20,
    	    'capability'     => 'edit_theme_options',
    	    'theme_supports' => '',
    	    'title'          => __( 'Youtube Video Section', 'isehc' ),
    	    'panel' 		 => 'isehc_panel',

		));
		
		$wp_customize->add_setting( 'isehc_youtube_video_count', array(
					'capability'        => 'edit_theme_options',
					'transport' => 'refresh',
					'default'           =>'1',
					/*'sanitize_callback' => 'isehc_sanitize_checkbox'*/	
			));

		$wp_customize->add_control( 'isehc_youtube_video_count', array(
				'label'     => __( 'No.of Youtube video', 'isehc' ),    	    
				'section'   => 'isehc_youtube_video_section',
				'settings'  => 'isehc_youtube_video_count',
				'type'      => 'number',
				'priority'  => 1,
		));
		
		$videoCount = get_theme_mod('isehc_youtube_video_count');		
		
		for($videoIdx=1; $videoIdx<=$videoCount; $videoIdx++){
			
			$wp_customize->add_setting( 'isehc_options[isehc_youtube_video_title'.$videoIdx.']', array(
					'capability'        => 'edit_theme_options',
					'transport' => 'refresh',
					'default'           => $default['isehc_youtube_video_title'.$videoIdx],
					/*'sanitize_callback' => 'isehc_sanitize_checkbox'*/	
			));

			$wp_customize->add_control( 'isehc_options[isehc_youtube_video_title'.$videoIdx.']', array(
					'label'     => __( $videoIdx.'.Youtube Video Title', 'isehc' ),    	    
					'section'   => 'isehc_youtube_video_section',
					'settings'  => 'isehc_options[isehc_youtube_video_title'.$videoIdx.']',
					'type'      => 'text',
					'priority'  => 10+$videoIdx,
			));
						
			//isehc_slider_image_link2
			
			
			$wp_customize->add_setting( 'isehc_options[isehc_youtube_video_link'.$videoIdx.']', array(
					'capability'        => 'edit_theme_options',
					'transport' => 'refresh',
					'default'           => $default['isehc_youtube_video_link'.$videoIdx],
					/*'sanitize_callback' => 'isehc_sanitize_checkbox'*/	
			));

			$wp_customize->add_control( 'isehc_options[isehc_youtube_video_link'.$videoIdx.']', array(
					'label'     => __( $videoIdx.'.Youtube Video Link', 'isehc' ),    	    
					'section'   => 'isehc_youtube_video_section',
					'settings'  => 'isehc_options[isehc_youtube_video_link'.$videoIdx.']',
					'type'      => 'text',
					'priority'  => 10+$videoIdx,
			));
			
			$wp_customize->add_setting('isehc_options[isehc_youtube_video_image_link'.$videoIdx.']', array(
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				/*'sanitize_callback' => 'absint'*/
			));
			
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'isehc_options[isehc_youtube_video_image_link'.$videoIdx.']', array(
				'section' => 'isehc_youtube_video_section',
				'label' => $videoIdx.'.Youtube Video Thumbnail Image',				
				'priority'  => 10+$videoIdx,			
			)));
		
		
		}
		
		
		// Slider Start
		
		for($idx=1; $idx<=4; $idx++){
			
			//isehc_slider_title
			
			$wp_customize->add_setting( 'isehc_options[isehc_slider_title'.$idx.']', array(
				'capability'        => 'edit_theme_options',
				'transport' => 'refresh',
				'default'           => $default['isehc_slider_title'.$idx],
				/*'sanitize_callback' => 'isehc_sanitize_checkbox'*/	
			) );

			$wp_customize->add_control( 'isehc_options[isehc_slider_title'.$idx.']', array(
				'label'     => __( $idx.'.Slider Title', 'isehc' ),    	    
				'section'   => 'isehc_slider_section',
				'settings'  => 'isehc_options[isehc_slider_title'.$idx.']',
				'type'      => 'text',
				'priority'  => $idx,
			) );
			
			
			
			//isehc_slider_image_link2
			
			$wp_customize->add_setting('isehc_options[isehc_slider_image_link'.$idx.']', array(
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				/*'sanitize_callback' => 'absint'*/
			));
			
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'isehc_options[isehc_slider_image_link'.$idx.']', array(
				'section' => 'isehc_slider_section',
				'label' => $idx.'.Slider Image',
				'priority'  => $idx+1,			
			)));
			
			$wp_customize->add_setting( 'isehc_options[isehc_gallery_slider_title'.$idx.']', array(
				'capability'        => 'edit_theme_options',
				'transport' => 'refresh',
				'default'           => $default['isehc_gallery_slider_title'.$idx],
				/*'sanitize_callback' => 'isehc_sanitize_checkbox'*/	
			) );

			$wp_customize->add_control( 'isehc_options[isehc_gallery_slider_title'.$idx.']', array(
				'label'     => __( $idx.'.Gallery Slider Title', 'isehc' ),    	    
				'section'   => 'isehc_gallery_slider_section',
				'settings'  => 'isehc_options[isehc_gallery_slider_title'.$idx.']',
				'type'      => 'text',
				'priority'  => $idx,
			) );
			
			
			
			//isehc_slider_image_link2
			
			$wp_customize->add_setting('isehc_options[isehc_gallery_slider_image_link'.$idx.']', array(
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				/*'sanitize_callback' => 'absint'*/
			));
			
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'isehc_options[isehc_gallery_slider_image_link'.$idx.']', array(
				'section' => 'isehc_gallery_slider_section',
				'label' => $idx.'.Gallery Slider Image',
				'priority'  => $idx+1,			
			)));			
		}
		
		//for($idx=1; $idx<=3; $idx++){
			
			//isehc_slider_title
			

		//}		
		
		// Slider End 	
		
	
		

		

}

add_action( 'customize_register', 'isehc_customize_register' );



/**

 * Render the site title for the selective refresh partial.

 *

 * @return void

 */

function isehc_customize_partial_blogname() {

	bloginfo( 'name' );

}



/**

 * Render the site tagline for the selective refresh partial.

 *

 * @return void

 */

function isehc_customize_partial_blogdescription() {

	bloginfo( 'description' );

}



