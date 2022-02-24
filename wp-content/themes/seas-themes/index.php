<?php
    get_header();
?>

  <!-- SECTION SEAS body -->
  <main class="container-fluid">
    <!-- SECTION SEAS intro banner -->
    <section class="seas-banner section container-fluid">
      <!-- div element relocation for slickdot -->
      <div class="dot-location"></div>

      <!-- testing a moving circle decor  -->
      <div class="decor">
        <img src="<?=THEME_URI?>/assets/img/banner/Frame 45 (1).png" alt="">
      </div>

      <div class="header-carousel">
        <!-- slide 1 -->
        <div class="carousel-item">
          <div class="carousel-title">
            <h1>
              we provice
              proffessional
              consulting
            </h1>

            <button>More</button>
          </div>

          <img src="<?=THEME_URI?>/assets/img/banner/first-banner.png" alt="" class="carousel-img col-sm-0">
          <img src="<?=THEME_URI?>/assets/img/banner/head-banner-mb.png" alt="" class="carousel-img col-0 col-sm-12">
        </div>

        <!-- slide 2 -->
        <div class="carousel-item">
          <div class="carousel-title">
            <h1>
              we provice
              proffessional
              consulting
            </h1>

            <button>More</button>
          </div>

          <img src="<?=THEME_URI?>/assets/img/banner/first-banner.png" alt="" class="carousel-img col-sm-0">
          <img src="<?=THEME_URI?>/assets/img/banner/head-banner-mb.png" alt="" class="carousel-img col-0 col-sm-12">
        </div>

        <!-- slide 3 -->
        <div class="carousel-item">
          <div class="carousel-title">
            <h1>
              we provice
              proffessional
              consulting
            </h1>

            <button>More</button>
          </div>

          <img src="<?=THEME_URI?>/assets/img/banner/first-banner.png" alt="" class="carousel-img col-sm-0">
          <img src="<?=THEME_URI?>/assets/img/banner/head-banner-mb.png" alt="" class="carousel-img col-0 col-sm-12">
        </div>

        <!-- slide 4 -->
        <div class="carousel-item">
          <div class="carousel-title">
            <h1>
              we provice
              proffessional
              consulting
            </h1>

            <button>More</button>
          </div>

          <img src="<?=THEME_URI?>/assets/img/banner/first-banner.png" alt="" class="carousel-img col-sm-0">
          <img src="<?=THEME_URI?>/assets/img/banner/head-banner-mb.png" alt="" class="carousel-img col-0 col-sm-12">
        </div>
      </div>
    </section>
    <!-- SECTION SEAS intro banner end -->



    <!-- SECTION SEAS social contact in left -->
    <section class="social-contact col-sm-0">
      <!-- switch language button  -->
      <div class="switch-language">
        <button>EN</button>
        <button>VN</button>
      </div>

      <!-- social icon group  -->
      <div class="social-left-icon">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </section>
    <!-- SECTION SEAS social contact in left end -->



    <!-- SECTION SEAS 4 topic -->
    <section class="four-topic col-md-0 container-fluid">
      <ul class="container">
        <li>
          1&nbsp;&nbsp;<span>
            Strengh of knowlegde
          </span>
        </li>
        <li>
          2&nbsp;&nbsp;<span>
            Effective solutions
          </span>
        </li>
        <li>
          3&nbsp;&nbsp;<span>
            Add value to projects
          </span>
        </li>
        <li>
          4&nbsp;&nbsp;<span>
            Satisfy client
          </span>
        </li>
      </ul>
    </section>
    <!-- SECTION SEAS 4 topic end-->


    <!-- SECTION EPCM services -->
    <section class="seas-epcm-services container-fluid">
      <div class="container row">

        <!-- init 2 column (2 col-6), divide first column to 2 child column  -->
        <!-- column 1 -->
        <div class="col-6 col-md-12 col-sm-12 epcm-content">
          <h2 class="epcm-title">
            EPCM SERVICES
          </h2>

          <p class="epcm-main text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Etiam malesuada lorem eget ut. Sit viverra mattis quis
            pretium justo. Euismod.
          </p>

          <!-- column 2 -->
          <div class="col-0 epcm-img col-sm-12">
            <img src="<?=THEME_URI?>/assets/img/banner/EPCM.png" alt="" class="col-sm-12">
          </div>

          <div class="epcm-resources row">
            <!-- column 1.1 -->
            <div class="col-6 col-sm-12">
              <img src="<?=THEME_URI?>/assets/img/banner/prototype 1.png" alt="">

              <h3 class="sub-title">
                Engineering
              </h3>

              <p class="epcm-sub text">
                SEAS gathered well-
                experienced engineering staff
                regarding to design.
              </p>

              <a href="" class="more-info text">see more ➔</a>
            </div>

            <!-- column 1.2 -->
            <div class="col-6 col-sm-12">
              <img src="<?=THEME_URI?>/assets/img/banner/worker 1.png" alt="">

              <h3 class="sub-title">
                Construction
                management
              </h3>

              <p class="epcm-sub text">
                Project Managment,
                Construction Management,
                Supervision,...
              </p>

              <a href="services.html" class="more-info text">see more ➔</a>
            </div>
          </div>
        </div>

        <!-- column 2 -->
        <div class="col-6 col-md-12 epcm-img col-sm-0">
          <img src="<?=THEME_URI?>/assets/img/banner/EPCM.png" alt="">
        </div>
      </div>
    </section>
    <!-- SECTION EPCM services end -->


    <!-- SECTION projects -->
    <section class="seas-project container-fluid">
      <div class="container project-title">
        <h2>
          PROJECTS
        </h2>

        <div class="filter-button">
          <button class="filter-btn on-choose" data-construction="industrial">Industry</button>
          <button class="filter-btn" data-construction="civil">Civil</button>
        </div>

        <!-- group card  -->
        <div class="seas-project-card row">
          <!-- card 1 Industry -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable" data-construction="industrial">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/industry-1.png" alt="">

              <p class="text">
                Masan Meat Ha Nam Factory
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              Thiết kế kiến trúc, kết cấu; Thiết kế hệ thống cơ điện; Tư vấn Đấu thầu; Quản lý công trường
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>

          <!-- card 2 Industry -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable" data-construction="industrial">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/industry-2.png" alt="">

              <p class="text">
                Schindler Vietnam Factory
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              Review Design, Construction Management
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>

          <!-- card 3 Industry -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable" data-construction="industrial">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/industry-3.png" alt="">

              <p class="text">
                Extension Vopak Factory(Ph...
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              FEED Design (CSA, MEPF, Utility System), Tender Processing, Project Management, Construction Management
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>

          <!-- card 4 Industry -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable" data-construction="industrial">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/industry-4.png" alt="">

              <p class="text">
                Schindler Vietnam Factory
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              Thiết kế kiến trúc, kết cấu; Thiết kế hệ thống cơ điện; Tư vấn Đấu thầu; Quản lý công trường
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>

          <!-- card 1 civil -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable is-hidden" data-construction="civil">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/civil-1.png" alt="">

              <p class="text">
                Schindler Vietnam Factory
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              Thiết kế kiến trúc, kết cấu; Thiết kế hệ thống cơ điện; Tư vấn Đấu thầu; Quản lý công trường
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>

          <!-- card 2 civil -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable is-hidden" data-construction="civil">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/civil-2.png" alt="">

              <p class="text">
                Schindler Vietnam Factory
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              Thiết kế kiến trúc, kết cấu; Thiết kế hệ thống cơ điện; Tư vấn Đấu thầu; Quản lý công trường
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>

          <!-- card 3 civil -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable is-hidden" data-construction="civil">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/civil-3.png" alt="">

              <p class="text">
                Schindler Vietnam Factory
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              Thiết kế kiến trúc, kết cấu; Thiết kế hệ thống cơ điện; Tư vấn Đấu thầu; Quản lý công trường
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>

          <!-- card 4 civil -->
          <div class="col-3 col-md-6 col-sm-12 project-card col-gutter js-filterable is-hidden" data-construction="civil">
            <div class="project-card-img section">
              <img src="<?=THEME_URI?>/assets/img/banner/civil-4.png" alt="">

              <p class="text">
                Schindler Vietnam Factory
              </p>
              <div class="text-decor"></div>
            </div>
            <p class="card-content">
              Thiết kế kiến trúc, kết cấu; Thiết kế hệ thống cơ điện; Tư vấn Đấu thầu; Quản lý công trường
            </p>
            <a href="projects-detail.html">Xem thêm ➔</a>
          </div>
        </div>
      </div>
    </section>
    <!-- SECTION projects end -->


    <!-- SECTION about seas -->
    <section class="seas-about container-fluid">
      <div class="about-seas-content">
        <h2 class="about-title">
          ABOUT SEA
        </h2>

        <p class="about-text text">
          SEAS Project Consultants Co. Ltd and SEAS Engineering Consultants
          Corporation belong to SEAS Group which are leading professional group in the
          consulting service. SEAS Group specialize in Consultancy, Design and Project
          Management, General Construction Contractor, M&E Contractor for industrial
          and civil projects in Vietnam and ASEAN.
        </p>

        <button class="text">Xem thêm</button>
      </div>

      <img src="<?=THEME_URI?>/assets/img/banner/about-sea-bg.png" alt="">
    </section>
    <!-- SECTION about seas end -->



    <!-- SECTION seas news -->
    <section class="seas-news container-fluid">
      <div class="container project-title">
        <h2>
          News
        </h2>

        <div class="filter-button">
          <button>Technology</button>
          <button>innovative</button>
        </div>

        <div class="seas-news-card row">
          <!-- item 1 -->
          <div class="col-6 col-md-12 col-sm-12 news-card">
            <div class="news-card-img section corner-bottom">
              <img src="<?=THEME_URI?>/assets/img/banner/news-1.png" alt="">

              <p>
                Vietbuild<br>
                2015(18/06/2015)<br><br><br>
                <a href="">Xem thêm ➔</a>
              </p>

              <div class="text-decor"></div>
            </div>
          </div>

          <!-- item 2 -->
          <div class="col-6 col-md-12 col-sm-12 news-card">
            <div class="news-card-img section corner-top">
              <img src="<?=THEME_URI?>/assets/img/banner/news-2.png" alt="">

              <p>
                Ceremony to commence the<br>
                construction of Bien Hoa<br>
                Third Factory(21/08/2014)<br><br>
                <a href="">Xem thêm ➔</a>
              </p>
              <div class="text-decor"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SECTION seas news end -->


    <!-- SECTION second slider -->
    <section class="seas-second-carousel section container">
      <div class="second-carousel">
        <!-- slide 1 -->
        <div class="carousel-item">
          <!-- column 1 -->
          <div class="carousel-title col-6">
            <div>
              <p class="second-slider-sub-title col-sm-0">
                What customer say<br>
                about us
              </p>

              <h2 class="second-slider-title">
                BCM SOLUTIONS
              </h2>

              <p class="second-slider-content text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate tristique eu at massa senectus. Purus 
                eu risus, sed mattis tortor. A interdum sodales molestie
                et eget. Nunc odio duis imperdiet libero. Id ut neque,
                adipiscing a. Aliquam eros laoreet quis in et.
              </p>
              <p class="second-slider-position">
                Brooklyn Simmons <br>
                <span>
                  FOUNDER & CEO
                </span>
              </p>
            </div>
          </div>

          <!-- column 2 -->
          <div class="col-6 second-slider-img-group">
            <img src="<?=THEME_URI?>/assets/img/banner/second-slider.png" alt="" class="carousel-img">
            <div class="second-decor">
              <img src="<?=THEME_URI?>/assets/img/banner/test-second-banner-effect.png" alt="">
            </div>
          </div>

          <!-- title show on mobile -->
          <div class="about-title-mb">
            <p class="col-0 col-sm-12">
              What customer say<br>
              about us
            </p>
          </div>
        </div>

        <!-- slide 2 -->
        <div class="carousel-item">
          <!-- column 1 -->
          <div class="carousel-title col-6">
            <div>
              <p class="second-slider-sub-title col-sm-0">
                What customer say<br>
                about us
              </p>

              <h2 class="second-slider-title">
                BCM SOLUTIONS
              </h2>

              <p class="second-slider-content text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate tristique eu at massa senectus. Purus 
                eu risus, sed mattis tortor. A interdum sodales molestie
                et eget. Nunc odio duis imperdiet libero. Id ut neque,
                adipiscing a. Aliquam eros laoreet quis in et.
              </p>
              <p class="second-slider-position">
                Brooklyn Simmons <br>
                <span>
                  FOUNDER & CEO
                </span>
              </p>
            </div>
          </div>

          <!-- column 2 -->
          <div class="col-6 second-slider-img-group">
            <img src="<?=THEME_URI?>/assets/img/banner/second-slider.png" alt="" class="carousel-img">
            <div class="second-decor">
              <img src="<?=THEME_URI?>/assets/img/banner/test-second-banner-effect.png" alt="">
            </div>
          </div>

          <!-- title show on mobile -->
          <div class="about-title-mb">
            <p class="col-0 col-sm-12">
              What customer say<br>
              about us
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- SECTION second slider end -->


    <!-- SECTION seas client -->
    <section class="seas-client">
      <h2>
        Client
      </h2>

      <div class="container client-brand-logo row">
        <div class="col-0 col-sm-6 row">
          <img src="<?=THEME_URI?>/assets/img/banner/client-1.png" alt="" class="col-sm-5">
        </div>
        <div class="col-0 col-sm-6 row">
          <img src="<?=THEME_URI?>/assets/img/banner/client-2.png" alt="" class="col-sm-5">
        </div>
        <div class="col-0 col-sm-6 row">
          <img src="<?=THEME_URI?>/assets/img/banner/client-3.png" alt="" class="col-sm-5">
        </div>
        <div class="col-0 col-sm-6 row">
          <img src="<?=THEME_URI?>/assets/img/banner/client-4.png" alt="" class="col-sm-5">
        </div>
        <div class="col-0 col-sm-6 row">
          <img src="<?=THEME_URI?>/assets/img/banner/client-5.png" alt="" class="col-sm-5">
        </div>
        <div class="col-0 col-sm-6 row">
          <img src="<?=THEME_URI?>/assets/img/banner/client-6.png" alt="" class="col-sm-5">
        </div>
      </div>

      <div class="client-contact col-sm-0">
        <img src="<?=THEME_URI?>/assets/img/banner/client-bg.png" alt="" class="client-bg-img">

        <div action="" class="contact-form">
          <!-- text part right side  -->
          <div class="contact-content">
            <h2>
              SEAS PROJECT<br>
              CONSULTANTS Co., Ltd
            </h2>
            <div>
              <i class="fas fa-map-marker-alt">
                <span>Address</span>
              </i>

              <p>
                8/19A Nguyen Thien Thuat Street, Ward 24,<br>
                Binh Thanh, Dist, Ho Chi Minh City, Viet Nam
              </p>
            </div>
            <div>
              <i class="fas fa-phone-volume">
                <span>Hotline</span>
              </i>

              <p>
                0903 938 101
              </p>
            </div>
            <div>
              <i class="fas fa-envelope">
                <span>Email</span>
              </i>

              <p>
                seas@seas.com.vn
              </p>
            </div>
          </div>

          <div class="contact-submit">
            <h2>
              We are the best construction experts
            </h2>

            <p>
              pLorem ipsum dolor sit amet, consectetur adipiscing elit.
              Nunc vulputate tristique eu at massa senectus.
              Purus eu risus, sed mattis tortor.
            </p>

            <button>Contact us</button>
          </div>
        </div>
      </div>
    </section>
    <!-- SECTION seas client end -->

    <!-- SECTION seas contact for mobile  -->
    <section class="seas-contact-mb container col-0 col-sm-12" style="background-image: url(<?=THEME_URI?>/assets/img/banner/contact-banner-mb.png);">
      <h3>
        We are the best <br>
        construction experts
      </h3>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate tristique eu at massa senectus. Purus eu risus, sed mattis tortor.
      </p>

      <button>Contact us</button>

      <div class="seas-contact-way">
        <div class="contact-content">
          <h2>
            SEAS PROJECT<br>
            CONSULTANTS Co., Ltd
          </h2>
          <div>
            <i class="fas fa-map-marker-alt">
              <span>Address</span>
            </i>

            <p>
              No. 4/7 road 41, An Khanh Ward, Thu Duc, Ho Chi Minh City, Vietnam
            </p>
          </div>
          <div>
            <i class="fas fa-phone-volume">
              <span>Hotline</span>
            </i>

            <p>
              0903 938 101
            </p>
          </div>
          <div>
            <i class="fas fa-envelope">
              <span>Email</span>
            </i>

            <p>
              seas@seas.com.vn
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- SECTION seas client for mobile end -->
  </main>

<?php
    get_footer();