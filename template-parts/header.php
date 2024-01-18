<?php  namespace HASTE\Inc;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo get_the_title(); ?></title>
  <?php HASTE_THEME::add_custom_head(); ?>
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
          <div class="menu__logo"><span>Go</span>Best</div>

          <nav class="navigation">
            <header class="navigation__header">
              <div class="navigation__home">
                <span
                  ><a href="#">
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
    'theme_location' => 'custom-menu',
    'menu_class' => 'navigation__list',
    'container' => '',
    'walker' => new Customwalker(),
  ));

  ?>


</nav>

<span class="menu__account">
  <svg
    width="40"
    height="40"
    viewBox="0 0 40 40"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M20 20C23.6833 20 26.6667 17.0167 26.6667 13.3333C26.6667 9.64999 23.6833 6.66666 20 6.66666C16.3167 6.66666 13.3333 9.64999 13.3333 13.3333C13.3333 17.0167 16.3167 20 20 20ZM20 23.3333C15.55 23.3333 6.66666 25.5667 6.66666 30V33.3333H33.3333V30C33.3333 25.5667 24.45 23.3333 20 23.3333Z"
      fill="#FCFCFC"
    />
  </svg>
</span>
</div>
</div>
</header>

