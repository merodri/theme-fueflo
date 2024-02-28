<?php get_header(); ?>
  <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
          <div class="container">
              <div class="row">
                <?php
                    while(have_posts()) {
                        the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();                 
                  } ?>
              </div>
          </div>
      </div>  
    </div>
    <!-- About End -->
    <?php block_template_part('2blocktemplate'); ?>
<?php get_footer(); ?>