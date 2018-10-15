<?php
/*
 *Template Name:regulations_and_forms
 */
?>
<?php get_header(); ?>
<div class="page-regulations_and_forms">
<!--
	<a class="icon_up"href="<?php echo site_url(); ?>/conference_room" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>
-->
        <a class="icon_down"href="<?php echo site_url(); ?>/conference_room" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon"></div></a>

    <div class="container container2">
<!--mobile-->
        <div class="rf-container">
            <div class="subtitled rf-l_title formobile">01</div>
            <div class="rf-container-mobile">
                <div class="subtitle rf-b_title formobile">表格規章</div>
                <a class="rf-btn rf-btn_left" href="<?php echo site_url(); ?>/conference_room"></a>
                <a class="rf-btn rf-btn_right" href="<?php echo site_url(); ?>/conference_room"></a>
                <div class="clear_both"></div>
            </div>
                <div class="rf-line"></div>



        <ul class="rf-menu">
        <!--<li class="subtitled rf-normal">表格規章</li><li class="subtitled rf-checked2"><a class="rf-menu-link" href="<?php echo site_url(); ?>/conference_room">會議室借用</a></li>-->
        <li class="subtitled rf-normal">表格規章</li><li class="subtitled rf-checked2">會議室借用</li>
        </ul>
        <div class="rf-form_list_block formobile">
 	    <div class="rf-item" data-num="1"data-rel="rf_block1_0">
            <div id="rfm1" class="rf-item1 rf-inactive rf-bdot-inactive"></div>
	    <div class="text">升等辦法</div>
  	    </div>
	    <div class="rf-item" data-num="2" data-rel="rf_block2_0">
            <div id="rfm2" class="rf-item1 rf-inactive rf-bdot-inactive"></div>
	    <div class="text">評量辦法</div>
            </div>
            <div class="rf-item" data-num="3" data-rel="rf_block3_0">
            <div id="rfm3" class="rf-item1 rf-inactive rf-bdot-inactive"></div>
	    <div class="text">聘任/設置辦法</div>
            </div>
            <div class="rf-item" data-num="4" data-rel="rf_block4_0">
            <div id="rfm4" class="rf-item1 rf-inactive rf-bdot-inactive"></div>
            <div class="text">其他</div>
            </div>
            <div class="rf-item" data-num="5" data-rel="rf_block5_0">
            <div id="rfm5" class="rf-item1 rf-inactive rf-ydot-inactive"></div>
            <div class="text">升等相關表格</div>
            </div>
            <div class="rf-item" data-num="6" data-rel="rf_block6_0">
            <div id="rfm6" class="rf-item1 rf-inactive rf-ydot-inactive"></div>
            <div class="text">評量用表</div>
            </div>
            <div class="rf-item" data-num="7" data-rel="rf_block7_0">
            <div id="rfm7" class="rf-item1 rf-inactive rf-ydot-inactive"></div>
            <div class="text">外審審查表</div>
	    </div>
        </div>
        <div class="rf-form_list_block mobilehidden">
			
			<?php 
				$promotion = get_category_by_slug('promotion');
				$promotion_desc = substr($promotion->description,5,-3);
			?>
            <div id="rf1" class="rf-item rf-inactive rf-bdot-inactive" data-num="1" data-rel="rf_block1_0"><?php echo $promotion_desc; ?></div>
			<?php 
				$evaluation = get_category_by_slug('evaluation');
				$evaluation_desc = substr($evaluation->description,5,-3);
			?>
            <div id="rf2" class="rf-item rf-inactive rf-bdot-inactive" data-num="2" data-rel="rf_block2_0"><?php echo $evaluation_desc; ?></div>
			<?php 
				$employment_and_establishment = get_category_by_slug('employment_and_establishment');
				$employment_and_establishment_desc = substr($employment_and_establishment->description,5,-3);
			?>
            <div id="rf3" class="rf-item rf-inactive rf-bdot-inactive" data-num="3" data-rel="rf_block3_0"><?php echo $employment_and_establishment_desc; ?></div>
			<?php 
				$others = get_category_by_slug('others');
				$others_desc = substr($others->description,5,-3);
			?>
            <div id="rf4" class="rf-item rf-inactive rf-bdot-inactive" data-num="4" data-rel="rf_block4_0"><?php echo $others_desc; ?></div>
            <hr class="rf-ver_line">
			<?php 
				$forms_for_promotion = get_category_by_slug('forms_for_promotion');
				$forms_for_promotion_desc = substr($forms_for_promotion->description,5,-3);
			?>
            <div id="rf5" class="rf-item rf-inactive rf-ydot-inactive" data-num="5" data-rel="rf_block5_0"><?php echo $forms_for_promotion_desc; ?></div>
			<?php 
				$self_evaluation_form = get_category_by_slug('self-evaluation_form');
				$self_evaluation_form_desc = substr($self_evaluation_form->description,5,-3);
			?>
            <div id="rf6" class="rf-item rf-inactive rf-ydot-inactive" data-num="6" data-rel="rf_block6_0"><?php echo $self_evaluation_form_desc; ?></div>
			<?php 
				$forms_for_external_review = get_category_by_slug('forms_for_external_review');
				$forms_for_external_review_desc = substr($forms_for_external_review->description,5,-3);
			?>
            <div id="rf7" class="rf-item rf-inactive rf-ydot-inactive" data-num="7" data-rel="rf_block7_0"><?php echo $forms_for_external_review_desc; ?></div>
        </div>
        
        <!-- original example  升等辦法、評量辦法、外審審查表等為分類的內容說明
            <div id="rf1" class="rf-item rf-inactive rf-bdot-inactive" data-num="1" data-rel="rf_block1_0">升等辦法</div>
            <div id="rf2" class="rf-item rf-inactive rf-bdot-inactive" data-num="2" data-rel="rf_block2_0">評量辦法</div>
                                                    .
                                                    .
                                                    .
            <div id="rf7" class="rf-item rf-inactive rf-ydot-inactive" data-num="7" data-rel="rf_block7_0">外審審查表</div>
        -->

        
        <!--original       
        <div class="rf-info_block rf_block1_0">
            <div class ="rf-text-block">
                <p class="subtitled">教師升等辦法(修訂前)</p>
                <p class="text">理學院教師升等評審辦法(升等為助理教授) | 理學院教師升等評審辦法(升等為副教授) |<br>
                                理學院教師升等評審辦法(升等為教授)</p>
	        </div>
        </div>
        -->
