<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e6954c941c2265"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/page-template/page-faq.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/page-template/page-faq_2022-02-14-19.php") )  ) ){
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

<div class="main-wrapper">
<?php get_footer(); ?>