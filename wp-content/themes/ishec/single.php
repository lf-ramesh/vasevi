<?php get_header(); 
	
	//	print_r( get_the_category()[0]->slug ); exit();
    /*if(is_category('Facility')){
        // get_template_part('','facility.php');
    }else{
        get_template_part('','single.php');
    }
	*/
?>
<section class="main-title-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1 class="mb-null"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<section class="single-post-bg">
<div class="container">
    <div class="row">
		<?php if (get_the_category()[0]->slug=='facility'|| get_the_category()[0]->slug=='complete-project'){?>
			<div class="col-md-12">
		<?php }else {?>
			<div class="col-md-8">
		<?php }?>
			
            <?php if (have_posts()) : ?>
                 <?php while (have_posts()) : the_post(); ?>
                    <section class="fullpage-post-description">                       
                        <?php the_content('Read more' ); ?>
                    </section>
                    <section>
                        <?php // comments_template(); ?>
                    </section>
					<!--<div class="col-md-12">
						<?php //getPrevNext();  ?><?//getPrevNext();?>
					</div>-->
					
                <?php endwhile;?>
            <?php else : ?>
                <h2 class="post-title">No entries found</h2>
                <p>Not found anything that criteria. Try searching again or use the menu to navigate the site.</p>
                <?php get_search_form(); ?>
				
            <?php endif; ?>
			
			
			

        </div>

        <div class="col-md-4">
            <?php 
				if (get_the_category()[0]->slug=='facility'|| get_the_category()[0]->slug=='complete-project'){
					
				}else{
					get_sidebar(); 					
				}
			?>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</section>
<?php get_footer(); ?>

<?php
/*
function getPrevNext(){
	$pagelist = get_pages('sort_column=menu_order&sort_order=asc');
	$pages = array();
	foreach ($pagelist as $page) {
	   $pages[] += $page->ID;
	}

	$current = array_search(get_the_ID(), $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];
	
	echo '<div class="navigation">';
	
	if (!empty($prevID)) {
		echo '<div class="alignleft">';
		echo '<a href="';
		echo get_permalink($prevID);
		echo '"';
		echo 'title="';
		echo get_the_title($prevID); 
		echo'">Previous</a>';
		echo "</div>";
	}
	if (!empty($nextID)) {
		echo '<div class="alignright">';
		echo '<a href="';
		echo get_permalink($nextID);
		echo '"';
		echo 'title="';
		echo get_the_title($nextID); 
		echo'">Next</a>';
		echo "</div>";		
	}
}	*/
?>