<?php
// Block1 category_id : 9
$i=0;
$b1_page=0;
$args = array('category_name' => 'promotion','order'=>'ASC');
$the_query = new WP_Query($args);
//echo $the_query->max_num_pages;
if($the_query->have_posts()):
?>
        <div class="rf-info_block rf_block1_0">
<?php
    while($the_query->have_posts()):
        $the_query->the_post();
?>
            <div class ="rf-text-block">
                <div class="subtitled"><?php the_title(); ?></div>
                <?php the_content(); ?>
	        </div>
<?php
    endwhile;?>
        </div>
<?php
else:?>
            <div class="rf-info_block rf_block1_0">
                <div class="rf-text-block subtitled">此頁沒有文章喔！</div>
            </div>
<?php
endif;
wp_reset_postdata();
?>

<?php
// Block2 category_id : 10
$i=0;
$b2_page=0;
$args = array('category_name' => 'evaluation','order'=>'ASC');
$the_query = new WP_Query($args);
//echo $the_query->max_num_pages;
if($the_query->have_posts()):
?>
        <div class="rf-info_block rf_block2_0">
<?php
    while($the_query->have_posts()):
        $the_query->the_post();
?>
            <div class ="rf-text-block">
                <div class="subtitled"><?php the_title(); ?></div>
                <?php the_content(); ?>
	        </div>
