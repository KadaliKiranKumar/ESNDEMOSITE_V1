<?php
/**
 *
 * Template Name: Case studies Detail
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
<?php
$params = array(
    'where' => "t.permalink = '" . pods_v('last', 'url') . "'"
);
//this is normally where the WP Loop would be. Instead we add a loop to get pods stuff
$case_studies = pods('casestudy');
$case_studies->find($params);
//$case_studies->find('name ASC');
?>
<?php while ($case_studies->fetch()) : ?>
   <!-- <div class="page_title1">
        <div class="container">

            <h1><?php echo $case_studies->field('name'); ?></h1>

        </div>
    </div>-->
<?php 
$header_img= $case_studies->field('header_image');
$header_img_url=$header_img["guid"];
$header_video= $case_studies->field("header_video");
$header_video_url= $header_video["guid"];
?>
  <section class="section  text-normal section-text-no-shadow section-inner-no-shadow section-normal section-opaque">
   <div  class="background-media skrollable skrollable-between">
      <div aria-label="Video Player" role="application" tabindex="0" class="mejs-container svg section-background-video mejs-video" id="mep_0">
         <div class="mejs-inner">
            <div class="mejs-mediaelement">
            <?php if ($header_video_url) :?>				
				<video class="section-background-video"  loop="loop" autoplay="autoplay" src="<?php   echo $header_video_url; ?>">
				 <source src="<?php  echo $header_video_url; ?>" type="video/mp4"></source>                 
				</video>
			<?php else:?>	
			    <img src="<?php  echo $header_image_url; ?>" />
                <?php if($header_image_url) :?>
		        <img src="<?php  echo $header_image_url; ?>" />
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
         <h1  class="text-default" ><?php echo $case_studies->field('name'); ?></h1>
         
      </div>
   </div>
  </section>

	<div class="content_fullwidth breadcrumbs">
	 <div class="container">
		<a href="/">Home</a>&nbsp;>&nbsp;<?php print "<a href='/case-studies/'>Case Studies</a>&nbsp;>&nbsp;" ?><?php  echo $case_studies->field('name'); ?>
	 </div>
	</div>
    
	

    <div class="content_fullwidth">
        <div class="container">
            <?php echo $case_studies->field('content'); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>
