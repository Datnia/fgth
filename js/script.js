jQuery(document).ready(function ($) {
  var url = window.location.href;

  $(".menu-item-has-children").click(function (e) {
    if (e.target.href == "#") {
      e.preventDefault();
    }
  });

  $("#programs .row:nth-child(1)").addClass("row-active");
  $("#programs .row").click(function () {
    $("#programs .row").removeClass("row-active");
    $(this).addClass("row-active");
  });

  $(".open-content").click(function () {
    $(this).next().fadeIn();
  });

  $(".close-content").click(function () {
    $(this).parent().fadeOut();
  });

  if ($("body").hasClass("page-id-8") || $("body").hasClass("search")) {
    let aboutPosition = $("section nav").offset().top;

    $(window).on("scroll touchmove", function () {
      if ($(this).scrollTop() > aboutPosition) {
        $("body").addClass("active-subnav");
      } else if ($(this).scrollTop() < aboutPosition) {
        $("body").removeClass("active-subnav");
      }
      if (
        $(".anchor3").length &&
        $(this).scrollTop() > $(".anchor3").offset().top - 200
      ) {
        $("section nav a").removeClass("active");
        $("section nav .item3").addClass("active");
      } else if (
        $(".anchor2").length &&
        $(this).scrollTop() > $(".anchor2").offset().top - 200
      ) {
        $("section nav a").removeClass("active");
        $("section nav .item2").addClass("active");
      } else if (
        $(".anchor1").length &&
        $(this).scrollTop() > $(".anchor1").offset().top - 200
      ) {
        $("section nav a").removeClass("active");
        $("section nav .item1").addClass("active");
      }
    });

    if (!$(".anchor1")[0]) {
      $(".item1").css("display", "none");
    }

    if (!$(".anchor2")[0]) {
      $(".item2").css("display", "none");
    }

    if (!$(".anchor3")[0]) {
      $(".item3").css("display", "none");
    }
  }

  var $elems = $(".row");
  $elems.on("click", function (e) {
    var indexOfElem = $elems.index(this);
    $(".program").css("display", "none");
    $(".program-display " + "." + indexOfElem)
      .css("display", "flex")
      .hide()
      .fadeIn();
  });

  $("#faq .row").click(function (e) {
    let getRowId = e.target.id;
    if ($(this).hasClass("faq-active")) {
      $("#faq .col .answer").css("display", "none");
      $("#faq .row").removeClass("faq-active");
    } else {
      $("#faq .row").removeClass("faq-active");
      $(this).addClass("faq-active");
      $("#faq .col .answer").css("display", "none");
      $("#faq .col .answer:nth-child(" + getRowId + ")").css(
        "display",
        "block"
      );
    }
  });

  $("#blog-post nav a[href='" + url + "']")
    .parent()
    .addClass("current");
  $("#blog-post nav a[href='" + url + "']").addClass("active-nav");

  $("#product nav a[href='" + url + "']")
    .parent()
    .addClass("current");
  $("#product nav a[href='" + url + "']").addClass("active-nav");

  $(".book-wrapper button").click(function (e) {
    let getBook = e.target.value;
    $("#books-container")[0].scrollIntoView({
      behavior: "smooth",
    });
    $("#books-container .col:nth-child(1)").css(
      "background",
      "rgba(232, 241, 255, 1)"
    );
    $(".books-index").fadeOut();
    $("." + getBook).fadeIn(900);
    $(".books-slider-wrapper").css({
      height: "initial",
      opacity: "1",
      overflow: "unset",
    });
  });

  $(".book header .arrow").click(function () {
    $("#books-container .col:nth-child(1)").css("background", "#fff");
    $(".book").fadeOut(900);
    $(".books-index").fadeIn(900);
    $(".books-slider-wrapper").css({
      height: "0",
      opacity: "0",
      overflow: "hidden",
    });
  });

  $(".books-slider img").click(function (e) {
    let getBook = e.target.className;
    $("#books-container")[0].scrollIntoView({
      behavior: "smooth",
    });
    $(".book-display .book").fadeOut(100);
    $("." + getBook).fadeIn(900);
  });

  // PRODUCT NAV HERE

  if ($("body").hasClass("single-product")) {
    $("#product .major .content").scrollTop(0);

    let contentContainer = $("#product .major .content").offset().top;
    let anchor1 =
      $("#product  .major .row:nth-child(1)").offset().top -
      contentContainer -
      215;
    let anchor2 =
      $("#product  .major .row:nth-child(2)").offset().top -
      contentContainer -
      215;
    let anchor3 =
      $("#product  .major .row:nth-child(3)").offset().top -
      contentContainer -
      215;

    $(".link1").click(function (e) {
      e.preventDefault();
      $("#product .major .content").animate(
        {
          scrollTop: anchor1,
        },
        300
      );
    });

    $(".link2").click(function (e) {
      e.preventDefault();
      $("#product .major .content").animate(
        {
          scrollTop: anchor2,
        },
        300
      );
    });

    $(".link3").click(function (e) {
      e.preventDefault();
      $("#product .major .content").animate(
        {
          scrollTop: anchor3,
        },
        300
      );
    });

    $("#product .major .content").scroll(function () {
      anchor1Mid = (anchor1 + 215) / 2;
      anchor2Mid = (anchor2 + 215) / 2;
      anchor3Mid = (anchor3 + 215) / 2;

      if ($(this).scrollTop() > anchor3Mid) {
        $("#product .major header a").removeClass("active");
        $(".link3").addClass("active");
      } else if (
        $(this).scrollTop() > anchor2Mid &&
        $(this).scrollTop() >
          $(this)[0].scrollHeight - $(this).innerHeight() - 2
      ) {
        $("#product .major header a").removeClass("active");
        $(".link2").addClass("active");
        $(".link3").addClass("active");
      } else if (
        $(this).scrollTop() > anchor1Mid &&
        $(this).scrollTop() >
          $(this)[0].scrollHeight - $(this).innerHeight() - 2
      ) {
        $(".link1").addClass("active");
        $(".link2").addClass("active");
        $(".link3").addClass("active");
      } else if ($(this).scrollTop() > anchor2Mid) {
        $("#product .major header a").removeClass("active");
        $(".link2").addClass("active");
      } else {
        $("#product .major header a").removeClass("active");
        $(".link1").addClass("active");
      }
    });
  }

  $(".slider-container .slide span").click(function () {
    $("html").addClass("no-scroll");
    $("#video-modal, .video-slider").fadeIn();
    setTimeout(function () {
      $("#video-modal .slick-arrow").fadeTo("slow", 1);
    }, 700);
  });

  $("#video-modal .close-modal").click(function () {
    $("#video-modal, .video-slider, .testimonial-video").fadeOut();
    $("#video-modal .slick-arrow").fadeTo("slow", 0);
    $("video").trigger("pause");
    setTimeout(() => {
      $("html").removeClass("no-scroll");
    }, 500);
  });

  $(".vid-container, .video-container").click(function () {
    $("#video-modal, .testimonial-video").fadeIn();
    $("html").addClass("no-scroll");
  });

  $("#contact.join-team nav a").click(function (e) {
    e.preventDefault();
    $("#contact.join-team nav a").removeClass("active");
    $(this).addClass("active");
  });

  $("#contact.join-team nav a:nth-child(1)").click(function () {
    $(".application").addClass("hidden-slide");
    $(".personal-info").removeClass("hidden-slide");
  });

  $("#contact.join-team nav a:nth-child(2)").click(function () {
    $(".personal-info").addClass("hidden-slide");
    $(".application").removeClass("hidden-slide");
  });

  $("#contact.join-team .next-page").click(function (e) {
    e.preventDefault();
    $(".personal-info").addClass("hidden-slide");
    $(".application").removeClass("hidden-slide");
    $("#contact.join-team nav a").removeClass("active");
    $("#contact.join-team nav a:nth-child(2)").addClass("active");
    window.location.href = "#wpcf7-f607-o1";
  });

  $("#file").change(function () {
    $(".upload-wrapper .opt").text(this.files[0].name);
  });

  $(".attribute-group").before("<h4>Select Your Group</h4>");

  $("form.cart button").addClass("btn");

  $("form.cart .value div").append("<span></span>");

  $("form.cart .quantity")
    .prepend("<i class='fas fa-caret-up inc' aria-hidden='true'></i>")
    .append('<i class="fas fa-caret-down dec" aria-hidden="true"></i>');

  $(".inc").click(function () {
    let count = $(this).closest("div").find(".qty").val();
    newCount = ++count;
    $(this).closest("div").find(".qty").val(newCount);
    setTimeout(() => {
      return $(this).closest("div").find(".qty").val(newCount).change();
    }, 1500);
  });

  $(".dec").click(function () {
    let count = $(this).closest("div").find(".qty").val();
    if (count > 0) {
      newCount = --count;
      $(this).closest("div").find(".qty").val(newCount);
      setTimeout(() => {
        return $(this).closest("div").find(".qty").val(newCount).change();
      }, 1500);
    } else {
      return null;
    }
  });

  $("div.woocommerce").on("change", ".qty", function () {
    $("[name='update_cart']").prop("disabled", false);
    $("[name='update_cart']").trigger("click");
    setTimeout(() => {
      location.reload();
    }, 2000);
  });

  $("form.cart .btn").click(function (e) {
    if ($("#cart-modal").is(":visible")) {
      return null;
    } else {
      e.preventDefault();
      $("#cart-modal").css("display", "flex").hide().fadeIn(200);
    }
  });

  $(".value div:nth-child(1) input").prop("checked", true);

  $("#cart-modal #continue, #cart-modal .close-modal").click(function () {
    $("#cart-modal .loader").css("display", "flex").hide().fadeIn(200);
    $("form.cart .btn").click();
  });

  window.onload = function () {
    var reloading = sessionStorage.getItem("reloading");
    var calendarSubmit = sessionStorage.getItem("calendarSubmit");
    if (reloading) {
      $("#cart-modal, .loader").css("display", "flex");
      sessionStorage.removeItem("reloading");
      window.location.href = $(".nav-minor a").attr("href");
    }
    if (calendarSubmit) {
      sessionStorage.removeItem("calendarSubmit");
      setTimeout(() => {
        window.location.href = "#calendar-container";
      }, 5);
    }
  };

  $(".view-cart").click(function () {
    $("form.cart .btn").click();
    sessionStorage.setItem("reloading", "true");
  });

  setTimeout(() => {
    $("#billing_address_2_field label")
      .removeClass("screen-reader-text")
      .text("Apartment, suite, unit etc.");
    $("#cart .woocommerce-billing-fields__field-wrapper").append(
      "<button class='btn cont-2'>CONTINUE</button>"
    );
    $("#cart nav a:nth-child(3), #cart button.cont-2").click(function (e) {
      e.preventDefault();
      $("#cart .woocommerce-billing-fields #payment").removeClass(
        "hidden-slide"
      );
      $("#cart #personal-information").addClass("hidden-slide");
      $("#cart .woocommerce-billing-fields__field-wrapper").addClass(
        "hidden-slide"
      );
      $("#cart nav a").removeClass("active");
      $("#cart nav a:nth-child(3)").addClass("active");
    });
    $("#cart #payment").prepend("<h4>Payment Confirmation</h4>");

    $("#cart .cont, .cont-2").click(function () {
      document.getElementsByClassName("woocommerce")[0].scrollIntoView({
        behavior: "smooth",
      });
    });
  }, 1000);

  $(
    "#cart .referral, .personal-information, #billing_first_name_field, #billing_last_name_field, #billing_phone_field, #billing_email_field, #billing_company_field"
  ).wrapAll("<div id='personal-information'></div>");

  $("#cart #personal-information").append(
    "<button class='btn cont'>CONTINUE</button>"
  );

  $("<h4 class='personal-information'>Personal Information</h4>").insertBefore(
    $("#cart #billing_first_name_field")
  );

  $("#cart nav a:nth-child(1)").click(function (e) {
    e.preventDefault();
    $("#cart #personal-information").removeClass("hidden-slide");
    $("#cart .woocommerce-billing-fields__field-wrapper").addClass(
      "hidden-slide"
    );
    $("#cart .woocommerce-billing-fields #payment").addClass("hidden-slide");
    $("#cart nav a").removeClass("active");
    $("#cart nav a:nth-child(1)").addClass("active");
  });

  $("#cart nav a:nth-child(2), #cart button.cont").click(function (e) {
    e.preventDefault();
    $("#cart #personal-information").addClass("hidden-slide");
    $("#cart .woocommerce-billing-fields__field-wrapper").removeClass(
      "hidden-slide"
    );
    $("#cart .woocommerce-billing-fields #payment").addClass("hidden-slide");
    $("#cart nav a").removeClass("active");
    $("#cart nav a:nth-child(2)").addClass("active");
  });

  if ($("body").hasClass("woocommerce-checkout")) {
    $("#cart .woocommerce-cart-form__cart-item .lower-wrapper p").each(
      function () {
        var text = $(this).text();
        $(this).html(text.replace(",", "</br>"));
      }
    );
  }

  var findCheckout = setInterval(() => {
    if ($(".woocommerce-terms-and-conditions-checkbox-text").length) {
      $(".woocommerce-terms-and-conditions-checkbox-text a").click(function (
        e
      ) {
        e.preventDefault();
        $(".place-order .overlay").toggleClass("scale");
        clearInterval(findCheckout);
      });

      $(".content .header").toggle(
        function () {
          if ($(window).width() >= 768) {
            $(".content").css("max-height", "44px");
          } else {
            $(".content").css("max-height", "52px");
          }

          $(".content header i").removeClass("fa-flip-vertical");
          $(this).parent().css("max-height", "100%");
          $(this).find("i").addClass("fa-flip-vertical");
        },
        function () {
          if ($(window).width() >= 768) {
            $(this).parent().css("max-height", "44px");
          } else {
            $(this).parent().css("max-height", "52px");
          }

          $(this).find("i").removeClass("fa-flip-vertical");
        }
      );
      $(".close-terms").click(function () {
        $(".place-order .overlay").removeClass("scale");
      });
      $("#cart .place-order .container .content a").click(function () {
        window.open($(this).attr("href"), "_blank");
      });
    }
  }, 5000);

  $(".order-modal .close-modal").click(function () {
    $(".order-modal").fadeOut();
  });

  $("#schedule-banner").click(function () {
    href = $(this).find("a").attr("href");
    window.location.href = href;
  });

  $("#scheduler .row-1 span").click(function () {
    $("#scheduler .calendar-slider .slick-dots li:first-of-type").click();
  });
  $("#scheduler .row-2 span").click(function () {
    $("#scheduler .calendar-slider .slick-dots li:nth-child(2)").click();
  });
  $("#scheduler .row-3 span").click(function () {
    $("#scheduler .calendar-slider .slick-dots li:last-of-type").click();
  });

  $("#scheduler ul#month-list li").click(function () {
    $("#scheduler ul#month-list li").removeClass("active");
    $(this).addClass("active");
    $("#my-calendar-month").val($(this).attr("id"));
    $(".my-calendar-date-switcher form").submit();
    sessionStorage.setItem("calendarSubmit", "true");
  });

  $("#scheduler #calendar-container .tag").click(function (e) {
    e.preventDefault();
    $("#scheduler ul#month-list li.active").next().click();
  });

  $(".year-wrapper #year").change(function () {
    $("#my-calendar-year").val($(this).val());
    $(".my-calendar-date-switcher form").submit();
  });

  $("#selectedYear").prepend($("#my-calendar-year").val());

  $(".year-wrapper #year").val($("#my-calendar-year").val());

  $("#currentMonth").text($(".my-calendar-month").text());

  if (
    $("#currentMonth").text() === "January " ||
    $("#currentMonth").text() === "February " ||
    $("#currentMonth").text() === "April " ||
    $("#currentMonth").text() === "May " ||
    $("#currentMonth").text() === "June " ||
    $("#currentMonth").text() === "August " ||
    $("#currentMonth").text() === "October " ||
    $("#currentMonth").text() === "November "
  ) {
    $("#scheduler #calendar-container .tag").addClass("hidden");
  }

  $("#month-list li#" + $("#my-calendar-month").val()).addClass("active");
  $(
    "#calendar-container ul.mobile li#" + $("#my-calendar-month").val()
  ).addClass("active");

  $(".nextmonth, .past-date").removeClass("mcat_group-1");
  $(".nextmonth, .past-date").removeClass("mcat_group-2");
  $(".nextmonth, .past-date").removeClass("mcat_other");

  $(".row-1 #keyTitle").text($(".mcat_group-1 #short-title").first().text());

  $(".row-1 #keyTime strong").text($(".mcat_group-1 #time").first().text());

  $(".row-1 #keyDates").text($(".mcat_group-1 #dates").first().text());

  $(".row-2 #keyTitle").text($(".mcat_group-2 #short-title").first().text());

  $(".row-2 #keyTime strong").text($(".mcat_group-2 #time").first().text());

  $(".row-2 #keyDates").text($(".mcat_group-2 #dates").first().text());

  $(".row-3 #keyTitle").text($(".mcat_other #short-title").first().text());

  $(".row-3 #keyTime strong").text($(".mcat_other #time").first().text());

  $(".row-3 #keyDates").text($(".mcat_other #dates").first().text());

  $(".calendar-slider .slide-1 #title").text(
    $(".mcat_group-1 #title").first().text()
  );

  $(".calendar-slider .slide-1 #duration").text(
    $(".mcat_group-1 #duration").first().text()
  );

  $(".calendar-slider .slide-1 #full-description").text(
    $(".mcat_group-1 #full-description").first().text()
  );

  $(".calendar-slider .slide-2 #title").text(
    $(".mcat_group-2 #title").first().text()
  );

  $(".calendar-slider .slide-2 #duration").text(
    $(".mcat_group-2 #duration").first().text()
  );

  $(".calendar-slider .slide-2 #full-description").text(
    $(".mcat_group-2 #full-description").first().text()
  );

  $(".calendar-slider .slide-3 #title").text(
    $(".mcat_other #title").first().text()
  );

  $(".calendar-slider .slide-3 #duration").text(
    $(".mcat_other #duration").first().text()
  );

  $(".calendar-slider .slide-3 #full-description").text(
    $(".mcat_other #full-description").first().text()
  );

  $(".mcat_group-1 .btn").first().clone().appendTo(".calendar-slider .slide-1");

  $(".mcat_group-2 .btn").first().clone().appendTo(".calendar-slider .slide-2");

  $(".mcat_other .btn").first().clone().appendTo(".calendar-slider .slide-2");

  if ($(".mcat_group-1")[0]) {
    $(
      "#scheduler .minor .row-1, #scheduler .calendar-slider, .calendar-slider .slide-1"
    ).css("display", "flex");
  } else {
    $(".calendar-slider .slide-1").remove();
  }

  if ($(".mcat_group-2")[0]) {
    $(
      "#scheduler .minor .row-2, #scheduler .calendar-slider, .calendar-slider .slide-2"
    ).css("display", "flex");
  } else {
    $(".calendar-slider .slide-2").remove();
  }

  if ($(".mcat_other")[0]) {
    $(
      "#scheduler .minor .row-3, #scheduler .calendar-slider, .calendar-slider .slide-3"
    ).css("display", "flex");
  } else {
    $(".calendar-slider .slide-3").remove();
  }

  if ($(".mcat_group-1")[0] && $(".mcat_group-2")[0] && $(".mcat_other")[0]) {
    $("#calendar-container").addClass("has-three-groups");
  } else if ($(".mcat_group-1")[0] && $(".mcat_other")[0]) {
    $("#calendar-container").addClass("has-g1-other");
  } else if ($(".mcat_group-2")[0]) {
    $("#calendar-container").addClass("has-g2");
  } else if ($(".mcat_group-1")[0]) {
    $("#calendar-container").addClass("has-g1");
  } else if ($(".mcat_other")[0]) {
    $("#calendar-container").addClass("has-other");
  } else {
    $("#scheduler .minor .no-programs").css("display", "flex");
  }

  $(".discovery").click(function (e) {
    e.preventDefault();
    $(".livesite-schedule")[0].click();
  });

  $("#banner .slide-container").slick({
    fade: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 4000,
    speed: 1000,
  });

  $("#all-posts .widget ul").slick({
    infinite: false,
    slidesPerRow: 3,
    rows: 2,
    prevArrow: '<i class="fas fa-arrow-left prev"></i>',
    nextArrow: '<i class="fas fa-arrow-right next"></i>',
    dots: true,
  });

  $(".books-slider").slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    prevArrow: '<i class="fas fa-arrow-left prev"></i>',
    nextArrow: '<i class="fas fa-arrow-right next"></i>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
    ],
  });

  $(".slider-container").slick({
    infinite: false,
    slidesToShow: 1,
    centerMode: true,
    slideToScroll: 1,
    slidesToShow: 3,
    arrows: false,
    dots: true,
    focusOnSelect: true,
    variableWidth: true,
    asNavFor: ".video-slider",
  });

  $(".video-slider").slick({
    infinite: false,
    prevArrow: '<i class="fas fa-arrow-left  prev"></i>',
    nextArrow: '<i class="fas fa-arrow-right  next"></i>',
    asNavFor: ".slider-container",
    responsive: [
      {
        breakpoint: 500,
        settings: {
          prevArrow:
            '<div class="arrow-wrap prev"><i class="fas fa-arrow-left "></i><p>PREVIOUS VIDEO</p></div>',
          nextArrow:
            '<div class="arrow-wrap next"><i class="fas fa-arrow-right"></i><p>NEXT VIDEO</p></div>',
        },
      },
    ],
  });

  $(".calendar-slider").slick({
    infinite: false,
    centerMode: true,
    slidesToShow: 1,
    centerPadding: "0px",
    dots: true,
    arrows: false,
  });

  $("#scheduler-slider.programs-section .container").slick({
    infinite: false,
    centerMode: true,
    slidesToShow: 3,
    variableWidth: true,
    initialSlide: 1,
    focusOnSelect: true,
    prevArrow: '<i class="fas fa-arrow-left prev"></i>',
    nextArrow: '<i class="fas fa-arrow-right next"></i>',
  });

  $("#video-modal .slick-arrow").click(function () {
    $("video").trigger("pause");
  });

  let count = 0;

  if ($(".mcat_group-1")[0]) {
    count++;
  }

  if ($(".mcat_group-2")[0]) {
    count++;
  }

  if ($(".mcat_other")[0]) {
    count++;
  }

  if (count >= 2) {
    $("#scheduler .calendar-slider .slick-dots").css("display", "flex");
  }

  $("#myths .slider-container .slick-track").mouseenter(function () {
    $("#myths").removeClass("offset");
  });

  $("#myths .slick-dots li").click(function () {
    $("#myths").removeClass("offset");
  });

  // MEDIA QUERY 1024

  if ($(window).width() <= 1024 && $(window).width() > 768) {
    $("section, nav .nav-minor, #top-nav").click(function () {
      $("nav .sub-menu").fadeOut(200);
    });
    $("ul.menu:first-child > li a").click(function (e) {
      $("nav .sub-menu").fadeOut(200);
      if ($(e.target).parent().find(".sub-menu").length) {
        e.preventDefault();
        if ($(this).parent().find(".sub-menu").is(":visible")) {
          $(this).parent().find(".sub-menu").fadeOut(200);
        } else {
          $(this).parent().find(".sub-menu").fadeIn();
        }
      }
    });
  }

  // MEDIA QUERY 768

  if ($(window).width() <= 768) {
    $(".open-nav").click(function () {
      if ($(".show-nav").hasClass("toggle")) {
        $(".show-nav")
          .animate(
            {
              maxHeight: "0",
            },
            700
          )
          .removeClass("toggle");
        $(".sub-menu").animate(
          {
            maxHeight: "0",
          },
          700
        );
        $("li a").removeClass("toggle");
      } else {
        $(".show-nav")
          .animate({
            maxHeight: "800px",
          })
          .addClass("toggle");
      }
    });
    $("form .orig").focus(function () {
      $("html, body").addClass("no-scroll");
    });
    $("form .orig").focusout(function () {
      $("html, body").removeClass("no-scroll");
    });
    $("ul.menu:first-child > li a").click(function (e) {
      if ($(e.target).parent().find(".sub-menu").length) {
        e.preventDefault();
        $(".sub-menu").animate(
          {
            maxHeight: "0",
          },
          700
        );
        if ($(this).hasClass("toggle")) {
          $(this).removeClass("toggle").parent().find(".sub-menu").animate(
            {
              maxHeight: "0",
            },
            700
          );
        } else {
          $("li a").removeClass("toggle");
          $(this).addClass("toggle").parent().find(".sub-menu").animate(
            {
              maxHeight: "500px",
            },
            700
          );
        }
      }
    });

    $(".open-search").click(function () {
      if ($("nav#mobile-nav #ajaxsearchlite2").width() === 0) {
        $("nav#mobile-nav #ajaxsearchlite2").animate({
          width: "65%",
        });
        $("form .orig").focus();
      } else {
        $("nav#mobile-nav #ajaxsearchlite2").animate({
          width: "0",
        });
        $("html, body").removeClass("no-scroll");
      }
    });

    $(window).scroll(function () {
      if ($(this).scrollTop() > 90) {
        $("#mobile-nav #logo").addClass("scale-logo");
        $("#lower-nav").addClass("sticky");
        $("nav#mobile-nav").css("margin-bottom", "92.2px");
        $("#lower-nav .inner form input").css("height", "48px");
      } else {
        $("#mobile-nav #logo").removeClass("scale-logo");
        $("#lower-nav").removeClass("sticky");
        $("nav#mobile-nav").css("margin-bottom", "0");
        $("#lower-nav .inner form input").css("height", "62px");
      }
    });

    $(".slide-container, #all-posts .widget ul").slick("unslick");

    $("#faq .row").click(function () {
      $("#faq .col.answers").insertAfter($(this));
      // $("#faq .col.answers")[0].scrollIntoView({
      //   behavior: "smooth",
      //   inline: "center",
      //   block: "center"
      // });
    });

    $("#product .major header a").click(function () {
      window.location = $(this).attr("href");
    });

    $("#programs .row-container .row").click(function () {
      $(".program-display")[0].scrollIntoView({
        behavior: "smooth",
        block: "center",
        inline: "center",
      });
    });
  }
});

jQuery(document).ready(function ($) {
  $("form").attr("autocomplete", "off");
  $(
    "#contact input:not(.btn):not(.qty), .woocommerce-checkout input:not(.btn):not(.qty)"
  ).val("");
});
