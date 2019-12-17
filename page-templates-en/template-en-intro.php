<?php
/*
 * Template Name: en-intro
 */
?>
<?php
$translate = qtranxf_getLanguage()=='zh' ? true : false;

$wp_query_args = array(
    'posts_per_page' => 4,
    's' => '[:'.qtranxf_getLanguage().']',
    'orderby'   => 'date',
    'order' => 'DESC'
);

get_header(en_header); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/en-intro.css" type="text/css" media="screen and (min-width: 701px)" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/intro-mobile.css" type="text/css" media="screen and (max-width: 700px)" />

 
<div class="page-intro">
    <div class="container intro-mobile-container">
        <div id="intro-container">
            <div id="intro-wrapper">
                <div class="intro-subpage-1">    <!--first page-->
                    <div class="intro-littleTitle">Introduction to the College</div>
                    <div class="intro-bigTitle">Introduction</div>
                    <div class="intro-button intro-prev"></div>
                    <div class="intro-button intro-next"></div>
                    <hr class="intro-title">
                    <!--下半部分-->
                    <p class="intro-first-page-text">
                    The Institute of Biological Science and Technology was established in 1994 as a master’s degree program, which is the first biotechnology-related academic department at NCTU.  
                    The Ph.D. program was initiated in 1998. The first undergraduate students were officially admitted in 1999. 
                    The Institute of Biochemistry started recruiting in 2001 while the Institute of Bioinformatics started in 2002.
                    In 2003, the College of Biological Science and Technology (CBT) was officially approved for opening by the Ministry of Education.

					</p>
					
				</div>
                <div class="intro-subpage">    <!--second page-->
                    <!--<div class="intro-container">-->
			<div class="intro-littleTitle">Introduction to the College</div>
                        <div class="intro-bigTitle">Special Features of Development</div>
                        <div class="intro-button intro-prev"></div>
                        <div class="intro-button intro-next"></div>
                        <hr class="intro-title">
                        <!--下半部分-->
                        <div class="intro-second-page-left">
                            <div class="intro-p2-text1">A college that emphasizes on interdisciplinary development and focuses on not only academic foundations but also practical applications</div>
						
                            <div class="intro-p2-text2">
								<ul>
									<li>Combines the fields of molecular biology, biochemistry, informatics, genetic engineering, microelectronics, optoelectronics, mechanics, materials, medicine, electronic engineering, etc</li>
									<li>Focuses on the integration of theories and applications in teaching and actively promotes interdisciplinary learning modules.</li>
									<li>Focuses on advanced researches and combines R&D institutes with industry</li>
									<li>Cultivates students with interdisciplinary scientific knowledge and leadership skills</li>
								</ul>
							</div>
						</div>	
				</div>	
                    <!--</div>-->
			
                <div class="intro-subpage">    <!--third page-->
                    <div class="intro-littleTitle">Introduction to the College</div>
                    <div class="intro-bigTitle">Future Development</div>
                    <div class="intro-button intro-prev"></div>
                    <div class="intro-button intro-next"></div>
                    <hr class="intro-title">
                    <!--下半部分-->
					<div class="intro-third-page-left">
                        <div class="intro-p3-text">Biotechnology is the industry with the most potential in the 21st century.</div>
						<div class="intro-p3-text2">
                        To recruit more excellent professionals domestically and overseas to strengthen the faculty lineup of the college</br>
                        To integrate in-house resources of the college and build first-class core laboratories and research centers</br>
                        To take the advantage of excellent research potential of NCTU to develop interdisciplinary biotechnology research</br>
						</div>
					</div>	
				</div>
   
		</div>
            </div>
        </div>
    </div>
                <a class="icon_down" href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon_w"></div></a>
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
