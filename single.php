<?php
get_template_part('postheader');
?>

<?php if( is_single() || is_page() ) : ?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <?php
    while( have_posts() ) : the_post();
        the_content();
    
    ?>
</div>




<?php
    endwhile;?>


<?php endif;?>



<?php
get_footer();
?>