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
        add_action('add_styles', [$this, 'add_custom_style']);
        add_action('custom_hook',[$this, 'add_to_head']);

        
      
       
    }

    public function add_custom_head() {
        do_action('custom_hook');
    }

    function add_to_head() {

        echo '<link rel="stylesheet" href="' . esc_url(get_template_directory_uri()) . '/styles.css?'.filemtime(get_template_directory().'/styles.css').'" />';
    }


    public function setup_theme(){
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
        add_theme_support( 'custom-background',
         [ 
            'default-color' => '0000ff',
            'default-image' => get_template_directory_uri() . '/screenshot.png']
        );

    }



   

    

   


 }