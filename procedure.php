<?php
/*
 Template name: Procedure
 */

get_header();?>

<div class="page_content">
    <div class="container">

        <?php if( have_rows('stages') ): ?>
            <div class="stage_list">
                <?php
                $i=1;
                while( have_rows('stages') ): the_row(); ?>

                    <div class="stage_item">
                        <picture><img src="<?php the_sub_field('image'); ?>"/></picture>
                        <div class="txt">
                            <div class="stage_title gradient"><?php the_sub_field('stage'); ?> <?php echo $i; ?></div>
                            <div class="stage_desc"><?php the_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>

                <?php
                $i++;
                endwhile; ?>
            </div>

        <?php endif; ?>
        <?php the_post(); the_content(); ?>
    </div>
</div>


<?php get_footer();?>
