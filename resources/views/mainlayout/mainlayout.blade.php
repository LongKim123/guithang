<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Giới thiệu chung</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- venobox -->
    <link
      rel="stylesheet"
      href="{{asset('venobox/venobox.min.css')}}"
      type="text/css"
      media="screen"
    />
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- my css -->
    <link
      href="{{asset('superfish/css/superfish.css')}}"
      rel="stylesheet"
      media="screen"
    />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css-1/style.css')}}" />
    @yield('css_main')
  </head>

  <body>
    <div class="container">
      <div
        class="d-flex flex-row bd-highlight mb-3 d-flex flex-row justify-content-center"
      >
        <div class="p-1 bd-highlight">
          <img src="{{asset('photos/lotus-black.svg')}}" alt="" srcset="" />
        </div>
      </div>
    </div>

    @include('partial.menu')

    @include('partial.slider')

    @yield('category_page')
    @yield('page_con')
    

    <!-- /////////////////////////////////////////////////////////// -->
    <!-- footer -->
    @include('partial.map')
    @include('partial.footer')

  
    <!-- //////////////////////////////////////////////////////////////////////////////////// -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- wow -->
    <script src="../../WOW/dist/wow.js"></script>
    <script>
      new WOW().init();
    </script>

    <script>
      jQuery(document).ready(function () {
        jQuery("ul.sf-menu").superfish();
      });
    </script>

    <!-- collpase -->
    <script>
      $(".panel-heading")
        .parent(".panel")
        .hover(
          function () {
            $(this).children(".collapse").collapse("show");
          },
          function () {
            $(this).children(".collapse").collapse("hide");
          }
        );
    </script>

    <!-- show-more -->
    <script>
      $(document).ready(function () {
        $(".show-more").on("click", function () {
          var showless =
            'Show less<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>';
          var showmore =
            'Show more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>';

          if ($(this).text().trim() === "Show more") {
            $(this).prev().removeClass();
            $(this).prev().addClass("open");
            $(this).empty();
            $(this).append(showless);
          } else {
            $(this).prev().removeClass();
            $(this).prev().addClass("hidden");
            $(this).empty();
            $(this).append(showmore);
          }
        });
      });
    </script>
    @yield('js_main')

    <!-- show-more-1 -->
    <script>
      $(document).ready(function () {
        if ($(".panel").length > 3) {
          $(".panel:gt(2)").hide();
          $(".show-more").show();
        }
        $(".show-more-1").on("click", function () {
          $(".panel:gt(2)").toggle();

          var showless =
            'Show less<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>';
          var showmore =
            'Show more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>';

          if ($(this).text().trim() === "Show more") {
            $(this).prev().removeClass();
            $(this).prev().addClass("open");
            $(this).empty();
            $(this).append(showless);
          } else {
            $(this).prev().removeClass();
            $(this).prev().addClass("hidden");
            $(this).empty();
            $(this).append(showmore);
          }
        });
      });
    </script>
  </body>
</html>
