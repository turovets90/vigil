<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vigil
 */

get_header();
?>

<div class="page_content">
    <div class="container">
        <h1 class="page_title c_title"><?php the_title(); ?></h1>
        <div class="content">

            <?php
            the_post();
            the_post_thumbnail();
            the_content();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
