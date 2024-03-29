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

    

    }



   

    

   


 }