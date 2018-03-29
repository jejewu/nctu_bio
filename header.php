<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/image/favicon.ico" type="image/x-icon">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen and (min-width: 701px)"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-mobile.css" type="text/css" media="screen and (max-width:700px)"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/perfect-scrollbar/css/perfect-scrollbar.css" type="text/css" media="screen"/>
        <?php if (qtranxf_getLanguage() == 'en') { ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-en.css" type="text/css" media="screen and (min-width: 701px)" />
        <?php } ?>
        <?php
            function check_current_page($pageName='') {
                return is_page_template('page-templates/template-'.$pageName.'.php');
            }
        ?>
        <?php if(check_current_page('homepage') || is_single()) { /*首頁*/ ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" media="screen and (min-width: 701px)" />
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/homepage-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
            <?php if (qtranxf_getLanguage() == 'en') { ?>
                <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage-en.css" type="text/css" media="screen and (min-width: 701px)" />
            <?php } ?>
        <?php } else if(check_current_page('intro')) { /*學院簡介*/?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/intro.css" type="text/css" media="screen and (min-width: 701px)" />
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/homepage-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
        <?php } else if(check_current_page('academics')) { /*學術單位*/ ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/academics.css" type="text/css" media="screen and (min-width: 701px)" />
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/academics-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
        <?php } else if(check_current_page('admissions')) { /*招生資訊*/ ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/admissions.css" type="text/css" media="screen and (min-width: 701px)" />
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/admissions-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
        <?php } else if(check_current_page('research_achievements')) { /*研究發展*/ ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/research.css" type="text/css" media="screen and (min-width: 701px)" />
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/research-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
        <?php } else if(check_current_page('international')) { /*國際交流合作*/ ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/inter_contract.css" type="text/css" media="screen and (min-width: 701px)" />
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/inter_contract-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
        <?php } else if(check_current_page('regulations_and_forms')) { /*下載專區*/ ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/downloads.css" type="text/css" media="screen and (min-width: 701px)" />
            <link rel="stylesheet" href="<?php bloginfo('template_url');  ?>/mobile-css/downloads-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
        <?php } else if(check_current_page('default_page')) { /*Default*/ ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/default.css" type="text/css" />
        <?php } ?>

        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url');?>/js/jquery.preload.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url');?>/js/jquery.mousewheel.min.js" type="text/javascript"></script>
        <script src='<?php bloginfo('template_url');?>/js/perfect-scrollbar/js/perfect-scrollbar.jquery.js'></script>
        
        <?php if(check_current_page('homepage')){ ?>
            <script src="<?php bloginfo('template_url') ?>/js/homepage.js" type="text/javascript" media="screen and (min-width:701px)"></script>
        <?php } else if ( is_category() ) { ?>
            <script src="<?php bloginfo('template_url') ?>/js/jumptopage.js" type="text/javascript"></script>
        <?php } ?>
        <?php wp_head(); ?>
    </head>
    
    <body>
        <div class="mobile_header formobile">
            <div class="bottom-dropbtn">
                <div id="menucontainer" class="menubuttoncontainer">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                </div>
            </div>

    		<div id="mySidenav" class="sidenav">
     			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    <div class="close_btn">
                    </div>
                </a>
    			<div class="sidenavlink">
    			    <a href="<?php echo site_url(); ?>">
                        <div id="mysidetext1" class="menu_block" style="transition:0.8s;">
                            <div class="header-icon header-icon0">
                                <div class="menutext">
                                    <?php echo qtranxf_getLanguage()=='zh' ? '首頁' : 'Home' ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/intro">
                        <div id="mysidetext2" class="menu_block" style="transition:1.2s;">
                            <div class="header-icon header-icon1">
                                <div class="menutext">
                                    <?php echo qtranxf_getLanguage()=='zh' ? '學院簡介' : 'About' ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/academics">
                        <div id="mysidetext3" class="menu_block"  style="transition:1.6s;">
                            <div class="header-icon header-icon2">
                                <div class="menutext">
                                    <?php echo qtranxf_getLanguage()=='zh' ? '學術單位' : 'Academics' ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/admissions">
                        <div id="mysidetext4" class="menu_block"  style="transition:2s;">
                            <div class="header-icon header-icon3">
                                <div class="menutext">
                                    <?php echo qtranxf_getLanguage()=='zh' ? '招生資訊' : 'Admissions' ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/research">
                        <div id="mysidetext5" class="menu_block" style="transition:2.4s;">
                            <div class="header-icon header-icon4">
                                <div class="menutext">
                                    <?php echo qtranxf_getLanguage()=='zh' ? '研究發展' : 'Research' ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/international">
                        <div id="mysidetext6" class="menu_block" style="transition:2.8s;">
                            <div class="header-icon header-icon5">
                                <div class="menutext">
                                    <?php echo qtranxf_getLanguage()=='zh' ? '國際交流合作' : 'International' ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/downloads">
                        <div id="mysidetext7" class="menu_block" style="transition:3.2s;">
                            <div class="header-icon header-icon6">
                                <div class="menutext">
                                    <?php echo qtranxf_getLanguage()=='zh' ? '下載專區' : 'Downloads' ?>
                                </div>
                            </div>
                        </div>
                    </a>


                <div class="mobile-foot"> <!--AnnieDisplayNone-->
                    <div class="foot-line"></div>
                    <div class="foot-top">
                        <p class="foot-font-top formobile">TEL│886-3-572-7077</p>
                        <p class="foot-font-top formobile">FAX│886-3-571-9507</p>
                        <p class="foot-font-top formobile">E-MAIL│science@cc.nctu.edu.tw</p>
                    </div>
                    <div class="foot-bottom">
                    <p class="foot-font-bottom formobile">300 新竹市東區大學路1001號<br>基礎科學教學研究大樓101室</p>
                    </div>
                </div>


    			</div>
    		</div>

    		<!-- Use any element to open the sidenav -->
    		<span onclick="openNav()" class="dropbtn"></span>

    		<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
                    <div class="mobile-header formobile">交通</br>大學</div> <!--AnnieDisplayNone-->
                    <div class="mobile-header-line"></div>
                    <!-- add in dropdown btn-->
                    <div id="header-block2">生</div>
                    <div id="header-block3">科</div>
                    <div id="header-block4">院</div>
                    <div id="header-block5">國立交通大學</div>
                    <div id="header-block6">The College of Science</div>
                    <div id="header-block7">The<br>College<br>of<br>Science</div>
    		<a href="<?php echo site_url(); ?>"><div class="header-block-link"></div></a>
        </div>

        <div id="header">
        	<div class="box mobilehidden">
        	    <div id="header-block0">
        	        <div id="header-block1"></div>
                	<a href="<?php echo site_url(); ?>" class="header__icon" id="header__icon"></a>
                	<!-- add in dropdown btn-->

                    <div class="mobile-header formobile">交通</br>大學</div> <!--AnnieDisplayNone-->
                    <div class="mobile-header-line"></div>
                    <!-- add in dropdown btn-->
                    <div id="header-block2">生</div>
                    <div id="header-block3">科</div>
                    <div id="header-block4">院</div>
                    <div id="header-block5">
                        <?php echo qtranxf_getLanguage()=='zh' ? '國立交通大學' : 'NCTU' ?>
                    </div>
                    <div id="header-block6">
                        <?php echo qtranxf_getLanguage()=='zh' ? 'College of Biological Science and Technology' : '國立交通大學生物科技學院' ?>
                    </div>
                    <div id="header-block7">College<br>of<br>Biological<br>Science and<br>Technology</div>
                    <div id="header-block8">
                        <?php echo qtranxf_getLanguage()=='zh' ? '生物科技學院' : 'College of Biological<br/>Science and Technology' ?>
                    </div>

                </div>
                <a href="<?php echo site_url(); ?>"><div id="header-block-link"></div></a>
                <div id="header-foot"></div>
                <div id="header-icon0">
                    <a href="<?php echo site_url(); ?>/intro">
                        <div class="header-icon header-icon1">
                            <div class="header-text">
                                <?php echo qtranxf_getLanguage()=='zh' ? '學院簡介' : 'About' ?>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/academics">
                        <div class="header-icon header-icon2">
                            <div class="header-text">
                                <?php echo qtranxf_getLanguage()=='zh' ? '學術單位' : 'Academics' ?>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/admissions">
                        <div class="header-icon header-icon3">
                            <div class="header-text">
                                <?php echo qtranxf_getLanguage()=='zh' ? '招生資訊' : 'Admissions' ?>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/research_achievements">
                        <div class="header-icon header-icon4">
                            <div class="header-text">
                                <?php echo qtranxf_getLanguage()=='zh' ? '研究發展' : 'Research' ?>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/exchange_student">
                        <div class="header-icon header-icon5">
                            <div class="header-text">
                                <?php echo qtranxf_getLanguage()=='zh' ? '國際交流合作' : 'International' ?>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url(); ?>/regulations_and_forms">
                        <div class="header-icon header-icon6">
                            <div class="header-text">
                                <?php echo qtranxf_getLanguage()=='zh' ? '下載專區' : 'Downloads' ?>
                            </div>
                        </div>
                    </a>
                </div>
        	</div>
        </div>

        <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            var menutextheight = "8vh";
            document.getElementById("mySidenav").style.height = "100%";
            document.getElementById("menucontainer").style.opacity = "0";
            document.getElementById("mysidetext1").style.height = menutextheight;
            document.getElementById("mysidetext2").style.height = menutextheight;
            document.getElementById("mysidetext3").style.height = menutextheight;
            document.getElementById("mysidetext4").style.height = menutextheight;
            document.getElementById("mysidetext5").style.height = menutextheight;
            document.getElementById("mysidetext6").style.height = menutextheight;
            document.getElementById("mysidetext7").style.height = menutextheight;
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.height = "0vh";
            document.getElementById("menucontainer").style.opacity = "1";
            document.getElementById("mysidetext1").style.height = "0px";
            document.getElementById("mysidetext2").style.height = "0px";
            document.getElementById("mysidetext3").style.height = "0px";
            document.getElementById("mysidetext4").style.height = "0px";
            document.getElementById("mysidetext5").style.height = "0px";
            document.getElementById("mysidetext6").style.height = "0px";
            document.getElementById("mysidetext7").style.height = "0px";

        }
        </script>
<!--small screen header-->
<!--
<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

// Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');}
        }
      }
    }
</script>
-->

<!--menu list-->
<!--<script type="text/javascript">
$(document).ready(function() {
    $(".toggle").click(function() {
        $(this).toggleClass("active");
        $(".nav").slideToggle();
    });
    $(".nav > ul > li:has(ul) > a").append('<div class="arrow-bottom"></div>');
});
</script>-->
