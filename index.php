<?php
get_header();
?>

    <div class="container">

      <div class="row">

  <?php
    if(have_posts()):
      echo"ma posty";?>

    <?php
    while( have_posts() ) : the_post();

      
    
    ?>

        <div class="col-md-4">
          <div class="card">
            <?php
          if(has_post_thumbnail()):?>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
          <?php else:?>  <img src="<?php echo bloginfo('template_url')?>/img/a.jpg" class="card-img-top" alt="...">
          <?php endif ?>
            
            
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt();  ?></p>
              <a href="<?php  the_permalink(); ?>" class="btn btn-primary">wejdz</a>
            </div>
          </div>
        </div>

    <?php
    endwhile;
    endif;?>


  </div>


      
    </div>

<?php
get_footer();
?>    