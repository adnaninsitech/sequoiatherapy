<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e6954c941c2265"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/page-template/page-about-us.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/page-template/page-about-us_2022-02-14-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: About Template
 */

get_header(); ?>
</div>


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section class="home-who">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
         <div class="wow fadeInLeft" data-wow-duration="4s">
        <?php wpautop(the_content()); ?>
      </div>

      </div>
      <div class="col-md-6"> <div class="img"><img src="<?php the_post_thumbnail_url('full'); ?>" class="rimg wow fadeInRight" data-wow-duration="4s"></div></div>
    </div>
  </div>
</section>

<?php endwhile; wp_reset_query(); ?>

<div class="main-wrapper">
<?php get_footer(); ?>