<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e69548f28b9bcf"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/page-template/page-what-we-do.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/page-template/page-what-we-do_2022-02-16-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: What we do Template
 */

get_header(); ?>
</div>


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section class="main-what">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php wpautop(the_content()); ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; wp_reset_query(); ?>

<?php $index_query = new WP_Query(array( 'post_type' => 'what_we_do' , 'posts_per_page' => '-1')); ?>

      <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
      
<section class="what-list">
 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php the_post_thumbnail_url('full'); ?>" class="mimg">
            </div>
            
            <div class="col-md-6 pr">
            <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" >
                <?php wpautop(the_content()); ?>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <?php echo the_field('bottom_text', get_the_ID()); ?>
            </div>
        </div>
 

        
    </div>
</section>

<?php endwhile; wp_reset_query(); ?>


<div class="main-wrapper">
<?php get_footer(); ?>