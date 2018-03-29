<?php
/*
 *Template Name:en-history_of_the_deans
 */
?>
<?php get_header('en_header'); ?>
<div class="page-history_of_the_deans">

    <div class="container mobile-vice_dean">
        <div id="vice_dean-container">
            <div class="intro-littleTitle">03  List of Deans</div>
	    <div class="intro-bigTitle">Timetable</div>
	    <hr class="history_of_the_deans_hr"></hr>
	    <p class="history_of_the_deans_text">1979 - 1983 Prof. KUO, NAN-HUNG</br>1983 - 1984 Prof. ZHENG, GUO-SHUN, Dept. of Applied Mathematics</br>1984 - 1990 Prof. GOU, YI-SHUN, Dept. of Electrophysics</br>1990 - 1993 Prof. KUO, TSANG-HAI, Dept. of Applied Mathematics</br>1993 - 1996 Prof. CHUU, DER-SAN, Dept. of Electrophysics</br>1996 - 2002 Prof. LIN, SONG-SUN, Dept. of Applied Mathematics</br>2002 - 2005 Prof. CHANG, FENG-CHIH, Dept. of Applied Chemistry</br>2005 - 2008 Prof. LEE, YUAN-PERN, Dept. of Applied Chemistry</br>2008 - 2011 Prof. JUANG, JENH-YIH, Dept. of Electrophysics</br>2011 - 2014 Prof. LU, HENRY HORNG-SHING, Inst. of Statistics</p>
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
