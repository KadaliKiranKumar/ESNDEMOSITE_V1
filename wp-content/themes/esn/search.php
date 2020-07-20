<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package esn
 */

get_header(); ?>
<div class="contact_us">
 <div class="contact_us_inner"><a href="/request-for-services/">Request for Services</a></div>
</div>
<div class="apply_for">
 <div class="apply_for_inner"><a href="/careers/">apply for jobs</a></div>
</div>



  <section class="section  text-normal section-text-no-shadow section-inner-no-shadow section-normal section-opaque">
   <div  class="background-media skrollable skrollable-between">
      <div aria-label="Video Player" role="application" tabindex="0" class="mejs-container svg section-background-video mejs-video" id="mep_0">
         <div class="mejs-inner">
            <div class="mejs-mediaelement">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hands-coffee-cup-apple__large.jpg" /> 
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
         <p><?php printf( esc_html__( 'Search Results for: %s', 'esn' ), '<span>' . get_search_query() . '</span>' ); ?></p>
      </div>
   </div>
  </section>
	<?php //endwhile; // End of the loop. ?>	
<?php
$bread1="";
$parent_title = get_the_title($post->post_parent);
//echo $parent_title;
if($parent_title=="Services"){
	$bread1="<a href='/services/'>Services</a>>";
}
?>

    <div class="content_fullwidth breadcrumbs">
	 <div class="container">
		<a href="/">Home</a>&nbsp;>&nbsp;<?php print $bread1;?><?php  the_title(); ?>
	 </div>
	</div>
    <div class="content_fullwidth">

        <div class="container">
		<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>
			<?php else :?>
			<h2>Sorry! No Results Found</h2>
			<?php endif;?>
			
        </div>
        <!-- end all sections -->


        <!-- end featured section 46 -->


    </div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
