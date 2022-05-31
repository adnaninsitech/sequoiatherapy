<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e6954c941c2265"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/page-template/page-faq.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/page-template/page-faq_2022-02-14-18.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Faq Template
 */

get_header(); ?>
</div>

<section class="faq-main">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/hbf.png" class="wow bounceInLeft" data-wow-duration="4s">
        <h1>FREQUENTLY <span>ASKED</span> QUESTIONS </h1>
        </div>
    </div>
</div>
</section>

<div class="main-wrapper">
<?php get_footer(); ?>