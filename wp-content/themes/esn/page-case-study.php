<?php
/**
 *
 * Template Name: Case studies
 */

get_header(); ?>
<div class="contact_us">
 <div class="contact_us_inner"><a href="/contact-us/">Request for Services</a></div>
</div>
<div class="apply_for">
 <div class="apply_for_inner"><a href="/careers/">apply for jobs</a></div>
</div>
<link rel="stylesheet" type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/js/cubeportfolio/cubeportfolio.min.css">
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




<div class="works01">
    <div class="container">

        <div id="filters-container" class="cbp-l-filters-button">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                All
                <div class="cbp-filter-counter"></div>
            </div>
            <?php
            $args = array(
                'hide_empty' => 0,
                'exclude'    => '1'
            );
            ?>

            <?php $categories = get_categories($args); ?>
            <?php for ($i = 0; $i < count($categories); $i++) { ?>
                <div data-filter=".<?php echo $categories[$i]->slug; ?>" class="cbp-filter-item">
                    <?php echo $categories[$i]->name; ?>
                    <div class="cbp-filter-counter"></div>
                </div>
            <?php } ?>
        </div>


        <div id="grid-container" class="cbp-l-grid-fullWidth">
            <?php
            //this is normally where the WP Loop would be. Instead we add a loop to get pods stuff
            $params = array('limit'=>100);
            $case_studies = pods('casestudy');
            $case_studies->find($params);
            ?>
            <?php while ($case_studies->fetch()) : ?>
                <?php
                $cat = $case_studies->field('category');
				$enable = $case_studies->field('enable');
                $par_cat = '';
                if($cat['parent']) {
                    $par_cat = get_category($cat['parent']);
                }
				if ($enable):
				?>

                <div class="cbp-item <?php echo $cat['slug'].' '.$par_cat->slug ?> ">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo pods_image_url ( $case_studies->field('image'), $size = 'full', $default = 0, $force = false ); ?>" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <h3><?php echo $case_studies->field('name'); ?></h3>
                                    <br/>
                                    <a target="_blank" href="/case-studies/<?php echo $case_studies->field('permalink'); ?>" class="cbp-l-caption-buttonLeft">more info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php endif;?>
            <?php endwhile; ?>

        </div>

        <!--<div class="cbp-l-loadMore-text">
            <div data-href="ajax/loadMore.html" class="cbp-l-loadMore-text-link">LOADING...</div>
        </div>-->

    </div>
</div><!-- end works section -->

<div class="clearfix margin_top12"></div>

<?php get_footer(); ?>
