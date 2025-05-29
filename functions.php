<?php
function mei_event_theme_setup() {
  // CSS読み込み
  wp_enqueue_style('mei-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
  // JS読み込み（ハンバーガーメニュー用）
  wp_enqueue_script('mei-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mei_event_theme_setup');
?>