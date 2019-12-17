<?php
/*
 *Template Name: en-inter_contract
 */
    if(is_page('en-exchange_student')){
        $short_color = 'r';
        $color_code = '#FF6600';
        $cat_name = 'en-exchange_student';
        $page_title = 'Student Exchange Agreements';
    }else if(is_page('en-joint_dual_degree')){
        $short_color = 'b';
        $color_code = '#338DC9';
        $cat_name = 'en-joint_dual_degree';
        $page_title = 'Dual Degree Agreements';
    }else if(is_page('en-academic_exchange')){
        $short_color = 'y';
        $color_code = '#F99E03';
        $cat_name = 'en-academic_exchange';
        $page_title = 'Academic Exchange & Cooperation Agreements';
    }else{
        echo "ERROR!!!";
    }
?>
<?php get_header(en_header); ?>
<div class="page-inter_contract">
    <div class="container">
    <a class="icon_down"href="<?php echo site_url(); ?>/studying_abroad" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon_w"></div></a>
        <div id="ic-container">
            <div class="subtitled ic-pagetitle">International Collaboration Agreements</div>
<?php if($short_color == 'r'): ?>
            <div class="ic-dot ic-rdot ic-rdot_checked"></div>
            <a href="<?php echo site_url();?>/en-joint_dual_degree"><div class="ic-dot ic-bdot"></div></a>
            <a href="<?php echo site_url();?>/en-academic_exchange"><div class="ic-dot ic-ydot"></div></a>
  	        <a class="ic-down-icon"href="<?php echo site_url(); ?>/en-joint_dual_degree" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
<?php elseif($short_color == 'b'): ?>
            <a href="<?php echo site_url();?>/en-exchange_student"><div class="ic-dot ic-rdot"></div></a>
            <div class="ic-dot ic-bdot ic-bdot_checked"></div>
            <a href="<?php echo site_url();?>/en-academic_exchange"><div class="ic-dot ic-ydot"></div></a>
	        <a class="ic-down-icon"href="<?php echo site_url(); ?>/en-academic_exchange" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
<?php elseif($short_color == 'y'): ?>
            <a href="<?php echo site_url();?>/en-exchange_student"><div class="ic-dot ic-rdot"></div></a>
            <a href="<?php echo site_url();?>/en-joint_dual_degree"><div class="ic-dot ic-bdot"></div></a>
            <div class="ic-dot ic-ydot ic-ydot_checked"></div>
	        <a class="ic-down-icon"href="<?php echo site_url(); ?>/en-exchange_student" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
<?php endif; ?>
	    <div class="ic-bigtitle formobile"><?php echo $page_title;?></div>
            <div class="subtitle ic-bigtitle mobilehidden" style="color:<?php echo $color_code;?>;"><?php echo $page_title;?></div>
            <div class="ic-line ic-line_<?php echo $short_color; ?> mobilehidden"></div>

	    <!--for mobile-->
            <div class="ic-btn_block formobile">
                            <?php
                            $num = 1;
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                            'category_name' => $cat_name,
                            'posts_per_page' => 30,
                            'paged' => $paged
                            );
                            $the_query = new WP_Query($args);
                            $post_num = $the_query->found_posts;
                            ?>
                <div class="ic-selector">
                    <?php
			    /*
                            echo "<input class=\"ic-hide\" id=\"btn${i}_${short_color}\" name=\"${short_color}_button\" type=\"radio\"";
                            echo " checked ";
                            echo ">\n
			    */
