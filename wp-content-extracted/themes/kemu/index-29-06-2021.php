<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
function get_last_child() {

    $categories = get_the_category();
    $last_category = $categories[0];

    foreach($categories as $category) {
        if($category->parent == $last_category->cat_ID ) {
            $last_category = $category;
        }
    }
    return $last_category->cat_ID;

}
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



    <div class="row" style="    padding: 1%;">

<?php

$index=0;
$all_categories= get_categories(array(
    'number' => 2,
    'hide_empty' => 0,
    'orderby' => 'ID',
    'parent'=>0,
    'order' => 'DESC',));
//print_r($all_categories);
foreach( $all_categories as $single_category ){
    //for each category, get the ID
    $catID = $single_category->cat_ID;
    $index++;
?>

        <div class="col-md-12 col-sm-12 col-xm-12" >
            <div class="sub-content">
                <h6 class="h-sub-content">
                    <p >
                        <strong>
                            <?php
                    $ver= ($index == 1 )? "LATEST RESEARCH": "Previous RESEARCH";

                            ?>
                            <?=$ver ?> (<?php echo $single_category->name ?> - 2021)
                        </strong>

                    </p>
                </h6>
            </div>
        </div>

        <?php

        $category_last_child =get_categories(array(
            'number' => 1,
            'hide_empty' => 0,
            'orderby' => 'ID',
            'parent'=>$single_category->cat_ID,
            'order' => 'DESC',
           ));
//        print_r($category_last_child);
//        die;
        if(count($category_last_child) > 0){

            $subcat=  $category_last_child[0]->cat_ID;


        }



        $cat_id = isset($subcat)? $subcat :$single_category->cat_ID ;
        $args = array( 'posts_per_page' => 15, 'offset'=> 0, 'category' => $cat_id );
        $myposts = get_posts( $args );
//        print_r($myposts);
//        echo count($myposts);

        $counter=0;

        foreach ($myposts as $post){

                /*
                 * Include the post format-specific template for the content.
                 */
                ?>

                <div class="col-md-4 col-sm-6 col-xm-12" id="post-<?=$post->ID; ?>"  >
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

                                    <?php
                                    echo get_post_meta( $post->ID, 'post_kind', true );



                                   // $post->post_status
                                    ?>


                                </span><br />
                                <li class="ulwid marginads 27-1--1">

                                        <?php

                                        if (strlen($post->post_title) > 100)

                                           echo $str = ucwords(substr($post->post_title, 0, 95) . '...');
                                      else echo ucwords($post->post_title);
                                        //  the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>

                                    <br />
                                    <span> author-	<?php


                                      $arr= get_post_meta( $post->ID, 'post_authors', true );;

                                        if (strlen($arr) > 20)

                                            echo $str1 = substr($arr, 0, 10) . '...';
                                        else echo ucwords($arr);
                                        ?></span><br />
                                    <ul style="float:right;height: 20px;display: flex">
                                        <li class="articlelist" style="margin-top:1px;font-size:16px">
                                            <a href="http://92.205.28.225:81/article?post-slug=<?php echo $post->ID?>">Full Text</a>
                                        </li>
                                        <li class="articlelist2">
                                           <?php echo $post->post_content?>

                                        </li>
                                    </ul>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
    <?php



            // Previous/next page navigation.


        }

        ?>


    </div>


    <div class="text-center">
        <a href="http://92.205.28.225:81/volume-posts?volume=<?php echo $catID?>" class="btn btn-primary btn-lg margin-top-20 margin-bottom-20"  style="display: block; width: 100%;">View More</a>
    </div>

    <?php }?>



    <div class="row"  style="background: white; padding: 1%;">
        <div class="col-md-12 col-sm-12 col-xm-12">
            <div class="sub-content">
                <h6 class="h-sub-content">
                    <p >
                        <strong>
                            IMPORTANT LINKS
                        </strong>

                    </p>
                </h6>
            </div>
        </div>  </div>

    <div class="row text-center services" style="background: white;padding: 1%;">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-user-plus fa-stack-1x fa-inverse"></i>
                        </span>
            <h4><a href="<?=WP_SITEURL .'/register'?>">Register Here</a></h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <span class="fa-stack fa-4x">
                         <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
            <h4><a href="">New Submission</a></h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <span class="fa-stack fa-4x">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-film fa-stack-1x fa-inverse"></i>
                        </span>
            <h4><a href="">Current Issue</a></h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <span class="fa-stack fa-4x">
                           <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-file-archive-o fa-stack-1x fa-inverse"></i>
                        </span>
            <h4> <a href="">Archives</a></h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <span class="fa-stack fa-4x">
                             <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-list-alt fa-stack-1x fa-inverse"></i>
                        </span>
            <h4> <a href="">Instructions for Authors</a></h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <span class="fa-stack fa-4x">
                          <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-clipboard fa-stack-1x fa-inverse"></i>
                        </span>
            <h4><a href="">Instructions for Reviewers</a></h4>
        </div>

    </div>


    <!-- Past Issues -->
    <section class="padding-top-10 padding-bottom-10" style="padding: 1%;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xm-12" >
                <div class="sub-content">
                    <h6 class="h-sub-content">
                        <p >
                            <strong>
                                PAST <strong>ISSUES</strong>
                            </strong>

                        </p>
                    </h6>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
