<?php
/**
 *
 * Template Name: Jobs
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="page_title1">
        <div class="container">

            <h1><?php the_title(); ?></h1>

        </div>
    </div><!-- end page title -->
<?php endwhile; // End of the loop. ?>
<div class="content_fullwidth">

    <div class="container">
        <?php
        //this is normally where the WP Loop would be. Instead we add a loop to get pods stuff
        $current_openings = pods('currentopening');
        $current_openings->find('ID ASC');
        ?>
        <?php while ($current_openings->fetch()) : ?>
            <div >
                <h3><?php echo $current_openings->field('name') ?></h3>
                <p><?php echo $current_openings->field('job_description') ?></p>
            </div>
        <?php endwhile; ?>

    </div>
    <!-- end all sections -->


    <!-- end featured section 46 -->


</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
