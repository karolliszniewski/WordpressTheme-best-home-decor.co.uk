<?php
/** HASTE Assets 
 * @package HASTE
 */
 

 namespace HASTE\Inc;

 use HASTE\Inc\Traits\Singleton;

 class Assets{
    use Singleton;

    protected function __construct(){
        // load class.

        
        $this->setup_hooks();
    
    }

    protected function setup_hooks(){
        /*
        *Actions 
        */
        add_action('custom_head',[$this,'register_styles']);
        add_action('custom_footer',[$this,'register_scripts']);
        
    }

    public function register_styles(){
        echo ' <link rel="stylesheet" href="' . esc_url(get_template_directory_uri()) . '/styles.css?'.filemtime(get_template_directory().'/styles.css').'" /> ';
    
    }

    public function register_scripts(){
        echo '<script src="'.esc_url(get_template_directory_uri()) . '/bundle.js"></script>';
    }


 }