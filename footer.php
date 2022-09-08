<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vigil
 */

$current_lang=WPGlobus::Config()->language;
?>
<footer>
    <div class="container">
        <div class="footer_row">
            <div class="logo"> <?php the_custom_logo(); ?></div>
            <div class="main_menu">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'footer_menu',
                        'container' => '',
                        'menu_class'  => 'nav',
                    )
                );
                ?>
            </div>
        </div>
        <div class="footer_contacts">
            <div class="item">
                <picture><img src="<?php echo get_template_directory_uri();?>/img/email.svg"/></picture>
                <div class="txt"><span class="gradient">E-mail:</span><a href="mailto:<?php the_field('e-mail', 'option'); ?>"><?php the_field('e-mail', 'option'); ?></a></div>
            </div>
            <div class="item">
                <picture><img src="<?php echo get_template_directory_uri();?>/img/phone.svg"/></picture>
                <div class="txt"><span class="gradient">Phone:</span><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></div>
            </div>
            <div class="item">
                <picture><img src="<?php echo get_template_directory_uri();?>/img/location.svg"/></picture>
                <div class="txt"><span class="gradient">Address:</span><?php the_field('address_'.$current_lang, 'option'); ?></div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper -->

<?php wp_footer(); ?>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

</body>
</html>
