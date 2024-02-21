<?php
/**
 * Bootstraps the Theme.
 * 
 * @package Speed
 */

 namespace HASTE\Inc;
 use HASTE\Inc\Traits\Singleton;

 class COMPONENT_PAGES {
    use Singleton;

    protected function __construct(){
        
 

    }

    public function hierarchy() {
    

$page_id = get_the_ID();
$page_slug = get_post_field('post_name', $page_id);
        if (!empty($page_slug)) {

            echo <<<HTML
            <nav class="category">
                <ul class="category__list">
                    <li class="category__item"><a class="category__link" href="{esc_url(home_url())}">HOMEPAGE</a></li>
                    <li class="category__divider">›</li>
                    <li class="category__item"><a class="category__link" href="{esc_url(home_url())}/{$page_slug}">{$page_slug}</a></li>
                </ul>
            </nav>
HTML;
        }
    }
    
    

 }