<?php
    endwhile;?>
        </div>
<?php
else:?>
            <div class="rf-info_block rf_block2_0">
                <div class="rf-text-block subtitled">此頁沒有文章喔！</div>
            </div>
<?php
endif;
wp_reset_postdata();
?>

<?php
// Block3 category_id : 11
$i=0;
$b3_page=0;
$args = array('category_name' => 'employment_and_establishment','order'=>'ASC');
$the_query = new WP_Query($args);
//echo $the_query->max_num_pages;
if($the_query->have_posts()):
?>
        <div class="rf-info_block rf_block3_0">
<?php
    while($the_query->have_posts()):
        $the_query->the_post();
?>
            <div class ="rf-text-block">
                <div class="subtitled"><?php the_title(); ?></div>
                <?php the_content(); ?>
	        </div>
<?php
    endwhile;?>
        </div>
<?php
else:?>
            <div class="rf-info_block rf_block3_0">
                <div class="rf-text-block subtitled">此頁沒有文章喔！</div>
            </div>
<?php
endif;
wp_reset_postdata();
?>

<?php
// Block4 category_id : 12
$i=0;
$b4_page=0;
$args = array('category_name' => 'others','order'=>'ASC');
$the_query = new WP_Query($args);
//echo $the_query->max_num_pages;
if($the_query->have_posts()):
?>
        <div class="rf-info_block rf_block4_0">
<?php
    while($the_query->have_posts()):
        $the_query->the_post();
?>
            <div class ="rf-text-block">
                <div class="subtitled"><?php the_title(); ?></div>
                <?php the_content(); ?>
	        </div>
<?php
    endwhile;?>
        </div>
<?php
else:?>
            <div class="rf-info_block rf_block4_0">
                <div class="rf-text-block subtitled">此頁沒有文章喔！</div>
            </div>
<?php
endif;
wp_reset_postdata();
?>

<?php
// Block5 category_id : 13
$i=0;
$b5_page=0;
$args = array('category_name' => 'forms_for_promotion','order'=>'ASC');
$the_query = new WP_Query($args);
//echo $the_query->max_num_pages;
if($the_query->have_posts()):
?>
        <div class="rf-info_block rf_block5_0">
<?php
    while($the_query->have_posts()):
        $the_query->the_post();
?>
            <div class ="rf-text-block">
                <div class="subtitled"><?php the_title(); ?></div>
                <?php the_content(); ?>
	        </div>
<?php
    endwhile;?>
        </div>
<?php
else:?>
            <div class="rf-info_block rf_block5_0">
                <div class="rf-text-block subtitled">此頁沒有文章喔！</div>
            </div>
<?php
endif;
wp_reset_postdata();
?>

<?php
// Block6 category_id : 14
$i=0;
$b6_page=0;
$args = array('category_name' => 'self-evaluation_form','order'=>'ASC');
$the_query = new WP_Query($args);
//echo $the_query->max_num_pages;
if($the_query->have_posts()):
?>
        <div class="rf-info_block rf_block6_0">
<?php
    while($the_query->have_posts()):
        $the_query->the_post();
?>
            <div class ="rf-text-block">
                <div class="subtitled"><?php the_title(); ?></div>
                <?php the_content(); ?>
	        </div>
<?php
    endwhile;?>
        </div>
<?php
else:?>
            <div class="rf-info_block rf_block6_0">
                <div class="rf-text-block subtitled">此頁沒有文章喔！</div>
            </div>
<?php
endif;
wp_reset_postdata();
?>

<?php
// Block7 category_id : 15
$i=0;
$b7_page=0;
$args = array('category_name' => 'forms_for_external_review','order'=>'ASC');
$the_query = new WP_Query($args);
//echo $the_query->max_num_pages;
if($the_query->have_posts()):
?>
        <div class="rf-info_block rf_block7_0">
<?php
    while($the_query->have_posts()):
        $the_query->the_post();
