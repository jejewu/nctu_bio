<?php
/*
 *Template Name:en-MOST_subsided_projects
 */
?>
<?php get_header(en_header); ?>
<div class="page-most_projects">
    <div class="container">
        <div class="ra-block mp-mobile">
            <p class="subtitled mp-title1">01 重點研究</p>
            <p class="subtitle mp-title2">科技部補助專題研究計畫</p>
            <a href="<?php echo site_url(); ?>/research_achievements"><div class="ra-btn mp-btn1"></div></a>
            <div class="ra-btn mp-btn2"></div>
            <div class="clear_both"></div>
            <!--<div class="mp-rec_btn mp-rec_btn1 subtitled">數統領域</div>
            <div class="mp-rec_btn mp-rec_btn2 subtitled">數學建模與科學計算</div>-->
            <div class="clear_both"></div>
            <!--核定件數-->
         <div class="mp-block-1">
            <div class="mp-item_title mp-subtitle">核定件數</div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">105年度</div>
                <div class="mp-circle mp-circle_b mp-subtitled">20</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">104年度</div>
                <div class="mp-circle mp-circle_b mp-subtitled">18</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">103年度</div>
                <div class="mp-circle mp-circle_b mp-subtitled">15</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">102年度</div>
                <div class="mp-circle mp-circle_b mp-subtitled">17</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">101年度</div>
                <div class="mp-circle mp-circle_b mp-subtitled">18</div>
            </div>
        </div> 
	   <!--核定件數-->
        <div class="mp-block-2">
            <div class="mp-item_title mp-subtitle">執行件數</div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">105年度</div>
                <div class="mp-circle mp-circle_o mp-subtitled">20</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">104年度</div>
                <div class="mp-circle mp-circle_o mp-subtitled">18</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">103年度</div>
                <div class="mp-circle mp-circle_o mp-subtitled">15</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">102年度</div>
                <div class="mp-circle mp-circle_o mp-subtitled">17</div>
            </div>
            <div class="mp-item">
                <div class="mp-item_year mp-subtitled">101年度</div>
                <div class="mp-circle mp-circle_o mp-subtitled">18</div>
            </div>
            <div class="clear_both"></div>
	</div>
        </div>
    </div>

    <a class="icon_down icon_mp" href="http://188.166.179.62/research_achievements" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>

</div>


<?php wp_nav_menu (array('theme_location' => 'Menu4','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
