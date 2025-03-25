<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="robots" content="nofollow, noindex">
      <title>Kiswa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
      <link rel="stylesheet" href="{{asset('front')}}/assets/css/style.css">
      <link rel="icon" type="image/x-icon" href="{{ asset('front') }}/assets/22.png">
   </head>
   <body>
    @include('front.header')
      <style>
         /* .packages_sec_1 {
         padding: 100px 0;
         }
         .packages_sec_1 .about_word {
         font-weight: 500;
         color: var(--primary_green);
         padding-bottom: 20px;
         position: relative;
         }
         .packages_sec_1 .about_word::before {
         content: '';
         display: block;
         position: absolute;
         background: #e5e5e5;
         width: 180px;
         height: 1px;
         bottom: 0;
         left: 0;
         }
         .packages_sec_1 .o_story {
         font-family: Georgia, 'Times New Roman', Times, serif;
         font-size: 80px;
         color: var(--primary_green);
         }
         .some_txt_after_o_story{
         font-size: 18px;
         color: var(--primary_green);
         font-family: "Inter", serif;
         }
         section.packages_sec_2 {
         background: var(--slide_over);
         padding: 100px 0 40px 0;
         }
         section.packages_sec_2 .packages_sec_2_form input {
         border-radius: 0;
         }
         #news-slider_r .owl-controls.clickable::after,
         #news-slider_r_1 .owl-controls.clickable::after,
         #news-slider_r_2 .owl-controls.clickable::after {
         display: none;
         }
         #news-slider_r .owl-controls .owl-buttons,
         #news-slider_1 .owl-controls .owl-buttons,
         #news-slider_2 .owl-controls .owl-buttons {
         position: absolute;
         right: 2%;
         top: -60px;
         bottom: auto;
         }
         #news-slider_r .owl-controls .owl-buttons .owl-prev:after,
         #news-slider_r_1 .owl-controls .owl-buttons .owl-prev:after,
         #news-slider_r_2 .owl-controls .owl-buttons .owl-prev:after {
         content: '';
         display: block;
         background: url(assets/pkg-aero-left1.png) no-repeat center center;
         font-size: 15px;
         font-family: Georgia, 'Times New Roman', Times, serif;
         width: 50px;
         height: 50px;
         border-radius: 100px;
         border: 1px solid #ccc;
         }
         #news-slider_r .owl-controls .owl-buttons .owl-next:after,
         #news-slider_r_1 .owl-controls .owl-buttons .owl-next:after,
         #news-slider_r_2 .owl-controls .owl-buttons .owl-next:after {
         content: '';
         display: block;
         background: url(assets/pkg-aero-right1.png) no-repeat center center;
         font-size: 15px;
         font-family: Georgia, 'Times New Roman', Times, serif;
         width: 50px;
         height: 50px;
         border-radius: 100px;
         border: 1px solid #ccc;
         }
         .packages_sec_2 form input {
         padding: 10px;
         border-radius: 2px;
         }
         .packages_sec_2 form .borderwala {
         border: 1px solid var(--primary_green);
         background-color: var(--light_grey);
         }
         .packages_sec_2 form select {
         padding: 10px;
         background-color: #F7F7FD;
         border-color: #F7F7FD;
         border-radius: 2px;
         }
         .packages_sec_2 form button {
         padding: 8px;
         border-radius: 2px;
         background-color:  var(--primary_green);
         border: 1px solid var(--primary_green);
         }
         .pkg_sec_3 .pkg_pge {
         padding-right: 120px;
         }
         #news-slider_r ul,
         #news-slider_r_1 ul,
         #news-slider_r_2 ul {
         padding-left: 15px;
         font-size: 13px;
         padding-bottom: 50px;
         color: var(--primary_green);
         }
         #news-slider_r button,
         #news-slider_r_1 button,
         #news-slider_r_2 button {
         height: 45px;
         }
         #news-slider_r .pkgnoofday,
         #news-slider_r_1 .pkgnoofday,
         #news-slider_r_2 .pkgnoofday {
         font-family: 'Inter';
         color: var(--primary_green);
         font-size: 18px;
         }
         #news-slider_r .post-content,
         #news-slider_r_1 .post-content,
         #news-slider_r_2 .post-content {
         background: #FBFBFB;
         border-radius: 15px;
         border: 1px solid #E7E7E7;
         padding: 30px 20px;
         transition: ease all .5s;
         -webkit-transition: ease all .5s;
         -moz-transition: ease all .5s;
         -o-transition: ease all .5s;
         }
         #news-slider_r .pkg-details,
         #news-slider_r_1 .pkg-details,
         #news-slider_r_2 .pkg-details {
         font-size: 17px;
         padding-bottom: 25px;
         }
         #news-slider_r h4,
         #news-slider_r_1 h4,
         #news-slider_r_2 h4 {
         font-family: 'Inter';
         color: var(--primary_green);
         font-size: 24px;
         font-weight: 700;
         }
         .ctabutton.pkgdtlbtn{
         background-color: var(--slide_over) !important;
         color: var(--primary_green);
         }
         .viewall_3pkg {
         display: flex;
         flex-direction: row;
         justify-content: space-between;
         }
         .pkg_sec_3 .viewall_3pkg p {
         font-family: Inter, serif;
         font-size: 18px;
         font-weight: 500;
         color: var(--primary_green);
         margin-bottom: 0px;
         margin-right: 150px;
         }
         .pkgcolored{ background-color: var(--light_grey) !important; }
         .post-content:hover {
         background: var(--primary_green) !important;
         color: #fff !important;
         }
         .post-content:hover .pkgnoofday, 
         .post-content:hover .post-date, 
         .post-content:hover h4, 
         .post-content:hover ul {
         color: #fff !important;
         }
         .post-content:hover .pkgnoofday, 
         .post-content:hover .post-date, 
         .post-content:hover h4, 
         .post-content:hover ul,
         .post-content:hover .read-more {
         color: #fff !important;
         }
         .post-content:hover button.book_now.ctabutton {
         background-color: #00CFBD !important;
         color: #000 !important;
         }
         .post-content:hover button.book_now.ctabutton.pkgdtlbtn {
         background-color: var(--light_grey) !important;
         }
         .post-content button.book_now.ctabutton:hover {
         background-color: #C4F44E !important;
         color: #000 !important;
         } */
      </style>

@yield('content-two')

@include('front.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
      <script>
         $(document).ready(function() {
           $("#news-slider_r, #news-slider_r_1, #news-slider_r_2").owlCarousel({
              items : 3,
              itemsDesktop:[1199,3],
              itemsDesktopSmall:[980,2],
              itemsMobile : [600,1],
              navigation:true,
              navigationText:["",""],
               pagination:false,
              autoPlay:false
          });
         
         $(".owl-next").addClass('pkgcolored');
         
         $('.owl-buttons div').click(function() {
                if ($(this).hasClass('owl-next')) {
                  $(this).addClass('pkgcolored'); 
                  $(this).prev().removeClass('pkgcolored');
                } 
                else if ($(this).hasClass('owl-prev')) {
                  $(this).addClass('pkgcolored'); 
                  $(this).next().removeClass('pkgcolored');
                }
            });
         });
      </script>
   </body>
</html>