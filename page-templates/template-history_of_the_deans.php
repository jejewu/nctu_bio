<?php
/*
 *Template Name:history_of_the_deans
 */
?>
<?php get_header(); ?>
<div class="page-history_of_the_deans">

    <div class="container mobile-vice_dean">
        <div id="vice_dean-container">
            <div class="intro-littleTitle">03  歷任院長</div>
            <div class="hd-block_exdeans"></div>
        </div>
    </div>
                  <a class="icon_down icon_down_vice_dean"href="<?php echo site_url(); ?>/staff" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>

</div>
<script>
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_3')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
