<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @if(isset($title))<title>Talab Now | {{ $title }}</title> @else <title>Talabnow.online</title> @endif
    <meta name="google-site-verification" content="PT5Ev9pFIxm2aalISy-iVDqTd4x9I7S7JLF3oai8KRE" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3W89L9CXXP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-3W89L9CXXP');
    </script>
    <meta http-equiv="refresh" url="/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Talab Now" />
    <html prefix="og: http://ogp.me/ns#">
    <meta name="description" content="Talab Now aims to Help growing businesses with the latest technologies, video making & web solutions, graphic designe, advertising, problems solving, programming languages, bringing new ideas.">
    <link rel="canonical" href="https://talabnow.online">
    <meta property="og:determiner" content="talabnow" />
    <link rel="alternate" href="https://www.talabnow.online" hreflang="x-default" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:site_name" content="talabnow" />
    <meta property="og:video" content="#" />
    <meta property="og:title" content="Talab Now" />
    <meta property="og:description" content="Talab Now aims to Help growing businesses with the latest technologies, video making & web solutions, graphic designe, advertising, problems solving, programming languages, bringing new ideas." />
    <meta property="og:url" content="https://talabnow.online/" />
    <meta property="og:image" content="{{ asset('img/logo.png') }}" />
    <meta property="og:locale" content="en_US" />
    <link rel="alternate" hreflang="en" href="https://www.talabnow.online/" />
    <meta property="og:type" content="website" />
    <meta property="fb" content="https://www.facebook.com/talabnow" />
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.ico') }}"/>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#3593cd">
    <meta name="msapplication-navbutton-color" content="#3593cd">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3593cd">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <meta name="keywords" lang="en" content="Talab Now, talabnow.online, talabnow, e-services, e-solutions">
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">
      <div class="logo ">
        <a href="/"><img src="{{ asset('img/logo.png') }}" alt="Talab now logo" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">{{ __('sentence.Home') }}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{ __('sentence.About') }}</a></li>
          <li><a class="nav-link scrollto" href="#services">{{ __('sentence.Services') }}</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">{{ __('sentence.Portfolio') }}</a></li>
          <li><a class="nav-link scrollto" href="#team">{{ __('sentence.Team_nav') }}</a></li>
          <li class="dropdown"><a href="/blog"><span>{{ __('sentence.Blog') }}</span></a>
            <!--
            <ul>
              <li><a href="/tutorial">{{ __('sentence.Tutorial') }}</a></li>
              <li><a href="/hireusonfiverr">{{ __('sentence.Hire') }}</a></li>
              <li><a href="/discussidea">{{ __('sentence.Discuss_Idea') }}</a></li>
              <li><a href="/solutions">{{ __('sentence.solution') }}</a></li>
            </ul>
            -->

          </li>

          <li><a class="nav-link scrollto" href="#contact">{{ __('sentence.Contact') }}</a></li>
          <li><a class="nav-link scrollto"></a></li>

          </ul>
          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  @yield('content')
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-info">
            <h3>{{ __('sentence.footer_title') }}</h3>
            <p>{{ __('sentence.footer_desc') }}</p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{ __('sentence.usf') }}</h4>
            <ul>
              <li><a href="#">{{ __('sentence.Home') }}</a></li>
              <li><a href="#">{{ __('sentence.About') }}</a></li>
              <li><a href="#">{{ __('sentence.Services') }}</a></li>
              <li><a href="#">{{ __('sentence.Terms') }}</a></li>
              <li><a href="#">{{ __('sentence.Privacy') }}</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>{{ __('sentence.Contact') }}</h4>
            <p>
              <i class="bi bi-geo-alt"></i> Rue Oued Ziz, Résidence ifrane 1 Bloc G,<br>
              Imm N•1600, Agadir 80000 <br>
              Morocco <br>
              <i class="bi bi-phone"></i> <strong>Phone:</strong> +212-635857267 & +212-601074681 <br>
              <i class="bi bi-envelope"></i> <strong>Email:</strong> talabnow.contact@gmail.com<br>
            </p>
            <div class="social-links">
             <a href="https://twitter.com/TalabNow/" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/talabnow.fb/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/talabnow.ig/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/talab-now-595349224/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>{{ __('sentence.Newsletter') }}</h4>
            <p>{{ __('sentence.Newsletter_des') }}</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="{{ __('sentence.Search') }}">
            </form><br>

            <a class="dropdown-item" href="/?lang=en"><img src="{{asset('lang/img/flags/48/Us.png')}}" width="22px"> English</a>
            <a class="dropdown-item" href="/?lang=fr"><img src="{{asset('lang/img/flags/48/Fr.png')}}" width="22px"> Français</a>
            <a class="dropdown-item" href="/?lang=ar"><img src="{{asset('lang/img/flags/48/Ar.png')}}" width="22px"> العربية</a>

          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Talab Now</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.instagram.com/amine.amriii/">Med Amine Amri </a> & Developed by <a href="https://www.instagram.com/elmahdi.ouhssain/">El Mahdi Ouhssain </a><p style="color : Yellow " ;>2021/2022</p>
      </div>
      </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <!-- GetButton.io widget 
  <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+212648974745", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
  </script>
 -->
 <!-- GetButton.io widget 
 <script type="text/javascript">
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "/?lang="+ $(this).val();
    });
</script>
-->
</body></html>