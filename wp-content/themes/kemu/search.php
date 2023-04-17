
<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>
<?php

global $query_string;

wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );

?>

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



<!--header-->
    <?php
    require get_template_directory() . '/templete-parts/header/entry-header.php';
    ?>


    <style>
    .wp-block-file .wp-block-file__button {
        /* background: #32373c; */
        border-radius: 2em;
        color: #fff;
        font-size: 16px;
        padding: .5em 2em;
    }
    a.wp-block-file__button {
        background: none !important;
        /*border: 1px solid #660000 !important;*/
        /*color: #660000 !important;*/
        display: inline-block;
        padding: 0 1em;
        text-decoration: none;
    }
    a.wp-block-file__button {
        padding: 0px!important;
        border: none!important;
    }
</style>
<div class="container" style="background-color:white;">



   


<?php if ( have_posts() ) {
    ?>
    <header class="page-header alignwide">
        <h1 class="page-title">
            <?php
            printf(
                /* translators: %s: Search term. */
                esc_html__( 'Results for "%s"', 'kemu' ),
                '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
            );
            ?>
        </h1>
    </header><!-- .page-header -->

    <div class="search-result-count default-max-width">
        <?php
     
           
           $length =  (int) $wp_query->found_posts;

           // print_r($wp_query);
       
        $index = 0;
        for ($i=0; $i < $length; $i++) { ?>

            <div class="col-md-3 col-sm-6 col-xm-12" style="    margin-bottom: 20px;" >
                <div class="latest-blog-posts hvr" style="height: 160px!important;" >
                    <?php
                    $counter++;

                    if($counter % 3 == 1){
                        $color= '#FFF8E8';
                    }
                    else{
                        $color= '#fff';
                    }
                    ?>
                    <div style="background-color:<?php echo $color?>;border:1px solid #eee;height: 160px">
                        <ul class="latest-posts bdrright" >
                                    <span class="badge badge2">

                                        <!-- here -->


                                    </span><br />
                            <li class="ulwid marginads 27-1--1">

                                <?php

                                if (strlen($wp_query->posts[$index]->post_title) > 80)

                                    echo $str = substr($wp_query->posts[$index]->post_title, 0, 75) . '...';
                                else echo $wp_query->posts[$index]->post_title;
                                //  the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                <br />
                                <span> Author-  <?php


                                    $arr= get_post_meta( $wp_query->posts[$index]->ID, 'post_authors', true );;

                                    if (strlen($arr) > 20)

                                        echo $str1 = substr($arr, 0, 10) . '...';
                                    else echo $arr;
                                    ?></span>
                                <br />
                                <ul style="float:right;height: 20px;display: flex">
                                    <li class="articlelist" style="margin-top:1px;font-size:16px">
                                         <?php if ( is_user_logged_in() ) { ?>  
                                                     <a href="https://psimj.com/article?post-slug=<?php echo $wp_query->posts[$index]->ID?>">Abstract</a>
                                                    <?php }else{ ?>
                                                        <!-- <a href="https://psimj.com/login/">Abstract</a> -->
                                                         <a href="https://psimj.com/article?post-slug=<?php echo $wp_query->posts[$index]->ID?>">Abstract</a>
                                                       
                                                 
                                               <?php } ?>
                                    </li>
                                    <li class="articlelist2">
                                          <?php echo $wp_query->posts[$index]->post_content?> 
                                       

                                    </li>
                                </ul>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>


         <!--   echo $wp_query->posts[$index]->post_title.' ---- ';
            ; -->
        <?php

        $index++;
         } 
         
        
        ?>
    </div><!-- .search-result-count -->
    <?php
    // Start the Loop.
    // while ( have_posts() ) {
    //     the_post();

        
    //      * Include the Post-Format-specific template for the content.
    //      * If you want to override this in a child theme, then include a file
    //      * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         
      
    // } // End the loop.

    
    

    // Previous/next page navigation.
  

    // If no content, include the "No posts found" template.
} else { ?>
    <div class="search-result-count default-max-width" style="margin-top: 20px;">
       
       

        <h3 style="text-align:center;">No Result found !</h3>

        
    </div>

<?php } ?>


    


      
  


</div>

<?php
get_footer();
?>
</div>