?>
            <div class ="rf-text-block">
                <div class="subtitled"><?php the_title(); ?></div>
                <?php the_content(); ?>
	        </div>
<?php
    endwhile;?>
        </div>
<?php
else:?>
            <div class="rf-info_block rf_block7_0">
                <div class="rf-text-block subtitled">此頁沒有文章喔！</div>
            </div>

<?php
endif;
wp_reset_postdata();
?>
        <div class="rf-button_block mobilehidden">
            <div class="rf-left mobilehidden"></div>
            <div class="rf-right mobilehidden"></div>
        </div>
    </div>
</div>

<script>
    var i=1;
    var current_page=0;
    var block_page=[ 0, <?php echo $b1_page.",".$b2_page.",".$b3_page.",".$b4_page.",".$b5_page.",".$b6_page.",".$b7_page;?>]; //TODO: put number of pages here

    $(document).ready(function() {
        $('.rf-info_block').perfectScrollbar();
        $(".rf-info_block").hide();
        $(".rf-button_block").hide();
        $("#rf"+i).removeClass("rf-inactive").addClass("rf-active");
        $("#rfm"+i).removeClass("rf-inactive").addClass("rf-active");
        if(i<=4){
            $("#rf"+i).removeClass("rf-bdot-inactive").addClass("rf-bdot-active");
            $("#rfm"+i).removeClass("rf-bdot-inactive").addClass("rf-bdot-active");
        }else{
            $("#rf"+i).removeClass("rf-ydot-inactive").addClass("rf-ydot-active");
            $("#rfm"+i).removeClass("rf-ydot-inactive").addClass("rf-ydot-active");
        }
        $(".rf_block"+i+"_0").fadeIn(1000,"swing");
        if( block_page[i]>1 ){
            $(".rf-button_block").fadeIn(1000,"swing");
        }else{
            $(".rf-button_block").fadeOut(1000,"swing");
        }
    });

    $(".rf-item").click(function(){
        current_page=0;
        $("#rf"+i).removeClass("rf-active").addClass("rf-inactive");
        $("#rfm"+i).removeClass("rf-active").addClass("rf-inactive");
        if(i<=4){
            $("#rf"+i).removeClass("rf-bdot-active").addClass("rf-bdot-inactive");
            $("#rfm"+i).removeClass("rf-bdot-active").addClass("rf-bdot-inactive");
        }else{
            $("#rf"+i).removeClass("rf-ydot-active").addClass("rf-ydot-inactive");
            $("#rfm"+i).removeClass("rf-ydot-active").addClass("rf-ydot-inactive");
        }
        i=$(this).data('num');
        $("#rf"+i).removeClass("rf-inactive").addClass("rf-active");
        if(i<=4){
            $("#rf"+i).removeClass("rf-bdot-inactive").addClass("rf-bdot-active");
            $("#rfm"+i).removeClass("rf-bdot-inactive").addClass("rf-bdot-active");
        }else{
            $("#rf"+i).removeClass("rf-ydot-inactive").addClass("rf-ydot-active");
            $("#rfm"+i).removeClass("rf-ydot-inactive").addClass("rf-ydot-active");
        }

        $(".rf-info_block").fadeOut(1000,"swing");
        $('.' + $(this).data('rel')).fadeIn(1000,"swing");
        if( block_page[i]>1 ){
            $(".rf-button_block").fadeIn(1000,"swing");
        }else{
            $(".rf-button_block").fadeOut(1000,"swing");
        }
    });

    $(".rf-right").click(function(){
        current_page = (current_page + 1) % block_page[i];
        $(".rf-info_block").fadeOut(1000,"swing");
        $(".rf_block"+i+"_"+current_page).fadeIn(1000,"swing");
    });

    $(".rf-left").click(function(){
        current_page = (current_page + block_page[i] - 1) % block_page[i];
        $(".rf-info_block").fadeOut(1000,"swing");
        $(".rf_block"+i+"_"+current_page).fadeIn(1000,"swing");
    });
</script>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
