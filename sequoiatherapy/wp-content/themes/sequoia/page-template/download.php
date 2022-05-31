<?php
/**
 * Template Name: Download Template
 */

get_header(); ?>
</div>

 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 
<section class="main-contact">

<div class="container">
    
    
    <div class="row">
        <div class="col-md-4">
        
            <div class="img wow fadeInLeft" data-wow-duration="4s">
                <img src="<?php the_post_thumbnail_url('full'); ?>">
            </div>
        </div>
        <div class="col-md-8 wow fadeInRight" data-wow-duration="4s">
             <a href="https://insitechstaging.com/demo/sequoiatherapy/wp-content/uploads/2022/05/Massage-intake-form.pdf" class="mydownlaodbtn" target="_blank" download>Download Intake Form Here</a>
             </br></br></br>
             <?php echo do_shortcode( '[contact-form-7 id="310" title="Download Form"]' ); ?>
             <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
        </div>
    </div>
</div>

</section>


<?php endwhile; wp_reset_query(); ?>

<div class="main-wrapper">
<?php get_footer(); ?>