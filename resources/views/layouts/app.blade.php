<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>RASSEL JAN DAVID</title>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="HandheldFriendly" content="true"/> 
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts--><link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <!-- MAIN STYLESHEETS-->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="assets/css/theme.css" type="text/css" media="all"/>
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rassel Jan David') }}</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
  <body>
    <div class="loading text-center vertical-middle">
      <div class="row"><img src="assets/images/loader.gif" width="60" alt="Loader logo" class="loader"/><img src="assets/images/logo/logo-white.png" width="60" alt="Loader logo" class="loader-logo"/>
      </div>
    </div>
    <header class="main-navigation">
      <div class="container-fluid">
        <div class="col-md-2"><a href="/" class="logo"><img src="assets/images/logo/logo-white.png" alt="Logo"/></a>
          <div id="navicon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <div class="col-md-10">
          <nav class="{{ Request::is('services') ? 'services' : '' }} {{ Request::is('contact') ? 'services' : '' }}">
            <ul role="menu">
              <li><a href="/">HOME</a></li>
              <li><a href="/projects">PROJECTS</a></li>
              <li><a href="/services">SERVICES</a></li>
              <!-- <li><a href="/blog">BLOG</a></li> -->
              <li><a href="/contact">CONTACT</a></li>
            </ul>
          </nav>
        </div>
        <div class="mobile-navigation vertical-middle text-center">
          <ul role="menu" class="text-center">
              <li><a href="/">HOME</a></li>
              <li><a href="/projects">PROJECTS</a></li>
              <li><a href="/services">SERVICES</a></li>
              <!-- <li><a href="/blog">BLOG</a></li> -->
              <li><a href="/contact">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </header>

    @yield('content')

    <footer>
      <div class="container">
        <div data-os-animation="fadeInUp" data-os-animation-delay="0s" class="col-md-12 text-center os-animation">
          <div class="section-head"> 
            <h4>NEWSLETTER</h4>
            <p>Subscribe to my newsletter to receive news, updates and the latest projects I'm working on.</p>
          </div>
        </div>
        <div data-os-animation="fadeInUp" data-os-animation-delay="0s" class="col-md-12 margin-top margin-bottom os-animation">
          <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form text-center" method="post" action="{{ url('//rasseljandavid.us14.list-manage.com/subscribe/post?u=d0903b30fc48b03b626b92e0e&amp;id=818a11d1df') }}">
            {{ csrf_field() }}
            <input required name="EMAIL" placeholder="YOUR EMAIL ADDRESS..." class="form-control"/>
            <button type="submit">I'M IN</button>
            <div class="col-md-12 text-center margin-top"><small>You have our word, no spam. Ever.</small></div>
          </form>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        </div>







        <div class="col-md-12 margin-top">
          <hr/>
        </div>
        <div class="col-md-6 text-left small-screen-text-center">
          <div class="footer-message">
            <p>{{ date("Y") }} © RASSEL JAN DAVID</p>
          </div>
        </div>x
        <div class="col-md-6 text-right small-screen-text-center">
          <ul class="social-icons">
            <li><a target="_blank" href="https://github.com/rasseljandavid">GITHUB</a></li>
            <li><a target="_blank" href="https://twitter.com/rasseljandavid">TWITTER</a></li>
          </ul>
        </div>
      </div>
    </footer><script src="assets/js/packages.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/contact.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/slider-initialization.js"></script>
    <script type="text/javascript" src="assets/js/revslider-extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/js/revslider-extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/js/revslider-extensions/revolution.extension.navigation.min.js"></script>
  </body>
</html>