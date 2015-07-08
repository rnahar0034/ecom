<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<header id="header_nav" class="header-section clearfix">	
<div style="position:relative;" class=" container-fluid clearfix">
    <div class="header-right clearfix">
        <div class="head-top clearfix">  
             <form class="head-search hidden-md hidden-sm hidden-xs" action="" method="">
            	<div class="search-group">
                	<input type="text" class="form-control" placeholder="Email">
                    <input type="button" class="search" />
               </div>
          	 </form>
             <div class="social-bookmark">
             	<a href="javascript:void(0)" class="fb">facebook</a>
                <a href="javascript:void(0)" class="tw">twiiter</a>
                <a href="javascript:void(0)" class="li">linkedin</a>
                <a href="javascript:void(0)" class="gp">googleplus</a>
             </div>
             <button class="booknow-bt hidden-md hidden-sm hidden-xs">BOOK NOW</button>             
             <p class="phone"><span>1300</span> 177 226</p>	             
        </div>
        <div class="clearfix"></div>
    	<div class="collapse navbar-collapse main-nav" id="navbar">
            <ul class="nav yamm navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">patient services<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                  	<div class="yamm-content">                    
                        <div class="row">
                          <div class="col-lg-3">
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" class="" src="images/icon-xray.jpg" />
                                    <p>Xray</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-mri.jpg" />
                                    <p>MRI</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-ct.jpg" />
                                    <p>CT</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-opg.jpg" />
                                    <p>OPG</p>
                                </a>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-nm.jpg">
                                    <p class="">Nuclear Medicine</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-bmd.jpg">
                                    <p class="">Bone Mineral Density</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-us.jpg">
                                    <p class="">Ultrasound</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-si.jpg">
                                    <p class="">Sports Imaging</p>
                                </a>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-ir.jpg">
                                    <p class="">Interventional Radiology</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-wc.jpg">
                                    <p class="">Work Cover</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-pet.jpg">
                                    <p class="">PET CT</p>
                                </a>
                            </div>
                            <div class="patient-service-block">
                                <a href="javascript:void(0)" class="division">
                                    <img class="division-icon hidden-xs hidden-sm hidden-md" src="images/icon-mam.jpg">
                                    <p class="">Bone Mineral Density</p>
                                </a>
                            </div>
                          </div>
                          <div class="col-sm-3 hidden-xs hidden-sm hidden-md">
                            <img src="images/img-placehoder.jpg" class="img-responsive" alt="#" />
                          </div>
                          
                        </div>               
                    </div>     
                  </li>
                </ul>
              </li>                           
              <li><a href="#contact">referrers</a></li>
              <li class="active"><a href="#">about us</a></li>
              <li><a href="#about">careers at qscan</a></li>
              <li><a href="#contact">Contact us</a></li>          
            </ul>
          </div><!--/.nav-collapse -->    
              
      </div>
    <div class="navbar-header">
      <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="col-lg-12 col-xs-6 logo"><img src="images/img-logo.png" class="img-responsive" alt="qscan" title="qscan" /></a>
    </div>    
    </div>
</header>
<div class="clearfix"></div>
<section id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li><strong></strong>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item slide1 active">
      <img src="images/img-banner1.jpg" class="img-responsive" alt="" />
      <div class="carousel-content">
      	<div class="container">
        	<div class="caption">
                <h5>delivering excellence in </h5>
                <h1>patient care</h1>              
                <h5> &amp; diagnostic accuracy</h5>
                <a href="#">Our Services</a>
            </div>
        </div>
      </div>        
    </div>    
   <div class="item slide2">
     <img src="images/img-banner2.jpg" class="img-responsive" alt="" />
      <div class="carousel-content">
      	<div class="container">
        	<div class="caption">
      		<h5>proudly</h5>
            <h1>radiologist <br/>owneD & Operated</h1>              
            <h5> &amp; diagnostic accuracy</h5>
            <a href="#">About Us</a>
            </div>
        </div>
      </div>  
    </div>
    <div class="item slide3">
      <img src="images/img-banner3.jpg" class="img-responsive" alt="" />
      <div class="carousel-content">
      	<div class="container">
        	<div class="caption">
      		<h5>now open</h5>
            <h1>QSCAN CARINDALE</h1><br/>
            <a href="#">Find out more</a>
            </div>
        </div>
      </div>  
    </div>
	<div class="item slide4">
      <img src="images/img-banner4.jpg" class="img-responsive" alt="" />
      <div class="carousel-content">
      	<div class="container">
        	<div class="caption">
      		<h5>now offering</h5>
            <h1>patient care</h1>              
            <h5> &amp; diagnostic accuracy</h5>
            <a href="#">Our Services</a>
            </div>
        </div>
      </div>  
    </div>
    <div class="item slide5">
      <img src="images/img-banner5.jpg" class="img-responsive" alt="" />
      <div class="carousel-content">
      	<div class="container">
        	<div class="caption">
      		<h5>Celebrating</h5>
            <h1>cultural <br/>DIVersity</h1>              
            <h5>Did you know World Day for Cultural Diversity is May 2015?Let’s celebrate the diverse culture of our local QLD community</h5>
            <a href="#">Read more</a>
            </div>
        </div>
      </div>  
    </div>
  
  </div>
