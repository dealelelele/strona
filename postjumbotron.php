<div class="jumbotron">
        <h1 class="display-4">
          <?php
          the_title();
          ?>
        </h1>
        <p class="lead">
          <?php
          bloginfo('description');
          ?>
        </p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="<?php bloginfo("url");?> "role="button">strona glowna </a>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
    </div>