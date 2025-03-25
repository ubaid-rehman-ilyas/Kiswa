@extends('front.layouts.app')
@section('content-two')
      <section class="pro_det_sec_1">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <img src="{{ $package->images->first() ? asset('packages/' . $package->images->first()->image_path) : asset('front/assets/default.png') }}" alt="Product" class="img-fluid mb-3 product-image" id="mainImage">
                  <div class="d-flex justify-content-between">
                     @foreach($package->images as $image)
                     <img src="{{asset('packages/' . $image->image_path)}}" alt="Thumbnail 1" class="thumbnail" onclick="changeImage(event, this.src)">
                     <!-- <img src="{{asset('front')}}/assets/Rectangle-471.png" alt="Thumbnail 1" class="thumbnail active" onclick="changeImage(event, this.src)"> -->
                      @endforeach
                  </div>
               </div>
               <div class="col-md-6 product_detail_box">
                  <div class="post-slide_pkg">
                     <div class="post-content_pkg">
                        <button href="javascript:;" class="hotselling">HOT SELLING</button> <br>
                        <span class="post-date pkgnoofday">NO. OF DAYS {{$package->no_of_days}}</span>
                        <!-- <a href="#" class="read-more eight_review"><img src="{{asset('front')}}assets/Frame193.png" alt=""> 3.0 stars (8 Reviews) </a> -->
                        <div class="clearfix pb-5"></div>
                        <h4>{{$package->title}}</h4>
                        <p class="pkg-details">{{$package->details}}</p>
                        <span class="post-date price">{{$package->price}} € <sup>Per person</sup></span>
                        <a href="#" class="read-more"> DROP AN EMAIL</a>
                        <div class="clearfix">
                           <hr class="m-0">
                        </div>
                        <div class="col-sm-12 text-center d-flex internal_12_6_by_6">
                           <div class="six_n_six">
                              <p class="pro_dtl_noofnights forafter">{{$package->makkah_nights}}</p>
                              <p class="pro_dtl_makkanight">MAKKAH  NIGHT</p>
                              <hr>
                              <p class="pro_dtl_hotel">{{$package->makkah_hotel}}</p>
                              <hr>
                           </div>
                           <div class="six_n_six">
                              <p class="pro_dtl_noofnights">{{$package->madinah_nights}}</p>
                              <p class="pro_dtl_makkanight">MADINA  NIGHT</p>
                              <hr>
                              <p class="pro_dtl_hotel">{{$package->madinah_hotel}}</p>
                              <hr>
                           </div>
                        </div>
                        <div class="col-sm-12 internal_12_6_by_6 pt-3">
                           <button class="btn btn-sm form-control book_now ctabutton">BOOK NOW</button>
                           <button class="btn btn-sm form-control book_now ctabutton">CALL US</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="product_detail_sec_2">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2>Accommodation <br> Features</h2>
               </div>
               <div class="pd_box pro_dtl_sec_ul_li_1 clsforpdng">
                  <h3>Hotel in Makkah</h3>
                  <h5>{{$package->makkah_hotel}}</h5>
                  <ul>
                     <li>With just a 5-minute drive from the holy Al Masjid Al Haram, the Dar Al Eiman Al Sud offers a ravishing stay away from home while you're on your holy tour in Makkah.</li>
                     <hr>
                     <li>The hotel offers furnished rooms with simple decor, 24-hour room service, flat-screen TV, a fridge and a wardrobe. Guests staying at the hotel can refresh themselves at the private bathroom, equipped with a shower and other amenities.</li>
                     <hr>
                     <li>Al Azizia District is 5 minutes by car from Dar Al Eiman Al Sud. King Abdul Aziz Jeddah Airport is a 75-minute drive away. Free private parking is possible on site.</li>
                  </ul>
               </div>
               <div class="pd_box clsforpdng">
                  <img src="{{asset('front')}}/assets/Rectangle533.png" alt="" class="img-fluid">
               </div>
               <div class="pd_box clsforpdng">
                  <img src="{{asset('front')}}/assets/Rectangle589.png" alt="" class="img-fluid">
               </div>
               <div class="pd_box pro_dtl_sec_ul_li_1 pro_dtl_sec_ul_li_2 clsforpdng">
                  <h3>Hotel in Madinah</h3>
                  <h5>{{$package->madinah_hotel}}</h5>
                  <ul>
                     <li>Just a 5-minute drive from the holy Masjid Al Nabawi (SA), Al Mukhtara International Hotel offers air-conditioned rooms. It has a 24-hour front desk and an elevator.</li>
                     <hr>
                     <li>Daily Housekeeping, Ironing Service (additional charge), Dry Cleaning (additional charge), Laundry (additional charge), 24-Hour Front Desk, Room Service</li>
                     <hr>
                     <li>Paid WiFi, Air Conditioning, Elevator, Family Rooms, Facilities for Disabled Guests, Non-smoking Rooms.</li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="product_detail_sec_3">
         <div class="col-md-12 pd_3_nup12n">
            <h2>Package Details</h2>
            <h5>{{$package->title}} ({{$package->no_of_days}} NIGHTS)</h5>
         </div>
         <div class="col sec5col2">
            <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                     PACKAGE DETAILS
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>{{$package->details}}</p>
                     </div>
                  </div>
               </div>
               <!-- <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     One more tab for any further information
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>You can have ashes processed into various types of jewelry such as rings, necklaces, bracelets or pendants. We offer the possibility to store a small amount of ashes discreetly in the jewelry, usually in a special</p>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
 <script>
    function changeImage(event, src) {
            document.getElementById('mainImage').src = src;
            document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
            event.target.classList.add('active');
        }
</script>     
@endsection