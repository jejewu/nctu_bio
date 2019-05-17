<?php
/*
 * Template Name: homepage
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

get_header(); ?>
<div class="hp">
    <div class="hp-nav">
        <ul>
            <li style="background-color:#810C95"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="hp-p01_next hp-p01_1" style="display:none;"></div>
    <div class="hp-p01 hp-p01_0">
        <?php if (!$translate) { ?>
        <div class="language-opt">
            <div class="lang-left lang-choose">
                中文
            </div>
            <a href="<?php echo site_url(); ?>/en/">
               <div class="lang-right lang-normal">
                    English
                </div>
            </a>
        </div>
        <?php } else { ?>
        <div class="language-opt">
            <a href="<?php echo site_url(); ?>/zh/">
                <div class="lang-left lang-normal">
                    中文
                </div>
            </a>
            <div class="lang-right lang-choose">
                English
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="hp-p02">
        <div class="bgcontainer"></div>
        <div class="container" style="overflow-y: hidden">
            <div class="hp-container">
                <?php foreach ($newslist as $key => $value): ?> <!-- StartNews -->
                    <div class="hp-news hp-news<?php echo $key ?>">
                        <div class="icon_down"><div class="right_icon_w"></div></div>
                        <div class="hp-newsheader">
                            <div id="hp-news-icon<?php echo $key+1 ?>" class="hp-news-icon"></div>
                            <div class="hp-newstitle">
                                <?php echo $translate ? $value[1] : $value[0] ?>
                            </div>
                            <a href="<?php echo site_url().'/news' ?>" title="More">
                                <div class="hp-moreinfo"></div>
                            </a>
                            <!--<div class="hp-nextnews" title="Next"></div>-->
                        </div>
                        <div class="hp-newsbody">
                            <?php
                            $wp_query_args['category_name'] = $value[2];
                            $the_query = new WP_Query($wp_query_args);
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                            ?>
                            <div class="hp-news_item_date">
                                <div class="date_image">
                                    <?php the_time('Y.m.j'); ?>
                                </div>
                            </div>
                            <a class="hp-news_item_title" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                            <hr class="news_line">
                            <?php
                                endwhile;
                            else:
                            ?>
                                <div class="hp-news_item_title">
                                    <?php echo $translate ? "Coming soon!" : "還沒發佈新文章喔！" ?>
                                </div>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>  <!-- End news -->
                <?php endforeach; ?>  
            </div>       
        </div>
    </div>
    
    <div class="hp-p03">
        <div class="container">
            <div id="hp-gallery">
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_01.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_02.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_03.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_04.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper_wide">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_05.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div id="hp-gallery-link" class="hp-gallery-link-before">
                    <div id="hp-gallery-icon" class="hp-gallery-link-before"></div>
                    <div id="hp-gallery-font" class="hp-gallery-link-before">
                        <?php echo $translate ? 'Campus Moments|Featured' : '師生動態' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hp-p04">
        <div class="container">
            <div id="p5-left"></div>
            <div id="p5-right"></div>
            <a href="<?php echo site_url(); ?>/admissions">
                <div id="p5-left-button">
                    <?php echo $translate ? 'High School Students' : '高中生專區' ?>
                </div>
            </a>
            <!--<a href="<?php echo site_url(); ?>/international">-->
                <div id="p5-right-button">
                    <?php echo $translate ? 'International Students' : '國際生專區' ?>
                </div>
            <!--</a>-->
            <div id="p5-announce-block">
                <div id="copy-right-title">著作權聲明</div>
                <div id="copy-right-text"> 1.交通大學理學院網站(以下簡稱本網站)上刊載之所有內容，除著作權法規定不得為著作權之標的(如法律、命令、公務員撰擬之講稿、新聞稿等--請參考著作權法第9條規定)外，其他包括文字敘述、攝影、圖片、錄音、影像及其他資訊，均受著作權法保護。<br>2.本網站所提供相關連結網站之網頁或資料，均為被連結網站所提供，相關權利為該等網站或合法權利人所有，本網站不擔保其正確性、即時性或完整性。</div>
            </div>
            <div id="foot">
                <div id="foot-left">
                    <p id="foot-font-1">
                        <?php echo $translate ? 'NCTU' : '國立交通大學' ?>
                    </p>
                    <p id="foot-font-2">生科院</p>
                    <p id="foot-font-3">College of Biological<br>Science and Technology</p>
                </div>
                <div id="foot-center">
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_01.svg"> 886-3-572-9287</div>
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_02.svg"> 886-3-571-9288</div>
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_03.svg"> meiling@cc.nctu.edu.tw</div>
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_04.svg"> 
                        <?php echo $translate ? 'Room 117, Lab Building 1, 75 Bo-Ai Street, Hsin-Chu, Taiwan 300, ROC' : '300 新竹市博愛街75號 賢齊館325室' ?>
                    </div>
                    <hr class="ft-hr"/>
                    <div class="foot-font-4" style="float:left;">
                        <a href="http://www.nctu.edu.tw/">
                            <?php echo $translate ? 'NCTU' : '交通大學' ?>
                        </a>
                        <a href="http://www.nctu.edu.tw/">
                            <?php echo $translate ? '' : ' | 網頁導覽' ?> | 
                        </a>
                        <a href="http://www.life.nctu.edu.tw">
                             <?php echo $translate ? 'Old Version' : '舊版網頁' ?> | 
                        </a>
                        <a target=_blank href="<?php bloginfo('template_url')?>/files/Web_Design_Guideline.pdf">
                            <?php echo $translate ? 'Web Design Guideline' : '設計規範' ?>
                        </a>
                        <a id="hp-announce">
                            <?php echo $translate ? '' : ' | 著作權聲明' ?>
                        </a> 
                    </div>
                </div>
                <!--<div id="foot-right">
                    <div >
                        <img class="ft-link-icon" src="<?php bloginfo('template_url')?>/image/icon/FB_icon.png" alt="Facebook link">
                    </div>
                    <div  style="margin-top:1vh">
                        <img class="ft-link-icon" src="<?php bloginfo('template_url')?>/image/icon/YT_icon.png" alt="YouTube link">
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
<script>
    var now_bg = 0;
    var frequency = 5000;
    var now_news = 0;
    
    function showNext(){
        old_bg = now_bg;
        now_bg = (now_bg+1)%6; /* 輪播圖總數量 */
        next_bg = (now_bg+1)%6;
        $(".hp-p01").addClass("hp-p01_"+now_bg).removeClass("hp-p01_"+old_bg);
        $(".hp-p01_next").addClass("hp-p01_"+next_bg).removeClass("hp-p01_"+now_bg);
        timer = setTimeout(showNext, frequency);
    }
    
    $( document ).ready(function(){
    $('.hp-newsbody').perfectScrollbar();
        timer = setTimeout(showNext, frequency);
        $(".hp-news0").show();
    });

    $(".hp-nextnews").click(function(){
        $(".hp-news"+now_news).fadeOut(1000);
        now_news = (now_news + 1)%4;
        $(".hp-news"+now_news).fadeIn(1000);
        console.log(screen.width + "/" + screen.height);
    });


    $(".icon_down").click(function(){
        $(".hp-news"+now_news).fadeOut(1000);
        now_news = (now_news + 1)%4;
        $(".hp-news"+now_news).fadeIn(1500);
        console.log(screen.width + "/" + screen.height);
    });
    $(".icon_up").click(function(){
        $(".hp-news"+now_news).fadeOut(1000);
        now_news = (now_news + 3)%4;
        $(".hp-news"+now_news).fadeIn(1500);
        console.log(screen.width + "/" + screen.height);
    });
    $("#hp-announce").hover(function(){
        $("#p5-announce-block").fadeIn(500);
    },function(){
        $("#p5-announce-block").fadeOut(500);
    });

</script>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
