$(document).ready(function () {
  // status variable
  var formOpen = "open";
  var formClose = "close";
  var faqsStatus = formOpen;

  var test = $(".show-detail");
  var i;

  // run array circle for all button has className is show-detail
  for (i = 0; i < test.length; i++) {
    // get exactly button is clicked
    test[i].addEventListener("click", function () {
      // onBtnShowDetail(this);
      var test2 = this.nextElementSibling;
      // var test2 = this.next();
      // var test3 = this.parent(".box-show");
      // var test4 = this.children();
      var test4 = this.children[0];
      if (faqsStatus === formOpen) {
        // $(".drop-box").css({"height": "189px"});
        test2.style.display = "block";
        // test3.style.height = "189px";
        // test2.css({"display":"block"});
        // test3.css({"height":"189px"});
        // $(".fas").removeClass("fa-plus");
        // $(".fas").addClass("fa-minus");
        test4.classList.remove("fa-plus");
        test4.classList.add("fa-minus");
        faqsStatus = formClose;
      } else if (faqsStatus === formClose) {
        // $(".drop-box").css({"height": "40px"});
        test2.style.display = "none";
        // test3.style.height = "40px";
        // test2.css({"display":"none"});
        // test3.css({"height":"40px"});
        // $(".fas").addClass("fa-plus");
        // $(".fas").removeClass("fa-minus");
        test4.classList.add("fa-plus");
        test4.classList.remove("fa-minus");
        faqsStatus = formOpen;
      }
    });
  }

  // filter type of construction
  $(".filter-btn").on("click", function () {
    var $type = $(this).attr("data-construction");

    if ($type == "industrial") {
      $(".js-filterable").addClass("is-hidden");
      $(".js-filterable[data-construction=" + $type + "]").removeClass("is-hidden");
      $(".filter-btn").removeClass("on-choose");
      $(".filter-btn[data-construction=" + $type + "]").addClass("on-choose");
    } else {
      $(".js-filterable").addClass("is-hidden");
      $(".js-filterable[data-construction=" + $type + "]").removeClass(
        "is-hidden"
      );
      $(".filter-btn").removeClass("on-choose");
      $(".filter-btn[data-construction=" + $type + "]").addClass("on-choose");
    }
  });

  //open and close moblie nav box
  $(".nav-mobile").on("click", function () {
    $(".header-menu-mobile").css("transform", "translateX(0)");
    $(".header-menu-mobile").css("opacity", "1");
    $(".nav-overlay").css("display", "block");
  });

  $(".close-mobile-nav").on("click", function () {
    $(".header-menu-mobile").css("transform", "translateX(100%)");
    $(".header-menu-mobile").css("opacity", "0");
    $(".nav-overlay").css("display", "none");
  });

  //first banner slider
  $(".header-carousel").slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnFocus: false,
    pauseOnHover: false,
    fade: true,
    appendDots: $(".dot-location"),
    arrows: false,
  });

  // second banner slider
  $(".second-carousel").slick({
    infinite: true,
    arrows: true,
    autoplay: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    autoplaySpeed: 5000,
    // prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left clr-gry slick-previous"></i></button>',
    // nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right clr-gry slick-next"></i></button>'

    // prevArrow:'<i class=" fas fa-angle-right clr-gry slick-prev" style="color:blue;"></i>',
    // nextArrow:'<i class="fas fa-angle-left clr-gry slick-next"></i>'
  });
});
