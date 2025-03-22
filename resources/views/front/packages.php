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
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <?php include('header.php'); ?>
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
      <section class="packages_sec_1">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4">
                  <p class="about_word">PACKAGES</p>
               </div>
               <div class="col-md-8">
                  <h2 class="o_story">Explore All Hajj <br> and Umrah<br> Packages</h2>
                  <p class="some_txt_after_o_story">The quick brown fox jumps over the lazy dog</p>
               </div>
            </div>
         </div>
      </section>
      <section class="packages_sec_2">
         <div class="container-fluid">
            <form class="row">
               <div class="col-md-3 col-sm-6 mb-2">
                  <select name="" class="form-control" placeholder="Filter by Month">
                     <option value="" selected disabled hidden>Filter by Month</option>
                     <option value="1">January</option>
                     <option value="2">February</option>
                     <option value="3">March</option>
                     <option value="4">April</option>
                     <option value="5">May</option>
                     <option value="6">June</option>
                     <option value="7">July</option>
                     <option value="8">August</option>
                     <option value="9">September</option>
                     <option value="10">October</option>
                     <option value="11">November</option>
                     <option value="12">December</option>
                  </select>
               </div>
               <div class="col-md-3 col-sm-6 mb-2">
                  <input type="text" class="form-control borderwala" placeholder="Filter by Month" onfocus="(this.type='date')" onblur="(this.type='text')">
               </div>
               <div class="col-md-3 col-sm-6 mb-2">
                  <input type="text" class="form-control" placeholder="Filter by Month" onfocus="(this.type='date')" onblur="(this.type='text')">
               </div>
               <div class="col-md-3 col-sm-6 mb-2">
                  <button type="submit" class="btn btn-primary form-control">SEARCH</button>
               </div>
            </form>
         </div>
      </section>
      <section class="pkg_sec_3 py-5">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="viewall_3pkg px-3">
                     <p>3 Stars Umrah Packages</p>
                     <p class="sec_3_vap">View all packages</p>
                  </div>
                  <div id="news-slider_r" class="owl-carousel">
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="viewall_3pkg px-3">
                     <p>3 Stars Umrah Packages</p>
                     <p class="sec_3_vap">View all packages</p>
                  </div>
                  <div id="news-slider_r_1" class="owl-carousel">
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="viewall_3pkg px-3">
                     <p>3 Stars Umrah Packages</p>
                     <p class="sec_3_vap">View all packages</p>
                  </div>
                  <div id="news-slider_r_2" class="owl-carousel">
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days 7</span>
                           <a href="#" class="read-more pkgnoofday"> Save € 280 </a>
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">1.899 € <sup>Per person</sup></span>
                           <a href="#" class="read-more"> <img src="assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">3 Star Umrah Packages 2024 Below are the details of 3 star 7 days Umrah package.</p>
                           <h4>INCLUDE</h4>
                           <ul>
                              <li>Makkah Hotels - Dar-Al-Ajayd (Similar 300m)</li>
                              <li>Madina Hotels - Al-Tayyaba Hotal (Ramada Al Hamra 250m)</li>
                              <li>Makkah Nights Stay (5 days)</li>
                              <li>Madina Nights Stay (8 days)</li>
                           </ul>
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home_sec_5">
         <div class="container">
            <div class="row">
               <div class="col sec5col1">
                  <h3 class="qwahth">Questions? We <br> are happy to<br> help</h3>
                  <p class="cup">Customized umrah package</p>
               </div>
               <div class="col sec5col2">
                  <div class="accordion" id="accordionExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           How can I incorporate ashes into a piece of jewelry?
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>You can have ashes processed into various types of jewelry such as rings, necklaces, bracelets or pendants. We offer the possibility to store a small amount of ashes discreetly in the jewelry, usually in a special</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           How long does an Umrah visa take from the USA?
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>You can have ashes processed into various types of jewelry such as rings, necklaces, bracelets or pendants. We offer the possibility to store a small amount of ashes discreetly in the jewelry, usually in a special</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           How can I get a direct flight to Saudi Arabia from the USA?
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>You can have ashes processed into various types of jewelry such as rings, necklaces, bracelets or pendants. We offer the possibility to store a small amount of ashes discreetly in the jewelry, usually in a special</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           How can I get a direct flight to Saudi Arabia from the USA?
                           </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>You can have ashes processed into various types of jewelry such as rings, necklaces, bracelets or pendants. We offer the possibility to store a small amount of ashes discreetly in the jewelry, usually in a special</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                           How can I incorporate ashes into a piece of jewelry?
                           </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>You can have ashes processed into various types of jewelry such as rings, necklaces, bracelets or pendants. We offer the possibility to store a small amount of ashes discreetly in the jewelry, usually in a special</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="ques_and_cont">
                     <p class="iyqnl">is your question not<br> listed?</p>
                     <a href="javascript:;" class="qac_us">contact us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home_sec_7">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="pnp"> Partners & Protection </h3>
               </div>
               <div class="col">
                  <marquee behavior="alternate" direction="">
                     <img src="assets/15.png" alt="" srcset="">
                     <img src="assets/16.png" alt="" srcset="">
                     <img src="assets/17.png" alt="" srcset="">
                     <img src="assets/18.png" alt="" srcset="">
                     <img src="assets/19.png" alt="" srcset="">
                     <img src="assets/20.png" alt="" srcset="">
                  </marquee>
               </div>
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
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