<?php
/*
 *Template Name: activity_record
 */
//get header
get_header();

?>

<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/inter_contract.css" type="text/css" media="screen and (min-width: 701px)" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile-css/inter_contract-mobile.css" type="text/css" media="screen and (max-width: 700px)" />
</head>

<div class="page-activity_record">
                        <?php
                        // wp query
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = array(
                        'category_name' => 'activity_record',
                        'posts_per_page' => 1,
                        'paged' => $paged
                        );
                        $the_query = new WP_Query($args);
                        $total_page = $the_query->max_num_pages;
                        $next_page = ( $paged+1 > $total_page )? 1 : $paged + 1;
                        $prev_page = ( $paged-1 > 0 )? $paged-1 : $total_page;

                        if($the_query->have_posts()):
                            while($the_query->have_posts()):
                                $the_query->the_post();
                        ?>
    <div class="container">
        <div id="ar-container">
            <div class="subtitled ic-pagetitle">03 交流紀實</div>
            <div class="subtitle ar-bigtitle"><?php the_title(); ?></div>
            <a href="<?php echo site_url()."/activity_record/page/".$prev_page; ?>"><div class="ar-button ar-prev"></div></a>
            <a href="<?php echo site_url()."/activity_record/page/".$next_page; ?>"><div class="ar-button ar-next"></div></a>
            <hr class="ar-title">
            <div class="text ar-text"><?php the_content(); ?></div>
        </div>
        <div class="ar-gallery">
            <div id="ar-wrapper">
<?php
    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('gallery', $post->ID);
    //Check if return array has anything in it
    if( count($images) ):
        //Cool, we got some data so now let's loop over it
        $i = 0;
        foreach($images as $image):
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            //$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>
                <img class="ar-content ar-content-<?php echo $i;?> ar-img_mask" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
<?php   
            ++$i;
        endforeach;
    endif;
?>
            </div>
        </div>
        <div class="ar-gallery-btn-block">
            <div class="ar-gallery-btn ar-gallery-btn_prev"></div>
            <div class="ar-gallery-btn ar-gallery-btn_next"></div>
        </div>
    </div>
                    <?php endwhile; endif;?>
</div>

<script>
    var now = 0, prev = 0;
    var offset = 0;
    var pos = 0;
    var moving = 0;

    $(document).ready(function(){
        $('.ar-content-'+now).removeClass('ar-img_mask');
        $('.ar-gallery-btn_prev').click(function(){
            gallery_prev();
        });
        $('.ar-gallery-btn_next').click(function(){
            gallery_next();
        });
        /*$('.ar-gallery').mousewheel(function(e){
            if(moving==0){
                if(e.deltaY<0){
                    gallery_next();
                }else{
                    gallery_prev();
                }
            }
        });*/
        $(window).resize(function(){
            $('.ar-content-'+now).addClass('ar-img_mask');
            now = 0;
            pos = 0;
            $('#ar-wrapper').css({ transform: "translate3d(0, "+pos+"px, 0)" });
            $('.ar-content-'+now).removeClass('ar-img_mask');
        })
    });

    function gallery_next(){
        var is_exist = $('.ar-content-'+(now+1)).height();
        if( is_exist != null ){
            offset = $('.ar-content-'+now).height();
            $('.ar-content-'+now).addClass('ar-img_mask');
            ++now;
            $('.ar-content-'+now).removeClass('ar-img_mask');
            pos -= offset
            $('#ar-wrapper').css({ transform: "translate3d(0, "+pos+"px, 0)" });
        }
    }
    function gallery_prev(){
        if(now>0){
            $('.ar-content-'+now).addClass('ar-img_mask');
            --now;
            $('.ar-content-'+now).removeClass('ar-img_mask');
            offset = $('.ar-content-'+now).height();
            pos += offset
            $('#ar-wrapper').css({ transform: "translate3d(0, "+pos+"px, 0)" });
        }
    }
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu3','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
