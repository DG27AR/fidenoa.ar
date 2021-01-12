<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSS JS -->
    <?php wp_head(); ?>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- PHP CSS -->
    <style>
        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php bloginfo('template_url' ); ?>/img/hero-original.jpg");
        }
        .short-info-card-img {
        background-image: url(<?php bloginfo('template_url' ); ?>/img/dracristinabazan.jpeg);
        }
    </style>

    <title>FIDENOA - Fundación de Endocrinología Infantil del Noroeste Argentino</title>
  </head>
  <body>
    <!-- Navbar Start -->

    <div class="container-fluid bg-primary">
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary container">
        <div class="navbar-brand">
          <a href="index.php">
            <img
              src="<?php bloginfo('template_url' ); ?>/img/logo-cuadrado-white.svg"
              width="50"
              height="50"
              alt="logo fundación endocrinología infantil del noroeste Argentino FIDENOA"
              loading="lazy"
            />
            </a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
            'menu_class' => 'nav-item'
        ) ); ?>

      </nav>
    </div>

    <!-- Navbar End -->
