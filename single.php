<?php 
    if (qtranxf_getLanguage() == 'en')
        get_header('en_header');
    else
        get_header(); 
?>

<div class="nl-page">
    <div class="container">
        <div class="news_text-container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="nt-button_block">
                <?php if (qtranxf_getLanguage() == 'en'):?>
                <div class="nt-circle text" onclick="history.back()">back</div>
                <?php else:?>
                <div class="nt-circle text" onclick="history.back()">回列表</div>
                <?php endif;?>
                <div class="nt-btn nt-a"></div>
                <div class="nt-btn nt-plus"></div>
                <div class="nt-btn nt-minus"></div>
            </div>
            <div class="text notes"><?php the_time('Y.m.j');?></div>
            <div class="nt-title subtitle"><?php the_title();?></div>
            <?php
                $posttags = get_the_tags();
                if ($posttags) {
                    foreach($posttags as $tag) {
                        echo '<div class="nt-tag"></div> <p class="nt-tag_text text">'. $tag->name . '</p>';
                    }
                    echo '<div class="clear_both"></div>';
                }
            ?>
            <div id="nt-content-wrapper">
            <div class="nt-content text"><?php the_content();?></div>
            </div>
                <?php if ( has_post_thumbnail() ) { ?>
                <?php
                $post_ID=$post->ID;
                $post_thumbnail_id = get_post_thumbnail_id( $post_ID );
                $post_thumbnail_src = wp_get_attachment_image_src($post_thumbnail_id,'Full');
                $get_description = get_post(get_post_thumbnail_id())->post_excerpt;
                ?>
                <?php } else {// 沒有特色圖片?>
                <?php } ?>
            <div class="nt-image">
                <?php if ( has_post_thumbnail() ):  ?>
                    <img src="<?php echo $post_thumbnail_src[0];?>" class="nt-img">
                <?php
                    endif;
                    if(!empty($get_description)){//If description is not empty show the div
                        echo '<div class="text"> ▪ ' . $get_description . '</div>';
                    }
                ?>
            </div>
	    <div class="mobile-space"></div>
        </div>

        
        <?php endwhile;?><?php else: ?>
        <?php endif; ?>
    </div>
</div>


<script>
    var fontSize = parseInt($(".nt-content").css("font-size"));
    var lineHeight= parseInt($(".nt-content").css("line-height"));
    //console.log(fontSize);
    //console.log(lineHeight);
    //fontSize = fontSize / 12 * 0.75;
    //lineHeight = lineHeight / 12 * 0.75;
    //console.log(fontSize);
    //console.log(lineHeight);
    $(document).ready(function(){
        $('#nt-content-wrapper').perfectScrollbar();
        $(".nt-minus").click(function(){
            if(fontSize > 0){
                fontSize = fontSize - 2;
                lineHeight = lineHeight - 2.5;
                console.log(fontSize);
                $(".nt-content").css({'font-size': fontSize+"px"});
                $(".nt-content").css({'line-height': lineHeight+"px"});
                //$('#nt-content-wrapper').perfectScrollbar('update');
            }
        });
        $(".nt-plus").click(function(){
            if(fontSize < 100){
                fontSize = fontSize + 2;
                lineHeight = lineHeight + 2.5;
                console.log(fontSize);
                $(".nt-content").css({'font-size':fontSize+"px"});
                $(".nt-content").css({'line-height': lineHeight+"px"});
                //$('#nt-content-wrapper').perfectScrollbar('update');
            }
        });
    });
</script>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
