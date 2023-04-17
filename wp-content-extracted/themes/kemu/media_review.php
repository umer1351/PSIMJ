<?php
/* Template Name: media_Review */
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/classes/post.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/classes/page.css" type="text/css" />
<div class="pkp_structure_page">
<?php

require get_template_directory() . '/templete-parts/header/entry-header.php';
?>

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



  
	
        <div class="container">

            <div class="row">

                <div class="col-md-4" style="padding:20px;">


                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                King Edward Medical University,<br>
                                Lahore,54000<br>
                                Pakistan<br>
                            </li>
                            <li class="footer-sprite phone">
                                Phone: +92 (42) 99211145-53
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:publications@kemu.edu.pk">publications@kemu.edu.pk</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>
                <div class="col-md-4">

                    <!-- Links -->
                    <h4 class="letter-spacing-1" style="    border-bottom: 1px solid #212121;margin-bottom:10px;">
                        Quick Links</h4>
                    <ul class="footer-links list-unstyled">

                        <li><a href="https://www.annalskemu.org/journal/index.php/annals/issue/current">Current Issue</a></li>
                        <li><a href="journal/index.php/annals/issue/archive.html">Archives</a></li>
                        <li><a href="tutorial.html">Video Tutorial</a></li>
                        <li><a href="Downloads/Letter%20of%20Authorship(Both%20Forms%20are%20Compulsory).zip">Letter of Authorship</a></li>
                        <li><a href="Downloads/Review%20Policy.pdf">Review Policy</a></li>
                        <li><a href="Downloads/Qualitative%20Guidelines.pdf">Qualitative Guidelines</a></li>
                        <li><a href="Downloads/Annals%20Submission%20Guidlines%20in%20PowerPoint%20Presentation.ppsx">Submission Guidelines</a></li>
                        <li><a href="https://kemu.edu.pk/">KEMU Website</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                    <!-- /Links -->

                </div>
                <div class="col-md-4">

                    <!-- Disclaimer -->
                    <h4 class="letter-spacing-1" style="    border-bottom: 1px solid #212121;margin-bottom:10px;">Disclaimer</h4>
                    <ul class="footer-posts list-unstyled">
                        <li>
                            <p style="margin-bottom:5px;">
                                All articles published in the Annals of KEMU represent the views of the authors and do not reflect any official policy of the Annals. All rights are reserved with the Annals. No part of the journal may be reproduced by any form or by any means without written permission from the Editor.



                            </p>
                        </li>

                    </ul>
                    <!-- /Disclaimer -->


                    <!-- Latest Blog Post -->
                    <h4 class="letter-spacing-1" style="    border-bottom: 1px solid #212121;margin-bottom:10px;">Annual Subscription Rates (Print Version)</h4>
                    <ul class="footer-links list-unstyled">
                        <li>
                            <a>
                                Inland within Pakistan: Rs. 2,000.00



                            </a>
                        </li>
                        <li>
                            <a>
                                International: US$ 100.00



                            </a>
                        </li>

                    </ul>
                    <!-- /Latest Blog Post -->


                </div>





            </div>

        </div>

        <div class="copyright">
            <div class="container" style="text-align:center;">

                © All Rights Reserved, King Edward Medical University Lahore.
            </div>
        </div>
    </footer>
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
