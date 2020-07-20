
<h1>ESN technologies website is down for maintainance. We will get back online shortly. </h1>
<?php
exit;
    require_once 'includes/common.php';
    $page = new page;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" http-equiv="Description" content="ESN Technologies is a Quality offshore development center with capabilities in Embedded Systems,Device Drivers,Mobile Computing, Mobile solutions,Wireless applications,Application Outsourcing,Custom Software Development,O/S Porting,Win CE Applications,Memory Driver development,Migration &amp; re-engineering,ERP Solutions,Offshore Development Center,E-Learning Development,Specialized Engineering applications,Graphic simulation,Knowledge management solutions,Solutions on .NET  platform,System Programming,Pervasive Computing Solutions,Smart card security application development,Mobile messaging service,XML Web services,Cross-Platform Solutions,Microsoft .NET based web services,Software services,e Business solutions,application management,systems integration,business to business integration,telecommunications,healthcare Solutions,logistics solution,transportation solution,manufacturing solutions,CRM Solution,operations systems support,supply chain management,customer relationship management,software implementation,knowledge management,Quality,Testing solutions,Software Consulting,Software development,WinCE,ORACLE, ISO 9000,Software Methedologies, Object oriented solutions, Business Intelligence, Knowledge Management,Data warehousing,e-Business solutions,Telecom Applications,Microsoft Certified Partner,Great Plains Partner,Sun Partner,Oracle Partner,Siebel."/>
        <meta name="keywords" http-equiv="Keywords" content="Quality offshore development center,Embedded Systems,Device Drivers,Mobile Computing,Mobile solutions,Wirelessapplications,Application Outsourcing,Custom Software Development,Software Companies in Hyderabad,NASSCOM Members in Hyderabad,O/S Porting, Win CE Applications,Memory Driver development,Migration &amp; re-engineering,ERP Solutions,Offshore Development Center,E-Learning Development,Specialized Engineering applications,Graphic simulation,Knowledge management solutions,Solutions on .NET  platform,System Programming,Pervasive Computing Solutions,Smart card security application development,Mobile messaging service,XML Web services,Cross-Platform Solutions,Microsoft .NET based web services,software development company in Hyderabad,software services,e Business solutions,Global Delivery Model,onsite development,onsite-offshore,it consulting,strategy consulting,application management,systems integration,business to business integration,telecommunications,healthcare Solutions,hipaa,logistics solution,transportation solution,manufacturing solutions,CRM Solution,operations systems support,supply chain management,customer relationship management,softwareimplementation,knowledge management,Quality,Testing solutions,Software Consulting,Software development,WinCE,ORACLE,ISO 9000,Software Methedologies,Object oriented solutions,Business Intelligence,Knowledge Management,Data warehousing,e-Business solutions,Telecom Applications,Microsoft Certified Partner,Great Plains Partner,Sun Partner,Oracle Partner,Siebel"/>       
        <title><?php echo $page->getTitle()?></title>
        <style type="text/css" media="all">
            @import url('css/style.css');
            @import url('css/menu_style.css');
            @import url('css/slider/nivo-slider.css');
            @import url('css/theme/white.css');
        </style>
        <?php
            //declare template name for using in links
            $page_template = "PageLookup.php"
        ?>
        <!--[if IE]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/slider/slider.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#mainbanner').nivoSlider({
                    controlNav:false,
                    pauseOnHover:false
                });
                $('#ft_slider').nivoSlider({
                    effect:'noeffect',
                    controlNav:false,
                    pauseOnHover:false,
                    directionNav:false
                });
            })
        </script>
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-24409538-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </head>
    <body>
        <div id="container">
			<div id="wrapper">
				<div id="socialbar">
					<div class="social clearfix">
					   <a href="http://www.facebook.com/pages/ESN-Technologies-Pvt-LTD/248716975163116" class="facebook"></a>
					   <a href="http://twitter.com/everest_consinc" class="twitter"></a>
					   <a href="http://www.linkedin.com/company/esn-technologies" class="linkedin"></a>
					</div>
				</div>
                <div id="header_container">
                    <div id="logo_container"><a href="." title="ESN Technologies"><img src="images/ESN_logo.jpg" width="197" height="101" alt="ESN Technologies" title="ESN Technologies"/></a></div>
                    <div id="search_container">
                        <form action="<?php echo $page_template.'?active_page_id=73'?>" method="post" id="searchform"><input class='searchbox' type='text' name='q' id='inpSearch'><input type='image' src='images/1x1.gif' title='Submit Search' class='searchbox_submit' value=''/></form>
                    </div>
                </div>
                <div id="menu_container"> 
                    <div id="main_menu">
                            <?php
                                echo $page->getMenu();
                            ?>
                    </div>
                    <div id="menu_container_bottom"></div>
                </div>

                <div id="mid_container">
                    <div id="mainbanner" class="nivoSlider">
                        <img src="images/slider/home/header1.jpg" alt=""/>
                        <img src="images/slider/home/header2.jpg" alt=""/>
                        <img src="images/slider/home/header3.jpg" alt=""/>
                        <img src="images/slider/home/header4.jpg" alt=""/>
                        <img src="images/slider/home/header5.jpg" alt=""/>
                    </div>
                    <?php
                        echo $page->getContent();
                    ?>
                </div>
                <div id="footer_container" class="home_foot">
                    <div id="links_container">
                        <div class="lnks">
                            <div class="t1">ESN Advantage</div>
                            <a href=<?php echo $page_template."?active_page_id=102"?>>Value Proposition</a> <br />
                            <a href=<?php echo $page_template."?active_page_id=116"?>>Business and Delivery Models</a><br />
                            <a href=<?php echo $page_template."?active_page_id=117"?>>Project Management</a><br />
                            <a href=<?php echo $page_template."?active_page_id=118"?>>Communication Model</a><br />
                            <a href=<?php echo $page_template."?active_page_id=119"?>>Software Processes</a><br />
                            <a href=<?php echo $page_template."?active_page_id=120"?>>Quality</a><br />
                            <a href=<?php echo $page_template."?active_page_id=121"?>>Technology</a><br />
                        </div>
                        <div class="lnks">
                            <div class="t1">Quick Links</div>
                            <a href=<?php echo $page_template."?active_page_id=124"?>>Contact us</a> <br />
                            <a href=<?php echo $page_template."?active_page_id=205"?>>Request For Services</a> <br />
                            <a href=<?php echo $page_template."?active_page_id=128"?>>Apply for Jobs</a> <br />
                            <a href="images/Everest.vcf">Download Everest v card</a> <br />
                        </div>
                        <div class="lnks">
                            <div class="t1">News and events</div>
                            
                        </div>
                    </div>
                    <div id="adverts_container">
                        <div id="ft_slider" class="nivoSlider">
                            <img src="images/slider/home/iso.png" alt=""/>
                            <img src="images/slider/home/cmmcomple.png" alt=""/>
                            <img src="images/slider/home/winembed.png" alt=""/>
                            <img src="images/slider/home/cmmlevel3.png" alt=""/>
                        </div>
                    </div>
                </div>
                <div id="cpyrgt_container"> 
                    <span class="fl">
                        
                    </span>
                    <span class="fr">
                        &copy;2011 ESN Technologies.
                    </span>  
                </div>
            </div>
        </div>
    </body>
</html>