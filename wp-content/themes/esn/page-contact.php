<?php
/**
 *
 * Template Name: Contact
 */

get_header(); ?>
<div class="contact_us">
  <div class="contact_us_inner"><a href="/contact-us/">Request for Services</a></div>
</div>
<div class="apply_for">
 <div class="apply_for_inner"><a href="/careers/">apply for jobs</a></div>
</div>
<?php while (have_posts()) :
    the_post(); ?>
    <div class="clearfix"></div>


  <section class="section  text-normal section-text-no-shadow section-inner-no-shadow section-normal section-opaque">
   <div  class="background-media skrollable skrollable-between">
      <div aria-label="Video Player" role="application" tabindex="0" class="mejs-container svg section-background-video mejs-video" id="mep_0">
         <div class="mejs-inner">
            <div class="mejs-mediaelement">
            <?php if (get_field('header_video')) :?>				
				<video class="section-background-video"  loop="loop" autoplay="autoplay" src="<?php  the_field('header_video'); ?>">
				 <source src="<?php  the_field('header_video'); ?>" type="video/mp4"></source>                 
				</video>
			<?php else:?>	
			    <img src="<?php  the_field('header_image'); ?>" />
                <?php if(get_field('header_image')) :?>
		        <img src="<?php  the_field('header_image'); ?>" />
			    <?php else:?>	
	            <img src="<?php echo get_template_directory_uri(); ?>/images/hands-coffee-cup-apple__large.jpg" />
				<?php endif;?>
			<?php endif; ?>
            </div>
         </div>
      </div>
   </div>
   <div class="background-overlay grid-overlay-0 "></div>
   <div class="container container-vertical-default">
   <div class="row vertical-default">
      <div class="col-md-2 text-center small-screen-default"></div>
      <div class="col-md-8 text-center small-screen-default">
         <h1  class="text-default" ><?php  the_title(); ?></h1>
         <?php if(get_field('tagline')!=""): ?><p><?php  the_field('tagline'); ?></p><?php endif;?>
      </div>
   </div>
  </section>

	<div class="content_fullwidth breadcrumbs">
	 <div class="container">
		<a href="/">Home</a>&nbsp;>&nbsp;<?php  the_title(); ?>
	 </div>
	</div>


    <div class="clearfix"></div>
    <div class="content_fullwidth contact">

        <div class="container">

            <div class="two_third">

                <?php the_content(); ?>
				<p><b>Contact ESN Technologies for response with 24 hours!</b></p>
				<?php echo do_shortcode('[contact-form-7 id="54" title="Contact form 1"]'); ?>
				
                
                 
				 
				 
                 
            </div>
            <!-- end section -->

            <div class="one_third last">

                <div class="address_info two">

                   
                    <ul>
                        <li>
                            <?php the_field('address_1'); ?>
                        </li>
                    </ul>

                </div>
                <!-- end section -->

                <div class="address_info two">

                    <h4 class="class=" light"">USA</h4>
                    <ul>
                        <li>
                            <?php the_field('address_2'); ?>
                        </li>
                    </ul>

                </div>
                <!-- end section -->

            </div>
			<div class="fgmapfull2">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.6916789729535!2d78.447767!3d17.426578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb972effffffff%3A0xa104bca375136297!2sESN+Technologies+India+Private+Limited!5e0!3m2!1sen!2sin!4v1439902282884"
                    frameborder="0" style="border:0"></iframe>
                 </div>
        </div>
    </div>
<?php endwhile; // End of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
