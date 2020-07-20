<?php
/**
 *
 * Template Name: Home page
 */

get_header(); ?>
<div class="contact_us">
  <div class="contact_us_inner"><a href="/contact-us/">Request for Services</a></div>
</div>
<div class="apply_for">
 <div class="apply_for_inner"><a href="/careers/">apply for jobs</a></div>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/masterslider/style/masterslider.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/masterslider/skins/default/style.css"/>
<div class="slidermar">
   <?php echo do_shortcode("[pjc_slideshow slide_type='front-page-slideshow']");?>    
</div>
<?php while (have_posts()) : the_post(); ?>
    <!-- <div class="clearfix margin_top10 "></div>-->
    <div class="featured_section13">
        <div class="container">
            <h1 class="title22 animate" data-anim-type="fadeIn"
                data-anim-delay="100"><?php the_field('welcome_title'); ?>
                <em><?php the_field('welcome_content'); ?></em>
            </h1>
        </div>
    </div>
    <div class="featured_section34">
        <div class="container">
           <h2 class="title22">Service Offerings</h2>
            <div class="one_third_less animate" data-anim-type="fadeIn" data-anim-delay="300">
             <article style="background-image: url(<?php the_field('image_1'); ?>)" class="post-grid post-grid-overlay element-bottom-20 text-left">
              <a href="<?php the_field('readmore_1'); ?>">
               <div class="post-grid-content">
                 <h3 class="post-grid-content-title"><?php the_field('title_1'); ?></h3>
                      <div class="post-grid-content-footer"><?php the_field('content_1'); ?></div>
               </div>
              </a>
             </article>  
            </div>
            <div class="one_third_less animate" data-anim-type="fadeIn" data-anim-delay="300">
             <article style="background-image: url(<?php the_field('image_2'); ?>)" class="post-grid post-grid-overlay element-bottom-20 text-left">
              <a href="<?php the_field('readmore_2'); ?>">
               <div class="post-grid-content">
                 <h3 class="post-grid-content-title"><?php the_field('title_2'); ?></h3>
                      <div class="post-grid-content-footer"><?php the_field('content_2'); ?></div>
               </div>
              </a>
             </article>  
            </div>
            <div class="one_third_less last animate " data-anim-type="fadeIn" data-anim-delay="300">
             <article style="background-image: url(<?php the_field('image_3'); ?>)" class="post-grid post-grid-overlay element-bottom-20 text-left">
              <a href="<?php the_field('readmore_3'); ?>">
               <div class="post-grid-content">
                 <h3 class="post-grid-content-title"><?php the_field('title_3'); ?></h3>
                      <div class="post-grid-content-footer"><?php the_field('content_3'); ?></div>
               </div>
              </a>
             </article>  
            </div>
        </div>
    </div>
	<div class="clearfix"></div>
	<div class="featured_section34">
        <div class="container">
            <div class="one_third_less animate" data-anim-type="fadeIn" data-anim-delay="300">
             <article style="background-image: url(<?php the_field('image_4'); ?>)" class="post-grid post-grid-overlay element-bottom-20 text-left">
              <a href="<?php the_field('readmore_4'); ?>">
               <div class="post-grid-content">
                 <h3 class="post-grid-content-title"><?php the_field('title_4'); ?></h3>
                      <div class="post-grid-content-footer"><?php the_field('content_4'); ?></div>
               </div>
              </a>
             </article>  
            </div>
            <div class="one_third_less animate" data-anim-type="fadeIn" data-anim-delay="300">
              <article style="background-image: url(<?php the_field('image_5'); ?>)" class="post-grid post-grid-overlay element-bottom-20 text-left">
              <a href="<?php the_field('readmore_5'); ?>">
               <div class="post-grid-content">
                 <h3 class="post-grid-content-title"><?php the_field('title_5'); ?></h3>
                      <div class="post-grid-content-footer"><?php the_field('content_5'); ?></div>
               </div>
              </a>
             </article>  
            </div>            
            <div class="one_third_less last animate" data-anim-type="fadeIn" data-anim-delay="300">
             <article style="background-image: url(<?php the_field('image_6'); ?>)" class="post-grid post-grid-overlay element-bottom-20 text-left iot">
              <a href="<?php the_field('readmore_6'); ?>">
               <div class="post-grid-content">
                 <h3 class="post-grid-content-title"><?php the_field('title_6'); ?></h3>
                      <div class="post-grid-content-footer"><?php the_field('content_6'); ?></div>
               </div>
              </a>
             </article> 
            </div>
        </div>
    </div>
	<div class="featured_section34">
        <div class="container">
            <div class="one_third_less animate" data-anim-type="fadeIn" data-anim-delay="300">
             <article style="background-image: url(<?php the_field('image_7'); ?>)" class="post-grid post-grid-overlay element-bottom-20 text-left">
              <a href="<?php the_field('readmore_7'); ?>">
               <div class="post-grid-content">
                 <h3 class="post-grid-content-title"><?php the_field('title_7'); ?></h3>
                      <div class="post-grid-content-footer"><?php the_field('content_7'); ?></div>
               </div>
              </a>
             </article>  
            </div>
	    </div>
    </div>



    <div class="content_fullwidth">

        <div class="container">
            <?php the_content(); ?>
        </div>
        <!-- end all sections -->


        <!-- end featured section 46 -->


    </div>
<?php endwhile; // End of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
