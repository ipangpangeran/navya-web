<?php

function init_setup(){
	register_nav_menus(array(
    'main_menu' => 'Menu Utama'
));

//add featured image
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','init_setup');
