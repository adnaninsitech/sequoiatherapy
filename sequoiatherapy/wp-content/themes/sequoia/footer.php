<?php
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
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" class="logo">
                    <div class="cont">
                        <a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/address.jpg"><?php echo $options['Address']  ?></a>
                        <a href="mailto:<?php echo $options['email']  ?>"><img src="<?php bloginfo('template_directory'); ?>/images/email.jpg"><?php echo $options['email']  ?></a>
                        <a href="tel:<?php echo $options['phone_number']  ?>"><img src="<?php bloginfo('template_directory'); ?>/images/phone.jpg"><?php echo $options['phone_number']  ?></a>
                    </div>

                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 ">
                    <h2>LINKS</h2>
                    <?php wp_nav_menu(array('menu'=>'Menu 1')); ?> 
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
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

