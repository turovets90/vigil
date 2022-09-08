<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
get_sidebar();
get_footer();
