<?php
/*
 *Template Name:research_highlights
 */
?>
<?php get_header(); ?>
<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/research.css" type="text/css" media="screen and (min-width: 701px)" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/research-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
</head>

<div class="page-research_highlights">
    <div class="container">

        <?php
            $args = array(
                'category_name' => 'research_achievements',
                'order'   => 'ASC',
            );

            $the_query = new WP_Query($args);

            if($the_query->have_posts()):
                $i = 0;
                while($the_query->have_posts()):
                    $the_query->the_post();
  
        ?>

        <div class="rh-list_block rh-list_block<?php echo $i;?>">
            <p class="subtitled rh-title1">02 研究領域</p>
            <p class="subtitle rh-title2"><?php the_title(); ?></p>
            <div class="rh-btn rh-btn_left"></div>
            <div class="rh-btn rh-btn_right"></div>
            <div class="clear_both"></div>
            <hr class="rh-line">
            <div class="rh-list">
                <div id="rh-list_<?php echo $i;?>_1" class="rh-list_item rh-inactive" data-i="1" data-rel="rh-info_block_<?php echo $i;?>_1"><?php the_field('category1'); ?></div>
                <div id="rh-list_<?php echo $i;?>_2" class="rh-list_item rh-inactive" data-i="2" data-rel="rh-info_block_<?php echo $i;?>_2"><?php the_field('category2'); ?></div>
                <div id="rh-list_<?php echo $i;?>_3" class="rh-list_item rh-inactive" data-i="3" data-rel="rh-info_block_<?php echo $i;?>_3"><?php the_field('category3'); ?></div>
                <div id="rh-list_<?php echo $i;?>_4" class="rh-list_item rh-inactive" data-i="4" data-rel="rh-info_block_<?php echo $i;?>_4"><?php the_field('category4'); ?></div>
            </div>
        
        </div>                

        <?php
                    $i++;
                endwhile;
            endif;  
        ?>

        <!-- original example
        <div class="rh-list_block rh-list_block1">
            <p class="subtitled rh-title1">02 研究領域</p>
            <p class="subtitle rh-title2">生物資訊</p>
            <div class="rh-btn rh-btn_left"></div>
            <div class="rh-btn rh-btn_right"></div>
            <div class="clear_both"></div>
            <hr class="rh-line">
            <div class="rh-list">
                <div id="rh-list_1_1" class="rh-list_item rh-inactive" data-i="1" data-rel="rh-info_block_1_1">計算生物研究</div>
                <div id="rh-list_1_2" class="rh-list_item rh-inactive" data-i="2" data-rel="rh-info_block_1_2">計算生物研究</div>
                <div id="rh-list_1_3" class="rh-list_item rh-inactive" data-i="3" data-rel="rh-info_block_1_3">計算生物研究</div>
                <div id="rh-list_1_4" class="rh-list_item rh-inactive" data-i="4" data-rel="rh-info_block_1_4">計算生物研究</div>
            </div>
        </div>-->
        
        <!-- 顯示分隔的加號 -->
        <!--<div class="rh-cross_block">
            <div class="rh-cross rh-cross1"></div>
            <div class="rh-cross rh-cross2"></div>
            <div class="rh-cross rh-cross3"></div>
            <div class="rh-cross rh-cross4"></div>
            <div class="rh-cross rh-cross5"></div>
            <div class="rh-cross rh-cross6"></div>
        </div>-->
        
        <!-- 領域的老師及網站 -->
        <?php  
            if($the_query->have_posts()):
                while($the_query->have_posts()):
                    $the_query->the_post();
                    
                    remove_filter ('the_content', 'wpautop');
                    the_content();

                endwhile;
            endif;
            
        ?>

        <!-- original example : list0  
        <div class="rh-info_block rh-info_block_1_1" data-num="6">
            <a target="_blank" href="http://isblab.life.nctu.edu.tw/">
            <div class="rh-info_item">
                <p class="rh-info_text1 text"> 黃憲達</p>
            </div>
            </a>
            <a target="_blank" href="http://wild.life.nctu.edu.tw/~jsyu/">
            <div class="rh-info_item">
                <p class="rh-info_text1 text"> 尤禎祥</p>
            </div>
            </a>
            <a target="_blank" href="http://10.life.nctu.edu.tw/">
            <div class="rh-info_item">
                <p class="rh-info_text1 text"> 羅惟正</p>
            </div>
            </a>
            <a target="_blank" href="http://life.nctu.edu.tw/~yslin/">
            <div class="rh-info_item">
                <p class="rh-info_text1 text"> 林勇欣</p>
            </div>
            </a>
            <a target="_blank" href="http://140.113.239.51/bioxgem/index.php">
            <div class="rh-info_item">
                <p class="rh-info_text1 text"> 楊進木</p>
            </div>
            </a>
            <a target="_blank" href="http://iclab.life.nctu.edu.tw/">
            <div class="rh-info_item">
                <p class="rh-info_text1 text"> 何信瑩</p>
            </div>
            </a>
        </div>
        -->
		
    </div>
</div>

<script>
    var f = 0;
    var i = 1;
    var rec_num = $(".rh-info_block_0_1").data("num");
