<?php
/**
 * Template name: Blog Template
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
			<div class="col-md-8">
				<h1 class="mb-null"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
	
	<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
			'posts_per_page' 	=> 6, 
			'paged' 			=> $paged,
			'showposts' 		=> 6,
			'post_type' 		=> 'post',						
			'post_status' 		=>  array( 'publish')			
			);
	query_posts($args); 	
	?>
	<section class="list-post-bg">
	<div class="container">
	<?php if(have_posts()):?>	
		
		<div class="row">
		<div class="col-md-8">
		<?php while(have_posts()): the_post();?>				
			<div class="list-post">
				<h2 class="post-title">
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</h2>				
				<div class="post-description"><?php the_excerpt(); ?></div>
				<!--<span class="post-category">Author: <?php the_author(); ?></span>-->
				<span class="post-category">Date: <?php the_date(); ?> </span>
				<span class="post-category">Category: <?php the_category(', '); ?></span>
			</div>
			  
			  
			  
			
		<?php endwhile; ?>	
		</div>
		<div class="col-md-4">
			<?php get_sidebar();?>	
		</div>
	
	<?php else : ?>
		<?php echo "<div class='col-md-12 text-center'>"; ?>
		<?php echo "No Projets found"; ?>
		<?php echo "</div>"; ?>
	<!-- No posts found -->
	<?php endif; ?>		
	<?php
					   global $wp_query;

					   $big = 999999999; // need an unlikely integer

					   echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'type' => 'list',
						'prev_text'    => __('«'),
						'next_text'    => __('»'),
						'end_size'     => 1,
						'mid_size'     => 3,
					   ) );
					   ?>
	</div>
		
		</div>
		</section>
	

<?php get_footer();?>