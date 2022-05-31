<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e6955d923857ae"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/page-template/download.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/page-template/download_2022-05-25-20.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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