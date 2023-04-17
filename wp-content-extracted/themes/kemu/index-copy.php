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
?>

<div class="container" style="background-color:white;">

    <style type="text/css">
        .articlelist{
            border-right: 2px solid  #333;
            font-family: "Times New Roman", Times, serif !important;
            color: #333;
            font-size: 9px;
            margin-right: 2px;
            padding: 0 2px 0 2px !important;
            border-bottom: none !important;
            display: inline;


        }
        .articlelist a{ color: #FF3300 !important;}
        .articlelist2 a{ color: #FF3300 !important;}
        .articlelist2{
            font-family: "Times New Roman", Times, serif !important;

            color: #333;
            font-size: 9px;
            margin-right: 2px;
            padding: 0 5px 0 2px !important;
            border-bottom: none !important;
            display: inline;
        }
        .ulwid{
            padding-top: 5px !important;
            padding-bottom: 20px !important;

        }

        .ulwid2{

            padding-bottom: 20px !important;
            padding-top:1px !important;


        }
        .ulwid3{
            padding-top: 12px !important;
            padding-bottom: 20px !important;
        }

        .marginads{
            margin-bottom: 1px !important;
        }


    </style>

    <div class="row" style="    padding: 1%;">



        <div class="col-md-12 col-sm-12 col-xm-12" >
            <div class="sub-content">
                <h6 class="h-sub-content">
                    <p >
                        <strong>
                            LATEST RESEARCH (VOL 27, ISSUE 1 - 2021)
                        </strong>

                    </p>
                </h6>
            </div>
        </div>

         <?php if(have_posts()):while (have_posts()) : the_post();?>
        <div class="col-md-4 col-sm-6 col-xm-12" >
            <div class="latest-blog-posts hvr">
                <div style="background-color:#FFF8E8;border:1px solid #eee">
                    <ul class="latest-posts bdrright" style="padding:5px 3% 1px 3%;">

                        <span class="badge badge2">EDITORIAL</span><br />
                        <li class="ulwid marginads 27-1--1"><a href="">
                                COVID-19 Vaccines
                            </a>
                            <br /><span>Saira Afzal, Mehreen Nasir</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4391">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4391/2512">PDF</a>

                                </li>
                            </ul>

                        </li>
                        <span class="badge badge2">GUEST EDITORIAL</span><br />
                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4392">
                                Seven-Flag Approach to Total Sanitation: Sharing Results of a Pilot in Nepali Schools
                            </a>
                            <br /><span>Sudan Raj Panthi, Hyder Khurshid Alam, Ehsanullah Tarin</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4392">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4392/2513">PDF</a>

                                </li>

                            </ul>

                        </li>
                        <span class="badge badge2">GUEST EDITORIAL</span><br />
                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4393">
                                COVID-19 Infection
                            </a>
                            <br /><span>Waqar Haider Gaba</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4393">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4393/2514">PDF</a>

                                </li>

                            </ul>

                        </li>

                        <span class="badge badge2">LETTERS TO EDITORS</span><br />
                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4424">
                                The Impact of Covid-19: A Pandemic after Effects in Institutions of Pakistan
                            </a>
                            <br /><span>Asma Aleem, Maria idrees, Maria Gul, et al.
					</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4424">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4424/2537">PDF</a>
                                </li>
                            </ul>
                        </li>
                        <span class="badge badge2">CASE REPORTS</span><br />
                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4418">
                                Clouston’s Syndrome-A Case Report
                            </a>
                            <br /><span>Ghazala Butt, Abdul Latif, Usma Ifthkhar,  et al.
					</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4418">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4418/2531">PDF</a>

                                </li>
                            </ul>

                        </li>

                        <span class="badge badge2">PERSPECTIVES</span><br />
                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4419">
                                Intensive Care Unit Management of the COVID-19
                            </a>
                            <br /><span>Saad Javed, Shahzaib Ahmad, Zermeen Naveed, et al.

					</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4419">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4419/2532">PDF</a>
                                </li>
                            </ul>
                        </li>


                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4420">
                                Uncommon Presentations of COVID-19
                            </a>
                            <br /><span>Muhammad Adnan Aasim, Muhammad Fayzan Mehmood, Arsal Gill, et al.

					</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4420">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4420/2533">PDF</a>
                                </li>
                            </ul>
                        </li>

                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4421">
                                Lung Cancer Services and the COVID-19 Pandemic
                            </a>
                            <br /><span>Tehseen Haider, Abdul Raheem Arshad, Abdullah Arshad, et al.

					</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4421">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4421/2534">PDF</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4422">
                                Covid-19 and How it has Changed Research
                            </a>
                            <br /><span>Muhammad Abubakar Shahid Chishti, Shahzaib Farid, Anum Sohail, et al.

					</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4422">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4422/2535">PDF</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ulwid marginads 27-1--1"><a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4423">
                                Psychological Effects of COVID-19
                            </a>
                            <br /><span>Salma Yousaf, Rabeea Ahmed, Afzal Javed

					</span><br />
                            <ul style="float:right;">
                                <li class="articlelist">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4423">Full Text</a>
                                </li>
                                <li class="articlelist2">
                                    <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4423/2536">PDF</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <!--COLUMN 1-->
                <ul class="latest-posts bdrright" style="padding:5px 3%;">

                    <span class="badge">ORIGINAL ARTICLE</span><br />
                    <li class="ulwid 27-1--1">
                        <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4416">
                            Covid-19: From Pandemic to Epidemic an Ostrich Syndrome Causing Desensitization among Urban and Suburban Masses
                        </a>
                        <br /><span>
				Bushra Naz, Muhammad Kashif Fida, Muhammad Zohaib Khan, et al.
			</span><br />
                        <ul style="float:right;">
                            <li class="articlelist">
                                <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4416">Full Text</a>
                            </li>
                            <li class="articlelist2">
                                <a href="https://www.annalskemu.org/journal/index.php/annals/article/view/4416/2530">PDF
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>


        <?php endwhile;else:?>
        <p><?php esc_html_e('Sory no posts') ?></p>
        <?php endif; ?>

    </div>


    <div class="text-center">
        <a href="" class="btn btn-primary btn-lg margin-top-20 margin-bottom-20"  style="display: block; width: 100%;">View More</a>
    </div>











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
            <h4><a href="">Register Here</a></h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <span class="fa-stack fa-4x">
                         <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-sign-in fa-stack-1x fa-inverse"></i>
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
            </div>  </div>
        <div class="row">

            <div class="col-md-6 col-sm-12 col-xm-12" >
                <ul class="list-unstyled">
                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/127">
                            <span class="pull-right text-black size-14">July - September 2020</span>
                            VOLUME 26  - ISSUE 3
                        </a>
                    </li>
                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/123">
                            <span class="pull-right text-black size-14">April - June 2020</span>
                            VOLUME 26 - ISSUE 2
                        </a>
                    </li>
                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/113">
                            <span class="pull-right text-black size-14">January - March 2020</span>
                            VOLUME 26 - ISSUE 1
                        </a>
                    </li>
                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/112">
                            <span class="pull-right text-black size-14">October - December 2019</span>
                            VOLUME 25 - ISSUE 4
                        </a>
                    </li>


                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/111">
                            <span class="pull-right text-black size-14">July - September 2019</span>
                            VOLUME 25 - ISSUE 3
                        </a>
                    </li>




                </ul>

            </div>
            <div class="col-md-6 col-sm-12 col-xm-12" ><ul class="list-unstyled">

                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/109">
                            <span class="pull-right text-black size-14">April - June 2019</span>
                            VOLUME 25 - ISSUE 2
                        </a>
                    </li>
                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/107">
                            <span class="pull-right text-black size-14">January - March 2019</span>
                            VOLUME 25 - ISSUE 1
                        </a>
                    </li>
                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/106">
                            <span class="pull-right text-black size-14">October - December 2018</span>
                            VOLUME 24 - ISSUE 4
                        </a>
                    </li>

                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/105">
                            <span class="pull-right text-black size-14">July - September 2018</span>
                            VOLUME 24 - ISSUE S
                        </a>
                    </li>
                    <li class="clearfix border-bottom-dotted relative margin-bottom-10">
                        <a class="clearfix size-20 block relative padding-10" href="https://www.annalskemu.org/journal/index.php/annals/issue/view/102">
                            <span class="pull-right text-black size-14">April - June 2018</span>
                            VOLUME 24 - ISSUE 2
                        </a>
                    </li>




                </ul>
            </div>

        </div>

        <div class="text-center">

            <a href="" class="btn btn-primary btn-lg margin-top-20"  style="display: block; width: 100%;">View More</a>
        </div>
    </section>
    <!-- /Past Issues -->

    <div class="row" style="background: white; padding: 1%;">
        <div class="col-md-12 col-sm-12 col-xm-12" >
            <div class="sub-content">
                <h6 class="h-sub-content">
                    <p >
                        <strong>
                            ANNALS KEMU IS INDEXED ON
                        </strong>

                    </p>
                </h6>
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

</div>




<?php
get_footer();

