<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/unicons.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

  <!-- MAIN STYLE -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<style>
  .carousel-wrapper {
      width: 520px;
      height: 350px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 5px 5px 25px 0px rgba(46, 61, 73, 0.2);
      border-radius: 20px;
      margin: 100px auto 20px;
  }

  .carousel-container {
      width: 400px;
      height: 250px;
      overflow: hidden;
      margin: 0 auto;
  }

  .carousel {
      display: flex;
      width: 1200px;
      animation: sliding 12s infinite;
  }

  .carousel div {
      width: 400px;
      height: 250px;
      background-size: cover;
      background-position: center;
  }

  .carousel:hover {
      animation-play-state: paused;
  }

  .carousel .image-one {
      background-image: url("https://cdn.erakomp.co.id/assets/5278.jpg");
  }

  .carousel .image-two {
      background-image: url("https://cdn.erakomp.co.id/assets/20944999.jpg");
  }

  .carousel .image-three {
      background-image: url("https://cdn.erakomp.co.id/assets/5498791.jpg");
  }

  @keyframes sliding {
      30% {
          transform: translateX(0);
      }

      35% {
          transform: translateX(-400px);
      }

      65% {
          transform: translateX(-400px);
      }

      70% {
          transform: translateX(-800px);
      }

      98% {
          transform: translateX(-800px);
      }

      100% {
          transform: translateX(0);
      }
  }

  @media screen and (max-width: 768px) {
      .carousel-wrapper {
          width: 312px;
          height: 210px;
      }

      .carousel-container {
          width: 240px;
          height: 150px;
      }

      .carousel {
          width: 720px;
      }

      .carousel>div {
          width: 240px;
          height: 150px;
      }

      @keyframes sliding {
          30% {
              transform: translateX(0);
          }

          35% {
              transform: translateX(-400px);
          }

          65% {
              transform: translateX(-400px);
          }

          70% {
              transform: translateX(-800px);
          }

          98% {
              transform: translateX(-800px);
          }

          100% {
              transform: translateX(0);
          }
      }
  }
</style>
<body>

  <!-- MENU -->
  <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="https://cdn.erakomp.co.id/assets/Logo%20Yukeva%20Website-05%20(1).png" alt="" style="max-width: 120px;"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a href="#about" class="nav-link"><span data-hover="About Us">About Us</span></a>
          </li>
         <!-- <li class="nav-item">
            <a href="#pic" class="nav-link"><span data-hover="Our Team">Our Team</span></a>
          </li>-->
          <li class="nav-item">
            <a href="#serv" class="nav-link"><span data-hover="Services">Services</span></a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link"><span data-hover="Contact Us">Contact Us</span></a>
          </li>
        </ul>

        <ul class="navbar-nav ml-lg-auto">
          <div class="ml-lg-4">
            <div class="color-mode d-lg-flex justify-content-center align-items-center">
              <i class="color-mode-icon"></i>

            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ABOUT -->
  <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
          <div class="about-text">
            <h1 style="color:#FFD700;">WELCOME TO YUKEVA</h1>
            <h1 class="animated animated-text">

            </h1>

            <p>PT. Yukeva has been established as an IT company. We are leading in an IT company
              providing all technology solution, business, goverment and private use. As we strive to excel in customer
              service excellence by
              providing real time solutions and wide product offering.
              Dynamic improvements are implace to provide both in the sales and after sales service. We pride ourselves
              in after sales service by offering one-to-one replacement, among many other extra
              perks and benefits that customer may enjoy by shopping with us.

            </p>
            <div class="custom-btn-group mt-4">
              <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Contact Us</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-12 col-12">
          <div class="about-image svg">
            <i class="color-mode-logo"></i>
          </div>
        </div>

      </div>
    </div>
  </section>

 
<!--IMAGES CAROUSEL-->

<!--<section class="about full-screen d-lg-flex justify-content-center align-items-center" id="pic">
  <div class="container">
    <div class="row" style="margin-top: -10%!important;">

      <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
        <div class="about-text">
          <h1 style="color:#FFD700;">Our Team</h1>
          <h1 class="animated animated-text">

          </h1>
          <div class="row">
            <div class="col-sm-7">
              <div class="carousel-wrapper" style="background: white!important;">
                <div class="carousel-container">
                    <div class="carousel">
                        <div class="image-one"></div>
                        <div class="image-two"></div>
                        <div class="image-three"></div>
                    </div>
                </div>
            </div>
            </div>
          </div>

        
    
          
        </div>
      </div>

      <div class="col-lg-5 col-md-12 col-12" style="margin-top: 20%;">
        <div class="about-image svg">
          <p>We proudly present you our amazing team who's ready to help you.

          </p>        
        </div>
      </div>

    </div>
  </div>
