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
        add_action('wp_enqueue_scripts',[$this,'register_styles']);
        add_action('wp_enqueue_scripts',[$this,'register_scripts']);
    }

    public function register_styles(){
    // Register styles
    wp_register_style('bootstrap',HASTE_DIR_URI.'/node_modules/bootstrap/dist/css/bootstrap.min.css' ,[] ,'4.4.1','all');
    wp_register_style('stylesheet',HASTE_DIR_URI,['bootstrap'],filemtime(HASTE_DIR_PATH.'/style.css'),'all');
    
    // Enqueue styles
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('stylesheet');
    }

    public function register_scripts(){
    // Register scripts
    wp_register_script('popper',HASTE_DIR_URI.'/node_modules/popper.js' ,['jquery'],'1.16.0',true);
    wp_register_script('bootstrap',HASTE_DIR_URI.'/node_modules/bootstrap/dist/js/bootstrap.min.js' ,['popper'],'4.4.1',true);
    wp_register_script('main',HASTE_DIR_URI.'/assets/main.js',['bootstrap'],filemtime(HASTE_DIR_PATH.'/assets/main.js'),true);

    // Enqueue scripts
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('main');
    }


 }