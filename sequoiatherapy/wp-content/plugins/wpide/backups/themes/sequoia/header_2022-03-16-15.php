<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "c16e04b85b61ff3957d351522a11e695dd82b08d63"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/sequoiatherapy/wp-content/plugins/wpide/backups/themes/sequoia/header_2022-03-16-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <link href="<?php bloginfo('template_directory'); ?>/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


  <!-- Google Fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/camera.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.css" />


  <?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  global $options;global $logo;global $copyrite;
  $options = get_option('cOptn');
  $logo = $options['logo'];
  $copyrite = $options['copyrite'];
  $size = 300;
  $options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
  $att_img = wp_get_attachment_image($logo, array($size, $size), false); 
  $logoSrc = wp_get_attachment_url($logo);
  $att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
  
  
  global $more;
  $more = 0;
  ?>
</head>

<body <?php body_class( $class ); ?>> 

  <header >
    <section class="header wow fadeIn" data-wow-duration="3s">
      <div class="container">
        <div class="row">
          <div class="col-md-3"><a href="<?php echo site_url(); ?>" class="logo" ><?php echo $options['logo']  ?></a></div>
          <div class="col-md-9">
            <nav>
              <?php wp_nav_menu(array('menu'=>'Menu 1')); ?> 
            </nav>
          </div>
        </div>
      </div>
    </section>
  </header>

<?php if(Is_home()|| is_front_page() ) { ?>

  <section class="slide slider-area slider-one clearfix" data-wow-duration="2s" id="home">
  <div class="overlay"></div>
    <div  class="slider" id="mainslider">

      <?php $index_query = new WP_Query(array( 'post_type' => 'slider' , 'posts_per_page' => '-1' , 'order' => 'asc'   )); ?>

      <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>


        <div  data-src="<?php the_post_thumbnail_url('full'); ?>">

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="slide-cont ">
                  <div class=" content wow fadeInLeft" data-wow-duration="4s">
                    <?php wpautop(the_content()); ?>
                     <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>

      <?php endwhile; wp_reset_query(); ?>

    </div>

  </section>

<?php } else { ?>

 <?php  $page = basename(get_permalink()); ?>
<?php $content = get_posts(array('name' => '"'.$page.'"','post_type' => 'page')); ?>
<?php $title =  get_field('banner_title', get_the_ID()); ?>
<?php $image =  get_field('banner_image', get_the_ID()); ?>
<?php if( !empty($image) ){ ?>
<section class="banner" style="background-image: url(<?php echo $image; ?>);">
<?php }else { ?>
<section class="banner">
 <?php } ?>
   <div class="container">
    <div class="row">
      <div class="box">
        <div class="content">
            <div class="col-md-12">
            <h6><a href="<?php echo get_site_url(); ?>">HOME</a></h6>
            <?php if($title != ''){ ?>
            <h2><?php echo $title; ?> /</h2>
          <?php }else{ ?> 
            <h2><?php the_title(); ?> /</h2>
          <?php } ?>
            
            </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php } ?>
 

        

 <div class="main-wrapper">