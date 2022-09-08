<?php
/*
 Template name: Contacts
 */

get_header();?>

<div class="page_content">
    <div class="container">
        <h1 class="page_title c_title"><?php the_title(); ?></h1>
        <div class="c_row">
            <div class="col_left">
                <div class="requisites">
                   <?php
                   the_post();
                   the_content();
                   ?>
                </div>
            </div>
            <div class="col_right">
                <div class="map">
                    <?php the_field('map'); ?>
                </div>
            </div>
        </div>
        <div class="c_row2">
            <div class="c_title"><?php the_field('business_hours_-_title'); ?></div>
            <?php if( have_rows('business_hours_-_cols') ): ?>
                <div class="row">
                    <?php while( have_rows('business_hours_-_cols') ): the_row(); ?>
                        <div class="col">
                            <?php the_sub_field('text'); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="c_form">
            <div class="c_title"><?php the_field('application_-_title'); ?></div>
           <?php echo do_shortcode('[contact-form-7 id="6" title="contact form - en"]');?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
