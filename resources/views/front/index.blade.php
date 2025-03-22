@extends('front.layouts.master')
@section('content')
    <section class="home_sec_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 main_lead_form">
                    <h1 class="home_main_txt">Book Your Package Now</h1>
                    <form>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="homeleadformlbl form-label border border-0 mb-0 ps-2 pt-2">Departure Date</label>
                            <input type="date" class="homeleadforminpt form-control pt-0 border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="homeleadformlbl form-label border border-0 mb-0 ps-2 pt-2">Number of Nights</label>
                            <input type="date" class="homeleadforminpt form-control pt-0 border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="homeleadformlbl form-label border border-0 mb-0 ps-2 pt-2">Your Name</label>
                            <input type="text" value="Name" class="homeleadforminpt form-control pt-0 border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="homeleadformlbl form-label border border-0 mb-0 ps-2 pt-2">Phone</label>
                            <input type="number" value="" placeholder="Phone" class="homeleadforminpt form-control pt-0 border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="homeleadformlbl form-label border border-0 mb-0 ps-2 pt-2">Email</label>
                            <input type="email" value="Email Address" class="homeleadforminpt form-control pt-0 border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <input type="submit" value="ENQUIRE NOW" class="homeleadforminpt form-control p-3 border border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 cr_slider">
                    <!-- carouselExampleIndicators -->
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('front')}}/assets/1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('front')}}/assets/1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('front')}}/assets/1.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>
                      </div>
                </div>
            </div>
    </section>

    <section class="home_sec_2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="scroll_highlight_txt">
                        Kiswatravel resources to enhance your spiritual <br> journey, helping you connect deeply with your faith <br> during your Umrah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    

    <section class="home_sec_2_2">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{asset('front')}}/assets/2.png" alt="" class="Atol and ayta">
                    <h3 class="sec3_heading py-3 text-uppercase">Atol & Ayta</h3>
                    <p class="sec3_p_txt">No. 152879 we are z and ayta trusted partnered since 2018</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('front')}}/assets/3.png" alt="" class="Zero">
                    <h3 class="sec3_heading py-3 text-uppercase">Zero</h3>
                    <p class="sec3_p_txt">Zero Hidden Charges</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('front')}}/assets/4.png" alt="" class="Satisfied">
                    <h3 class="sec3_heading py-3 text-uppercase">Satisfied</h3>
                    <p class="sec3_p_txt">We have served more than 845<br> customers</p>
                </div>
            </div>
        </div>
    </section>
    

    <section class="home_sec_3 py-5">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-center fp">Featured Packages</h2>
                <div class="viewall_3pkg px-3">
                  <p>3 Stars Umrah Packages</p>
                  <p class="sec_3_vap">View all packages</p>
                </div>
              </div>
              <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/5.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">14 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>


                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/6.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">21 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">2.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/7.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">24 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">4.500 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/8.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">29 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                </div>

                <div class="hrline text-center">
                  <hr>
                </div>

              </div>








              <div class="col-md-12">
                <div id="news-slider-2" class="owl-carousel">
                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/5.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">14 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>


                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/6.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">21 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">2.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/7.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">24 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">4.500 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/8.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">29 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                </div>

                <div class="hrline text-center">
                  <hr>
                </div>

              </div>









              <div class="col-md-12">
                <div id="news-slider-3" class="owl-carousel">
                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/5.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">14 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>


                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/6.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">21 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">2.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/7.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">24 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">4.500 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/8.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">29 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                      <img src="{{asset('front')}}/assets/9.png" alt="">
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">10 Days Umrah Package December for 2025 </a>
                      </h3>
                      <span class="post-date">1.899 € <sup>Per person</sup></span>
                      <a href="#" class="read-more"> <img src="{{asset('front')}}/assets/Layer_1.svg" alt="Stars"> 3.0 </a>
                        <div class="clearfix pb-3"></div>
                      <button class="btn btn-sm form-control book_now ctabutton py-2">BOOK NOW</button>
                    </div>
                  </div>

                </div>

                <div class="text-center py-4">
                  <button class="btn py-2 view_all_pro_aftr_slider">VIEW ALL PACKAGES</button>
                </div>

              </div>
            </div>
          </div>
        
    </section>



    <section class="home_sec_4">
      <div class="container-fluid">
          <div class="row abc">
            <div class="col-md-4 bg_parallax">
                <h3>CUSTOMIZE</h3>
            </div>
            <div class="col-md-4 bg_parallax">
                <h3>UMRAH</h3>
            </div>
            <div class="col-md-4 bg_parallax">
                <h3>PACKAGES</h3>
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


<style>
  





/* .ziarat_txt_year {
  position: relative;
  transition: opacity .5s ease-in-out;
}

.ziarat_txt_year:nth-child(2):before {
  top: 1%;
}
.ziarat_txt_year:nth-child(3):before {
  margin-top: 50px;
}
.ziarat_txt_year:nth-child(4):before {
  bottom: -50px;
}
.ziarat_txt_year:nth-child(5):before {
    bottom: 72px;
}

.ziarat_txt_year::before {
  content: "";
  display: block;
  position: absolute;
  width: 30%;
  height: 415px;;
  right: 15%;
  z-index: 1;
  background-image: url('{{asset('front')}}/assets/23.png');
  background-size: cover;
  background-position: center;
  opacity: 1;
  transition: opacity .5s ease-in-out, background-image .5s ease-in-out;
}

.ziarat_txt_year:hover::before {
  opacity: 1;
  background-image: url('{{asset('front')}}/assets/23.png');
} */



</style>

<section class="home_sec_6">
  <div class="container-fluid">
    <div class="row manage_padding">
      <div class="col-md-12"> <h3 class="ex_mu_pkg">Explore Multiple Packages</h3> </div>
 
      <div class="ziarat_txt_year zty1">
          <div class="ziarat_txt_left">
            <h4>Zayarat</h4>
            <p>No. of Days 7 &nbsp;&nbsp; | &nbsp;&nbsp; Makkah Nights Stay (5 days) &nbsp;&nbsp; | &nbsp;&nbsp; Madina Nights Stay (8 days)</p>
          </div>
          <div class="ziarat_txt_right">
            <h4>2025</h4>
          </div>
      </div>

      <div class="ziarat_txt_year">
        <div class="ziarat_txt_left">
          <h4>Family Umrah </h4>
          <p>No. of Days 15 &nbsp;&nbsp; | &nbsp;&nbsp; Makkah Nights Stay (8 days) &nbsp;&nbsp; | &nbsp;&nbsp; Madina Nights Stay (7 days)</p>
        </div>
        <div class="ziarat_txt_right">
          <h4>2026</h4>
        </div>
    </div>

    <div class="ziarat_txt_year">
      <div class="ziarat_txt_left">
        <h4>5 Star Umrah Packages</h4>
        <p>No. of Days 25 &nbsp;&nbsp; | &nbsp;&nbsp; Makkah Nights Stay (13 days) &nbsp;&nbsp; | &nbsp;&nbsp; Madina Nights Stay (12 days)</p>
      </div>
      <div class="ziarat_txt_right">
        <h4>2025</h4>
      </div>
  </div>
  <div class="ziarat_txt_year">
          <div class="ziarat_txt_left">
            <h4>Customized Your Umrah </h4>
            <p>No. of Days 25 &nbsp;&nbsp; | &nbsp;&nbsp; Makkah Nights Stay (13 days) &nbsp;&nbsp; | &nbsp;&nbsp; Madina Nights Stay (12 days)</p>
          </div>
          <div class="ziarat_txt_right">
            <h4>2027</h4>
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