</section>

<div class="clearfix"></div>

<section class="homepage">
	<div class="container">
    	<div class="row">
    	<div class="col-lg-8 col-md-12 left-content">
        	<h4 class="section-title"><span>Qscan</span> Radiology Clinics offers THE following <br/><span>diagnostic medical</span> imaging services:</h4>
            <div class="row services-home-block clearfix">
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-xray.jpg">
                        <p class="">Xray</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-mri.jpg">
                        <p class="">MRI</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-ct.jpg">
                        <p class="">CT</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-opg.jpg">
                        <p class="">OPG</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-nm.jpg">
                        <p class="">Nuclear Medicine</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-bmd.jpg">
                        <p class="">Bone Mineral Density</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-us.jpg">
                        <p class="">Ultrasound</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-si.jpg">
                        <p class="">Sports Imaging</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-ir.jpg">
                        <p class="">Interventional Radiology</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-wc.jpg">
                        <p class="">Work Cover</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-pet.jpg">
                        <p class="">PET CT</p>
                    </a>
                </div>
                <div class="col-lg-3 col-xs-4 block">
                    <a href="javascript:void(0)" class="division">
                        <img class="division-icon" src="images/icon-mam.jpg">
                        <p class="">Bone Mineral Density</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 clearfix">
        	<div class="purple-block">
            	<p>Find your</p>
                <h5>Qscan Clinic</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 clearfix">
        	<div class="purple-block">
            	<p>book an</p>
                <h5>Appointment</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 clearfix">
        	<div class="purple-block clearfix">
            	<div class="pull-left">
            		<p>For</p>
                	<h5>Referrers</h5>
                </div>    
                <div class="pull-right">
               		<img src="images/img-qscaniq.jpg" />                    
                </div>    
            </div>
        </div>
        <div class="col-lg-4 col-md-12 ">
        	<div class="testimonial-sidebar-block testimonial-content clearfix">
            	<p class="doc-name"><span>Meet</span><br/>Dr. Laetitia de Villers</p>
                <p class="tes-con">Laetitia is committed to providing the highest quality specialist diagnostic medical imaging and interventional service to all patients. </p>
                <a href="#">Find out more</a>
            </div>
        </div>
        
        </div>
    </div>	
</section>
<div class="clearfix"></div>
<div class="container-fluid blog-article-carousel">
	<div class="row">
        <div class="container">        	
           <div id="blog-article" class="blog-carousel slide" data-ride="carousel">
           		<div class="blog-title-section clearfix">
                	<div class="pull-left">
                    	<p>the latest</p>
                    	<h6>BLOG ARTICLES</h6>
                    </div>
                    <div class="pull-left article-control">
                    	<!-- Controls -->
                    	<a class="article-prev" href="#blog-article" role="button" data-slide="prev"></a>
                        <a class="article-next" href="#blog-article" role="button" data-slide="next"></a>
                    </div>                    
            	</div>
                <div class="clearfix"></div>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <div class="col-md-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                      <div class="col-md-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                      <div class="col-md-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                      <div class="col-lg-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                  </div>
                  <div class="item">
                      <div class="col-md-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                      <div class="col-md-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                      <div class="col-md-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                      <div class="col-lg-3 blog-article">
                      	<h6><a href="javascript:void(0)">Nuclear Medicine at Qscan</a></h6>
                        <p class="date">18/02/2015</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum quam, a suscipit nulla tincidunt nec. Vivamus hendrerit, neque id lacinia facilisis,</p>
                        <a href="#" class="read-more">Read More</a>
                      </div>
                  </div>
                </div>
    
                
              </div>           
        </div>
    </div>
</div>
<div class="clearfix"></div>

<div class="container partner-section text-center">
	<h3>OUR PARTNERS</h3>
    <div class="text-center partner-logo">
    	<figure><img src="images/img-partner-1.jpg" alt="#" class="img-responsive" /></figure>
        <figure><img src="images/img-partner-2.jpg" alt="#" class="img-responsive" /></figure>
        <figure><img src="images/img-partner-1.jpg" alt="#" class="img-responsive" /></figure>
        <figure><img src="images/img-partner-2.jpg" alt="#" class="img-responsive" /></figure>
    </div>
</div>

<footer class="footer-section">
	<div class="container-fluid">
    	<div class="col-xs-12">
			<div class="footer-left clearfix">
    		<p class="copyright">Copyright QScan Services PTY LTD 2015</p>
            <div class="quick-links clearfix">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and Conditions</a>
            </div>
	    </div>
    		<div class="footer-right clearfix">
        	<figure><img src="images/img-orange.jpg" /></figure>
            <p>Site by Orange Digital</p>
        </div>
        </div>
    </div>
</footer>

<script>
      jQuery(function() {
        window.prettyPrint && prettyPrint()
        jQuery(document).on('click', '.yamm .dropdown-menu', function(e) {
          e.stopPropagation()
        })
      })
</script>
