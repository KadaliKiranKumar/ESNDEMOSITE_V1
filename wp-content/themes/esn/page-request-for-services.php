<?php
/**
 *
 * Template Name: Request for Services 
 */

get_header(); ?>
<div class="contact_us">
 <div class="contact_us_inner"><a href="/contact-us/">Request for Services</a></div>
</div>
<div class="apply_for">
 <div class="apply_for_inner"><a href="/careers/">apply for jobs</a></div>
</div>


<?php while (have_posts()) : the_post(); ?>
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

<?php endwhile; // End of the loop. ?>	


    <div class="content_fullwidth breadcrumbs">
	 <div class="container">
		<a href="/">Home</a>&nbsp;>&nbsp;<?php  the_title(); ?>
	 </div>
	</div>
    <div class="content_fullwidth">

        <div class="container">
            <?php the_content(); ?>
			<div class="two_third">
			<?php echo do_shortcode('[contact-form-7 id="247" title="Request for Services"]'); ?>
			</div>
        </div>
        <!-- end all sections -->


        <!-- end featured section 46 -->


    </div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