</section>-->


  <!-- FEATURES -->
  <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="serv">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-12">
          <h2 class="mb-4" style="color:#FFD700;">Services</h2>

          <div class="timeline">
            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span><i class="color-mode-iso"></i>
                </span>
              </div>
              <div class="timeline-info">
                <h3>ISO COMPLIANT
                </h3>
                <p>We are ISO and OSAS certified since 2004 and has won numerous awards and accolades over the years.
                </p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span><i class="color-mode-phy"></i></span>
              </div>
              <div class="timeline-info">
                <h3>PHYSICAL STORAGE SOLUTION
                </h3>
                <p>For Enterprises seeking physical storage solution onsite within their office premises, we are the
                  go-to experts. We help to consult on the most cost efficient solution, build, maintain and service
                  your physical storage and server.</p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span><i class="color-mode-man"></i></span>
              </div>
              <div class="timeline-info">
                <h3>MANAGED IT SERVICES
                </h3>
                <p>Streamline your IT services to increase productivity and efficiency within the workplace with our
                  specialized solutions catered to safe cost up to 60%.</p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span><i class="color-mode-dedi"></i></span>
              </div>
              <div class="timeline-info">
                <h3>DEDICATED & PROFESSIONAL SALES</h3>
                <p>Our team delivers for every sectors from government to corporate and retail. Our professional and
                  dedicated sales people will assist you in seamless integration and after sales.</p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span><i class="color-mode-net"></i></span>
              </div>
              <div class="timeline-info">
                <h3>NETWORK SOLUTIONS

                </h3>
                <p>We are the leading expert in any network solutionsincluding TCP/IP and star topology build up
                  supported by the most advanced technology in cabling and fiber optic.</p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span><i class="color-mode-cs"></i></span>
              </div>
              <div class="timeline-info">
                <h3>SUPPORT CONSULTING

                </h3>
                <p>We understand that not everyone is adept in IT. We are here for you to be consulted and provide
                  solution from the simplest troubleshooting to the most complex configuration. Our trusted service
                  centre had been appointed by international brands to be the authorized service point in Indonesia.</p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6 col-12 right-img">
          <img src="https://cdn.erakomp.co.id/assets/yukeva/about-left-image.png" alt="" style="width:500px;">
        </div>

      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact py-5" id="contact">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mr-lg-5 col-12">
          <div class="google-map w-100">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7617885735003!2d106.81493771471636!3d-6.162648895538259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6763b768147%3A0xe9225143091b7767!2sJl.%20Pembangunan%20II%2C%20Petojo%20Utara%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010130!5e0!3m2!1sen!2sid!4v1631676925294!5m2!1sen!2sid"
              width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

         
        </div>

        <div class="col-lg-6 col-12">
          <div class="contact-form">
            <h2 class="mb-4" style="color:#FFD700;">Contact Us</h2>
            <div class="row">
              <div class="col-sm-1">
                <img src="https://cdn.erakomp.co.id/assets/yukeva/placeholder.png"
                style="max-width: 20px;" />
              </div>
              <div class="col-sm-10">
                <p>Jl.
                  Pembangunan II No.
                  7E 
                  Petojo Utara - Gambir Jakarta Pusat 10130 - DKI Jakarta</p>
              </div>
            </div>
            
<br>
<div class="row">
  <div class="col-sm-1">
    <img src="https://cdn.erakomp.co.id/assets/yukeva/4.png" alt="" srcset=""
                style="max-width: 30px;">
  </div>
  <div class="col-sm-10">
    <p>+1 234
      567 8900</p>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-1">
    <img src="https://cdn.erakomp.co.id/assets/yukeva/mail.png"
                style="max-width: 20px;" />
  </div>
  <div class="col-sm-10">
    <p>hans@yukeva.com</p>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-12">
    <i class="color-mode-fb" style="max-width: 40px;"></i>
                <i class="color-mode-ig" style="max-width: 40px;"></i>
                <i class="color-mode-tw" style="max-width: 40px;"></i>
  </div>
  
</div>

                

              </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-12">
          <p class="copyright-text text-center" style="color:#FFD700; font-family:Aileron!important;">Copyright &copy; 2021</p>

        </div>

      </div>
    </div>
  </footer>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/Headroom.js')}}"></script>
  <script src="{{asset('js/jQuery.headroom.js')}}"></script>
  <script src="{{asset('js/jQuery.headroom.js')}}"></script>
  <script src="{{asset('js/smoothscroll.js')}}"></script>
  <script src="{{asset('/js/script.js')}}"></script>

</body>

</html>