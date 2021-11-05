<?php

class Theme {
  public function __construct() {
    add_action('wp_enqueue_scripts', array($this, 'fotograf_files'));
    


  }
  function fotograf_files() {
    wp_enqueue_style('botstrapCSS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/css/bootstrap.min.css'));
    wp_enqueue_style('style_main', get_theme_file_uri('/css/main.css'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fontello', get_theme_file_uri('/inc/fontello/css/fontello.css'));
    wp_enqueue_style('owlcarouselCSS', get_theme_file_uri('/inc/owlcarousel/dist/assets/owl.carousel.min.css'));
    wp_enqueue_style('owlcarouseldefaultCSS', get_theme_file_uri('/inc/owlcarousel/dist/assets/owl.theme.default.min.css'));

    
    wp_enqueue_script('owlCarouselJS', get_theme_file_uri('/inc/owlcarousel/dist/owl.carousel.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('owlJS', get_theme_file_uri('/js/owl.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('bootstrapJS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('hideMenuJS', get_theme_file_uri('/js/hidemenu.js'),array('jquery'), 1.0, true);

  }
  
}

$template = new Theme();

function przemoxe_post_types(){
  register_post_type('portfolio', array(
    'public' => true,
    'labels' => array(
      'name' => 'Portfolio',
      'add_new_item' => 'Dodaj nowy projekt',
      'edit_item' => 'Edytuj projekt',
      'all_items' => 'Wszystkie projekty',
      'singular_name' => 'projekt'
    ),
    'menu_icon' => 'dashicons-embed-photo',
    
  ));
}


add_action('init', 'przemoxe_post_types');
