<?php
/**
 *
 * Template Name: Services Single
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/accordion/style.css"/>
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
	<?php $cate = get_field('category'); ?>
	<?php endwhile; // End of the loop. ?>
<?php 
$bread1="";
$parent_title = get_the_title($post->post_parent);

if($parent_title=="Services"){
	$bread1="<a href='/services'>Services</a>&nbsp;>&nbsp;";
}
?>

    <div class="content_fullwidth breadcrumbs">
	 <div class="container">
		<a href="/">Home</a>&nbsp;>&nbsp;<?php print $bread1;?><?php  the_title(); ?>
	 </div>
	</div>

    <div class="content_fullwidth">

        <div class="container">
         <div class="content_left">
            <?php the_content(); ?>
		 <ul class="success">
            <?php
            //this is normally where the WP Loop would be. Instead we add a loop to get pods stuff
            $params = array('limit'=>100,'where'=>'category.term_id="'.$cate[0].'"');
			//$params = array('limit'=>100);
            $case_studies = pods('casestudy');
            $case_studies->find($params);
            ?>
            <?php while ($case_studies->fetch()) : ?>
                <?php
                $cat = $case_studies->field('category');
				//var_dump($cat);
                $par_cat = '';
                if($cat['parent']) {
                    $par_cat = get_category($cat['parent']);
                } ?>  
            
             <li><a href="/case-studies/<?php echo $case_studies->field('permalink'); ?>"><?php echo $case_studies->field('name'); ?></a></li>
             <?php endwhile; ?>
         </ul> 	
		 </div>	
		 <div class="right_sidebar">
		 <h2>Services</h2>
		  <div id="st-accordion-four" class="st-accordion-four">
                <ul>                   
                     <?php if( !is_page("custom-development")): ?> 
					    <li>
                            <a href="#"><?php the_field('title_1',9); ?><span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p><?php  echo wp_trim_words( get_field('content_1',9), $num_words = 10, $more = '...' ); ?></p>
								<a class="read-more" href="<?php the_field('readmore_1',9); ?>"> Read more&nbsp;>></a>  
                               
                            </div>
                        </li>
					<?php endif;?>
					<?php if( !is_page("cloud")): ?>
						 <li>
                            <a href="#"><?php the_field('title_2',9); ?><span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p><?php echo wp_trim_words( get_field('content_2',9), $num_words = 10, $more = '...' ); ?></p>
                                <a class="read-more" href="<?php the_field('readmore_2',9); ?>"> Read more&nbsp;>></a>
                            </div>
                        </li>
					<?php endif;?>
					<?php if( !is_page("big-data")): ?>
						<li>
                            <a href="#"><?php the_field('title_3',9); ?><span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p><?php echo wp_trim_words( get_field('content_3',9), $num_words = 10, $more = '...' ); ?></p>
                                <a class="read-more" href="<?php the_field('readmore_3',9); ?>"> Read more&nbsp;>></a>
                            </div>
                        </li>
					<?php endif;?>
					<?php if( !is_page("business-intelligence-advanced-analytics")): ?>
						<li>
                            <a href="#"><?php the_field('title_4',9); ?><span class="st-arrow" style="margin-top:-18px;">Open or Close</span></a>
                            <div class="st-content">
                                <p><?php echo wp_trim_words( get_field('content_4',9), $num_words = 10, $more = '...' ); ?></p>
                                <a class="read-more" href="<?php the_field('readmore_4',9); ?>"> Read more&nbsp;>></a>
                            </div>
                        </li>
					<?php endif;?>
					<?php if( !is_page("mobile")): ?>
						<li>
                            <a href="#"><?php the_field('title_5',9); ?><span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p><?php echo wp_trim_words( get_field('content_5',9), $num_words = 10, $more = '...' ); ?></p>
                                <a class="read-more" href="<?php the_field('readmore_5',9); ?>"> Read more&nbsp;>></a>
                            </div>
                        </li>
					<?php endif;?>
					<?php if( !is_page("iot-internet-of-things")): ?>	
                    <li>
                            <a href="#"><?php the_field('title_6',9); ?><span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p><?php echo wp_trim_words( get_field('content_6',9), $num_words = 10, $more = '...' ); ?></p>
                                <a class="read-more" href="<?php the_field('readmore_6',9); ?>"> Read more&nbsp;>></a>
                            </div>
                        </li>
					<?php endif;?>
					<?php if( !is_page("software-testing-and-qa")): ?>
						<li>
                            <a href="#"><?php the_field('title_7',9); ?><span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p><?php echo wp_trim_words( get_field('content_7',9), $num_words = 10, $more = '...' ); ?></p>
                                <a class="read-more" href="<?php the_field('readmore_7',9); ?>"> Read more&nbsp;>></a>
                            </div>
                        </li>
					<?php endif;?>
                </ul>
            </div>
		 
        </div>  
		  
		  
         
		  
        </div>
        <!-- end all sections -->


        <!-- end featured section 46 -->


    </div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
