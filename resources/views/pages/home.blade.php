@extends('layouts.app')


@section('content')

    <div id="home-slider">
      <div class="rev_slider_wrapper header-introduction text-center">
        <div id="rev_slider_1" data-version="5.0" class="rev_slider">
          <ul>
            <li data-transition="slideoverup"><img src="assets/images/splash-image-12.jpg" alt="Slider Image" width="1920" height="1000"/>
              <div data-x="center" data-y="center" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:50;opacity:0s:400;s:400;e:Power2.easeInOut;" data-transform_out="y:+350;opacity:0s:400;s:400;e:Power2.easeInOut;" data-start="500" class="tp-caption caption-classic">
                <h2>SOFTWARE</h2><a href="/services" class="btn btn-link">DEVELOPMENT</a>
              </div>
            </li>
            <li data-transition="slideoverup"><img src="assets/images/splash-image-1.jpg" alt="Slider Image" width="1920" height="1000"/>
              <div data-x="center" data-y="center" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:50;opacity:0s:400;s:400;e:Power2.easeInOut;" data-transform_out="x:-150;opacity:0s:400;s:400;e:Power2.easeInOut;" data-start="500" class="tp-caption caption-bordered">
                <h2>BUSINESS</h2><a href="/projects" class="btn btn-link">PROJECTS</a>
              </div>
            </li>
            <li data-transition="slideoverup"><img src="assets/images/splash-image-11.jpg" alt="Slider Image" width="1920" height="700"/>
              <div data-x="center" data-y="middle" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:50;opacity:0s:400;s:400;e:Power2.easeInOut;" data-transform_out="opacity:0s:400;s:400;e:Power2.easeInOut;" data-start="500" class="tp-caption caption-classic">
                <h2>PASSION</h2><img src="assets/images/section-decor-white.png" width="40" alt="Divider"/>
                <p> Welcome to my studio. I'm a passionated person, making high quality software products designed to make your life easier.</p><a href="/contact" class="btn btn-white">GET A QUOTE</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <section class="section section-white">
      <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
          <ul class="masonry-wrap">
            <li data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-lg-6 os-animation">
              <div class="masonry-item background-color-1"><img src="assets/images/portfolio-big-1.jpg" alt="Portfolio-image"/>
                <div class="masonry-item-overlay">
                  <div class="masonry-item-overlay-inner">
                    <h2>WEB</h2>
                    <p>DEVELOPMENT</p>
                  </div>
                </div>
              </div>
            </li>
            <li data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-lg-6 os-animation">
              <div class="masonry-item background-color-4"><img src="assets/images/portfolio-1.jpg" alt="Portfolio-image"/>
                  <div class="masonry-item-overlay">
                    <div class="masonry-item-overlay-inner">
                      <h2>ECOMMERCE</h2>
                    </div>
                  </div></div>
            </li>
            <li data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-lg-6 os-animation" style="margin-top: 7px;">
              <div class="masonry-item background-color-2"><img src="assets/images/portfolio-2.jpg" alt="Portfolio-image"/>
                  <div class="masonry-item-overlay">
                    <div class="masonry-item-overlay-inner">
                      <h2>SaaS</h2>
                      <p>Software as a Service</p>
                    </div>
                  </div></div>
            </li><!-- 
            <li data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-lg-12 os-animation">
              <div class="masonry-item background-color-1"><a href="portfolio-single.html"><img src="assets/images/portfolio-big-2.jpg" alt="Portfolio-image"/>
                  <div class="masonry-item-overlay">
                    <div class="masonry-item-overlay-inner">
                      <h2>INNOVATION</h2>
                    </div>
                  </div></a></div>
            </li> -->
            <li data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-lg-6 os-animation">
              <div class="masonry-item background-color-2"><img src="assets/images/portfolio-big-3.jpg" alt="Portfolio-image"/>
                  <div class="masonry-item-overlay">
                    <div class="masonry-item-overlay-inner">
                      <h2>WEB</h2>
                      <p>DESIGN</p>
                    </div>
                  </div></div>
            </li>
            <li data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-lg-6 os-animation">
              <div class="masonry-item background-color-4"><img src="assets/images/portfolio-3.jpg" alt="Portfolio-image"/>
                  <div class="masonry-item-overlay">
                    <div class="masonry-item-overlay-inner">
                      <h2>DYNAMIC</h2>
                    </div>
                  </div></div>
            </li>
            <li data-os-animation="fadeIn" data-os-animation-delay="0s" class="col-lg-6 os-animation" style="margin-top: 7px;">
              <div class="masonry-item background-color-3"><img src="assets/images/portfolio-big-4.jpg" alt="Portfolio-image"/>
                  <div class="masonry-item-overlay">
                    <div class="masonry-item-overlay-inner">
                      <h2>RESPONSIVE</h2>
                      <p>Mobile & Tablet</p>
                    </div>
                  </div></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section style="background-image: url(assets/images/banner-2.jpg)" class="section section-black background-image background-image-center">
      <div class="container banner">
        <div class="col-md-12 text-center"><span>A SOFTWARE DEVELOPER</span>
          <h2>RASSEL JAN DAVID</h2><img src="assets/images/section-decor-white.png" width="40" alt="Divider"/>
          <p>
              I believe in the cliche "Less is More". Creating software that offers less features, less code, less waste and less time to learn. 
              We are in the age of always in a hurry. No time for complicated stuff. Always wanting intuitive interface. Bloated with huge of amount
              of information everyday. So I think creating the minimum software that solves most of your problems is the key.   
          </p>
          <a class="btn btn-white" href="/about">ABOUT</a>
        </div>
      </div>
    </section>
    <section class="section section-semi-white">
      <div class="col-md-12 text-center section-head padding-bottom"><small>I'M ON</small>
        <h3>TWITTER</h3>
        <p>Check out my daily process and routine. I love to share business ideas, latest innovation, and I think it's fun to tweet with the world all this positive energy I have.</p>
      </div>
      <div class="row-fluid">
        <ul class="instagram-widget">
          <li class="col-md-3 col-sm-6 col-xs-6">
            <div class="row"><a href="#!"><img src="assets/images/widget-image-1.jpg" alt="Widget Image"/></a></div>
          </li>
          <li class="col-md-3 col-sm-6 col-xs-6">
            <div class="row"><a href="#!"><img src="assets/images/widget-image-2.jpg" alt="Widget Image"/></a></div>
          </li>
          <li class="col-md-3 col-sm-6 col-xs-6">
            <div class="row"><a href="#!"><img src="assets/images/widget-image-3.jpg" alt="Widget Image"/></a></div>
          </li>
          <li class="col-md-3 col-sm-6 col-xs-6">
            <div class="row"><a href="#!"><img src="assets/images/widget-image-4.jpg" alt="Widget Image"/></a></div>
          </li>
        </ul>
      </div>
      <div class="container">
        <div class="col-md-12 padding-top text-center"><a class="btn btn-link" href="https://twitter.com/rasseljandavid" target="_blank">FOLLOW ME</a></div>
      </div>
    </section>

@endsection