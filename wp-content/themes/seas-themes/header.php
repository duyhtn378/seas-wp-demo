<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <!-- SECTION SEAS header -->
  <header class="header">
    <div class="container">
      <div class="header-layout">
        <!-- header seas logo  -->
        <div class="company-logo">
          <img src="<?=THEME_URI?>/assets/img/header/logo.png" alt="">
        </div>

        <!-- header list of page  -->
        <ul class="header-menu header-tab-menu">
          <li class="nav-item">
            <a href="index.html" class="active">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a href="about-us.html">ABOUT SEAS</a>
            <div class="dropdown-content">
              <a href="about-us.html">ABOUT US</a>
              <a href="team.html">KEY STAFT</a>
              <a href="customer.html">CUSTOMER</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="services.html">SERVICES</a>
          </li>
          <li class="nav-item">
            <a href="projects.html">PROJECT</a>
          </li>
          <li class="nav-item">
            <a href="customer.html">CUSTOMERS</a>
          </li>
          <li class="nav-item">
            <a href="news.html">NEWS</a>
          </li>
          <li class="nav-item">
            <a href="career.html">CAREER</a>
          </li>
          <li class="nav-item">
            <a href="faqs.html">FAQS</a>
          </li>
          <li class="nav-item">
            <a href="contact.html">CONTACT</a>
          </li>
        </ul>

        <!-- header list social contact  -->
        <ul class="header-menu header-social-menu">
          <li class="nav-item">
            Consulting
          </li>
          <li class="nav-item">
            <a href="">
              <img src="<?=THEME_URI?>/assets/img/header/zalo.png" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a href="">
              <img src="<?=THEME_URI?>/assets/img/header/skype.png" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a href="">
              <img src="<?=THEME_URI?>/assets/img/header/viper.png" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a href="">
              <img src="<?=THEME_URI?>/assets/img/header/phone-call 1.png" alt="">
            </a>
          </li>
          <li class="nav-item">
            0903 938 101
          </li>
        </ul>

        <!-- bar icon for tablet, mobile  -->
        <div class="nav-mobile">
          <i class="fas fa-bars"></i>
        </div>

        <!-- overlay for tablet  -->
        <div class="nav-overlay close-mobile-nav"></div>

        <!-- header list of page for tablet, mobile -->
        <ul class="header-menu-mobile">
          <div class="cancel-btn close-mobile-nav">
            <i class="fas fa-times"></i>
          </div>
          <li class="nav-mobile-item">
            <a href="index.html" class="active">HOME</a>
          </li>
          <li class="nav-mobile-item">
            <a href="about-us.html">ABOUT US</a>
          </li>
          <li class="nav-mobile-item">
            <a href="services.html">SERVICES</a>
          </li>
          <li class="nav-mobile-item">
            <a href="projects.html">PROJECT</a>
          </li>
          <li class="nav-mobile-item">
            <a href="customer.html">CUSTOMERS</a>
          </li>
          <li class="nav-mobile-item">
            <a href="news.html">NEWS</a>
          </li>
          <li class="nav-mobile-item">
            <a href="career.html">CAREER</a>
          </li>
          <li class="nav-mobile-item">
            <a href="faqs.html">FAQS</a>
          </li>
          <li class="nav-mobile-item">
            <a href="contact.html">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </header>