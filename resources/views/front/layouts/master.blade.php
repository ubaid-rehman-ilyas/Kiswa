<!DOCTYPE html>
<html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="robots" content="nofollow, noindex">
<title>Kiswa</title>
<link rel="icon" type="image/x-icon" href="{{ asset('front') }}/assets/22.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"> <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<style> /* .sec{z-index:10;max-width:100vw;position:relative}.sec.s-hover-text{flex-direction:column;justify-content:center;align-items:center;width:100%;padding-top:0;padding-bottom:0;display:flex;overflow:hidden}.follow__title--wrap{z-index:10;flex-flow:column wrap;place-content:center;align-items:center;width:100%;min-height:120vh;margin-left:auto;margin-right:auto;display:flex;position:relative}.div-block-96{flex-direction:row;justify-content:space-between;align-items:center;width:100%;max-width:1920px;margin-left:auto;margin-right:auto;display:flex}.resort__btn.in--rooms{position:absolute;bottom:25vh}.w-inline-block{max-width:100%}.follow__title{z-index:10;color:var(--dim-grey-4);text-align:center;flex-direction:column;justify-content:center;align-items:center;width:33.3333%;padding-top:2vh;padding-bottom:2vh;font-family:Georgia,'Times New Roman',Times,serif;font-weight:400;transition:letter-spacing .5s,color .3s}.w-inline-block{max-width:100%;display:inline-block}.follow__title--h{z-index:10;justify-content:center;align-items:center;font-size:6em;line-height:1.2;position:relative}.follow__bg{opacity:0;object-fit:cover;flex-direction:column;justify-content:center;align-items:center;width:40em;max-width:none;height:60vh;margin:auto;display:flex;position:absolute;inset:0;overflow:hidden}.follow__bg--in{object-fit:cover;width:140%;max-width:none;height:120%;position:absolute}.btn__text{z-index:5;text-align:center;font-size:.9em;font-weight:500;position:relative}.btn__icon1.is--close{z-index:15;opacity:1;width:1.6em;display:none;position:absolute}.resort__circle.is--black{border-color:#00000042}.resort__circle{z-index:3;border:1px solid #c3aa9459;border-radius:50em;width:10em;height:4em}.resort__circle--fill{z-index:14;background-color:var(--grey);border-radius:50em;width:8em;height:8em;position:absolute}a:active,a:hover{outline:0}.resort__btn{z-index:100;white-space:nowrap;flex-direction:column;justify-content:center;align-items:center;width:10em;height:4em;padding:1em;display:flex;position:relative}@media only screen and (min-width: 1560px){body{font-size:17px}}@media only screen and (min-width: 992px) and (max-width: 1200px){p{font-size:12.48px}}#hide-scrollbar::-webkit-scrollbar{overflow-y:hidden;width:0!important;background:transparent!important}#hide-scrollbar{overflow:-moz-scrollbars-none;-ms-overflow-style:none}.follow__bg{pointer-events:none}.room__page-box{mix-blend-mode:multiply}.blended{mix-blend-mode:multiply}.blured{backdrop-filter:blur(15px);-webkit-backdrop-filter:blur(15px)}.blured-8{backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px)}.marquee{position:relative;overflow:hidden;--offset:15vh;--move-initial:calc(-25% + var(--offset));--move-final:calc(-50% + var(--offset))}.marquee__inner{width:fit-content;display:flex;position:relative;transform:translate3d(var(--move-initial),0,0);animation:marquee 10s linear infinite}.marquee span{font-size:15vh;padding:0 15vh;white-space:nowrap;color:#e7e3de;font-family:Saoltext,sans-serif;font-weight:400}#marquee--is-white span{color:#fff!important}@keyframes marquee{0%{transform:translate3d(var(--move-initial),0,0)}100%{transform:translate3d(var(--move-final),0,0)}}#pointer-events-none{pointer-events:none}img{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}input,textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:0}.drag-slider-container{overflow-x:hidden}.drag-slider-slidable{will-change:transform} */ </style>
</head> <body>
@if(session('msg') == 1)
  <script>toastr.success('{{ session("alert_data") }}');</script>
@elseif(session('msg') == 2)
  <script>toastr.error('{{ session("alert_data") }}');</script>
@endif    
@include('front.header')

@yield('content')

@include('front.footer')

    <!-- <footer></footer> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
    $("#news-slider, #news-slider-2, #news-slider-3").owlCarousel({
        items : 4,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
         pagination:false,
        autoPlay:false
    });

$(".owl-next").addClass('colored');

  $('.owl-buttons div').click(function() {
            if ($(this).hasClass('owl-next')) {
              $(this).addClass('colored'); 
              $(this).prev().removeClass('colored');
            } 
            else if ($(this).hasClass('owl-prev')) {
              $(this).addClass('colored'); 
              $(this).next().removeClass('colored');
            }
        });
  });



</script>







<script>

// const bgParallaxElements = document.querySelectorAll('.bg_parallax');
// const parentSection = document.querySelector('.home_sec_4');

// bgParallaxElements.forEach((element, index) => {
//   element.addEventListener('mouseenter', () => {
//     if (index === 0) {
//       parentSection.style.backgroundColor = '#018089';
//     } else if (index === 1) {
//       parentSection.style.backgroundColor = '#2a5f38';
//     } else if (index === 2) {
//       parentSection.style.backgroundColor = '#056582';
//     }
//   });

//   element.addEventListener('mouseleave', () => {
//     parentSection.style.backgroundColor = 'var(--primary_green)';
//   });
// });

</script>

</body>
</html>
