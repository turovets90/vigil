<?php
/*
 Template name: Products
 */

get_header();?>

<div class="page_content">
    <div class="container">
        <h1 class="page_title c_title"><?php the_title(); ?></h1>
        <div class="products_list">
            <?php
            $pages = get_pages( [
                'sort_order'   => 'ASC',
                'sort_column'  => 'date',
                'exclude'      => '',
                'include'      => '',
                'child_of'     => 0,
                'parent'       => 17,
                'post_type'    => 'page',
                'post_status'  => 'publish',
            ] );
            $i=1;
            foreach( $pages as $post ){
                setup_postdata( $post );?>
                <div class="item <?php echo ($i==1)?'first':'';?>">
                    <a class="product_item" href="<?php the_permalink(); ?>" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
                        <div class="product_item_title"><?php the_title(); ?></div>
                    </a>
                </div>
           <?php
            $i++;
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php get_footer();?>
