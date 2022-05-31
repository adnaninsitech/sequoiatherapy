<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>
</div>

<?php $index_query = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '21')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

<section class="homebox">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-5 nopadding">
      <div class="box1" style="background-image: url(<?php echo the_field('image1', get_the_ID()); ?>);">
        <h2 class="wow fadeInDown" data-wow-duration="4s"><?php the_title(); ?></h2>
      </div>
    </div>
    <div class="col-md-6 nopadding">
      <div class="box2" style="background-image: url(<?php echo the_field('image2', get_the_ID()); ?>);">
        <div class="wow fadeInDown" data-wow-duration="4s">
        <?php wpautop(the_content()); ?>
        <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
      </div>
      </div>
    </div>
  </div>
  </div>
</section>


  <?php endwhile; wp_reset_query(); ?>

<?php $index_query = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '30')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

<section class="home-what">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" class="wow bounceInLeft" data-wow-duration="4s">
        <h1>What <span>we</span> DO</h1>
      </div>
    </div>
    <div class="row">
      
      <?php

// Check rows exists.
if( have_rows('list') ):

    // Loop through rows.
    while( have_rows('list') ) : the_row();

        // Load sub field value.
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        // Do something...
        ?>

      <div class="col-md-4">
        <div class="box">
          <div class="image" class="wow fadeIn" data-wow-duration="4s">
            <img src="<?php echo $image; ?>">
          </div>
          <div class="content">
            <h2 class="wow fadeInDown" data-wow-duration="2s"><?php echo $title; ?></h2>
            <div class="wow fadeInUp" data-wow-duration="2s">
            <?php echo $description; ?>
            <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
          </div>
          </div>
        </div>
      </div>


        <?php 

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

    </div>
      <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?php echo get_site_url(); ?>/what-we-do/" class="wow bounceIn" data-wow-duration="4s">View More</a>
      </div>
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
            <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
            </div>
          </div>
        </div> 
         <div class="hbox">
          <div class="title"> <h2><?php echo $title; ?></h2></div>
          <div class="icon"><img src="<?php echo $icon; ?>"></div>
          <div class="content"><?php echo $description; ?><?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?></div>
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


<?php $index_query = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '51')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

<section class="home-who">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
         <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" class="wow bounceInLeft" data-wow-duration="4s">
         <div class="wow fadeInLeft" data-wow-duration="4s">
        <?php wpautop(the_content()); ?>
        <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
      </div>
        <a href="<?php echo get_site_url(); ?>/about-us/" class="wow bounceIn" data-wow-duration="4s">read More</a>
        <!--<a href="https://www.schedulicity.com/scheduling/SMT24R" title="Online scheduling" target="_blank" class="scbtn"><img src="//cdn.schedulicity.com/images/user-widget-buttons/schedule-btn-dark-med-v2.svg" alt="Online scheduling" title="Online scheduling" border="0" /></a>
      -->
      <a href="https://www.schedulicity.com/scheduling/SMT24R" class="wow bounceIn" data-wow-duration="4s" id="sch" target="_blank">Schedule Now</a>   
      
      </div>
      <div class="col-md-5"> <div class="img"><img src="<?php the_post_thumbnail_url('full'); ?>" class="rimg wow fadeInRight" data-wow-duration="4s"></div></div>
    </div>
  </div>
</section>


 <?php endwhile; wp_reset_query(); ?>


<section class="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" class="wow bounceInDown" data-wow-duration="4s">
        <h1><span>Our</span> Testimonials</h1>
      </div>
    </div>

    <div class="row">
      <div class="test-slider wow fadeIn" data-wow-duration="4s">
       
       <?php $index_query = new WP_Query(array( 'post_type' => 'testimonial' , 'posts_per_page' => '-1')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

        <div class="col-md-12">
          <div class="conent text-center">
                <?php wpautop(the_content()); ?>
                <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
                <h6><?php the_title(); ?></h6>
                <img src="<?php bloginfo('template_directory'); ?>/images/star.png">
          </div>
        </div>

<?php endwhile; wp_reset_query(); ?>

      </div>

      <div class="col-md-12 text-center slbtn">
        <a href="javascript:;" class="part-left"> <img src="<?php bloginfo('template_directory'); ?>/images/la.png"></a>
        <a href="javascript:;" class="part-right"> <img src="<?php bloginfo('template_directory'); ?>/images/ra.png"></a>
      </div>
    </div>
  </div>
</section>


<section class="home-faq">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>FAQ's</h1>
      </div>
    </div>
    <div class="row">

      <?php $index_query = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '60')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

            <?php

// Check rows exists.
if( have_rows('list') ):

    // Loop through rows.
    while( have_rows('list') ) : the_row();

        // Load sub field value.
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        // Do something...
        ?>

      <div class="col-md-4 text-center">
        <a href="<?php echo get_site_url(); ?>/faqs"><div class="box">
          <div class="image wow fadeIn" data-wow-duration="4s" ><img src="<?php echo $image ?>"></div>
          <div class="content">
            <h2 class="wow fadeInDown" data-wow-duration="2s"><?php echo $title ?></h2>
            <div class="wow fadeInUp" data-wow-duration="2s">
            <?php echo $description ?>
            <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
          </div>
          </div>
        </div></a>
      </div>


              <?php 

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>


      <?php endwhile; wp_reset_query(); ?>

    </div>
  </div>
</section>


  <?php $index_query = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '71')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

<section class="hfoot">
  <div class="container">
    <div class="row">
      <div class="col-md-3"><h1 class="wow fadeInDown" data-wow-duration="4s"><?php the_title(); ?></h1></div>
      <div class="col-md-6"><div class="wow fadeInDown" data-wow-duration="4s"><?php wpautop(the_content()); ?><?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?></div></div>
      <div class="col-md-3"><a href="<?php echo get_site_url(); ?>/contact-us/" class="wow bounceIn" data-wow-duration="4s">Contact Us</a></div>
    </div>
  </div>
</section>

      <?php endwhile; wp_reset_query(); ?>

<div class="main-wrapper">
<?php get_footer(); ?>