<?php
/* Template Name: members */
get_header();
?>
<!---->
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/classes/post.css" type="text/css" />-->
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/classes/page.css" type="text/css" />-->

<body class="boxed">

<!-- wrapper -->
<div id="wrapper" style="margin-top:-20px;;margin-bottom:0">

    <!-- Top Bar -->

    <!-- /Top Bar -->


    <style>

        /*homepage*/
        body
        {
            /*color: #000;*/
        }
        #topBar ul.top-links>li>a {
            padding: 6px 12px;}


        .hvr ul li{
            /*margin-bottom: 15px;*/
            border-bottom:1px solid #ccc;padding-bottom:2px;}
        .sub-content{
            border-bottom: 2px solid #e9e9e9;
            position: relative;
            margin-bottom: 30px;
        }
        .hvr ul li:last-child{
            margin-bottom: 1px !important;
            border-bottom:none !important;

        }
        h6.h-sub-content {
            display: inline-block;
            letter-spacing: 0.2px;
            font-size: 18px;
            text-transform: capitalize;
            border-bottom: 2px solid #e12121;
            line-height: 20px;
            margin-bottom: -2px;
            width: auto;
            max-width: 100%;

            font-family: 'Copperplate Gothic Light';

            font-weight: bold;
            text-align: justify;
            vertical-align: middle;
            color: #000000;



        }
        p h6.h-sub-content {
            margin: 0 0 20px 0;
            color: #424242;
            font-size: 15px;
            line-height: 24px;
            font-weight: 300;
            letter-spacing: 0.2px;
            text-align: left !important;

        }
        #topMain.nav-pills>li.active>a {
            color: #660000;
        }
        .h-sub-content	p{    margin-bottom:3px !important;margin-top:25px}

        .home img {
            margin-left: 7%;
            margin-top: 8%;
            max-height: 470px;
        }
        #footer>.container {
            padding: 30px 30px 10px 30px;

            margin-bottom: 10px;
            background: #2d2d2d;
            border-top: 8px solid #222;
        }
        #footer>.copyright {
            background-color: rgba(0,0,0,0.2);
            text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
            padding: 5px 0;
            font-size: 13px;
            display: block;
        }
        #footer>.container p{text-align:justify;}
        #footer ul.footer-links>li {
            padding-bottom: 2px;

        }
        .badge {
            background-color: #fff;

            font-size:14px;
            margin-bottom:0px;
            padding: 0;
            color: #FF3300;
            text-transform: uppercase;
            font: bold 0.75em/1.15em Tahoma, Geneva, sans-serif;
        }
        .badge2{    background-color:#FFF8E8  ; padding: 0;}

        #header ul.nav-second-main {
            margin-top: 50px;    }


        .bdrright{
            border-right:1px solid #eee;
        }
        .logo img{
            max-height:60px !important;
            margin-left:-10px;}


        @media screen and (max-width: 768px) {
            #header ul.nav-second-main {
                margin-top: 15px;
            }
            .rightalign{

                margin-right:30px;

            }
            .bdrright{
                border-right:1px solid #fff;


            }
            .logo img{
                max-height:50px !important;}


        }
        @media screen and (max-width: 468px) {
            #header ul.nav-second-main {
                margin-top: 15px;
            }
            .logo img{
                max-height:42px !important;}


        }
        .homeicons .box-icon .box-icon-title>i {
            background-color: #660000;}
        /*
        header
        */

        #header{/* z-index: 10000; */
            width: 100%;
            background: #fff;
            border-bottom: 4px solid #f0f0f0;
            margin: 0;}
        #topBar ul.top-links li.text-welcome {
            color:black;
            font-size: 14px;
            margin-top: 10px;}


        .logo img{
            max-height:50px;}


        @media screen and (max-width: 480px) {
            #header ul.nav-second-main {
                margin-top: 15px;
            }
            #topBar ul.top-links li.text-welcome {
                padding: 0 2px;
                font-size: 12px;
            }
            .logo img{
                height:43px !important;}
            .homeicons .box-icon .box-icon-title > h2 {
                font-size: 14px;

            }
            @media screen and (max-width: 319px) {
                .logo img{
                    height:25px !important;margin-left:-10px;}
            }
        }
        #topMain.nav-pills>li>a {
            color: #1F262D;
            font-weight: 700;
            background-color: transparent;
            padding: 20px 16px 16px;
        }
        #topNav a.logo {
            height: 96px;
            line-height: 96px;
            overflow: hidden;
            display: inline-block;
            margin-left: 20px;
        }
        #topMain.nav-pills>li>a.dropdown-toggle:after { margin-top: 5px;}
        .hvr ul li {

            border-bottom: 1px solid #ccc;
            padding-bottom: 7px;
        }
        #header li.search .search-box {width:400px;    margin-top: 15px;}
        #header li.search .btn{margin-top: 25px;}
        @media screen and (max-width: 768px) {

            #header li.search .search-box {width:100%; top: 30px !important;}



        }
        /*#header.fixed {
           width: 87%;
           margin: auto;}/*

       /*Page level CSs*/

        .descrp p,ol{
            word-wrap: break-word;
            font-size: 17px;
            line-height: 1.6;
            COLOR: #000000;
            font-style: normal;
            text-align: justify;
            font-family: open_sansregular, Verdana,Arial, Helvetica, sans-serif;
        }
        .descrp h2 {
            font-size: 20px;
            font-weight: 600;
            COLOR: #000000;
            text-align: left;
            text-decoration: underline;
            FONT-FAMILY: open_sansregular, Verdana,Arial, Helvetica, sans-serif;}

        .descrp a{
            font-family: open_sansregular, Verdana,Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #039BE5;
            text-align: left;
            outline: none;
            text-decoration: underline;
            cursor: auto;
        }

        .fa-stack-2x {
            color: #660000;
        }

        @media only screen and (max-width: 480px){

            #header #topNav a.logo>img {
                max-height: 35px !important;
            }
    </style>
    <style>
        h2 {
            font-size: 18px;
            margin: 0px 0px 10px 0;
        }
        h4{
            font-size: 13px;
        }
      .single-teacher-img  img{
            width:250px;
        }
        .mb-45 {
            margin-bottom: 45px;
        }
        .single-teacher {
            position: relative;
            box-shadow: 0px 0px 6px 0px rgb(0 0 0 / 15%);
            overflow: hidden;
        }
        .single-teacher-img {
           /*// height: 600px;*/
            line-height: 0;
            padding-bottom: 100px;
            height: 350px;
        }
        }
       .single-teacher-img img{
           width: 250px;
       }
        .single-teacher-content {
            padding: 0px 0 30px;
        }
        .single-teacher-content {
            background: #fff none repeat scroll 0 0;
            bottom: -40px;
            left: 0;
            padding: 20px 0 30px;
            position: absolute;
            width: 100%;
            -webkit-transition: all 0.5s ease 0s;
            -o-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }
    </style>
    <?php

    require get_template_directory() . '/templete-parts/header/entry-header.php';
    ?>

    <div class="container" style="background-color:white;">



        <div class="row" >
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img style="width:250px;" src="https://psimj.com/wp-content/uploads/elementor/thumbs/akbar.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Prof. Muhammad Akbar Ch</h2>
                        <h4>A renowned cardiologist &amp; former principal of FJMC. Currently serving as principal ANMC, Lahore</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/advisor2-3-pa0pmzer4hz1d8zhgd6o7pzt4nbf6lr4ixt1jzv8lg.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Prof. AKHTAR SHERIN</h2>
                        <h4>Professor of Medicine Khyber Medical University, Chief Editor Journal of Khyber Medical University, KPK.</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/advisor3-pa0pn363vu46nou0uet6hp1ni6sw1e61vgezh3pnwk.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Prof. Saqib Saeed</h2>
                        <h4>Professor of Pulmonary Medicine, King Edward Medical University &amp; Chief Editor, Annals of KEMU, Lahore.</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/tasleem.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Dr. Tasleem Akhtar</h2>
                        <h4>Ex- Chairperson PMRC, Ex-Consultant Research &amp; Development, WHO. Pediatrician by profession but dedicated to research.</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/syed.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Prof. Syed Khalid Shah</h2>
                        <h4>Serving as Professor of Medicine, Bolan Medical College Quetta, Well-known in the circle of Internal Medicine.</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/saira.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Prof. Saira Afzal</h2>
                        <h4>MBBS. MCPS (Medicine). FCPS (Medicine). PhD. MME
                            Dean of Public health and preventive medicine, KEMU. </h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/naghme.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Dr. Naghme Rehan</h2>
                        <h4>Former Chief of Pakistan Medical Research Council. An esteemed researcher &amp; scholar.</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/bikha.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Prof. Bikha Ram Devrajani</h2>
                        <h4>VC, Liaquat University of Medical and Health Sciences, Jamshoro. Honourary Professor Academic Union Oxford (UK)</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <img src="https://psimj.com/wp-content/uploads/elementor/thumbs/shwaqar.jpg" alt="teacher">
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2>Prof. S. H. Waqar</h2>
                        <h4>Professor of Surgery & Head. </br> 
                        Department of General Surgery. </br>
                        Pakistan Institute of Medical Sciences. </br> 
                        Shaheed Zulfiqar Ali Bhutto Medical Univesity Islamabad.</h4>
                        <!--<ul>-->
                        <!--    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>-->
                        <!--    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>-->
                        <!--    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>-->
                        <!--    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>

        </div>
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
