<?php
/* Template Name: contact */
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/classes/post.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/classes/page.css" type="text/css" />
<div class="pkp_structure_page">

   <?php

require get_template_directory() . '/templete-parts/header/entry-header.php';
?>

        <div class="pkp_head_wrapper">

            <div class="pkp_site_name_wrapper">
                <button class="pkp_site_nav_toggle">
                    <span>Open Menu</span>
                </button>
                <div class="pkp_site_name">
                    <a href="annals.html" class="is_text">Journals of JPSIM</a>
                </div>
                <h1 class="pkp_screen_reader"></h1>
            </div>

            <nav class="cmp_skip_to_content">
                <a href="#pkp_content_main">Skip to main content</a>
                <a href="#siteNav">Skip to main navigation menu</a>
                <a href="#homepageIssue">Skip to the current issue</a>
                <a href="#pkp_content_footer">Skip to site footer</a>
            </nav>


                <nav class="pkp_site_nav_menu" aria-label="Site Navigation">
                <a id="siteNav"></a>
                <div class="pkp_navigation_primary_row">
                    <div class="pkp_navigation_primary_wrapper">
                        <ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list">
                            <li class="">
                                <a href="<?= SITE_URL ?>">
                                    Current
                                </a>
                            </li>
                            <li class="">
                                <a href="<?=WP_SITEURL?>">
                                    Archives
                                </a>
                            </li>
                            <li class="">
                                <a href="<?=WP_SITEURL?>">
                                    Announcements
                                </a>
                            </li>
                            <li class="">
                                <a href="<?=WP_SITEURL .'/about'?>">
                                    About
                                </a>
                                <ul>
                                    <li class="">
                                        <a href="<?=WP_SITEURL?>">
                                            About the Journal
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?=WP_SITEURL?>">
                                            Submissions
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?=WP_SITEURL?>">
                                            Editorial Team
                                        </a>
                                    </li>
                                
                                </ul>
                            </li>
                        </ul>



                    </div>
                </div>
                <div class="pkp_navigation_user_wrapper" id="navigationUserWrapper">
                    <ul id="navigationUser" class="pkp_navigation_user pkp_nav_list">
                        <li class="profile">
                            <a href="<?=WP_SITEURL .'/login'?>">
                                Register
                            </a>
                        </li>
                        <li class="profile">
                            <a href="<?=WP_SITEURL .'/login'?>">
                                Login
                            </a>
                        </li>
                    </ul>

                </div>

            </nav>
        </div><!-- .pkp_head_wrapper -->
    </header><!-- .pkp_structure_head -->

    <div class="pkp_structure_content has_sidebar">
        <div class="pkp_structure_main" role="main">
            <a id="pkp_content_main"></a>

            <div class="page_index_journal">




                <?php
                $content_post = get_post(238);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                //                echo $content;

                ?>



            </div><!-- .page -->

        </div><!-- pkp_structure_main -->

    </div><!-- pkp_structure_content -->



   <?php 
   get_footer();
   
   ?>
</div><!-- pkp_structure_page -->




<!---->
<!--<script src="../../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min9c2a.js?v=3.2.0.2" type="text/javascript"></script><script src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min9c2a.js?v=3.2.0.2" type="text/javascript"></script><script src="../lib/pkp/js/lib/jquery/plugins/jquery.tag-it9c2a.js?v=3.2.0.2" type="text/javascript"></script><script src="../plugins/themes/default/js/lib/popper/popper9c2a.js?v=3.2.0.2" type="text/javascript"></script><script src="../plugins/themes/default/js/lib/bootstrap/util9c2a.js?v=3.2.0.2" type="text/javascript"></script><script src="../plugins/themes/default/js/lib/bootstrap/dropdown9c2a.js?v=3.2.0.2" type="text/javascript"></script><script src="../plugins/themes/default/js/main9c2a.js?v=3.2.0.2" type="text/javascript"></script><script type="text/javascript">-->
<!--    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
<!--        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
<!--        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
<!--    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');-->
<!---->
<!--    ga('create', 'UA-72444210-1', 'auto');-->
<!--    ga('send', 'pageview');-->
<!--</script>-->
<!---->
<!---->
<!--<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.eu01.nr-data.net","licenseKey":"NRJS-50257918abbcb4537bb","applicationID":"131313631","transactionName":"MhBSZQoZWhAHVBAICQtaZUMRV14ME0UKAApKHF5VHQAaEw5H","queueTime":0,"applicationTime":1123,"atts":"HldRE0IDSR4=","errorBeacon":"bam.eu01.nr-data.net","agent":""}</script></body>-->
<!---->
<!-- Mirrored from annalskemu.org/journal/index.php/annals by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 05:54:39 GMT-->
<!---->
<!---->
<!--</html>-->
