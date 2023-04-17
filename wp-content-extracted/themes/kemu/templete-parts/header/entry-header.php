<?php
/**
 * Displays the postheader
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div id="topBar" style="padding-top: 10px">
    <div class="container">

        <!-- right -->
        <ul class="top-links list-inline pull-right">
            <li>

                    <?php global $current_user; wp_get_current_user();

                 //   print_r($current_user->user_nicename);
                    ?>
                    <?php


                    if (is_user_logged_in()) {
                    ;?>
                        <a class="no-text-underline" role="button" href="<?=WP_SITEURL .'/register'?>">  <?= $current_user->display_name ?> </a>
                <?php    } else { ?>
                        <a class="no-text-underline" role="button" href="<?=WP_SITEURL .'/register'?>">Register</a>



                    <?php
                    }
                    //  echo $check=       is_user_logged_in() ? 'login' : 'logout';

                    ?>
                    <!--<i class="fa fa-user-plus" aria-hidden="true"></i> Register-->


            </li>
            <li style="background:#660000;">

                    <!--<i  class="fa fa-sign-in" aria-hidden="true"></i> Login</a>-->

                   <?php
                   if ( is_user_logged_in() ) { ?>
                       <a class="no-text-underline btn" role="button" href="<?=WP_SITEURL?>wp-login.php?action=logout" style="color:#fff">Logout</a>
               <?php    } else {
                       ?>
                       <a class="no-text-underline btn" role="button" href="<?=WP_SITEURL .'/login'?>" style="color:#fff">Login</a>

               <?php    }?>



            </li>

        </ul>

        <!-- left -->
        <ul class="top-links list-inline">
            <li class="hidden-xs"></li>
            <li class="text-welcome">
                ISSN :2710-0804 (Online)
            </li>
            <li class="text-welcome">
                2709-8729 (Print)
            </li>

        </ul>

    </div>
</div>
<div id="header" class="sticky clearfix">

    <!-- TOP NAV -->
    <header id="topNav">
        <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <!-- BUTTONS -->
            <ul class="pull-right nav nav-pills nav-second-main">

                <!-- SEARCH -->
          


            </ul>
            <!-- /BUTTONS -->


            <!-- Logo -->
            <a class="logo pull-left" href="<?php echo WP_SITEURL ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.jpg" alt="" />

            </a>



            <div class="navbar-collapse pull-right nav-main-collapse collapse">
                <nav class="nav-main">


                    <ul id="topMain" class="nav nav-pills nav-main">
                        <li class="dropdown active"><!-- HOME -->
                            <a href="<?=WP_SITEURL?>">
                                Home
                            </a>

                        </li>
                        <li class="dropdown">
                            <!-- About -->
                            <a class="dropdown-toggle" href="#">
                                About
                            </a>
                            <ul class="dropdown-menu">

                                <li><a href="<?php echo WP_SITEURL .'about'?>">Editor's in chief Message</a></li>
								 <li><a href="<?php echo WP_SITEURL .'editor-message'?>">Editor Message</a></li>
                                <li><a href="<?php echo WP_SITEURL .'national-advisor'?>">National Advisors</a></li>
								   <li>
                                    <a href="<?php echo WP_SITEURL .'international-advisors'?>">International Advisors</a>
                                </li>
								 <li><a href="<?php echo  get_template_directory_uri() .'/downloads'?>/AuthorGuideline.pdf">Author Guideline</a></li>

                               
                             
									 <li>
                                    <a download=" " href="<?php echo  get_template_directory_uri() .'/downloads'?>/MembershipForm.pdf">MemberShip Form</a>
                                </li>
								 <li>
                                    <a download=" " href="<?php echo  get_template_directory_uri() .'/downloads'?>/Copyrights.pdf">Copyrights</a>
                                </li>
                              
                                <li>
                                    <a href="<?php echo WP_SITEURL .'subscriptions'?>">Subscriptions</a>
                                </li>

                              
                                <!-- <li>
                                   <a href="statistics.php">
                                     Web Statistics

                                   </a>
                                 </li>-->
<!--                                <li>-->
<!--                                    <a class="dropdown-toggle" href="#">-->
<!--                                        Media Gallery-->
<!---->
<!--                                    </a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="media_2ndAnnualReview.html">2ND ANNUAL REVIEW</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="contact.html">-->
<!--                                        Contact Us-->
<!---->
<!--                                    </a>-->
<!--                                </li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <!-- Issues -->
                            <a class="" href="<?=WP_SITEURL .'/archives'?>">
                                Archives
                            </a>
                          
                        </li>
							<li class="dropdown">
                            <!-- Issues -->
                            <a class="" href="<?=WP_SITEURL .'/add-submission'?>">
                                Submit an Article
                            </a>

                        </li>


                    </ul>
                    </li>

                    </ul>

                </nav>
            </div>

        </div>
    </header>
    <!-- /Top Nav -->

</div>




<!-- /wrapper -->



<div id="sidepanel" class="sidepanel-light">
    <a id="sidepanel_close" href="#"><!-- close -->
        <i class="glyphicon glyphicon-remove"></i>
    </a>

    <div class="sidepanel-content">
        <h2 class="sidepanel-title">Akemu</h2>

        <!-- SIDE NAV -->
        <ul class="list-group">

            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-heart"></i>
                    ABOUT US
                </a>
            </li>
            <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed">
                    <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                    <i class="ico-category et-strategy"></i>
                    PORTFOLIO
                </a>
                <ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                    <li><a href="#"><i class="fa fa-angle-right"></i> 1 COLUMN</a></li>
                    <li class="active">
                        <span class="badge">New</span>
                        <a href="#"><i class="fa fa-angle-right"></i> 2 COLUMNS</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> 3 COLUMNS</a></li>
                </ul>
            </li>
            <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed">
                    <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                    <i class="ico-category et-trophy"></i>
                    PORTFOLIO
                </a>
                <ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                    <li><a href="#"><i class="fa fa-angle-right"></i> SLIDER</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right"></i> HEADERS</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> FOOTERS</a></li>
                </ul>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-happy"></i>
                    BLOG
                </a>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-beaker"></i>
                    FEATURES
                </a>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-map-pin"></i>
                    CONTACT
                </a>
            </li>

        </ul>
        <!-- /SIDE NAV -->

        <!-- social icons -->
        <div class="text-center margin-bottom-30">

            <a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
                <i class="icon-linkedin"></i>
                <i class="icon-linkedin"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-rss" data-toggle="tooltip" data-placement="top" title="RSS">
                <i class="icon-rss"></i>
                <i class="icon-rss"></i>
            </a>

        </div>
        <!-- /social icons -->

    </div>

</div>
<!-- /SIDE PANEL -->



