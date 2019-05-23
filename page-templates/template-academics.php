<?php
/*
 *Template Name:academics
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

<div class="page-academics">

    <div class="container">
        <div id="ac-container">
            <div class="ac-title_block">
                <div class="subtitled rc-smalltitle mobilehidden">01 教學單位</div>
                <div class="subtitle rc-bigtitle mobilehidden">系所簡介</div>
                <div class="rc-smalltitle formobile">01 教學單位</div>
                <div class="rc-bigtitle formobile">系所簡介</div>
		<div class="ac-line"></div>
            </div>
	<!--for mobile-->
	    <div class="ac-circle_block formobile">
			<a target="_blank" href="http://bio.life.nctu.edu.tw/?locale=zh_tw"><div class="ac-text">生物科技學系</div></a>
			<div class="ac-text">-</div>
			<a target="_blank" href="http://bio.life.nctu.edu.tw/?locale=zh_tw"><div class="ac-text">生物科技學系暨研究所</div></a>
			<a target="_blank" href="http://bioinfo.nctu.edu.tw/?locale-zh_tw"><div class="ac-text">生物資訊與系統生物學研究所</div></a>
			<a target="_blank" href="http://bioce.life.nctu.edu.tw/"><div class="ac-text">分子醫學與生物工程研究所</div></a>
			<div class="ac-text">-</div>
			<a target="_blank" href="https://ustnc.ym.edu.tw//bin/home.php"><div class="ac-text">跨領域神經科學博士學位學程</div></a>
			<a target="_blank" href="http://biose-phd.life.nctu.edu.tw/"><div class="ac-text">生醫科學與工程博士學位學程</div></a>
			<a target="_blank" href="https://pidcbt.nctu.edu.tw/"><div class="ac-text">生科院產業博士班</div></a>
		</div>
		<a class="icon_down" href="<?php echo site_url(); ?>/research_centers" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon_w"></div></a>	
	<!--for mobile -->

            <!--hexagon  block-->
            <div class="ac-hexagon_block mobilehidden">
				<div class="hexagon-block">
					<div class="yellow">

					<?php if(get_field('yellow-hexagon-left')): ?>
						<a target="_blank" href="<?php the_field('yellow-hexagon-left-link'); ?>"><div class="hexagon yellow-hexagon"><div class="bio-text"><?php the_field('yellow-hexagon-left'); ?></div></div></a>
					<?php else: ?>
						<a target="_blank" href="#"><div class="hexagon"></div></a>
					<?php endif; ?>	

					<?php if(get_field('yellow-hexagon-center')): ?>
						<a target="_blank" href="<?php the_field('yellow-hexagon-center-link'); ?>"><div class="hexagon yellow-hexagon"><div class="bio-text"><?php the_field('yellow-hexagon-center'); ?></div></div></a>
					<?php else: ?>
						<a target="_blank" href="#"><div class="hexagon"></div></a>
					<?php endif; ?>

					<?php if(get_field('yellow-hexagon-right')): ?>
						<a target="_blank" href="<?php the_field('yellow-hexagon-right-link'); ?>"><div class="hexagon yellow-hexagon"><div class="bio-text"><?php the_field('yellow-hexagon-right'); ?></div></div></a>
					<?php else: ?>
						<a target="_blank" href="#"><div class="hexagon"></div></a>
					<?php endif; ?>
						
						<div style="clear:both"></div>										
					</div>	

					<div class="blue">

					<?php if(get_field('white-hexagon')): ?>
						<a href="https://dbt.nctu.edu.tw/#1"><div class="hexagon white-hexagon"><div class="bio-text"><?php the_field('white-hexagon'); ?></div></div></a>
					<?php endif; ?>

					<?php if(get_field('blue-hexagon-left')): ?>
						<a href="https://dbt.nctu.edu.tw/#1"><div class="hexagon blue-hexagon"><div class="bio-text"><?php the_field('blue-hexagon-left'); ?></div></div></a>
					<?php else: ?>
						<a target="_blank" href="#"><div class="hexagon"></div></a>
					<?php endif; ?>

					<?php if(get_field('blue-hexagon-center')): ?>
						<a target="_blank" href="<?php the_field('blue-hexagon-center-link'); ?>"><div class="hexagon blue-hexagon"><div class="bio-text"><?php the_field('blue-hexagon-center'); ?></div></div></a>
					<?php else: ?>
						<a target="_blank" href="#"><div class="hexagon"></div></a>
					<?php endif; ?>

					<?php if(get_field('blue-hexagon-right')): ?>
						<a target="_blank" href="<?php the_field('blue-hexagon-right-link'); ?>"><div class="hexagon blue-hexagon"><div class="bio-text"><?php the_field('blue-hexagon-right'); ?></div></div></a>
					<?php else: ?>
						<a target="_blank" href="#"><div class="hexagon"></div></a>
					<?php endif; ?>

						<div style="clear:both"></div>
					</div>

					<!-- original example
					<div class="blue">
						<a target="_blank" href="http://bio.life.nctu.edu.tw/?locale=zh_tw"><div  class="hexagon white-hexagon"><div class="bio-text">生物科技學系</div></div></a>
						<div style="clear:both"></div>
					</div>
					-->

				</div>
            </div>
        </div>

        <!--description block-->


    </div>
</div>

<script>

</script>


<?php wp_nav_menu (array('theme_location' => 'Menu5','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php get_footer(); ?>
