<?php
namespace HASTE\Inc;
// cookie

$cookie_value = 'moja_wartosc';
setcookie('example_cookie', $cookie_value, time() + 3600, COOKIEPATH, COOKIE_DOMAIN, false);


// Odczytaj wartość ciasteczka o nazwie 'example_cookie'
$cookie_value = isset($_COOKIE['example_cookie']) ? sanitize_text_field($_COOKIE['example_cookie']) : '';

// Wykorzystaj wartość ciasteczka


if (is_user_logged_in()) {
 
    if($_POST['logout'] == '1'){
        wp_logout();
        wp_redirect(home_url('/my-account/'));
        exit;
    }
  
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['custom_login_nonce'])) {
    if (wp_verify_nonce($_POST['custom_login_nonce'], 'custom_login_nonce')) {
        $username = sanitize_user($_POST['username']);
        $password = $_POST['password'];

        $user = wp_signon(array('user_login' => $username, 'user_password' => $password), false);

        if (!is_wp_error($user)) {
            wp_redirect(home_url('/my-account/'));
            exit;
        } else {
            // Logowanie nie powiodło się
            echo '<p>Błędne dane logowania. Spróbuj ponownie.</p>';
        }
    }
}


    ?>






<?php


if(!is_user_logged_in()){
    get_template_part('template-parts/header');

?>

<body>
    <main>
<form method="post" action="">
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password" required>

    <?php wp_nonce_field('custom_login_nonce', 'custom_login_nonce'); ?>

    <input type="submit" value="Zaloguj">
</form>


<?php

}else{
    get_template_part('template-parts/header');
    $current_user = wp_get_current_user();

?>
<body>
    <main class="main">

    <header class="main__header">

<?php COMPONENT_PAGES::hierarchy() ?>

</header>


<div class="account">

  <div class="account__panel">

    <div class="account__hello">
      <a class="account__home" href="https://best-home-decor.co.uk/my-account/">
      <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 20C23.6833 20 26.6667 17.0167 26.6667 13.3333C26.6667 9.64999 23.6833 6.66666 20 6.66666C16.3167 6.66666 13.3333 9.64999 13.3333 13.3333C13.3333 17.0167 16.3167 20 20 20ZM20 23.3333C15.55 23.3333 6.66666 25.5667 6.66666 30V33.3333H33.3333V30C33.3333 25.5667 24.45 23.3333 20 23.3333Z" fill="#737385"></path>
      </svg>
      <span class="account__hello-text"> Hi , <?= $current_user->display_name ?></span></a>
    </div>


<nav class="account__navigation">
  <ul class="account__list">
    <li class="account__item">
  <a class="account__link" href="<?= esc_url(home_url()) ?>/my-account/"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z" fill="#737385"/></svg> <span class="account__link-text"> Dashboard</span></a>
</li>
<li class="account__item">
  <a class="account__link" href="<?= esc_url(home_url()) ?>/my-account/orders/"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M160-160v-516L82-846l72-34 94 202h464l94-202 72 34-78 170v516H160Zm240-280h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z" fill="#737385"/></svg> <span class="account__link-text"> Orders</span></a>
</li>
<li class="account__item">
  <a class="account__link" href="<?= esc_url(home_url()) ?>/my-account/edit-address/"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-494Z" fill="#737385"/></svg> <span class="account__link-text"> Addresses</span></a>
</li>
<li class="account__item">
  <a class="account__link" href="<?= esc_url(home_url()) ?>/my-account/payment-methods/"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M880-720v480q0 33-23.5 56.5T800-160H160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720Zm-720 80h640v-80H160v80Zm0 160v240h640v-240H160Zm0 240v-480 480Z" fill="#737385"/></svg> <span class="account__link-text"> Payment methods</span></a>
</li>
<li class="account__item">
  <a class="account__link" href="<?= esc_url(home_url()) ?>/my-account/edit-account/"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z" fill="#737385"/></svg> <span class="account__link-text">Account details</span></a>
</li>
<li class="account__item">
  <a class="account__link" href="<?= esc_url(wp_logout_url(home_url())) ?>"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" fill="#737385"/></svg> <span class="account__link-text">Log out</span></a>
</li>
</ul>
</nav>
</div>
<div class="account__functions">

<?php

    do_action('woocommerce_account_content');

}
?>



</div>
</div>
</main>
</body>
<?php get_template_part('template-parts/footer') ?>