$parent_categories = get_categories( 'parent=0' );

foreach ( $parent_categories as $parent_category ) {
    // Fetch child categories
    $args = array(
        'parent' => $parent_category->term_id
    );

    $categories = get_categories( $args );

//    $args = array(
//                'hide_empty' => 0,
//                'orderby' => 'ID',
//                'parent'=>0,
//                'order' => 'DESC',
//            );
            $categories = get_categories( $args );

            $first = true;
            global $wpdb;
//    $parent = get_cat_name($category[0]->category_parent);
//    if (!empty($parent)) {
//        echo $parent;
//    } else {
//        echo $category[0]->cat_name;
//    }
            foreach ($categories as $category) {

                ?>
                <div class="col-md-6 col-sm-12 col-xm-12" >
                    <ul class="list-unstyled">
                        <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                            <a class="clearfix size-20 block relative padding-10" href="">
                                <span class="pull-right text-black size-14">July - September 2020</span>
                             <?php echo $parent_category->name ?> -  <?php echo $category->cat_name ?>
                            </a>
                        </li>

                    </ul>

                </div>
            <?php }

}
            ?>
        </div>
        <div class="text-center">

            <a href="" class="btn btn-primary btn-lg margin-top-20"  style="display: block; width: 100%;">View More</a>
        </div>
    </section>
    <!-- /Past Issues -->

    <div class="row" style="background: white; padding: 1%;">
       
        <div class="col-md-12 col-sm-12 col-xm-12" style="padding:1px 5%;">

            <div class="sub-content" style="margin-bottom: 2px;">
               <!-- <h6 class="h-sub-content">
                    <p>
                        <strong>
                            RESEARCH GATE STATISTICS
                        </strong>

                    </p>
                </h6> -->
            </div>
            <div class="researchgate rightalign">
 <a href="">
                <img class="img-responsive" src="<?php  echo get_template_directory_uri();?>/images/group.png" style="" alt="jornals jpsim">
            </a>
			</div>
        </div>  </div>
    <div style="background: white; padding: 1%;">
        <ul class="row clients-dotted list-inline" >
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Directory%20of%20Open%20Access%20Journals%20(DOAJ).jpg" alt="client" />
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/ebscohost-research-databases.png" alt="client" />
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/EMRO%20Indexus%20Medicus%20of%20WHO.gif" alt="client" />
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Google%20Scholar.jpg" alt="Google Scholar" />
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Open%20Archives%20Initiative.gif" alt="pen Archives Initiative" />
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 nobdr">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Pak%20MediNet.gif" alt="Pak MediNet" />
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 nobdr">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/PKP%20Harvester%20Database.png" alt="PKP" />
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 nobdr">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/ResearchGate.png" alt="ResearchGate" />
                </a>
            </li>


            <li class="col-md-6 col-sm-6 col-xs-6 nobdr" style="border-bottom:1px dashed rgba(0,0,0,0.3);max-height: 100px;">
                <a href="">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/ADL.png" alt="ADL" />
                </a>
            </li>
            <li class="col-md-6 col-sm-6 col-xs-6 nobdr" style="border-bottom:1px dashed rgba(0,0,0,0.3);max-height: 100px;">
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/clarivate.png" alt="Clarivate" />
                </a>
            </li>

        </ul>
    </div>

<?php
get_footer();
?>
</div>