/*
			    echo "<label for=\"btn${i}_${short_color}\" class=\"ic-btn ic-btn-${short_color}0${i}\" data-rel=\"text_${i}${short_color}\"></label>\n";
 */
               		if($the_query->have_posts()):
                    		while($the_query->have_posts()):
                        		$the_query->the_post();
			    		/*echo the_field('college_and_locationation');*/
			    		?>
					<div class="ic-text_block_mobile"> <!--formobile-->	
					<div class="ic-text_block1_mobile text_<?php echo $num.$short_color; ?>">
					    <?php if($num<10):?>
						<div class="title ic-num ic-text_<?php echo $short_color; ?>"><?php echo '0'; ?></div>
					    <?php endif;?>
					    <div class="title ic-num ic-text_<?php echo $short_color; ?>"><?php echo $num; ?></div>
					    <div class="text ic-text1 formobile"><?php the_field('college_and_locationation');?></div>
					    <div class="ic-line ic-line_<?php echo $short_color; ?>"></div>
          				    <div class="title ic-text2" style="color:<?php echo $color_code;?>;"><?php the_title(); ?></div>
        				</div>
        				<div class="ic-text_block2_mobile text_<?php echo $num.$short_color; ?>">
            				    <div class="notes"><?php the_field('applicant'); ?><br><?php the_field('note'); ?></div>
            				    <div class="notes"><?php the_field('quota'); ?></div>
        				</div>
					</div><?php
                    			++$num;
                    		endwhile;
                	endif;
                    /*origin:
                     * <div class="ic-text_block text_1r">
                     *     <div class="subtitled ic-text1" style="color:#9B0019;">理學院，香港</div>
                     *     <div class="title ic-text2" style="color:#9B0019;">香港大學</div>
                     *     <div class="subtitled ic-text3">大學部<br>20人/學期或10人/年度</div>
                     * </div>
                     *   TODO: 更改div格式， 切成兩個div
                     * */

                    ?>
		    <div class="mobile-space"></div>
                </div>
            </div> <!-- for mobile-->
	   
 	    <div class="ic-btn_block mobilehidden">
                            <?php
                                $num = 1;
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $args = array(
                                'category_name' => $cat_name,
                                'posts_per_page' => 30,
                                'paged' => $paged
                                );
                                $the_query = new WP_Query($args);
                                $post_num = $the_query->found_posts;
                            ?>
                <div class="ic-selector">
                    <?php
                        for($i = 1 ; $i <= $post_num ; ++$i){
                            echo "<input class=\"ic-hide\" id=\"btn${i}_${short_color}\" name=\"${short_color}_button\" type=\"radio\"";
                            if( $i == 1 ){
                                echo " checked ";
                            }
                            echo ">\n<label for=\"btn${i}_${short_color}\" class=\"ic-btn ic-btn-${short_color}0${i}\" data-rel=\"text_${i}${short_color}\"></label>\n";

                                //TODO: ic-btn-r"0"1
                            /*origin:
                             * <input id="btn1_r" name="r_button" type="radio">
                             * <label for="btn1_r" class="ic-btn ic-btn-r01" data-rel="text_1r"></label>
                             * */
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="ic-triangle"></div>
        <div class="ic-bar ic-bar_<?php echo $short_color; ?>"></div>
                <?php
                if($the_query->have_posts()):
                    while($the_query->have_posts()):
                        $the_query->the_post();
                ?>
	<div class="ic-text_block mobilehidden"> <!--formobile-->
        <div class="ic-text_block1 text_<?php echo $num.$short_color; ?>">
            <div class="subtitled ic-text1 formobile"><?php the_field('college_and_locationation'); ?></div>
            <div class="subtitled ic-text1 mobilehidden" style="color:<?php echo $color_code;?>;"><?php the_field('college_and_locationation'); ?></div>
            <div class="title ic-text2" style="color:<?php echo $color_code;?>;"><?php the_title(); ?></div>
        </div>
        <div class="ic-text_block2 text_<?php echo $num.$short_color; ?>">
            <div class="subtitled ic-text3"><?php the_field('applicant'); ?><br><?php the_field('quota'); ?></div>
            <div class="text ic-text4"><?php the_field('note'); ?></div>
        </div>
	</div>

                <?php
                    ++$num;
                    endwhile;
                endif;
                    /*origin:
                     * <div class="ic-text_block text_1r">
                     *     <div class="subtitled ic-text1" style="color:#9B0019;">理學院，香港</div>
                     *     <div class="title ic-text2" style="color:#9B0019;">香港大學</div>
                     *     <div class="subtitled ic-text3">大學部<br>20人/學期或10人/年度</div>
                     * </div>
                     *   TODO: 更改div格式， 切成兩個div
                     * */
                ?>
                            <?php  wp_reset_postdata(); ?>
    </div>
<!--
    <a class="icon_up" href="<?php echo site_url(); ?>/studying_abroad/" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
    <a class="icon_down" href="<?php echo site_url(); ?>/studying_abroad/" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
-->
</div>

<script>
    $('.ic-btn').click(function() {
        $('.ic-triangle').fadeIn(1500,"swing");
        $('.ic-bar').css("right","0px");
        $('.ic-text_block1').hide();
        $('.ic-text_block2').hide();
        $('.' + $(this).data('rel')).fadeIn(1000,"swing");
        //$('.content').hide();
        //$('.' + $(this).data('rel')).show();
    });
    $( document ).ready(function() {
	$('.ic-text_block_mobile').css("height","200px");
	$('.ic-text_block1_mobile').css("height","90px");
	$('.ic-text2').css("height","52px");
	//$('.ic-text_block1_mobile').css("opacity","1");
	$('.ic-text_block2_mobile').css("height","60px");
	//$('.ic-text_block2_mobile').css("opacity","1");
        //$('#ic-container').perfectScrollbar();
        $('.ic-triangle').fadeIn(1500,"swing");
        $('.ic-bar').css("right","0px");
        $('.ic-text_block1').hide();
        $('.ic-text_block2').hide();
        $('<?php echo ".text_1${short_color}";?>').delay(1200).fadeIn(1000,"swing");
        $(".nav_menu").on("click",function(){});
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu3','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
