<?php
/*
 *Template Name:en-conference_room
 */
?>
<?php get_header(en_header); ?>
<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/downloads.css" type="text/css" media="screen and (min-width: 701px)" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/downloads-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
</head>
<div class="page-conf_rooms">
	<a class="icon_up"href="<?php echo site_url(); ?>/regulations_and_forms" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>
<!--
        <a class="icon_down"href="<?php echo site_url(); ?>/regulations_and_forms" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
-->
    <div class="container container3">
        <div class="rf-container cr-container">
            <div class="subtitled rf-l_title formobile">02</div>
            <div class="rf-container-mobile">
                <div class="subtitle rf-b_title formobile">會議室借用</div>
                <a class="rf-btn rf-btn_left" href="<?php echo site_url(); ?>/regulations_and_forms"></a>
                <a class="rf-btn rf-btn_right" href="<?php echo site_url(); ?>/regulations_and_forms"></a>
                <div class="clear_both"></div>
            </div>
                <div class="rf-line"></div>
        <ul class="rf-menu">
        <li class="subtitled rf-checked1"><a class="rf-menu-link" href="<?php echo site_url(); ?>/regulations_and_forms">表格規章</a></li><li class="subtitled rf-normal">會議室借用</li>
        </ul>
	<div class="rf-room_textblock formobile">
            <div class="text rf-text1" style="width: 160px;"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form1.pdf">理學院會議廳借用辦法</a></div>
            <div class="text rf-text1"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form2.pdf">理學院會議室場地借用申請表</a></div>
            <div class="text rf-text1"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form3.pdf">理學院場地使用費繳費申請單</a></div>
            <div class="text rf-text1"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form4.pdf">理學院場地使用費退費申請單</a></div>
	</div>
        <div class="rf-room_textblock mobilehidden">
            <ul class="rf-forms">
                <li class="text rf-text1"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form1.pdf">理學院會議廳借用辦法</a></li>
                <li class="text rf-text1"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form2.pdf">理學院會議室場地借用申請表</a></li>
                <li class="text rf-text1"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form3.pdf">理學院場地使用費繳費申請單</a></li>
                <li class="text rf-text1"><a target="_blank" href="<?php bloginfo('template_url');?>/files/conf_room/form4.pdf">理學院場地使用費退費申請單</a></li>
            </ul>
        </div>
  	<div class="img-block">
        <div class="rf-img1 formobile">
            <div class="rf-img1-description">
        	<div class="rf-img-text-block" style="margin-left: 10px;">
	    	    <div class="rf-title-block"> 
			<p class="rf-title">102<br>會議室</p>
		    </div>
            <p class="rf-text"><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_01.svg" class="rf-icon">  基礎科學教學研究大樓102室<br><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_03.svg" class="rf-icon">  25位<br><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_02.svg" class="rf-icon">  理學院</p>
		</div>
            </div>
        </div>
        <div class="rf-img2 formobile">
            <div class="rf-img2-description">
                <div class="rf-img-text-block" style="margin-left: 10px;">
                    <div class="rf-title-block">
                        <p class="rf-title">210<br>會議室</p>
                    </div>
                    <p class="rf-text"><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_01.svg" class="rf-icon">  科學一館210室<br><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_03.svg" class="rf-icon">  120位<br><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_02.svg" class="rf-icon">  應化系</p>
                </div>
            </div>
        </div>
        <div class="rf-img3 formobile">
            <div class="rf-img3-description">
                <div class="rf-img-text-block">
                    <div class="rf-title-block">
			<p class="rf-title2">次軒廳</p>
                        <p class="rf-title rf-title-vertical" style="line-height: 40px">次<br>軒<br>廳</p>
                    </div>
                    <p class="rf-text"><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_01.svg" class="rf-icon">  基礎科學教學研究大樓B1 01室<br><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_03.svg" class="rf-icon">  221位<br><img src="<?php bloginfo('template_url')?>/image/icon/icon_download_02.svg" class="rf-icon">  電物系</p>
                </div>
            </div>
	<div class="mobile-space"></div>
        </div>
	</div>
    </div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
