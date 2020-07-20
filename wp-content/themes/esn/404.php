<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package esn
 */

get_header(); ?>

<div class="content_fullwidth">
    <div class="container">

        <div class="error_pagenotfound">

            <strong>404</strong>
            <br/>
            <b>Oops... Page Not Found!</b>

            <em>Sorry the Page Could not be Found here.</em>

            <p>Try using the button below to go to main page of the site</p>

            <div class="clearfix margin_top3"></div>

            <a href="/" class="but_medium1"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; Go to Back</a>

        </div>
        <!-- end error page notfound -->

    </div>
</div>

<?php get_footer(); ?>
