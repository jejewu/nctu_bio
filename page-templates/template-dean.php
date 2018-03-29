<?php
/*
 *Template Name:dean
 */
?>
<?php 
$translate = qtranxf_getLanguage()!='zh' ? true : false;

$wp_query_args = array(
    'posts_per_page' => 4,
    's' => '[:'.qtranxf_getLanguage().']',
    'orderby'   => 'date',
    'order' => 'DESC'
);

get_header();
 ?>
 
<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/intro.css" type="text/css" media="screen and (min-width: 701px)" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/homepage-mobile.css" type="text/css" media="screen and (max-width: 700px)" />

</head> 
 
<div class="page-dean">
    <div class="container">
        <div id="vice_dean-container" class="mobilehidden">
            <div class="intro-littleTitle">02  院長簡介</div>
            <div class="dean-bigTitle">李  耀坤</div>
            <div class="dean-littleTitle">教授</div>
            <div class="dean-littleTitle">(2014.8~)</div>
            <a target="_blank" href="<?php bloginfo('template_url');?>/files/Prof_Yaw-Kuen_Li-CV.pdf"><div class="dean-cv_icon"></div></a>
            <div class="clear_both"></div>
            <hr class="dean_hr mobilehidden">
            <div class="dean-option-wrapper dean-height1">
                <div class="dean-option">學歷</div>
                <div class="dean-discript dean-width1">化學系博士 / 杜蘭大學, 美國<br>化學研究所碩士 / 成功大學, 台灣<br>化學系學士 / 清華大學, 台灣</div>
            </div>
            <div class="dean-option-wrapper dean-height2">
                <div class="dean-option">經歷</div>
                <div class="dean-discript dean-width2">院長 / 交通大學理學院<br>訪問學者 / 德國杜賓根大學<br>學門召集人 / 國科會自然處化學門<br>訪問教授 / 瑞典林雪萍大學<br>學務長 / 國立交通大學<br>審議委員 / 國科會生物處生化學門<br>教授兼系主任 / 國立交通大學應用化學系<br>審議委員 / 國科會自然處化學門<br>教授 / 國立交通大學應用化學系所<br>訪問教授 / 加拿大英屬哥倫比亞大學<br>副教授 / 國立交通大學應用化學系<br>博士後研究員 / 美國約翰霍普金斯醫學院</div>
            </div>
            <div class="dean-option-wrapper dean-height3">
                <div class="dean-option">聯絡方式</div>
                <div class="dean-discript dean-width3">電子郵件 ykl@cc.nctu.edu.tw<br>連絡電話 886 - 3 - 5712121 # 31985<br>實驗室電話 886 - 3 - 5712121 # 56545</div>
            </div>
            <div class="dean-block">
                <div class="dean-block-text"><p>教育，</p><p>不僅止於本職學能的訓練，</p><p>更是氣質與氣度的培養。</p></div>
            </div>
	</div>
<!--formobile-->
	<div id="vice_dean-container" class="formobile">
            <div class="dean-option-wrapper dean-height3 formobile">
                <div class="intro-littleTitle formobile">02 院長簡介(2014.8-)</div>
                <div class="dean-bigTitle">李  耀坤</div>
                <div class="dean-littleTitle">教授</div>
                <div class="notes dean-width3">ykl@cc.nctu.edu.tw<br>886-3-5712121 # 31985<br> 886-3-5712121 # 56545</div>
            </div>
	    <div class="dean-triangle"></div>
	    <div class="dean-rectangle"></div>
	</div>
    </div>
		<a class="icon_up"href="<?php echo site_url(); ?>/intro" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>
                <a class="icon_down"href="<?php echo site_url(); ?>/vice_dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon_w"></div></a>
</div>
<script>
    $(".dean-option-wrapper").hover(
        function() {
            $(".dean-block").hide();
        }, function() {
            $(".dean-block").show();
        }
    );
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>


<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_2')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
