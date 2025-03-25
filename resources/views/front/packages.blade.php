@extends('front.layouts.app')
@section('content-two')
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
                     @foreach($threeStarPackages as $package)
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days {{$package->no_of_days}}</span>
                           <!-- <a href="#" class="read-more pkgnoofday"> Save € 280 </a> -->
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">{{$package->price}} € <sup>Per person</sup></span>
                           <!-- <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a> -->
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">{{$package->title}}</p>
                           <h4>INCLUDE</h4>
                           {{$package->details}}
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <a href="{{route('front.packages.detail',$package->id)}}" class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</a>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="viewall_3pkg px-3">
                     <p>4 Stars Umrah Packages</p>
                     <p class="sec_3_vap">View all packages</p>
                  </div>
                  <div id="news-slider_r_1" class="owl-carousel">
                     @foreach($fourStarPackages as $package)
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days {{$package->no_of_days}}</span>
                           <!-- <a href="#" class="read-more pkgnoofday"> Save € 280 </a> -->
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">{{$package->price}} € <sup>Per person</sup></span>
                           <!-- <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a> -->
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">{{$package->title}}</p>
                           <h4>INCLUDE</h4>
                           {{$package->details}}
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <a href="{{route('front.packages.detail',$package->id)}}" class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</a>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="viewall_3pkg px-3">
                     <p>5 Stars Umrah Packages</p>
                     <p class="sec_3_vap">View all packages</p>
                  </div>
                  <div id="news-slider_r_2" class="owl-carousel">
                     @foreach($fiveStarPackages as $package)
                     <div class="post-slide">
                        <div class="post-content">
                           <span class="post-date pkgnoofday">No. of Days {{$package->no_of_days}}</span>
                           <!-- <a href="#" class="read-more pkgnoofday"> Save € 280 </a> -->
                           <div class="clearfix pb-4"></div>
                           <span class="post-date">{{$package->price}} € <sup>Per person</sup></span>
                           <!-- <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a> -->
                           <div class="clearfix pb-4"></div>
                           <p class="pkg-details">{{$package->title}}</p>
                           <h4>INCLUDE</h4>
                           {{$package->details}}
                           <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                           <a href="{{route('front.packages.detail',$package->id)}}" class="btn btn-sm form-control book_now ctabutton py-2 mt-2 pkgdtlbtn">PACKAGE DETAIL</a>
                        </div>
                     </div>
                     @endforeach
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
                     <img src="{{asset('front')}}/assets/15.png" alt="" srcset="">
                     <img src="{{asset('front')}}/assets/16.png" alt="" srcset="">
                     <img src="{{asset('front')}}/assets/17.png" alt="" srcset="">
                     <img src="{{asset('front')}}/assets/18.png" alt="" srcset="">
                     <img src="{{asset('front')}}/assets/19.png" alt="" srcset="">
                     <img src="{{asset('front')}}/assets/20.png" alt="" srcset="">
                  </marquee>
               </div>
            </div>
         </div>
      </section>
      @endsection