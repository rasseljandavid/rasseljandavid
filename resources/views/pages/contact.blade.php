@extends('layouts.app')


@section('content')
    <section style="background-image: url(assets/images/splash-image-6.jpg)" class="header-introduction-small text-center background-image">
      <div class="container vertical-middle">
        <div class="row section-head section-head-white">
          <h2>CONTACT</h2>
          <ul class="breadcrumb">
            <li><a href="/">RASSEL</a></li>
            <li><a href="#!">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section section-white text-center">
      <div class="container">
        <div class="col-md-12 text-center">
          <div class="section-head"><img src="assets/images/section-decor-black.png" width="40" alt="Divider"/>
            <p>Don't stand there lonely, you can reach out via e-mail or come to my office. I may have a lot to discuss, who knows.</p>
          </div>
        </div>
       
           <div data-os-animation="fadeIn" data-os-animation-delay="0.2s" class="col-md-4 margin-top small-screen-margin-top os-animation">
          <div class="icon-block"><i class="icon-basic-keyboard"></i>
            <h4>EMAIL</h4>
            <p><a href="mailto:rasseljandavid@gmail.com">rasseljandavid@gmail.com</a></p>
          </div>
        </div>
        <div data-os-animation="fadeIn" data-os-animation-delay="0.1s" class="col-md-4 margin-top small-screen-margin-top os-animation">
          <div class="icon-block"><i class="icon-basic-smartphone"></i>
            <h4>PHONE</h4>
            <p><a href="tel:63029463397">(02) - 946 3397</a></p>
          </div>
        </div>
         <div data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-md-4 margin-top os-animation">
          <div class="icon-block"><i class="icon-basic-flag1"></i>
            <h4>LOCATION</h4>
            <p><a href="http://maps.google.com/?q=Fil Garcia Tower, 140 Kalayaan Ave. Diliman, Quezon City Philippines" target="_blank">Fil Garcia Tower, 140 Kalayaan Ave. Diliman, Quezon City</a></p>
          </div>
        </div>
     
      </div>
      <div class="container-fluid">
        <div data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-md-12 margin-top padding-top os-animation">
          <div id="map" style="height: 500px" class="google-map"> </div>
        </div>
      </div>
    </section>
    <section class="section section-semi-white text-center">
      <div class="container">
        <div class="col-md-12 text-center">
          <div data-os-animation="fadeIn" data-os-animation-delay="0s" class="section-head os-animation">
            <h3>REACH OUT</h3><img src="assets/images/section-decor-black.png" width="40" alt="Divider"/>
            <p>You can always contact me via this contact form. I will require 1 business day to reply (at worst).</p>
          </div>
        </div>
        <div data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-md-8 col-md-offset-2 margin-top os-animation">
          <form id="contact_form" method="POST" class="contact-form">
            <input required type="text" name="name" placeholder="YOUR NAME" class="form-control"/>
            <input required  type="email" name="email" placeholder="YOUR E-MAIL" class="form-control"/>
            <textarea placeholder="YOUR MESSAGE" name="message" class="form-control"></textarea>
            <button type="submit" class="contact-form-submit">SUBMIT</button>
            <div id="messages" class="col-md-12"></div>
          </form>
        </div>
      </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAXBWuKV-9XMaG-GmZVVnAeItXgcAoK-ds"></script>
@endsection
  
