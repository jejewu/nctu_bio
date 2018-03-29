<?php
/*
 *Template Name:staff
 */
?>
<?php get_header(); ?>
<div class="page-staff">
    <div class="container mobile-staff">
        <div id="staff-container">
	    <div class="intro-littleTitle formobile" style="line-height:18px;">04  院辦公室成員</div>
            <div class="intro-littleTitle mobilehidden">05  院辦公室成員</div>
	    <div class="staff-mobile-space"></div>
            <div class="staff-block">
                <div class="staff-photo staff-wu"></div>
		<div class="staff-block1"></div>
		<div class="staff-text1">
                <div class="staff-littleTitle">技士</div>
                <div class="staff-bigTitle">吳盈熹</div>
		</div>
		<div class="staff-line"></div>
		<div class="staff-text2">
		<p class="staff-text notes">財產、 經費及空間管理<br>amy@mail.nctu.edu.tw<br>03 - 5712121 # 56001</p>
		</div>
            </div>
	    <div class="staff-mobile-line"></div>
            <div class="staff-block">
                <div class="staff-photo staff-liu"></div>
                <div class="staff-block1"></div>
		<div class="staff-text1">
                <div class="staff-littleTitle">助理管理師</div>
                <div class="staff-bigTitle">劉佳菁</div>
                <div class="staff-line"></div>
		</div>
                <div class="staff-text2">
                <p class="staff-text notes">院長行程、 行政與會議安排<br>joanliu@mail.nctu.edu.tw<br>03 - 5712121 # 56002</p>
		</div>
            </div>
	    <div class="staff-mobile-line"></div>
            <div class="staff-block" style="margin-right:0px;">
                <div class="staff-photo staff-hsieh"></div>
                <div class="staff-block1"></div>
                <div class="staff-text1">
                <div class="staff-littleTitle">行政助理</div>
                <div class="staff-bigTitle">謝培禹</div>
		</div>
                <div class="staff-line"></div>
		<div class="staff-text2">
                <p class="staff-text notes">院教評、 網頁維護、國際化<br>page54@nctu.edu.tw<br>03 - 5712121 # 56003</p>
		</div>
            </div>
            
        </div>
    </div>
		   <a class="icon_up"href="<?php echo site_url(); ?>/vice_dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>
</div>
<script>
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_5')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
