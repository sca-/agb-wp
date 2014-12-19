<?php

add_theme_support( 'menus' );

function prepare_scripts() {
  wp_enqueue_style('bs', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('bst', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
  wp_enqueue_style('jq', get_template_directory_uri() . '/css/jquery.bxslider.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css');

  wp_enqueue_script('jq', get_template_directory_uri() . '/js/jquery-1.11.1.min.js');
  wp_enqueue_script('jqv', get_template_directory_uri() . '/js/jquery.validate.min.js');
  wp_enqueue_script('bs', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('jqs', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('map','http://maps.api.2gis.ru/2.0/loader.js?pkg=full');
  // if(is_front_page())
  //   wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
  // wp_enqueue_script('x', get_template_directory_uri() . '/js/x.js');
}
add_action('wp_enqueue_scripts', 'prepare_scripts', 100);

// post type : products
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Продукты';
    $submenu['edit.php'][5][0] = 'Все продукты';
    $submenu['edit.php'][10][0] = 'Добавить продукты';
    $submenu['edit.php'][15][0] = 'Категории';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    // $rewrite = &$wp_post_types['post']->rewrite;
    // $rewrite = array("slug"=>"news", "with_front"=>true, "pages"=>true, "feeds"=>true, "ep_mask"=>1);
    $labels->name = 'Продукты';
    $labels->singular_name = 'Продукты';
    $labels->add_new = 'Новый продукт';
    $labels->add_new_item = 'Добавить продукт';
    $labels->edit_item = 'Редактировать продукт';
    $labels->new_item = 'Продукт';
    $labels->view_item = 'Просмотр продукта';
    $labels->search_items = 'Поиск продуктов';
    $labels->not_found = 'Продукты не найдены';
    $labels->not_found_in_trash = 'Удаленные продукты не найдены';
    $labels->all_items = 'Все продукты';
    $labels->menu_name = 'Продукты';
    $labels->name_admin_bar = 'Продукты';
    register_taxonomy('post_tag', array());
    // register_taxonomy('category', array());

}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );