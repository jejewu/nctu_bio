<?php
/*
 * Category Template
 */
    get_header();
    $category = get_category(get_query_var('cat'));

    switch ($category->slug) {
        case 'news':
            $n = 1;
            break;
        case 'awards-honors':
            $n = 2;
            break;
        case 'academic-events':
            $n = 3;
            break;
        case 'liberal-arts-science':
            $n = 4;
            break;
        default:
            $n = 1;
            break;
    }

?>
<div class="nl-page">
    <div class="container">
        <div class="nl-container">
            <div class="mobile-nl-header hp-newsheader">

                <div id="hp-news-icon<?php echo $n;?>" class="hp-news-icon"></div>
                <div class="hp-newstitle">
                    <?php single_cat_title() ?>
                </div>
            </div>

            <?php
                $i=0;
                $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
                $args = array(
                    'cat' => $category->cat_ID ,
                    'posts_per_page' => 8,
                    's' => '[:'.qtranxf_getLanguage().']',
                    'paged' => $paged
                );
                $the_query = new WP_Query($args);

                if($the_query->have_posts()):
                    while($the_query->have_posts()):
                        $the_query->the_post();
                        if($i % 4 == 0):
            ?>
                            <hr class="newlist_line mobilehidden">
            <?php       endif; ?>
            <div class="nl-list_item">
                <div class="nl-news_item_date">
                    <?php the_time('Y.m.d'); ?>
                </div>
                <a class="nl-news_item_title" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>

                </a>
                <div class="clear_both"></div>
            </div>
            <?php
                        $i = $i + 1;
                    endwhile;
                else:
            ?>
            <div class="nl-list_item">
                <div class="hp-news_item_title">null！</div>
            </div>
            <?php
                endif;
            ?>

        </div>
        <?php
        if($category != null):
        ?>
        <div class="newslist_nav">
            <a href="<?php echo site_url('category')."/".$category->slug."?page=1"; ?>"  title="First">
                <div class="nl-first_page"></div>
            </a>
            <?php if( $paged == 1 ) :?>
            <a href="<?php echo site_url('category')."/".$category->slug."?page=1"; ?>" title="Previous">
                <div class="nl-prev_page"></div>
            </a>
            <?php else: ?>
            <a href="<?php echo site_url('category')."/".$category->slug."?page=".($paged-1); ?>" title="Previous">
                <div class="nl-prev_page"></div></a>
            <?php endif; ?>
            <div class="nl-page_num">
                <?php echo $paged; ?>
            </div>
            <hr class="nl-vertical_line">
            <div class="nl-page_max_num">
                <?php echo $the_query->max_num_pages ?></div>
                <?php if( $paged == $the_query->max_num_pages ) :?>
                    <a href="<?php echo site_url('category')."/".$category->slug."?page=".($the_query->max_num_pages); ?>" title="Next">
                        <div class="nl-next_page"></div>
                    </a>
                <?php else: ?>
                    <a href="<?php echo site_url('category')."/".$category->slug."?page=".($paged+1); ?>" title="Next">
                        <div class="nl-next_page"></div>
                    </a>
                <?php endif; ?>
            <a href="<?php echo site_url('category')."/".$category->slug."?page=".($the_query->max_num_pages); ?>" title="Last">
                <div class="nl-last_page"></div>
            </a>
                <input type="text" id="jump_to" name="jump_to" max="<?php echo $the_query->max_num_pages ?>">
            <a href="#" class="nl-go" title="Go To"></a>
        </div>
        <?php
        endif;
        ?>
        <?php  wp_reset_postdata(); ?>
    </div>
</div>

<?php wp_nav_menu(array('theme_location' => 'Menu1','container_class' => 'nav_menu', 'container_id' => 'nav_menu_1' )); ?>

<?php get_footer(); ?>
