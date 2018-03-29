<?php
/*
 *Template Name:default_page
 */
?>
<?php
get_header();
$translate = qtranxf_getLanguage()!='zh' ? true : false;
?>
<div class="page-default">
    <div class="container">

        <?php get_template_part('page-templates/content') ?>

    </div>
</div>

<!-- <?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_2')); ?> -->
<?php get_footer(); ?>
