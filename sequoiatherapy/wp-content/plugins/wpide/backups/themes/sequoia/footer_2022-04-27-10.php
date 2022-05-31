<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e6955512e65fbd"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/footer_2022-04-27-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

  $options = get_option('cOptn');
 ?>

</div>

<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" class="logo">
                    <div class="cont">
                        <a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/address.jpg"><?php echo $options['Address']  ?></a>
                        <a href="mailto:<?php echo $options['email']  ?>"><img src="<?php bloginfo('template_directory'); ?>/images/email.jpg"><?php echo $options['email']  ?></a>
                        <a href="tel:<?php echo $options['phone_number']  ?>"><img src="<?php bloginfo('template_directory'); ?>/images/phone.jpg"><?php echo $options['phone_number']  ?></a>
                    </div>

                </div>
                <div class="col-md-2">
                    <h2>LINKS</h2>
                    <?php wp_nav_menu(array('menu'=>'Menu 1')); ?> 
                </div>
                <div class="col-md-5">
                    <h1>Schedule Your Appointment Now!</h1>
                    <?php echo do_shortcode( '[contact-form-7 id="13" title="Footer Form"]' ); ?>

                </div>
            </div>
        </div>
    </section>

    <section class="copy text-center">
        <p><?php echo $options['copyright']  ?>&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/insi.png"></p>
    </section>
    <img src="<?php bloginfo('template_directory'); ?>/images/fbf.jpg" class="fbf">
</footer>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-latest.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<!--<script src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>-->
<script src="<?php bloginfo('template_directory'); ?>/js/prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
</body></html>

<?php wp_footer(); ?>