/*
    function show_cross(n){
        //console.log("cross_num: "+n)
        $(".rh-cross_block").show()
        $(".rh-cross").hide();
        switch(n){
            case 12:
                $(".rh-cross6").show();
                //console.log("show 6");
            case 11:
                $(".rh-cross5").show();
                //console.log("show 5");
            case 10: case 9:
                $(".rh-cross4").show();
                //console.log("show 4");
            case 8:
                $(".rh-cross3").show();
                //console.log("show 3");
            case 7:
                $(".rh-cross2").show();
                //console.log("show 2");
            case 6:
                $(".rh-cross1").show();
                //console.log("show 1");
            default:
                break;
        }
    }
 */
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
        if(location.hash){
            var newhash = window.location.hash.substring(1); 
            if( newhash == "cell" ){
                f = 0;
            }else if( newhash == "bioinfo" ){
                f = 1;
            }else if( newhash == "biophysics" ){
                f = 2;
			}else if( newhash == "protein" ){
                f = 3;
            }else{
                f = 0;
            }
        }else{
            f = 0;
        }
        $(".rh-info_block").hide();
        $(".rh-list_block").hide();
        $(".rh-list_block"+f).fadeIn(500,"swing");
        $("#rh-list_"+f+"_"+i).removeClass("rh-inactive").addClass("rh-active");
        $(".rh-info_block_"+f+"_"+i).fadeIn(500,"swing");
        //rec_num = $(".rh-info_block_"+f+"_1").data("num");
        //show_cross(rec_num);
    });

    $(".rh-list_item").click(function(){
        $("#rh-list_"+f+"_"+i).removeClass("rh-active").addClass("rh-inactive");
        i = $(this).data("i");
        $("#rh-list_"+f+"_"+i).removeClass("rh-inactive").addClass("rh-active");
        //show info block
        $(".rh-info_block").fadeOut(500,"swing");
        //$(".rh-cross").fadeOut(500,"swing");
        $('.' + $(this).data('rel')).fadeIn(500,"swing");
        //show cross
   //     rec_num = ($(".rh-info_block_"+f+"_"+i).data("num"));
   //     show_cross(rec_num);
    });

    $(".rh-btn_left").click(function(){
        //inactive list item
        //$("#rh-list_"+f+"_"+i).removeClass("rh-active").addClass("rh-inactive");
        //update i and f
        //i = 1;
        //inactive list item
        console.log("disable rh-list_"+f+"_"+i);
        $("#rh-list_"+f+"_"+i).removeClass("rh-active").addClass("rh-inactive");
        f = (f+3) % 4;
        //show new list block
        /*$(".rh-list_block").fadeOut(500,"swing");
        $(".rh-list_block"+f).fadeIn(500,"swing");
        //activate new list item
        $("#rh-list_"+f+"_"+i).removeClass("rh-inactive").addClass("rh-active");
        //show info block
        $(".rh-info_block").fadeOut(500,"swing");
        $(".rh-cross").fadeOut(500,"swing");
        $(".rh-info_block_"+f+"_"+i).fadeIn(500,"swing");
        //show cross
        rec_num = ($(".rh-info_block_"+f+"_"+i).data("num"));
        show_cross(rec_num);*/
        var newh="";
        if( f==0 ){
            newh = "cell";
        }else if( f==1 ){
            newh = "bioinfo";
        }else if( f==2 ){
            newh = "biophysics";
		}else if( f==3 ){
            newh = "protein";
		}
        window.location.hash = newh;
    })

    $(".rh-btn_right").click(function(){
        //inactive list item
        //$("#rh-list_"+f+"_"+i).removeClass("rh-active").addClass("rh-inactive");
        //update i and f
        //i = 1;
        //inactive list item
        console.log("disable rh-list_"+f+"_"+i);
        $("#rh-list_"+f+"_"+i).removeClass("rh-active").addClass("rh-inactive");
        f = (f+1) % 4;
        //show new list block
        /*$(".rh-list_block").fadeOut(500,"swing");
        $(".rh-list_block"+f).fadeIn(500,"swing");
        //activate new list item
        $("#rh-list_"+f+"_"+i).removeClass("rh-inactive").addClass("rh-active");
        //show info block
        $(".rh-info_block").fadeOut(500,"swing");
        //$(".rh-cross").fadeOut(500,"swing");
        $(".rh-info_block_"+f+"_"+i).fadeIn(500,"swing");
        //show cross
        rec_num = ($(".rh-info_block_"+f+"_"+i).data("num"));
        show_cross(rec_num);*/
        var newh="";
        if( f==0 ){
            newh = "cell";
        }else if( f==1 ){
            newh = "bioinfo";
        }else if( f==2 ){
            newh = "biophysics";
		}else if( f==3 ){
            newh = "protein";
        }
        window.location.hash = newh;
    });

   
    window.onhashchange = function(){
        // hash changed. Do something cool.
        if(location.hash){
             var hash = location.hash.substring(1);
             console.log(hash);
            //update i and f
            if( hash == "cell" ){
                f = 0;
            }else if( hash == "bioinfo" ){
                f = 1;
            }else if( hash == "biophysics" ){
                f = 2;
			}else if( hash == "protein" ){
                f = 3;
            }else{
                f = 0;
            }
            i = 1;
            //show new list block
            $(".rh-list_block").fadeOut(500,"swing");
            $(".rh-list_block"+f).fadeIn(500,"swing");
            //activate new list item
            $("#rh-list_"+f+"_"+i).removeClass("rh-inactive").addClass("rh-active");
            //show info block
            $(".rh-info_block").fadeOut(500,"swing");
     //       $(".rh-cross").fadeOut(500,"swing");
            $(".rh-info_block_"+f+"_"+i).fadeIn(500,"swing");
            //show cross
     //       rec_num = ($(".rh-info_block_"+f+"_"+i).data("num"));
     //       show_cross(rec_num);
             // load page
             // alert(hash);
        }else{
             // load home page
             // alert("home");
        }
    }

</script>
<?php wp_nav_menu (array('theme_location' => 'Menu4','container_class' => 'nav_menu','container_id' => 'nav_menu_2')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
