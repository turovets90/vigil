<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vigil
 */

get_header();
?>


<div class="page_content">
    <div class="container">
        <h1 class="page_title c_title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'vigil' ); ?></h1>


        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'vigil' ); ?></p>

        <?php
        get_search_form();

        the_widget( 'WP_Widget_Recent_Posts' );
        ?>

        <div class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'vigil' ); ?></h2>
            <ul>
                <?php
                wp_list_categories(
                    array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                        'exclude'     => 17,
                    )
                );
                ?>
            </ul>
        </div><!-- .widget -->

        <?php
        /* translators: %1$s: smiley */
        $vigil_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'vigil' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$vigil_archive_content" );

        the_widget( 'WP_Widget_Tag_Cloud' );
        ?>

    </div>
</div>



<?php
get_footer();
