<?php
/**
 * Bootstraps the Theme.
 * 
 * @package Speed
 */

 namespace HASTE\Inc;
 use HASTE\Inc\Traits\Singleton;

 class COMPONENT_BLOG {
    use Singleton;

    protected function __construct(){
        
 

    }

    public function category() {
        $categories = get_the_category();
    
        if (!empty($categories)) {
            $category_link = get_category_link($categories[0]->term_id);
            $parent_category = get_category($categories[0]->parent);

            $parent_categoryTerm = get_term($categories[0]->parent, 'category');
            $parent_link = get_category_link($parent_categoryTerm->term_id);

            echo <<<HTML
                <nav class="category">
                    <ul class="category__list">
                        <li class="category__item"><a class="category__link" href="{$category_link}">{$categories[0]->name}</a></li>
                        <li class="category__divider">›</li>
                        <li class="category__item"><a class="category__link" href="{$parent_link}">{$parent_category->name}</a></li>
                    </ul>
                </nav>
    HTML;
        }
    }
    
    

 }