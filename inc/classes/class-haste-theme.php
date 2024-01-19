<?php
/**
 * Bootstraps the Theme.
 * 
 * @package Speed
 */

 namespace HASTE\Inc;


 use HASTE\Inc\Traits\Singleton;

 class HASTE_THEME {
    use Singleton;
    
    protected function __construct(){
        
        // load class.
        Assets::get_instance();
        Customwalker::get_instance();
          
        $this->setup_hooks();

    }

    protected function setup_hooks(){
        /*
        *Actions 
        */
        add_action('after_setup_theme', [$this, 'setup_theme']);
      
      
       
    }


    public function setup_theme(){
        // just placeholder no real use case for now

        add_theme_support('title-tag');
        add_theme_support('custom-logo',[
        'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true]);
        
        $args = array(
           
        );


    }



   

    

   


 }