<?php
/*
 *Template Name:research_achievements
 */
?>
<?php get_header(); ?>



<div class="page-research_achievements">
    <div class="container">    
        <div class="ra-color_block"></div>
        <div class="ra-block">
            <p class="subtitled ra-title1 formobile">01 重點研究</p>
                <p class="subtitled ra-title1 mobilehidden">01 重點研究</p>
                <p class="subtitle ra-title2">各領域重點研究</p>
                <!--
                <div class="ra-btn ra-btn1"></div>
                <div class="ra-line formobile"></div>
                <a href="<?php echo site_url(); ?>/most_subsided_projects"><div class="ra-btn ra-btn2"></div></a>
                -->

            <?php

                $args = array(
                        'category_name' => 'research_achievements',
                        'order'   => 'ASC',
                );

                $the_query = new WP_Query($args);
            ?>
            <div class="ra-circle_block mobilehidden">
                <div class="ra-circle_b subtitled mobilehidden">跨領域研究</div>

                <?php
                    if($the_query->have_posts()):
                        $i = 1;
                        while($the_query->have_posts()):
                            $the_query->the_post();
                ?>

                    <a href="<?php echo site_url(); ?>/research_highlights#<?php the_field('highlight'); ?>">
                        <div class="ra-circle_l ra-circle_<?php echo $i;?> ra-c<?php echo $i;?> subtitled mobilehidden"><div class="vertival_center"><?php the_field('intro'); ?></div></div>
                    </a>
                <?php
                        $i++;
                        endwhile;
                    else:
                        echo "no post";
                    endif;                                     
                ?>
            </div> 

                <?php
                    if($the_query->have_posts()):
                        $i = 1;
                        while($the_query->have_posts()):
                            $the_query->the_post();
                ?>

                    <div class="mobilehidden ra-text_block ra-block<?php echo $i;?>">
                        <div class="subtitle ra-title3 mobilehidden"><?php the_title(); ?></div>
                        <hr class="ra-hr">
                        <div class="ra-subtitled ra-text"><?php the_field('category1'); ?></div>
                        <div class="ra-subtitled ra-text"><?php the_field('category2'); ?></div>
                        <div class="ra-subtitled ra-text"><?php the_field('category3'); ?></div>
                        <div class="ra-subtitled ra-text"><?php the_field('category4'); ?></div>
                    </div>
                    
                    <div class="formobile ra-text_block ra-block_mobile_<?php echo $i;?>">
                        <hr class="ra-hr">
                        <div class="subtitle ra-title3 formobile"><?php the_title(); ?></div>
                        <div class="ra-subtitled ra-text"><?php the_field('category1'); ?></div>
                        <div class="ra-subtitled ra-text"><?php the_field('category2'); ?></div>
                        <div class="ra-subtitled ra-text"><?php the_field('category3'); ?></div>
                        <div class="ra-subtitled ra-text"><?php the_field('category4'); ?></div>
                    </div>
                <?php
                        $i++;
                        endwhile;
                    else:
                        echo "no post";
                    endif;
                ?>


            <div class="ra-circle_block formobile">
                <div class="ra-c1_mobile text formobile"></div>
                <div class="ra-c2_mobile text formobile"></div>
                <div class="ra-c3_mobile text formobile"></div>
                <div class="ra-c4_mobile text formobile"></div>
            </div>

        </div>
    </div>        
