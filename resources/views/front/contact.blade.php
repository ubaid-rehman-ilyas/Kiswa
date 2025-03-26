@extends('front.layouts.master')
@section('content')
<section class="about_sec_2 contact_sec_1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <p class="about_word">{{$record->heading??"Contact Us"}}</p>
            </div>
            <div class="col-md-8">
                <h2 class="o_story" id="banner_heading">{{$record->banner_heading}}</h2>
                <p class="contact_tqbfjotld">{{$record->sub_heading}}</p>
            </div>
        </div>
    </div>
</section>
<section class="contact_sec_2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$record->section_one_heading}}</h2>
            </div>
            <form class="row contact_form" method="post" action="{{route('front.contact.submit')}}">
              @csrf
                <div class="col-md-12">
                    <h3>{{$record->form_heading}}</h3>
                </div>
                <div class="col-md-6">
                    <input type="text" name="first_name" class="form-control txt_flel" placeholder="First Name">
                </div>
                <div class="col-md-6">
                    <input type="text" name="last_name" class="form-control txt_flel" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control txt_flel" placeholder="Email">
                </div>
                <div class="col-md-6">
                    <input type="number" name="phone" class="form-control txt_flel" placeholder="Phone">
                </div>
                <div class="col-md-12">
                    <br><br>
                    <h3>{{$record->form_heading_two}}</h3>
                    <input type="text" name="subject" class="form-control txt_flel" placeholder="Subject">
                </div>
                <div class="col-md-6">
                    <h3>{{$record->form_heading_three}}</h3>
                    <label class="eym">Enter Your Message</label>  
                    <textarea name="message" class="form-control txt_flel" rows="4">Text</textarea>
                </div>
                <div class="col-md-6">
                    <h3>{{$record->form_heading_four}}</h3>
                    <label class="form-check-label eym" for="exampleCheck1"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> I would like to sign up to receive email updates from YPI. Please see our Privacy Policy</label>
                </div>
                <div class="col-md-6">
                    <p class="by_clicking">By clicking the "Submit" button below, you agree to our Privacy Policy. This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
                    <button type="submit" class="btn inquiry_btn">Submit inquire</button>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function () {
    let paragraph = document.getElementById("banner_heading");
    let words = paragraph.innerHTML.split(" ");

    let breakAfter = 3; // Kitne words ke baad break karna hai
    if (words.length > breakAfter) {
        words[breakAfter] += "<br>"; // Break insert karo
    }

    paragraph.innerHTML = words.join(" ");
});    
</script>
@endsection