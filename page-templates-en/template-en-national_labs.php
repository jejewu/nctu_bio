<?php
/*
 *Template Name:en-national_labs
 */
?>
<?php get_header(en_header); ?>

<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/research.css" type="text/css" media="screen and (min-width: 701px)" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/research-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
</head>

<div class="page-national_labs">
    <div class="container">
	
		<div id="rh-container">
			<div id="rh-wrapper">
				<div class="rh-subpage-1"> <!-- first page -->
                    <div class="subtitled mp-title1 mobilehidden">03 研究資源</div>
                    <div class="subtitled mp-title1 formobile">02 研究資源</div>
                    <div class="subtitle mp-title2 mobilehidden">貴重儀器</div>
                    <div class="formobile rh-title-block">
                        <div class="subtitle mp-title2-mobile">貴重儀器</div>
                        <div class="rh-btn rh-down-icon precision"></div>
                        <div class="nl-line"></div>
                    </div>
					<div class="rh-btn rh-btn_left mobilehidden"></div>
					<div class="rh-btn rh-btn_right mobilehidden"></div>
					<div class="clear_both"></div>
					
					<div class="intro-first-page-text">

                        <?php
                            $the_query = new WP_Query( array( 'category_name' => 'precision_instrument' ,'order'   => 'ASC') );
                            if($the_query->have_posts()):
                                $i = 1;
                                while($the_query->have_posts()):
                                    $the_query->the_post();

                        ?>

                        <div class="page-left common_item  item<?php echo $i; ?> <?php if($i==1): echo ""; else: echo "disapear"; endif;?>">
                            <div class="intro-first-subtext mobilehidden"><?php the_field('instrument_name1'); ?></div>
                            <div class="intro-first-subtext mobilehidden"><?php the_field('instrument_name2'); ?></div>
                            <div class="intro-first-subtext-mobile formobile"><?php the_field('instrument_name1') + the_field('instrument_name2'); ?></div>
                            <div class="more_btn more formobile" id="more"></div>
                            <div class="back_btn_mobile more formobile disapear" id="more"></div>
                        
                            <div class="page-right">
                                <div class="subpage-top">
                                    <div class="subpage-top-left">
                                        <div class="sub-text mobilehidden">放置地點</div>
                                        <div class="sub-text-mobile formobile">放置地點 : </div>
                                    </div>
                                    <div class="subpage-top-right">
                                        <div class="sub-text_1"><?php the_field('place'); ?></div>
                                    </div>
                                </div>

                                <div class="subpage-middle">
                                    <div class="subpage-middle-left">
                                    <div class="sub-text1 mobilehidden">預約</div>
                                    <div class="sub-text-mobile formobile">預約 : </div>
                                    </div>
                                    <div class="subpage-middle-right">
                                    <div class="sub-text_1"><?php the_field('reservation');?></div>
                                    </div>
                                </div>

                                <div class="subpage-bottom">
                                    <div class="subpage-bottom-left">
                                        <div class="sub-text1 mobilehidden">管理</div>
                                        <div class="sub-text-mobile formobile">管理 : </div>
                                    </div>
                                    <div class="subpage-bottom-right">
                                        <div class="border-text mobilehidden">收費標準及開放時段</div>
                                        <div class="border-text mobilehidden">線上預約</div>
                                        <div class="sub-text_1"><?php the_field('management');?></div>
                                        <div class="nl_charge formobile"></div>
                                        <div class="nl_reservation formobile"></div>
                                    </div>
                                </div>
                                <div class="more_btn more mobilehidden" id="more"></div>
                            </div>  

                            <div class="page-right_2 disapear mobilehidden">
                                
                                <div class="item_left">
                                    <div class="item_list">
                                        <div class="line_height_12 mcms hover_mark" data-content="MCMS"><?php the_title();?></div>
                                        <div class="line_height_24 i_s hover_mark" data-content="important_spec">重要規格</div>
                                        <div class="line_height_24 s_i hover_mark" data-content="service_item">服務項目</div>
                                        <div class="line_height_24 s_p hover_mark" data-content="service_policy">使用規則</div>
                                        <div class="line_height_24 s_l_p hover_mark" data-content="system_level_open">系統開放等級及時段</div>
                                        <div class="line_height_24 c_g hover_mark" data-content="charge">收費標準</div>
                                        <div class="line_height_12 t_n hover_mark" data-content="train">教育訓練</div>
                                    </div>
                                    <div class="back_btn more mobilehidden" id="more"></div>
                                </div>
                                <div class="item_content item1">
                                    <div class="MCMS common_content">
                                        <div class="mcms_text"><?php the_content(); ?></div>

                                    </div>
                                    <div class="important_spec common_content disapear">
                                        <div class="im_spec_text"><?php the_field('specification'); ?></div>
                                    </div>
                                    
                                    <div class="service_item common_content disapear">
                                        <?php the_field('service'); ?>
                                    </div>

                                    <div class="service_policy common_content disapear">
                                        <div class="pdf_icon">
                                            <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                            <div class="service_po_text">
                                                <div><?php the_title(); ?></div>
                                                <div>使用規則</div>
                                            </div>
                                            <div style="clear:both;"></div>
                                            <div class="divider"></div>
                                        </div>
                                        <div class="user_policy"><?php the_field('rule'); ?></div>
                                        <div class="pdf_icon_2 ">
                                            <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                            <div class="service_po_text">
                                                <div>國立交通大學貴儀中心</div>
                                                <div><?php the_title(); ?></div>
                                                <div>使用切結書</div>   
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>

                                    <div class="system_level_open common_content disapear">
                                        <div class="sys_level_open_text"><?php the_field('system_level_open'); ?></div>
                                        
                                        <div class="sys_level_right">
                                            <div class="level_text"><?php the_field('annotation'); ?></div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div class="charge common_content disapear">
                                        <div class="charge_text">
                                            <?php the_field('charge'); ?>
                                        </div>
                                    </div>

                                    <div class="train common_content disapear">
                                        <div class="train_text">
                                            <?php the_field('train'); ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="page-right_2_mobile formoile disapear">
                                <div class="item_content">
                                    <div class="MCMS common_content">
                                        <div class="line_height_24 mcms"><?php the_title();?></div>
                                        <div class="nl-line_adjust "></div>
                                        <div class="mcms_text"><?php the_content(); ?></div>

                                    </div>
                                </div>
                                <div class="item_content">
                                    <div class="important_spec common_content">
                                        <div class="line_height_24 i_s">重要規格</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="im_spec_text"><?php the_field('specification'); ?></div>
                                    </div>
                                </div>    

                                <div class="item_content">
                                    <div class="service_item common_content">
                                        <div class="line_height_24 s_i">服務項目</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="service_text"><?php the_field('service'); ?></div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="service_policy common_content">
                                        <div class="line_height_24 s_p">使用規則</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="service_policy_text">
                                            <div class="pdf_icon">
                                                <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                                <div class="service_po_text">
                                                    <div><?php the_title(); ?></div>
                                                    <div>使用規則</div>
                                                </div>
                                                <div style="clear:both;"></div>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="user_policy"><?php the_field('rule'); ?></div>
                                            <div class="pdf_icon_2 ">
                                                <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                                <div class="service_po_text">
                                                    <div>國立交通大學貴儀中心</div>
                                                    <div><?php the_title(); ?></div>
                                                    <div>使用切結書</div>   
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="system_level_open common_content">
                                        <div class="line_height_24 s_l_p">系統開放等級及時段</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="sys_level_open_text"><?php the_field('system_level_open'); ?></div>
                                        
                                        <div class="sys_level_right">
                                            <div class="level_text"><?php the_field('annotation'); ?></div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="charge common_content">
                                        <div class="line_height_24 c_g">收費標準</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="charge_text">
                                            <?php the_field('charge'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="train common_content">
                                        <div class="line_height_24 t_n">教育訓練</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="train_text">
                                            <?php the_field('train'); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                                $i++;
                                endwhile;
                            endif;                                     
                        ?>

                        <div id="content-foot1">
                            <div class="footer_text">儀器列表</div>
                            <?php
                                if($the_query->have_posts()):
                                    $i = 1;
                                    while($the_query->have_posts()):
                                        $the_query->the_post();
                            ?>
                            <div class="footer_item_text" data-itemlist="item<?php echo $i; ?>"><?php the_title();?></div>
                            <?php
                                    $i++;
                                    endwhile;
                                endif;                                     
                            ?>
                        </div>
                    </div>

				</div>
				
				<div class="rh-subpage"> <!--second page -->
                    <div class="subtitled mp- mobilehidden">03 研究資源</div>
                    <div class="subtitled mp-title1 formobile">02 研究資源</div>
                    <div class="subtitle mp-title2 mobilehidden">共同儀器</div>
                    <div class="formobile rh-title-block">
                        <div class="subtitle mp-title2-mobile">共同儀器</div>
                        <div class="rh-btn rh-down-icon common"></div>
                        <div class="nl-line"></div>
                    </div>
					<div class="rh-btn rh-btn_left mobilehidden"></div>
					<div class="rh-btn rh-btn_right mobilehidden"></div>
					<div class="clear_both"></div>
					
					<div class="intro-second-page-left">

                        <?php
                            $the_query = new WP_Query( array( 'category_name' => 'common_instrument' ,'order'   => 'ASC') );
                            if($the_query->have_posts()):
                                $i = 1;
                                while($the_query->have_posts()):
                                    $the_query->the_post();

                        ?>

                        <div class="page-left common_item  item<?php echo $i; ?> <?php if($i==1): echo ""; else: echo "disapear"; endif;?>">
                            <div class="intro-first-subtext mobilehidden"><?php the_field('instrument_name1'); ?></div>
                            <div class="intro-first-subtext mobilehidden"><?php the_field('instrument_name2'); ?></div>
                            <div class="intro-first-subtext-mobile formobile"><?php the_field('instrument_name1') + the_field('instrument_name2'); ?></div>
                            <div class="more_btn more formobile" id="more"></div>
                            <div class="back_btn_mobile more formobile disapear" id="more"></div>
                        
                            <div class="page-right">
                                <div class="subpage-top">
                                    <div class="subpage-top-left">
                                        <div class="sub-text mobilehidden">放置地點</div>
                                        <div class="sub-text-mobile formobile">放置地點 ：　</div>
                                    </div>
                                    <div class="subpage-top-right">
                                        <div class="sub-text_1"><?php the_field('place'); ?></div>
                                    </div>
                                </div>

                                <div class="subpage-middle">
                                    <div class="subpage-middle-left">
                                    <div class="sub-text1 mobilehidden">預約</div>
                                    <div class="sub-text-mobile formobile">預約 ：　</div>
                                    </div>
                                    <div class="subpage-middle-right">
                                    <div class="sub-text_1"><?php the_field('reservation');?></div>
                                    </div>
                                </div>

                                <div class="subpage-bottom">
                                    <div class="subpage-bottom-left">
                                        <div class="sub-text1 mobilehidden">管理</div>
                                        <div class="sub-text-mobile formobile">管理 ：　</div>
                                    </div>
                                    <div class="subpage-bottom-right">
                                        <div class="border-text mobilehidden">收費標準及開放時段</div>
                                        <div class="border-text mobilehidden">使用申請表</div>
                                        <div class="sub-text_1"><?php the_field('management');?></div>
                                        <div class="nl_charge formobile"></div>
                                        <div class="nl_reservation formobile"></div>
                                    </div>
                                </div>
                                <div class="more_btn more mobilehidden" id="more"></div>
                            </div>  

                            <div class="page-right_2 mobilehidden disapear">
                                
                                <div class="item_left">
                                    <div class="item_list">
                                        <div class="line_height_12 mcms hover_mark" data-content="MCMS"><?php the_title();?></div>
                                        <div class="line_height_24 i_s hover_mark" data-content="important_spec">重要規格</div>
                                        <div class="line_height_24 s_i hover_mark" data-content="service_item">服務項目</div>
                                        <div class="line_height_24 s_p hover_mark" data-content="service_policy">使用規則</div>
                                        <div class="line_height_24 s_l_p hover_mark" data-content="system_level_open">系統開放等級及時段</div>
                                        <div class="line_height_24 c_g hover_mark" data-content="charge">收費標準</div>
                                        <div class="line_height_12 t_n hover_mark" data-content="train">教育訓練</div>
                                    </div>
                                    <div class="back_btn more mobilehidden" id="more"></div>
                                </div>
                                <div class="item_content item1">
                                    <div class="MCMS common_content">
                                        <div class="mcms_text"><?php the_content(); ?></div>

                                    </div>
                                    <div class="important_spec common_content disapear">
                                        <div class="im_spec_text"><?php the_field('specification');?></div>
                                    </div>
                                    
                                    <div class="service_item common_content disapear">
                                        <?php the_field('service'); ?>
                                    </div>

                                    <div class="service_policy common_content disapear">
                                        <div class="pdf_icon">
                                            <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                            <div class="service_po_text">
                                                <div><?php the_title(); ?></div>
                                                <div>使用規則</div>
                                            </div>
                                            <div style="clear:both;"></div>
                                            <div class="divider"></div>
                                        </div>
                                        <div class="user_policy"><?php the_field('rule'); ?></div>
                                        <div class="pdf_icon_2 ">
                                            <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                            <div class="service_po_text">
                                                <div>國立交通大學貴儀中心</div>
                                                <div><?php the_title(); ?></div>
                                                <div>使用切結書</div>   
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>

                                    <div class="system_level_open common_content disapear">
                                        <div class="sys_level_open_text"><?php the_field('system_level_open'); ?></div>
                                        
                                        <div class="sys_level_right">
                                            <div class="level_text"><?php the_field('annotation'); ?></div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div class="charge common_content disapear">
                                        <div class="charge_text">
                                            <?php the_field('charge'); ?>
                                        </div>
                                    </div>

                                    <div class="train common_content disapear">
                                        <div class="train_text">
                                            <?php the_field('train'); ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="page-right_2_mobile formoile disapear">
                                <div class="item_content">
                                    <div class="MCMS common_content">
                                        <div class="line_height_24 mcms"><?php the_title();?></div>
                                        <div class="nl-line_adjust "></div>
                                        <div class="mcms_text"><?php the_content(); ?></div>

                                    </div>
                                </div>
                                <div class="item_content">
                                    <div class="important_spec common_content">
                                        <div class="line_height_24 i_s">重要規格</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="im_spec_text"><?php the_field('specification'); ?></div>
                                    </div>
                                </div>    

                                <div class="item_content">
                                    <div class="service_item common_content">
                                        <div class="line_height_24 s_i">服務項目</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="service_text"><?php the_field('service'); ?></div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="service_policy common_content">
                                        <div class="line_height_24 s_p">使用規則</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="service_policy_text">
                                            <div class="pdf_icon">
                                                <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                                <div class="service_po_text">
                                                    <div><?php the_title(); ?></div>
                                                    <div>使用規則</div>
                                                </div>
                                                <div style="clear:both;"></div>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="user_policy"><?php the_field('rule'); ?></div>
                                            <div class="pdf_icon_2 ">
                                                <img src="../wp-content/themes/nctu_bio/image/national_lab/pdf_icon.svg" width="35" height="39">
                                                <div class="service_po_text">
                                                    <div>國立交通大學貴儀中心</div>
                                                    <div><?php the_title(); ?></div>
                                                    <div>使用切結書</div>   
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="system_level_open common_content">
                                        <div class="line_height_24 s_l_p">系統開放等級及時段</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="sys_level_open_text"><?php the_field('system_level_open'); ?></div>
                                        
                                        <div class="sys_level_right">
                                            <div class="level_text"><?php the_field('annotation'); ?></div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="charge common_content">
                                        <div class="line_height_24 c_g">收費標準</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="charge_text">
                                            <?php the_field('charge'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_content">
                                    <div class="train common_content">
                                        <div class="line_height_24 t_n">教育訓練</div>
                                        <div class="nl-line_adjust"></div>
                                        <div class="train_text">
                                            <?php the_field('train'); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <?php
                                $i++;
                                endwhile;
                            endif;                                     
                        ?>
                    </div>
                    <div id="content-foot">
                            <div class="footer_text">儀器列表</div>
                            <?php
                                if($the_query->have_posts()):
                                    $i = 1;
                                    while($the_query->have_posts()):
                                        $the_query->the_post();
                            ?>
                            <div class="footer_item_text" data-itemlist="item<?php echo $i; ?>"><?php the_title();?></div>
                            <?php
                                    $i++;
                                    endwhile;
                                endif;                                     
                            ?>
                            <!--<div class="footer_item_text" data-itemlist="item1">非侵入式3D活體分子影像系統</div>
                            <div class="footer_item_text" data-itemlist="item2">熱微差掃描分析儀</div>
                            <div class="footer_item_text" data-itemlist="item3">等溫滴定微量熱儀</div>
                            <div class="footer_item_text" data-itemlist="item4">流式細胞高速四向分選系統</div>
                            <div class="footer_item_text" data-itemlist="item5">全反射螢光倒立顯微系統</div>-->
                    </div>
				</div>
			</div>
		</div>
    </div>
</div>
<a class="icon_up"href="<?php echo site_url(); ?>/research_achievements" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a> 
<script>

    function isMobile() {

    try{ document.createEvent("TouchEvent"); return true; }

    catch(e){ return false;}

    }

    if(isMobile()){   
        $(document).ready(function() {
            $(".rh-subpage").css("display","none");
            
            $(".precision").click(function() {
                $(".common_content").slideUp(100);
                $(".rh-subpage-1").css("display","none");
                $(".rh-subpage").css({"display":"block"});
                
                $(".common_content").slideDown(2500);
            });
            $(".common").click(function() {
                $(".common_content").slideUp(100);
                $(".rh-subpage").css("display","none");
                $(".rh-subpage-1").css({"display":"block"});
                
                $(".common_content").slideDown(2500);
            });

            $(".more").on("click",function(){
                if ($(this).is('.more_btn') || $(this).is('.more_btn_2') ){
                    $(".common_content").slideUp();
                    $(".page-right").addClass("disapear");
                    $(".more_btn").addClass("disapear");
                    $(".more_btn_2_mobile").addClass("disapear");
                    $("#content-foot").addClass("disapear");
                    $("#content-foot1").addClass("disapear");

                    $(".common_content").slideDown(2500);
                    $(".page-right_2_mobile").removeClass("disapear");
                    $(".back_btn_mobile").removeClass("disapear");
                }else if($(this).is('.back_btn_mobile')){
                    $(".page-right_2_mobile").addClass("disapear");
                    $(".back_btn_mobile").addClass("disapear");

                    $(".page-right").removeClass("disapear");
                    $(".more_btn").removeClass("disapear");
                    $(".more_btn_2_mobile").removeClass("disapear");
                    $("#content-foot").removeClass("disapear");
                    $("#content-foot1").removeClass("disapear");
                } 

            });
            

        });
    }

    var wrapper = document.querySelector("#rh-wrapper");
    var next_buttons = document.querySelectorAll(".rh-btn_right");
    var prev_buttons = document.querySelectorAll(".rh-btn_left");

    // the activeLink provides a pointer to the currently displayed item
    var activeLink = 0;
     
    // setup the event listener for the next_buttons
    for (var i = 0; i < next_buttons.length; i++) {
        next_buttons[i].addEventListener('click', setClickedItem_1, false);
    }
    for (var i = 0; i < prev_buttons.length; i++) {
        prev_buttons[i].addEventListener('click', setClickedItem_2, false);
    }

    function setClickedItem_1(e) {
        activeLink = (activeLink + 1) % 2;
     
        var position = (-70)*activeLink;
        var translateValue = "translate3d(" + position + "vw, 0px, 0)";
        window.setTimeout(function(){wrapper.style["opacity"]="1";}, 600);
        wrapper.style["opacity"]="0";
        wrapper.style[transformProperty] = translateValue;
    }
     
    function setClickedItem_2(e) {
        activeLink = (activeLink + 1) % 2;
     
        var position = (-70)*activeLink;
        var translateValue = "translate3d(" + position + "vw, 0px, 0)";
        window.setTimeout(function(){wrapper.style["opacity"]="1";}, 600);
        wrapper.style["opacity"]="0";
        wrapper.style[transformProperty] = translateValue;
    }
     
    // Dealing with Transforms
    var transforms = ["transform",
                "msTransform",
                "webkitTransform",
                "mozTransform",
                "oTransform"];
     
    var transformProperty = getSupportedPropertyName(transforms);
     
    // vendor prefix management
    function getSupportedPropertyName(properties) {
        for (var i = 0; i < properties.length; i++) {
            if (typeof document.body.style[properties[i]] != "undefined") {
                return properties[i];
            }
        }
        return null;
    }

    var moreBtn = $('.more_btn');

    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});

        $(".more").on("click",function(){
            if ($(this).is('.more_btn') || $(this).is('.more_btn_2') ){
                $(".page-right").addClass("disapear");
                $(".page-right_2").removeClass("disapear");
            }else if($(this).is('.back_btn')){
                $(".page-right_2").addClass("disapear");
                $(".page-right").removeClass("disapear");
            } 

        });

        $("[data-content]").hover(function(){
            $(".common_content").addClass("disapear");
            $("." + $(this).data("content")).removeClass("disapear");
            $(".hover_mark").removeClass("hover_active");
            $(this).addClass("hover_active");
        });

        $("[data-itemlist]").on("click",function(){
            $(".common_item").addClass("disapear");
            $("." + $(this).data("itemlist")).removeClass("disapear");
        });

        $(".mcms_text img").hover(function(){
            var instruction_name = $(this).attr('alt');
            var height = $(this).height();
            var width = $(this).width();
            if (instruction_name){
                $(this).after('<div class="instruction_hover">'+ instruction_name + '</div>');
                $(this).next().css({"width":width,"margin-left":-width,"top":height/2+32});
            }

        }, function() { 
            $( this ).next().remove();
        });

    });

</script>

<?php wp_nav_menu (array('theme_location' => 'Menu4','container_class' => 'nav_menu','container_id' => 'nav_menu_3')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
