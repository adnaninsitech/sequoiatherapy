<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e6954c941c2265"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/page-template/page-contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/page-template/page-contact_2022-02-14-18.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Contact Template
 */

get_header(); ?>
</div>

 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 
<section class="main-contact">

<div class="container">
    <div class="row">
        <div class="col-md-12 wow fadeInLeft" data-wow-duration="4s">
         <?php wpautop(the_content()); ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
        <div class="box wow fadeInLeft" data-wow-duration="4s">
            <div class="row">
                <div class="col-md-3"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/map.jpg"></div>
                <div class="col-md-9">
                    <h6>Address</h6>
                    <a href="javascript:;"><?php echo $options['Address']  ?></a>
                </div>
            </div>
        </div></div>
        <div class="col-md-5">
        <div class="box wow fadeInRight" data-wow-duration="4s">
            <div class="row">
                <div class="col-md-3"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/phone.jpg"></div>
                <div class="col-md-9">
                    <h6>Phone</h6>
                    <a href="tel:<?php echo $options['phone_number']  ?>" style="font-weight : 600; font-size : 30px;"><?php echo $options['phone_number']  ?></a>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="img wow fadeInLeft" data-wow-duration="4s">
                <img src="<?php the_post_thumbnail_url('full'); ?>">
            </div>
        </div>
        <div class="col-md-8 wow fadeInRight" data-wow-duration="4s">
             <?php echo do_shortcode( '[contact-form-7 id="110" title="Contact Us"]' ); ?>
        </div>
    </div>
</div>

</section>


<?php endwhile; wp_reset_query(); ?>

<div class="main-wrapper">
<?php get_footer(); ?>