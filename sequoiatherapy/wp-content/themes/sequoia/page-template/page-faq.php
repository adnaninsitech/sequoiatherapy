<?php
/**
 * Template Name: Faq Template
 */

get_header(); ?>
</div>

 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<section class="faq-main">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" class="wow bounceInLeft" data-wow-duration="4s">
        <h1 class="wow fadeInDown" data-wow-duration="4s">FREQUENTLY <span>ASKED</span> QUESTIONS </h1>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-12">
            <h6 class="wow fadeInLeft" data-wow-duration="4s">Brose help topics</h6>
            
            <ul>
            <?php
            
            if( have_rows('questions_&_answers') ):

    // Loop through rows.
   $x=1; while( have_rows('questions_&_answers') ) : the_row();

        // Load sub field value.
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        // Do something...
        ?>
        
             <li class="wow fadeInDown" data-wow-duration="4s">
             <a href="javascript:;" rel="<?php echo $x; ?>"><?php echo $question; ?> <i class="fa fa-angle-down fa<?php echo $x; ?>" aria-hidden="true"></i></a>
             <div class="ans" id="ans<?php echo $x; ?>">
             <?php echo $answer; ?>
             </div>
             <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
             </li>
        <?php

    // End loop.
   $x++; endwhile;

// No value.
else :
    // Do something...
endif;

?>
           
            </ul>
        </div>
    </div>
    
</div>
</section>
<?php endwhile; wp_reset_query(); ?>

  <?php $index_query = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '71')); ?>

<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

<section class="hfoot">
  <div class="container">
    <div class="row">
      <div class="col-md-3"><h1 class="wow fadeInDown" data-wow-duration="4s"><?php the_title(); ?></h1></div>
      <div class="col-md-6"><div class="wow fadeInDown" data-wow-duration="4s"><?php wpautop(the_content()); ?></div></div>
      <div class="col-md-3"><a href="javascript:;" class="wow bounceIn" data-wow-duration="4s">Contact Us</a></div>
    </div>
  </div>
</section>

      <?php endwhile; wp_reset_query(); ?>
<div class="main-wrapper">
<?php get_footer(); ?>