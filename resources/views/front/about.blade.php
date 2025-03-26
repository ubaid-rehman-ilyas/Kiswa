@extends('front.layouts.master')
@section('content')

    <section class="about_sec_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="width_margin_center">
                       <h1 class="about_main_heading" id="banner_heading">{{$record->banner_heading??''}}</h1>
                       <p class="about_main_para">{{$record->banner_text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about_sec_2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"> <p class="about_word">{{$record->heading}}</p> </div>
                <div class="col-md-3"> <h2 class="o_story" id="sub_heading">{{$record->sub_heading}}</h2> </div>
                <div class="col-md-5 offset-md-1 about_sec_2_para_txt"> 
                <p>{{$record->text}}</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="home_sec_6">
  <div class="container-fluid">
    <div class="row manage_padding picwillnotdisplay">
      <div class="col-md-12"> <h3 class="ex_mu_pkg" id="heading_two">{{$record->heading_two}}</h3> </div>
 
      <div class="ziarat_txt_year zty1">
          <div class="ziarat_txt_left">
            <h4>Clients</h4>
            <p>Over 200 satisfied clients trust our expertise and exceptional services.</p>
          </div>
          <div class="ziarat_txt_right">
            <h4>200+</h4>
          </div>
      </div>

      <div class="ziarat_txt_year">
        <div class="ziarat_txt_left">
          <h4>Success Stories</h4>
          <p>We've successfully completed over 92% customers, delivering outstanding results every time.</p>
        </div>
        <div class="ziarat_txt_right">
          <h4>92%</h4>
        </div>
    </div>

    <div class="ziarat_txt_year">
      <div class="ziarat_txt_left">
        <h4>Success Stories</h4>
        <p>Join our community of 1 million loyal followers and be part of something extraordinary</p>
      </div>
      <div class="ziarat_txt_right">
        <h4>1 Mio</h4>
      </div>
  </div>
  <div class="ziarat_txt_year">
      <div class="ziarat_txt_left">
        <h4>Our Team</h4>
        <p>Each member is a driving force, contributing unique skills, expertise, and passion to our journey.</p>
      </div>
      <div class="ziarat_txt_right">
        <h4>20+</h4>
      </div>
    </div>
      
      
    </div>
  </div>
</section>
    
    
    
    <section class="about_sec_2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"> <p class="about_word">{{$record->heading}}</p> </div>
                <div class="col-md-3"> <h2 class="o_story">{{$record->sub_heading_two}}</h2> </div>
                <div class="col-md-5 offset-md-1 about_sec_2_para_txt"> 
                <p>{{$record->text_two}}</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about_sec_3">
        <div class="container-fluid">
            <div class="row d-flex flex-row-reverse">
                <div class="col-md-3 col-sm-4 mb-2"> 
                    <div class="img-box"><img src="{{asset('front')}}/assets/about-3.png" alt="Ahana Ali" class="img-fluid"> </div>
                        <div class="project_co">
                        <p class="about_pc">Project Coordinator</p>
                        <h4>Zameer Tori</h4>
                        <p class="aboutpco">Proactive organizer and communicator, driving project success through meticulous planning and seamless coordination.</p>
                        <br>
                        <div class="pattern"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 mb-2"> 
                    <div class="img-box"><img src="{{asset('front')}}/assets/about-2.png" alt="Ahana Ali" class="img-fluid"> </div>
                    <div class="project_co">
                        <p class="about_pc">Project Coordinator</p>
                        <h4>Benson Olwa</h4>
                        <p class="aboutpco">Proactive organizer and communicator, driving project success through meticulous planning and seamless coordination.</p>
                        <br>
                        <div class="pattern"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 mb-2">
                    <div class="img-box"><img src="{{asset('front')}}/assets/about-1.png" alt="Ahana Ali" class="img-fluid"> </div>
                    <div class="project_co">
                        <p class="about_pc">Project Coordinator</p>
                        <h4>Ahana Ali</h4>
                        <p class="aboutpco">Proactive organizer and communicator, driving project success through meticulous planning and seamless coordination.</p>
                        <br>
                        <div class="pattern"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let paragraph = document.getElementById("banner_heading");
    let words = paragraph.innerHTML.split(" ");

    let breakAfter = 2; // Kitne words ke baad break karna hai
    if (words.length > breakAfter) {
        words[breakAfter] += "<br>"; // Break insert karo
    }

    paragraph.innerHTML = words.join(" ");
});    
</script>    
<script>
document.addEventListener("DOMContentLoaded", function () {
    let paragraph = document.getElementById("sub_heading");
    let words = paragraph.innerHTML.split(" ");

    let breakAfter = 1; // Kitne words ke baad break karna hai
    if (words.length > breakAfter) {
        words[breakAfter] += "<br>"; // Break insert karo
    }

    paragraph.innerHTML = words.join(" ");
});    
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    let paragraph = document.getElementById("heading_two");
    let words = paragraph.innerHTML.split(" ");

    let breakAfter = 1; // Kitne words ke baad break karna hai
    if (words.length > breakAfter) {
        words[breakAfter] += "<br>"; // Break insert karo
    }

    paragraph.innerHTML = words.join(" ");
});    
</script>
@endsection

