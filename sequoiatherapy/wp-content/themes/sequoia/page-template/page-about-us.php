<?php
/**
 * Template Name: About Template
 */

get_header(); ?>
</div>


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section class="home-who about-main">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
         <div class="wow fadeInLeft" data-wow-duration="4s">
        <?php wpautop(the_content()); ?>
        <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
      </div>

      </div>
      <div class="col-md-6"> <div class="img"><img src="<?php the_post_thumbnail_url('full'); ?>" class="rimg wow fadeInRight" data-wow-duration="4s"></div></div>
    </div>
  </div>
</section>

<?php endwhile; wp_reset_query(); ?>

<?php $index_query = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '19')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

<section class="home-business">
  <div class="container">
    <div class="row">

            <?php

// Check rows exists.
if( have_rows('list') ):

    // Loop through rows.
   $x=1; while( have_rows('list') ) : the_row();

        // Load sub field value.
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        // Do something...
        ?>

      <div class="col-md-4 nopadding">
         <div class="box">
          <div class="icon wow fadeIn" data-wow-duration="4s"><img src="<?php echo $icon; ?>"></div>
          <div class="content">
            <h2 class="wow fadeInDown" data-wow-duration="2s"><?php echo $title; ?></h2>
            <div class="wow fadeInUp" data-wow-duration="2s">
            <?php echo $description; ?>
            </div>
          </div>
        </div> 
         <div class="hbox">
          <div class="title"> <h2><?php echo $title; ?></h2></div>
          <div class="icon"><img src="<?php echo $icon; ?>"></div>
          <div class="content"><?php echo $description; ?></div>
          <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
        </div> 
      </div>

              <?php 

    // End loop.
   $x++; endwhile;

// No value.
else :
    // Do something...
endif;
?>


    </div>
  </div>
</section>
 <?php endwhile; wp_reset_query(); ?>
 
 
  <?php if ( have_posts() ) while ( have_posts() ) : the_post();
  
  // Check rows exists.
if( have_rows('bottom_content') ):

    // Loop through rows.
   $x=1; while( have_rows('bottom_content') ) : the_row();

        // Load sub field value.
        $image = get_sub_field('image');
        $content = get_sub_field('content');
        // Do something...
        if($x==1){
    ?>
    
    <section class="home-who moreabout">
  <div class="container">
    <div class="row">
      <div class="col-md-6"> <div class="img"><img src="<?php echo $image; ?>" class="rimg wow fadeInLeft" data-wow-duration="4s"></div></div>
    
      <div class="col-md-6">
         <div class="rcont wow fadeInRight" data-wow-duration="4s">
        <?php echo $content; ?>
        <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
          <a href="<?php echo get_site_url(); ?>/contact-us/" class="wow bounceIn" data-wow-duration="4s">Contact Us</a>
      </div>

      </div>
    </div>
  </div>
</section>
    
    <?php
        }
    // End loop.
  $x++;  endwhile;

// No value.
else :
    // Do something...
endif;
?>



<?php endwhile; wp_reset_query(); ?>

<div class="main-wrapper">
<?php get_footer(); ?>