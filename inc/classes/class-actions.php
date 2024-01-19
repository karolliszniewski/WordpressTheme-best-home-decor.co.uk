<?php
/**
 * Bootstraps the Theme.
 * 
 * @package Speed
 */

 namespace HASTE\Inc;


 use HASTE\Inc\Traits\Singleton;

 class ACTIONS {
    use Singleton;
    
    protected function __construct(){
        // all actions are public 

    }

    public function add_custom_head() {
        do_action('custom_head');
    }


    public function add_custom_footer() {
        do_action('custom_footer');
    }

  


 }