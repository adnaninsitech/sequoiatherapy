<?php
/**
 * Template Name: Reviews Template
 */

get_header(); ?>
</div>

<section class="main-review">
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="rslider">
  
<?php $index_query = new WP_Query(array( 'post_type' => 'testimonial' , 'posts_per_page' => '-1' )); ?>

      <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
      
      <div class="box">
      
        <div class="row">
            <div class="col-md-8"> <?php wpautop(the_content()); ?><?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?></div>
            <div class="col-md-4 text-center">
                <img src="<?php the_post_thumbnail_url('full'); ?>" class="cimg">
                 <h2><?php the_title(); ?></h2>
                 <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/star.png">
            </div>
        </div>
        
      </div>
      
      
      
      <?php endwhile; wp_reset_query(); ?>

      </div>
      </div>
      
      <div class="col-md-12">
        <div class="sbtn">
            <a href="javascript:;" class="review-left"><img src="<?php bloginfo('template_directory'); ?>/images/ala.png"></a>
            <a href="javascript:;" class="review-right"><img src="<?php bloginfo('template_directory'); ?>/images/ara.png"></a>
        </div>
      <div>
    </div>
</div>
</section>

<div class="main-wrapper">
<?php get_footer(); ?>