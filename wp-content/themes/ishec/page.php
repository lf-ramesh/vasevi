<?php get_header(); ?>

<?php if (have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>       
        <?php the_content('Read More...'); ?>
        <?php edit_post_link('edit', '<p>', '</p>'); ?>
    <?php endwhile;?>
<?php else : ?>
    <div class="container">
        <p>No entries.</p>
    </div>
<?php endif; ?>

<?php get_footer(); ?>