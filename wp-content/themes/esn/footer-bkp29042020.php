<div class="clearfix margin_top12"></div>



<footer class="footer">
 <div class="container">

    <div class="one_third animate address" data-anim-type="fadeInUp" data-anim-delay="100">
	<h4>Address</h4>
       <div class="container">

        <div class="box">

            <i class="fa fa-map-marker"></i>

            <span>
            <strong>ESN Technologies (India) Pvt. Ltd.</strong><br>
            4 th floor, 8-2-248/A Maharishi House <br/>
			Road No #3, Banjara Hills<br/>
            Hyderabad 500 034<br/>
	    
            Telephone: 91-40-23351944 / 29701634/37 / 23353800<br/>
Fax: 91-40-23351942 <br>
            <a href="mailto:info@esntechnologies.co.in"><i class="fa fa-envelope"></i>&nbsp;
                info@esntechnologies.co.in</a><br/>
            </span>

        </div>

    </div>
	</div><!-- end address -->
    
    <div class="one_third animate" data-anim-type="fadeInUp" data-anim-delay="200">
    <div class="qlinks">
    
    	<h4>Useful Links</h4>
        
        <ul>
            <li><a href="/"><i class="fa fa-angle-right"></i> Home</a></li>
            <li><a href="/about-esn"><i class="fa fa-angle-right"></i> About ESN</a></li>
            <li><a href="/services"><i class="fa fa-angle-right"></i> Services</a></li>
            <li><a href="/careers"><i class="fa fa-angle-right"></i> Careers</a></li>
            <li><a href="/case-studies"><i class="fa fa-angle-right"></i> Case Studies</a></li>
            <li><a href="/contact-us"><i class="fa fa-angle-right"></i> Contact Us</a></li>
            
        </ul>
        
    </div>
	</div><!-- end links -->
        
    <div class="one_third last animate" data-anim-type="fadeInUp" data-anim-delay="300">
    <div class="siteinfo contact">
    
    	<h4>Contact us</h4>
        
		<?php echo do_shortcode('[contact-form-7 id="234" title="Contact form2"]'); ?>
               
               
               
	</div>
    </div><!-- end site info -->
 </div>
    <div class="copyright_info">
        <div class="container">

            <div class="clearfix divider_dashed10"></div>

            <div class="one_half animate" data-anim-type="fadeInRight" data-anim-delay="300">

                Copyright &copy; <?php echo date('Y'); ?> ESN Technologies (India) Pvt. Ltd. All rights reserved.

            </div>

            <div class="one_half last">
                <?php wp_nav_menu(array('menu' => 'footer', 'container' => '', 'menu_class' => 'footer_social_links')); ?>

            </div>

        </div>
    </div>
    <!-- end copyright info -->


</footer>


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->


</div>


<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/output.min-1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mainmenu/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/universal/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/style-switcher/styleselector.js"></script>
<script
    src="<?php echo get_template_directory_uri(); ?>/js/animations/js/animations.min.js"
    type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mainmenu/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mainmenu/customeUI.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scrolltotop/totop.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mainmenu/sticky.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/js/mainmenu/modernizr.custom.75180.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/carouselowl/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/universal/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masterslider/masterslider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masterslider/jquery.easing.min.js"></script>

<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordion/custom.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>js/universal/custom.js"></script>

<script type="text/javascript">
    (function ($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider', {
            width: 1400, // slider standard width
            height: 380, // slider standard height
            space: 0,
            speed: 45,
            layout: 'fullwidth',
            loop: true,
            preload: 0,
            autoplay: true,
            view: "parallaxMask"
        });
    })(jQuery);
</script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cubeportfolio/main31.js"></script>-->

<?php wp_footer(); ?>

</body>
</html>
