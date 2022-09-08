<?php
/*
 Template name: About
 */

get_header();?>


<div class="page_content">
    <div class="container">
        <h1 class="page_title c_title"><?php the_title(); ?></h1>
        <div class="content">
            <?php
            the_post();
            the_content();
            ?>
        </div>
    </div>
</div>



<?php get_footer();?>