</div> 
<a class="icon_down"href="<?php echo site_url(); ?>/national_labs" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon_w"></div></a>   
<!-- original example       
            <div class="ra-circle_block mobilehidden">
                <div class="ra-circle_b subtitled mobilehidden">跨領域基礎學科</div>
                <a href="<?php echo site_url(); ?>/research_highlights#cell">
                    <div class="ra-circle_l ra-circle_1 ra-c1 subtitled mobilehidden">細胞與腫瘤</div>
                </a>
                <a href="<?php echo site_url(); ?>/research_highlights#bioinfo">
                    <div class="ra-circle_l ra-circle_2 ra-c2 subtitled mobilehidden">生物資訊</div>
                </a>
                <a href="<?php echo site_url(); ?>/research_highlights#biophysics">
                    <div class="ra-circle_l ra-circle_3 ra-c3 subtitled mobilehidden"><div class="ra-title_1">生物物理<br>奈米檢測<br>與神經科學</div></div>
                </a>
				<a href="<?php echo site_url(); ?>/research_highlights#protein">
                    <div class="ra-circle_l ra-circle_4 ra-c4 subtitled mobilehidden"><div class="ra-title_2">蛋白質<br>及生質能源</div></div>
                </a>
            </div>

            <div class="ra-text_block ra-block1">
                <div class="subtitle ra-title3 mobilehidden">細胞與腫瘤領域</div>
                <hr class="ra-hr">
                <div class="ra-subtitled ra-text">生物研究</div>
                <div class="ra-subtitled ra-text">計算生物研究</div>
                <div class="ra-subtitled ra-text">計算生物研究</div>
                <div class="ra-subtitled ra-text">計算生物研究</div>
            </div>
-->  

<?php        

?>

<script>


    function isMobile() {

    try{ document.createEvent("TouchEvent"); return true; }

    catch(e){ return false;}

    }

    if(isMobile()){
        $(".ra-block_mobile_1").css("display","block");
        $(".ra-c1_mobile").css("background-image","url(../wp-content/themes/nctu_bio/image/Mobile_500x600/02.png)");
    }
    $(".ra-c1").hover(
        function(){
            $(".ra-block1").fadeIn(500,"swing");
        },function(){
            $(".ra-block1").fadeOut(500,"swing");
        }
    );
    $(".ra-c1_mobile").hover(
        function(){
            $(".ra-block_mobile_1").fadeIn(500,"swing");
            $(".ra-c1_mobile").css("background-image","url(../wp-content/themes/nctu_bio/image/Mobile_500x600/02.png)");
        },function(){
            $(".ra-block_mobile_1").fadeOut(500,"swing");
            $(".ra-c1_mobile").css("background-image","url(../wp-content/themes/nctu_bio/image/Mobile_500x600/01.png)");
        }
    );
    $(".ra-c2").hover(
        function(){
            $(".ra-block2").fadeIn(500,"swing");
	        $(".ra-block1").fadeOut(500,"swing");
        },function(){
            $(".ra-block2").fadeOut(500,"swing");
        }
    );
    $(".ra-c2_mobile").hover(
        function(){
            $(".ra-block_mobile_2").fadeIn(500,"swing");
            $(".ra-block_mobile_1").css("display","none");
            $(".ra-c1_mobile").css("background-image","url(../wp-content/themes/nctu_bio/image/Mobile_500x600/01.png)");
        },function(){
            $(".ra-block_mobile_2").fadeOut(500,"swing");
        }
    );
    $(".ra-c3").hover(
        function(){
            $(".ra-block3").fadeIn(500,"swing");
	        $(".ra-block1").fadeOut(500,"swing");
        },function(){
            $(".ra-block3").fadeOut(500,"swing");
        }
    );
    $(".ra-c3_mobile").hover(
        function(){
            $(".ra-block_mobile_3").fadeIn(500,"swing");
            $(".ra-block_mobile_1").css("display","none");
            $(".ra-c1_mobile").css("background-image","url(../wp-content/themes/nctu_bio/image/Mobile_500x600/01.png)");
        },function(){
            $(".ra-block_mobile_3").fadeOut(500,"swing");
        }
    );
    $(".ra-c4").hover(
        function(){
            $(".ra-block4").fadeIn(500,"swing");
	        $(".ra-block1").fadeOut(500,"swing");
        },function(){
            $(".ra-block4").fadeOut(500,"swing");
        }
    );
    $(".ra-c4_mobile").hover(
        function(){
            $(".ra-block_mobile_4").fadeIn(500,"swing");
            $(".ra-block_mobile_1").css("display","none");
            $(".ra-c1_mobile").css("background-image","url(../wp-content/themes/nctu_bio/image/Mobile_500x600/01.png)");
        },function(){
            $(".ra-block_mobile_4").fadeOut(500,"swing");
        }
    );
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>

<?php wp_nav_menu (array('theme_location' => 'Menu4','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>