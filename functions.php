<?php
  function my_scripts() {
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/kick-ring.js', array( 'jquery' ), '1.0.1', true );
  }
  add_action( 'wp_enqueue_scripts', 'my_scripts' );


  add_theme_support('post-thumbnails');

  add_action( 'wp_enqueue_scripts', 'delete_plugin_css' );
  function delete_plugin_css() {
      wp_deregister_style( 'contact-form-7' );
  }

  // 404リダイレクト
  add_action( 'template_redirect', 'is404_redirect_home' );
  function is404_redirect_home() {
    if( is_404() ){
      wp_safe_redirect( home_url( '/' ) );
      exit();
    }
  }

//pagenation
function pagination($pages = '', $range = 1){
   $showitems = ($range * 2)+1;
   global $paged;
   if(empty($paged)) $paged = 1;
   if($pages == '') {
     global $wp_query;
     $pages = $wp_query->max_num_pages;
     if(!$pages) {
         $pages = 1;
     }
   }
   if(1 != $pages) {
     echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\">Page ".$paged." / ".$pages."</span>";
     if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
     if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
     for ($i=1; $i <= $pages; $i++) {
       if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
         echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
       }
     }
     if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
     if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
     echo "</div></div>\n";
   }
}

// JSをfooter読み込みする
function move_js_footer(){
  //ヘッダーのスクリプトを一旦削除
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);
  //フッターにスクリプトを出力
  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
}
add_action('wp_enqueue_scripts', 'move_js_footer');

// 固定ページにDescription用の抜粋を設定可能にする
add_post_type_support( 'page', 'excerpt' );

// 抜粋の<p>タグ削除
remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description','wpautop');

/*********************
OGPタグ/Twitterカード設定を出力
*********************/
function my_meta_ogp() {
  if( is_front_page() || is_home() || is_singular() ){
    global $post;
    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';
    if( is_singular() ) { //記事＆固定ページ
       setup_postdata($post);
       $ogp_title = $post->post_title;
       $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
       $ogp_url = get_permalink();
       wp_reset_postdata();
    } elseif ( is_front_page() || is_home() ) { //トップページ
       $ogp_title = get_bloginfo('name');
       $ogp_descr = get_bloginfo('description');
       $ogp_url = home_url();
    }

    //og:type
    $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

    //og:image
    if ( is_singular() && has_post_thumbnail() ) {
       $ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
       $ogp_img = $ps_thumb[0];
    } else {
     $ogp_img = 'https://an-asia.com/wp-content/themes/ANAsia%20Corporate/images/anasia.jpg';
    }

    //出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
    $insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
    $insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
    $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
    $insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
    $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    $insert .= '<meta name="twitter:site" content="@KICK_RING" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    echo $insert;
  }
} //END my_meta_ogp

add_action('wp_head','my_meta_ogp');//headにOGPを出力


//canonical削除
remove_action('wp_head', 'rel_canonical');
