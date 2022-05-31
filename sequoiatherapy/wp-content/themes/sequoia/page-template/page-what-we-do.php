<?php
/**
 * Template Name: What we do Template
 */

get_header(); ?>
</div>


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section class="main-what">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInDown" data-wow-duration="4s">
                <?php wpautop(the_content()); ?>
                <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; wp_reset_query(); ?>

<?php $index_query = new WP_Query(array( 'post_type' => 'what_we_do' , 'posts_per_page' => '-1' , 'order' => 'asc')); ?>

      <?php $i=0; while ($index_query->have_posts()) : $index_query->the_post();
      
       if ($i % 2 == 0)
  {
  
  ?>
      
<section class="what-list">
 <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="4s">
                <img src="<?php the_post_thumbnail_url('full'); ?>" class="mimg">
            </div>
            
            <div class="col-md-6 pr wow fadeInRight" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" >
                <?php wpautop(the_content()); ?>
                <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12 wow fadeInDown" data-wow-duration="4s">
                <?php echo the_field('bottom_text', get_the_ID()); ?>
                <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
            </div>
        </div>
 
     </br></br></br></br>
        
    </div>
</section>

<?php }else{ ?>

<section class="what-list">
 <div class="container">
        <div class="row">
        
        <div class="col-md-6 wh wow fadeInLeft" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" >
                <?php wpautop(the_content()); ?>
                <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
            </div>
            
            <div class="col-md-6 pr  wow fadeInRight" data-wow-duration="4s">
                <img src="<?php the_post_thumbnail_url('full'); ?>" class="mimg">
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12  wow fadeInDown" data-wow-duration="4s">
                <?php echo the_field('bottom_text', get_the_ID()); ?>
                <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
            </div>
        </div>
        
        </br></br></br></br>
 
   
        
    </div>
</section>

<?php }  $i++; endwhile; wp_reset_query(); ?>


<section class="what-list">
 <div class="container">
        
 
   <?php $index_query1 = new WP_Query(array( 'post_type' => 'page' , 'page_id' => '71')); ?>

<?php while ($index_query1->have_posts()) : $index_query1->the_post(); ?>

        <div class="row">
         <div class="col-md-12">
            
            <div class="lbottom">
                <div class="row">
                  <div class="col-md-3"><h1 class="wow fadeInDown" data-wow-duration="4s"><?php the_title(); ?></h1></div>
                  <div class="col-md-6"><div class="wow fadeInDown" data-wow-duration="4s"><?php wpautop(the_content()); ?><?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?></div></div>
                  <div class="col-md-3"><a href="<?php echo get_site_url(); ?>/contact-us/" class="wow bounceIn" data-wow-duration="4s">Contact Us</a></div>
                </div>
            </div>
         </div>
        </div>
        
        <?php endwhile; wp_reset_query(); ?>
        
    </div>
</section>

<br>

<div class="main-wrapper">
<?php get_footer(); ?>