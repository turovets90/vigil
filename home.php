<?php
/*
 Template name: Home
 */

get_header();?>

<section class="main_slider">
    <div class="container search_lang">
        <?php get_search_form(); ?>
        <?php
        wp_nav_menu(
            array(
                'menu' => 'lang_menu',
                'container' => '',
                'menu_class'  => 'lang_menu',
            )
        );
        ?>
    </div>

    <?php if( have_rows('slider', 13) ): ?>
        <div class="slider">
            <?php while( have_rows('slider', 13) ): the_row(); ?>
                <div class="slider_item" style="background-image:url(<?php the_sub_field('image'); ?>)">
                    <div class="container">
                        <div class="slider_item_title"><?php the_sub_field('text'); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>
<section class="main_about">
    <div class="container">
        <div class="main_about_row">
            <div class="col_left">
                <div>
                    <div class="section_title"><?php the_field('about_-_title'); ?></div>
                    <div class="desc"><?php the_field('about_-_desc'); ?></div><a class="read_more_btn" href="<?php the_field('about_-_link'); ?>"><?php the_field('about_-_text_link'); ?></a>
                </div>
            </div>
            <div class="col_right"><img src="<?php the_field('about_-_image'); ?>"/></div>
        </div>
    </div>
</section>
<section class="main_news">
    <div class="container">
        <div class="section_title">NEWS</div>






        <div class="news_list">


            <?php
            $news = get_posts( array(
                'numberposts' => 3,
                'category'    => 3,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'post_type'   => 'post',
            ) );
            global $post;
            foreach( $news as $post ){
                setup_postdata( $post );?>

                <div class="item">
                    <div class="news_item">
                        <div class="news_image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
                            <div class="news_date"><?php the_date(); ?></div>
                        </div><a class="news_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="news_excerpt"><?php the_excerpt(); ?></div><a class="read_more" href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </div>

            <?php  }
            wp_reset_postdata(); // сброс
            ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>
