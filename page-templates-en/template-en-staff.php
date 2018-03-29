<?php
/*
 *Template Name:en-staff
 */
?>
<?php get_header('en_header'); ?>
<div class="page-staff">
    <div class="container mobile-staff">
        <div id="staff-container">
	    <div class="intro-littleTitle formobile" style="line-height:18px;">04  Administrative Office</div>
            <div class="intro-littleTitle mobilehidden">05 Administrative Office</div>
	    <div class="staff-mobile-space"></div>
            <div class="staff-block">
                <div class="staff-photo staff-wu"></div>
		<div class="staff-block1"></div>
		<div class="staff-text1">
                <div class="staff-littleTitle">Ms. Amy Wu</div>
                <div class="staff-bigTitle"></div>
		</div>
		<div class="staff-line"></div>
		<div class="staff-text2">
		<p class="staff-text notes">Property, Finance, Space Management<br>amy@mail.nctu.edu.tw<br>03 - 5712121 # 56001</p>
		</div>
            </div>
	    <div class="staff-mobile-line"></div>
            <div class="staff-block">
                <div class="staff-photo staff-liu"></div>
                <div class="staff-block1"></div>
		<div class="staff-text1">
                <div class="staff-littleTitle">Ms. Joan Liu</div>
                <div class="staff-bigTitle"></div>
                <div class="staff-line"></div>
		</div>
                <div class="staff-text2">
                <p class="staff-text notes">Dean’s Schedule, General Administration, Meeting Arrangement<br>joanliu@mail.nctu.edu.tw<br>03 - 5712121 # 56002</p>
		</div>
            </div>
	    <div class="staff-mobile-line"></div>
            <div class="staff-block" style="margin-right:0px;">
                <div class="staff-photo staff-hsieh"></div>
                <div class="staff-block1"></div>
                <div class="staff-text1">
                <div class="staff-littleTitle">Ms. Patricia Hsieh</div>
                <div class="staff-bigTitle"></div>
		</div>
                <div class="staff-line"></div>
		<div class="staff-text2">
                <p class="staff-text notes">International Affairs, Webpage Maintenance<br>page54@nctu.edu.tw<br>03 - 5712121 # 56003</p>
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
