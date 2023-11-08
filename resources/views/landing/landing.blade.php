@extends('layouts.app2')

@section('content')
<!-- Vendor CSS Files -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<main class="main-content">
  <section>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
      <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>PSI</span></h2>
            <p class="animate__animated fanimate__adeInUp">With our special algorithm, you can generate accurate and fast results in just a few minutes.</p>
            <a href="/psi" class="btn-get-started animate__animated animate__fadeInUp scrollto">Start Making Decision</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">How PSI Works</h2>
            <p class="animate__animated animate__fadeInUp">Simply input your alternatives and criterion scores, and let PSI generate.</p>
            {{-- <a href="/how-it-works" class="btn-get-started animate__animated animate__fadeInUp scrollto">How it Works</a> --}}
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">What is PSI?</h2>
            <p class="animate__animated animate__fadeInUp">PSI is a tool that uses a multi-criteria decision-making method. By inputting multiple job alternatives and setting criteria scores.</p>
            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
          </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
          </defs>
          <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
              <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
              </g>
              <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
                </g>
              </svg>
            </section>
            <!-- End Hero -->
            <main id="main" style="overflow: hidden;">
              <!-- ======= About Section ======= -->
              <section id="about" class="about">
                <div class="container">

                  <div class="section-title" data-aos="zoom-out">
                    <h2>About</h2>
                    <p>Who we are</p>
                  </div>

                  <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6" >
                      <p class="text-justify">
                        Preferenced Selection Index provides a platform that makes it easy for users to determine criteria. PSI offers various features, such as:
                      </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Special algorithm to generate PSI</li>
                        <li><i class="ri-check-double-line"></i> Specially designed criteria</li>
                        <li><i class="ri-check-double-line"></i> Accurate and fast results</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                      <p class="text-justify">Preferenced Selection Index is a tool that uses a multi-criteria decision-making method. By inputting multiple job alternatives and setting criteria scores.</p>
                      <a href="/psi" class="btn-learn-more">Start Now</a>
                    </div>
                  </div>

                </div>
              </section>
              <!-- End About Section -->
              <section id="team" class="team">
                <div class="container">
                  <div class="section-title" data-aos="zoom-out">
                    <h2>Team</h2>
                    <p>Our Hardworking Team</p>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                      <div class="member" data-aos="fade-up">
                        <div class="member-img">
                          <img src="assets/img/team/brian.jpg" class="img-fluid" alt="">
                          <div class="social">
                            <a href="https://github.com/BrianMohamadSafiudin"><i class="bi bi-github" style="font-size: 20px;"></i></a>
                          </div>
                        </div>
                        <div class="member-info">
                          <h4>Brian Mohamad Safiudin</h4>
                          <span>Full Stack Developer</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                      <div class="member" data-aos="fade-up">
                        <div class="member-img">
                          <img src="assets/img/team/febryan.jpg" class="img-fluid" alt="">
                          <div class="social">
                            <a href="https://github.com/FebryanRizki24"><i class="bi bi-github" style="font-size: 20px;"></i></a>
                          </div>
                        </div>
                        <div class="member-info">
                          <h4>Febryan Rizki Hidayatullah</h4>
                          <span>Back End Developer</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                      <div class="member" data-aos="fade-up">
                        <div class="member-img">
                          <img src="assets/img/team/fafan.jpg" class="img-fluid" alt="">
                          <div class="social">
                            <a href="https://github.com/mafazann"><i class="bi bi-github" style="font-size: 20px;"></i></a>
                          </div>
                        </div>
                        <div class="member-info">
                          <h4>M Rizky Mafazan</h4>
                          <span>Front End Developer</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </main>
            <!-- ======= Footer ======= -->
            <footer id="footer" >
              <div class="container">
                <div class="copyright">
                  &copy; Copyright <strong><span>PSI</span></strong>. All Rights Reserved
                </div>
              </div>
            </footer><!-- End Footer -->
          </section>
        </main>
        <style>
          ::-webkit-scrollbar {
            width: 0px;
          }
        </style>

        @endsection

