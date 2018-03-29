<?php
/*
 * Template Name: intro
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
 
<div class="page-intro">
    <div class="container intro-mobile-container">
        <div id="intro-container">
            <div id="intro-wrapper">
                <div class="intro-subpage-1">    <!--first page-->
                    <div class="intro-littleTitle"><?php echo qtranxf_getLanguage()=='zh' ? '01  學院概況與簡介' : '01  The College' ?></div>
                    <div class="intro-bigTitle"><?php echo qtranxf_getLanguage()=='zh' ? '簡介' : 'Overview' ?></div>
                    <div class="intro-button intro-prev"></div>
                    <div class="intro-button intro-next"></div>
                    <hr class="intro-title">
                    <!--下半部分-->
                    <p class="intro-first-page-text">
						生物科技系成立於民國八十三年，由碩士班開始，成為交通大學第一個生物科技相關的系所。</br>八十七年博士班成立後，於八十八年正式招收第一屆大學部學生。</br>九十年本系生化工程研究所開始招生，生物資訊研究所已於九十一年正式招生。</br>生物科技學院在九十二年獲教育部准許成立。
					</p>
					
				</div>
                <div class="intro-subpage">    <!--second page-->
                    <!--<div class="intro-container">-->
			<div class="intro-littleTitle">01  學院概況與簡介</div>
                        <div class="intro-bigTitle">發展特色</div>
                        <div class="intro-button intro-prev"></div>
                        <div class="intro-button intro-next"></div>
                        <hr class="intro-title">
                        <!--下半部分-->
                        <div class="intro-second-page-left">
                            <div class="intro-p2-text1">兼顧基礎與實務著重跨領域發展之學院</div>
						
                            <div class="intro-p2-text2">
								<ul>
									<li>結合分子生物、生物化學、資訊、基因工程、微電子、光電、機械、材料、醫學、電子工程等各領域。</li>
									<li>在教學上注重理論與實作之整合，積極推動跨領域之學習方式。</li>
									<li>注重前瞻性之研究，結合研發單位與產業界。</li>
									<li>培育跨領域科學知識與領導才能之學生。</li>
								</ul>
							</div>
						</div>	
				</div>	
                    <!--</div>-->
			
                <div class="intro-subpage">    <!--third page-->
                    <div class="intro-littleTitle">01  學院概況與簡介</div>
                    <div class="intro-bigTitle">未來發展</div>
                    <div class="intro-button intro-prev"></div>
                    <div class="intro-button intro-next"></div>
                    <hr class="intro-title">
                    <!--下半部分-->
					<div class="intro-third-page-left">
                        <div class="intro-p3-text">生物科技是21世紀最具發展潛力之產業</div>
						<div class="intro-p3-text2">
							敦聘國內外優秀人才蒞院服務以加強本院師資陣容。</br>
							整合院內資源，建立一流的核心實驗室及研究中心。</br>
							整合交大研究之優勢，發展生物科技跨領域之研究。</br>
						</div>
					</div>	
				</div>
   
		</div>
            </div>
        </div>
    </div>
                <a class="icon_down" href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon"></div></a>
<!--
	<div id="icon_down_wrapper" class="icon_down_slide"></div>
	<a href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);">
		<span onclick="iconDown()" class="icon_down"></span>
	</a>-->

</div>

<script>
    //just querying the DOM...like a boss!

/*Annie added for mobile*/
    function iconDown(){
    	var nextpageDuration = 140;
	document.getElementById("icon_down_wrapper").style.height = "100vh";
    	setTimeout(function(){
		window.location = '<?php echo site_url(); ?>/dean';
    	},nextpageDuration);
    }

/*Annie added for mobile*/

    var wrapper = document.querySelector("#intro-wrapper");
    var next_buttons = document.querySelectorAll(".intro-next");
    var prev_buttons = document.querySelectorAll(".intro-prev");

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
        activeLink = (activeLink + 1) % 3;
     
        var position = (-70)*activeLink;
        var translateValue = "translate3d(" + position + "vw, 0px, 0)";
        window.setTimeout(function(){wrapper.style["opacity"]="1";}, 600);
        wrapper.style["opacity"]="0";
        wrapper.style[transformProperty] = translateValue;
    }
     
    function setClickedItem_2(e) {
        activeLink = (activeLink + 2) % 3;
     
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

    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
