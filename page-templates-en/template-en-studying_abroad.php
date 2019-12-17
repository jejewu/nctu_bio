<?php
/*
 *Template Name:en-studying_abroad
 */
?>
<?php get_header(en_header); ?>
<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/studying_abroad.css" type="text/css" media="screen and (min-width: 701px)" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/studying_abroad-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
</head>
<div class="page-sa">
    <div class="container">

                            <?php
                                $i=0;
                                $args = array('category_name' => 'studying_abroad','order' => 'ASC');
                                $the_query = new WP_Query($args);
                                $post_num = $the_query->found_posts;
                            
                                if($the_query->have_posts()):
                                    while($the_query->have_posts()):
                                        $the_query->the_post();
                                        $file = get_field('regulation');
                            ?>

        <img class="mobilehidden sa-img <?php echo "item$i";?>" src="<?php the_field('School_image');?>"/>
        <div class="sa-container <?php echo "item$i";?>">
            <div class="sa-img_block">
                <div class="subtitled sa-littleTitle mobilehidden">02  出國計畫</div>
                <div class="formobile subtitled sa-littleTitle">02  出國計畫</div>
                <div class="sa-btn sa-btn_prev mobilehidden"></div>
                <div class="sa-btn sa-btn_next mobilehidden"></div>
                <?php if($file):?>
                    <a href="<?php echo $file['url']; ?>"><div class="sa-btn sa-btn_download"></div></a>
                <?php endif;?>
                
 		    <div class="sa-line mobilehidden"></div>
        </div>

        <div class="sa-collegename-box mobilehidden">
                <div class="subtitled sa-collegename"><?php the_field('college_cht'); ?></div>
                <div class="subtitle sa-title"><?php the_field('applicant'); ?></div>
                <div class="text sa-engtitle"><?php the_field('college_eng'); ?></div>

        </div>
        <div class="read_more mobilehidden"><a href="<?php the_field('link'); ?>"><div class="studying_more"></div></a></div>
        
        <div class="sa-container1">
            <!--<div class="sa-applicant">
                <p class="subtitled">申請資格</p>
                <p class="text"><?php the_field('applicant'); ?></p>
            </div>-->
            <!--<div class="sa-documents">
                <p class="subtitled">申請文件</p>-->
                <?php if($file):?>
                    <!--<a href="<?php echo $file['url']; ?>"><p class="text">申請簡章<br></p></a>-->
                <?php endif;?>
                <!--<p class="text"><?php the_field('documents'); ?></p>
            </div>-->
            <!--<div class="sa-duration">
                <p class="subtitled">出國期間</p>
                <p class="text"><?php the_field('duration'); ?></p>
            </div>-->
            <!--<div class="sa-due_date">
                <p class="subtitled">申請截止日</p>
                <p class="text"><?php the_field('due_date'); ?></p>
            </div>-->
            <!--<div class="sa-note">
                <p class="subtitled">備註</p>
                <p class="text"><?php the_field('note'); ?></p>
            </div>-->
 	    <div class="mobile-space formobile">
            <!-- 雙聯學士學位申請 -->
            <div class="sa-collegename-box">
                <div class="subtitle sa-title sa-applicant">雙聯學士申請</div>
                <div class="read_more"><a href="https://oia.nctu.edu.tw/study-abroad/dual-degree-program/"><img style="width: 90px;height: 30px;" src="<?php bloginfo('template_url'); ?>/image/btn/studying_abroad_more.png"></a></div> 
            </div>
            <div class="sa-collegename-content">
                <div class="sa-collegename">美國紐約州立大學 石溪分校</div>
                <div class="sa-collegename">比利時魯汶大學</div>
            </div>
            
            <!-- 出國交換申請 --> 
            <div class="sa-collegename-box">
                <div class="subtitle sa-title sa-applicant">出國交換申請</div>
                <div class="read_more"><a href="https://oia.nctu.edu.tw/study-abroad/outbound-exchange-program/"><img style="width: 90px;height: 30px;" src="<?php bloginfo('template_url'); ?>/image/btn/studying_abroad_more.png"></a></div>
            </div>
            <div class="sa-collegename-content">
                <div class="sa-collegename">日本奈良先端科學技術大學</div>
                <div class="sa-collegename">泰國朱拉隆功大學</div>
                <div class="sa-collegename">泰國法政大學</div>
                <div class="sa-collegename">德國羅特林根大學</div>
                <div class="sa-collegename">法國生物科技高等學院</div>
                <div class="sa-collegename">法國理工學院聯盟</div>
            </div>

        </div>
       	</div>
        </div>
                            <?php
                                    $i = $i + 1;
                                endwhile;
                            else:?>
            <div class="sa-container mobilehidden">
                <div class="sa-img_block"></div>
                <div class="subtitle">目前沒有交換學校</div>
            </div>
                            <?php
                            endif;
                            ?>
                            <?php  wp_reset_postdata(); ?>
    </div>
    <a class="icon_up"href="<?php echo site_url(); ?>/exchange_student" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>

</div>

<script>
    now = 0;
    num = <?php echo $post_num; ?>;

    $(document).ready(function() {
        $('.sa-container,.sa-img').hide();
        $('.item'+now).fadeIn(1500,"swing");
        $(".nav_menu").on("click",function(){});
    });

    $('.sa-btn_prev').click(function(){
        now = (now+num-1)%num;
        $('.sa-container,.sa-img').hide();
        $('.item'+now).fadeIn(1500,"swing");
    });
    $('.sa-btn_next').click(function(){
        now = (now+1)%num;
        $('.sa-container,.sa-img').hide();
        $('.item'+now).fadeIn(1500,"swing");
    });

</script>


<?php  wp_nav_menu (array('theme_location' => 'Menu3','container_class' => 'nav_menu','container_id'=>'nav_menu_2')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
