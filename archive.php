<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vigil
 */

get_header();
?>

<div class="page_content">
    <div class="container">
        <h1 class="page_title gradient"><?php the_archive_title(); ?></h1>

        <div class="news_list2">
        <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                <div class="item">
                    <a class="news_item" href="<?php the_permalink(); ?>">
                        <picture><img src="<?php echo get_the_post_thumbnail_url(); ?>"/></picture>
                        <div class="txt">
                            <div class="news_title gradient"><?php the_title(); ?></div>
                            <div class="news_excerpt"><?php the_excerpt(); ?></div>
                        </div>
                    </a>
                </div>
            <?php }
        }
        ?>
        </div>

    </div>
</div>

<?php ;
get_footer();
