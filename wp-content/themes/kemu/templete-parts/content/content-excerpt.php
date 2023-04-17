<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="col-md-4 col-sm-6 col-xm-12" >
    <div class="latest-blog-posts hvr" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div style="background-color:#FFF8E8;border:1px solid #eee">
            <ul class="latest-posts bdrright" style="padding:5px 3% 1px 3%;">

                <span class="badge badge2"><?php get_post_type()?></span>

                <br />
                <li class="ulwid marginads 27-1--1">
                    <?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>
                    <br />

                    <span><?php get_author_name()?></span>
                    <br />
                    <ul style="float:right;">
                        <li class="articlelist">
                            <a href="<?php get_post_permalink()?>">Full Text</a>
                        </li>
                        <li class="articlelist2">
                            <a href="">PDF</a>

                        </li>
                    </ul>

                </li>

            </ul>
        </div>
    </div>
</div>

