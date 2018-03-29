<?php
/*
 *Template Name:en-vice-dean
 */
?>
<?php get_header('en_header'); ?>
<div class="page-vice_dean">

    <div class="container mobilehidden">
        <div id="vice_dean-container">
            <div class="intro-littleTitle">04  Vice Deans</div>
            <div class="vd-block vd-chen">
                <div class="vd-text_block vd-m1">
                    <div class="vd-littleTitle" style="margin-top:0px; margin-bottom:0px;"></div>
                    <div class="vd-bigTitle vd-fl">Prof. CHEN, YUNG-FU</div>
                    <div class="vd-littleTitle vd-fl"></div>
                    <a target="_blank" href="<?php bloginfo('template_url');?>/files/Yung-Fu_Chen_CV.pdf"><div class="vd-cv_icon"></div></a>
                    <div class="clear_both"></div>
                    <hr class="vd_hr">
                    <div class="vd-text">Dept. of Electrophysics<br>yfchen@cc.nctu.edu.tw<br>03-5725257#56106</div>
                </div>
            </div>
            <div class="vd-block vd-yang">
                <div class="vd-text_block vd-m2">
                    <div class="vd-littleTitle" style="margin-top:0px; margin-bottom:0px;"></div>
                    <div class="vd-bigTitle vd-fl">Prof. YANG, YI-FAN</div>
                    <div class="vd-littleTitle vd-fl"></div>
                    <a target="_blank" href="<?php bloginfo('template_url');?>/files/Yi-Fan-Yang.pdf"><div class="vd-cv_icon"></div></a>
                    <div class="clear_both"></div>
                    <hr class="vd_hr">
                    <div class="vd-text">Dept. of Applied Mathematics<br>yfyang@math.nctu.edu.tw<br>03-5724679#56419</div>
                </div>
            </div>
        </div>
    </div>
    <!--formobile-->

    <div class="container mobile-vice_dean formobile">
        <div id="vice_dean-container">
            <div class="intro-littleTitle" style="margin-left: 15vw;">03  副院長簡介</div>
            <div class="vd-block vd-chen">
                <div class="vd-text_block vd-m1">
                    <div class="title vd-bigTitle">陳永富</div>
                    <div class="vd-littleTitle text">教授</div>
                    <div class="clear_both"></div>
                    <div class="notes">yfchen@cc.nctu.edu.tw<br>03-5725257#56106</div>
                </div>
            </div>
            <div class="vd-block vd-yang">
                <div class="vd-text_block vd-m2">
                    <div class="title vd-bigTitle">楊一帆</div>
                    <div class="vd-littleTitle text">教授</div>
                    <div class="clear_both"></div>
                    <div class="notes">yfyang@math.nctu.edu.tw<br>03-5724679#56419</div>
                </div>
            </div>
        </div>
    </div>




		<a class="icon_up"href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="vd-left_icon"></div></a>
                <a class="icon_down"href="<?php echo site_url(); ?>/staff" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon"></div></a>

</div>
<script>
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_4')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
