<?php
//カスタムメニュー
register_nav_menus( //メニュー機能をオンにする
array(
'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
)
);

add_theme_support('post-thumbnails');
add_image_size('medium', 700, 300, true);
add_image_size('thumbnail', 500, 500, true);


function arphabet_widgets_init() {

register_sidebar( array(
'name' => 'right sidebar',
'id' => 'home_right_1',
'before_widget' => '<aside>',
'after_widget' => '</aside>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',
) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function new_excerpt_mblength($length) {
     return 50; //抜粋する文字数を50文字に設定
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

 ?>
