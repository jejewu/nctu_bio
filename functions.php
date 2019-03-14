<?php
    register_nav_menus(
        array(
            'Menu1' => __( '公告列表' ),
            'Menu2' => __( '學院簡介' ),
            'Menu3' => __( '國際交流合作' ),
            'Menu4' => __( '研究發展' ),
            'Menu5' => __( '學術單位' ),
            'Menu6' => __( '招生資訊' ),
        )
    );
    
    add_theme_support( 'post-thumbnails' );

    add_post_meta( 1, 'page_index', true );

    add_post_meta( 1, 'awards_content', true );
    add_post_meta( 1, 'awards_content_en', true );
    add_post_meta( 1, 'awards_notes', true );
    add_post_meta( 1, 'awards_notes_en', true );
    add_post_meta( 1, 'sub_title', true );
    add_post_meta( 1, 'sub_title_en', true );

    add_post_meta( 1, 'nav_prev', true );
    add_post_meta( 1, 'nav_next', true );

    /*** Custom global variables ***/
    function wtnerd_global_vars() {

        global $newslist;

        $newslist = array (
                    array("最新消息","News","news"),
                    array("師生榮譽","Awards & Honors","awards-honors"),
                    array("學術活動","Academic Events","academic-events"),
                    array("人文科普","Liberal Arts & Science","liberal-arts-science")
                );

    }
    add_action( 'parse_query', 'wtnerd_global_vars' );


?>
