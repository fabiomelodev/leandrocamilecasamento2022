<?php

function single_create_page() {

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Página de exemplo', 
                'menu_title' => 'Página de exemplo', 
                'menu_slug'  => 'pagina_de_exemplo', 
                'capability' => 'edit_posts', 
                'position'   => '23,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-info' 
        ));
    }
}
add_action( 'init', 'single_create_page' );