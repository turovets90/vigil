<?php
/*
 Template name: Product
 */

get_header();?>

<div class="page_content">
    <div class="container">
        <h1 class="page_title c_title"><?php the_title(); ?></h1>
        <div class="product_row">
            <div class="col_left">
                <ul class="sidebar_menu">
                    <?php
                    $current_post=get_the_ID();
                    $pages = get_pages( [
                        'sort_order'   => 'ASC',
                        'sort_column'  => 'date',
                        'exclude'      => $current_post,
                        'include'      => '',
                        'child_of'     => 0,
                        'parent'       => 17,
                        'post_type'    => 'page',
                        'post_status'  => 'publish',
                    ] );
                    $i=1;
                    foreach( $pages as $post ){
                        setup_postdata( $post );?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
                        $i++;
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <?php if(get_the_post_thumbnail()): ?>
                <div class="col_right">
                    <div class="product_img">
                        <img src="<?php the_post_thumbnail_url(); ?>"/>
                        <div class="product_title"><?php the_title(); ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="product_desc">
          <?php
          the_post();
          the_content();
          ?>
        </div>
    </div>
</div>

<?php get_footer();?>
