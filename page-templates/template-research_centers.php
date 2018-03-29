<?php
/*
 *Template Name:research_centers
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
<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/academics.css" type="text/css" media="screen and (min-width: 701px)" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/academics-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
</head>

<div class="page-academics_1">
    <div class="container">
        <div id="ac-container">
            <div class="ac-title_block">
                <div class="subtitled rc-smalltitle">02 研究中心</div>
                <div class="subtitle rc-bigtitle">中心介紹</div>
                <div class="rc-smalltitle formobile">02 研究中心</div>
                <div class="rc-bigtitle formobile">中心介紹</div>
		<div class="ac-line"></div>
            </div>
	    <!--for mobile -->
	    <div class="ac-circle_block formobile">
			<a target="_blank" href="#"><div class="rc-text">生物資訊中心</div></a>
	    </div>
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
						<a target="_blank" href="<?php the_field('white-hexagon-link'); ?>"><div class="hexagon white-hexagon"><div class="bio-text"><?php the_field('white-hexagon'); ?></div></div></a>
					<?php endif; ?>

					<?php if(get_field('blue-hexagon-left')): ?>
						<a target="_blank" href="<?php the_field('blue-hexagon-left-link'); ?>"><div class="hexagon blue-hexagon"><div class="bio-text"><?php the_field('blue-hexagon-left'); ?></div></div></a>
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
						<a target="_blank" href="http://cbr.nctu.edu.tw/"><div  class="hexagon white-hexagon"><div class="bio-text">生物資訊中心</div></div></a>
						<div style="clear:both"></div>						
					</div>
					-->
				</div>
			</div>
        </div>

    </div>
</div>


<?php wp_nav_menu (array('theme_location' => 'Menu5','container_class' => 'nav_menu','container_id' => 'nav_menu_2')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
