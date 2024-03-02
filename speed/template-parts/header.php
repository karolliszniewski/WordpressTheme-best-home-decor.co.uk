<?php  namespace HASTE\Inc;

?>
<!DOCTYPE html>
<html lang="<?php echo esc_attr(get_bloginfo('language')) ?> ">

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:title" content="<?php echo get_the_title(); ?>" />
<meta property="og:description" content="<?php echo esc_attr(get_the_excerpt()); ?>" />
<meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
<meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" />


  <title><?php echo get_the_title(); ?></title>
  <?php ACTIONS::add_custom_head(); ?>
</head>

<body>
<header class="header">
      <div class="container">
        <div class="menu">
          <span class="menu__open">
            <svg
              width="40"
              height="40"
              viewBox="0 0 40 40"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M35 30H5V26.6667H35V30ZM35 21.6667H5V18.3333H35V21.6667ZM35 10V13.3333H5V10H35Z"
                fill="#FCFCFC"
              />
            </svg>
          </span>
          <div class="menu__logo"><a class="menu__home" href="<?php echo esc_url(home_url())  ?>"><span>Go</span>Best</a></div>

          <nav class="navigation">
            <header class="navigation__header">
              <div class="navigation__home">
                <span
                  ><a href="<?php echo esc_url(home_url())  ?>">
                    <svg
                      class="responsiveFlyoutMenu_homeIcon responsiveFlyoutMenu_homeIconFill responsiveFlyoutMenu_homeIcon-level"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M17,10 L17,19 L12,19 L12,14 C12,12.8954305 11.1045695,12 10,12 C8.8954305,12 8,12.8954305 8,14 L8,19 L3,19 L3,10 L0,10 L10,0 L20,10 L17,10 Z"
                        transform="translate(2 2)"
                      ></path>
                    </svg>
                  </a>
                </span>
              </div>

              <div class="navigation__close">
                <span>
                  <svg
                    class="responsiveFlyoutMenu_cross"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M12.0020447,10.5878311 L18.0040894,4.58578644 L19.4183029,6 L13.4162582,12.0020447 L19.4142136,18 L18,19.4142136 L12.0020447,13.4162582 L6,19.4183029 L4.58578644,18.0040894 L10.5878311,12.0020447 L4.58578644,6 L6,4.58578644 L12.0020447,10.5878311 Z"
                    ></path>
                  </svg>
                </span>
              </div>
            </header>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'main-navigation',
    'menu_class' => 'navigation__list',
    'container' => '',
    'walker' => new Customwalker(),
  ));

  ?>


</nav>

<div class="menu__icons">
<span class="menu__woocommerce">
  <span class="menu__search">
  <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"
                fill="#FCFCFC" />
            </svg>
  </span>
</span>

<span class="menu__account">
  <a href=" <?php echo esc_url(home_url().'/my-account/')  ?>
  ">
  <svg

    height="24"
    viewBox="0 0 40 40"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M20 20C23.6833 20 26.6667 17.0167 26.6667 13.3333C26.6667 9.64999 23.6833 6.66666 20 6.66666C16.3167 6.66666 13.3333 9.64999 13.3333 13.3333C13.3333 17.0167 16.3167 20 20 20ZM20 23.3333C15.55 23.3333 6.66666 25.5667 6.66666 30V33.3333H33.3333V30C33.3333 25.5667 24.45 23.3333 20 23.3333Z"
      fill="#FCFCFC"
    />
  </svg>
  </a>
</span>

<span class="menu__basket">
<a href=" <?php echo esc_url(home_url().'/cart/')  ?> ">
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M221-120q-27 0-48-16.5T144-179L42-549q-5-19 6.5-35T80-600h190l176-262q5-8 14-13t19-5q10 0 19 5t14 13l176 262h192q20 0 31.5 16t6.5 35L816-179q-8 26-29 42.5T739-120H221Zm-1-80h520l88-320H132l88 320Zm260-80q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM367-600h225L479-768 367-600Zm113 240Z"
fill="#FCFCFC"/></svg>
</a>
</span>
</div>
</div>
</div>


<div class="search">
<form role="search" method="get" id="woocommerce-product-search-form" class="woocommerce-product-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"
                fill="black" />
            </svg>
        </button>
        <input type="hidden" name="post_type" value="product" />
    </form>
</div>


</header>

