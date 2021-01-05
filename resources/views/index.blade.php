@extends('layout.main')

@section('title', 'Beranda')

@section('content')
  {{-- Carousel Gambar --}}
  <section id="Carousel-img">
    <div class="Carousel-container" id="beranda">
      <div id="wrapCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('/img/slide/1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Text<span>Lorem</span></h2>
                <p class="animate__animated animate__fadeInUp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque delectus dolor totam autem minus ab cupiditate tenetur maxime debitis quaerat!</p>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('/img/slide/2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Text<span>Lorem</span></h2>
                <p class="animate__animated animate__fadeInUp"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('/img/slide/3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Text<span>Lorem</span></h2>
                <p class="animate__animated animate__fadeInUp"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#wrapCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#wrapCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
          {{-- <a class="carousel-control-down" href="#services" role="button">
            <span class="carousel-control-down-icon "></span>
          </a> --}}
      </div>
    </div>
  </section>

  {{-- Profil --}}
  <section id="profil">
    <div class="container">
      <div class="section-header">
        <div class="text-wrap">
          <div class="text"><h2><strong></strong><h2></div>
        </div>
      </div>
      <div class="profil-body row no-gutters">
        <div class="profile-card col-lg-4 col-md-12">
          <div class="profil-page-ls row justify-content-center">
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Kepala Daerah
              </div>
              <img src="/img/team/team-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="profil-kab col-lg-8 col-md-12">
          <div class="profil-page-rs">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <div class="col">
                <ul id="profil-list">
                  <li>
                    <a data-toggle="collapse" class="collapsed" href="#profil1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                    <div id="profil1" class="collapse" data-parent="#profil-list">
                      <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                      </p>
                    </div>
                  </li>
    
                  <li>
                    <a data-toggle="collapse" href="#profil2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                    <div id="profil2" class="collapse" data-parent="#profil-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>
                  <li>
                    <a data-toggle="collapse" href="#profil3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                    <div id="profil3" class="collapse" data-parent="#profil-list">
                      <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                      </p>
                    </div>
                  </li>
    
                  <li>
                    <a data-toggle="collapse" href="#profil4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                    <div id="profil4" class="collapse" data-parent="#profil-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>
    
                  <li>
                    <a data-toggle="collapse" href="#profil5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                    <div id="profil5" class="collapse" data-parent="#profil-list">
                      <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                      </p>
                    </div>
                  </li>
                  <li>
                    <a data-toggle="collapse" href="#profil6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                    <div id="profil6" class="collapse" data-parent="#profil-list">
                      <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                      </p>
                    </div>
                  </li>    
                </ul>
              </div>
            </div>        
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Menu-Layanan --}}
  <section id="services" class="services">
    <div class="container">
      <div class="section-header">
        <h2>Layanan</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-3 icon-box">
          <div class="icon"><i class="icofont-computer"></i></div>
          <h4 class="title"><a href="/">Lorem, ipsum.</a></h4>      
        </div>
        <div class="col-lg-3 col-md-3 col-3 icon-box">
          <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
          <h4 class="title"><a href="/">Lorem, ipsum.</a></h4>      
        </div>
        <div class="col-lg-3 col-md-3 col-3 icon-box">
          <div class="icon"><i class="icofont-earth"></i></div>
          <h4 class="title"><a href="/">Lorem, ipsum.</a></h4>      
        </div>
        <div class="col-lg-3 col-md-3 col-3 icon-box">
          <div class="icon"><i class="icofont-image"></i></div>
          <h4 class="title"><a href="/">Lorem, ipsum.</a></h4>      
        </div>
        <div class="col-lg-3 col-md-3 col-3 icon-box">
          <div class="icon"><i class="icofont-image"></i></div>
          <h4 class="title"><a href="/">Lorem, ipsum.</a></h4>      
        </div>
        <div class="col-lg-3 col-md-3 col-3 icon-box">
          <div class="icon"><i class="icofont-image"></i></div>
          <h4 class="title"><a href="/">Lorem, ipsum.</a></h4>      
        </div>
      </div>
    </div>
  </section>

  {{-- Menu Berita --}}
  <section id="news-page">
    <div class="blog-page area-padding">
      <div class="container">
        <div class="section-header">
          <h2>Berita Badung</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- Berita Sidebar -->
                <div class="left-blog">
                  <h4>Berita Populer</h4>
                  <div class="recent-post">
                    <!-- Konten 1 -->
                    <div class="recent-single-post">
                      <div class="post-img align-self-center">
                        <a href="#">
                          <img src="/img/portfolio/portfolio-1.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <div class="blog-meta-pst">
                          <span class="date-type">
                            <i class="fa fa-calendar mr-2"></i>2016-03-05
                          </span>
                        </div>
                        <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis?</a></p>
                      </div>
                    </div>
                    <!-- Akhir Konten 1 -->
                    <!-- Konten 2 -->
                    <div class="recent-single-post">
                      <div class="post-img align-self-center">
                        <a href="#">
                          <img src="/img/portfolio/portfolio-1.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <div class="blog-meta-pst">
                          <span class="date-type">
                            <i class="fa fa-calendar mr-2"></i>2016-03-05
                          </span>
                        </div>
                        <p><a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla.</a></p>
                      </div>
                    </div>
                    <!-- Akhir Konten 2 -->
                    <!-- Konten 3 -->
                    <div class="recent-single-post">
                      <div class="post-img align-self-center">
                        <a href="#">
                          <img src="/img/portfolio/portfolio-7.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <div class="blog-meta-pst">
                          <span class="date-type">
                            <i class="fa fa-calendar mr-2"></i>2016-03-05
                          </span>
                        </div>
                        <p><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias.</a></p>
                      </div>
                    </div>
                    <!-- Akhir Konten 3 -->
                    <!-- Konten 4 -->
                    <div class="recent-single-post">
                      <div class="post-img align-self-center">
                        <a href="#">
                          <img src="/img/portfolio/portfolio-8.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <div class="blog-meta-pst">
                          <span class="date-type">
                            <i class="fa fa-calendar mr-2"></i>2016-03-05
                          </span>
                        </div>
                        <p><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto?</a></p>
                      </div>
                    </div>
                    <!-- Akhir Konten 4 -->
                  </div>
                  <div class="blog-btn row">
                    <span>
                      <a class="recentNews-btn" href="#">Berita Selengkapnya...</a>                      
                    </span>
                  </div>
                </div>
                <!-- Akhir Berita Sidebar -->
              </div>                           
            </div>
          </div>
          <!-- Main Konten Berita -->
          <!-- Kontent 1-->
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-7">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog row">
                  <div class="single-blog-img col-md-7">
                    <a href="blog-details.html">
                      <img src="/img/portfolio/portfolio-1.jpg" class="img-thumbnail" alt="">
                    </a>
                  </div>
                  <div class="blog-text col-md-5">
                    <h4>
                      <a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, voluptatem.</a>
                    </h4>
                    <div class="blog-meta mb-3">
                      <span class="date-type">
                        <i class="fa fa-calendar mr-2"></i>Black Friday, 2016-03-05
                      </span>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam id sequi in soluta?
                    </p>
                  </div>
                </div>
              </div>
              <!-- Split Konten-->
              <div class="row ml-1">
                <!-- Konten 1.1-->
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="single-blog">
                    <div class="single-blog-img">
                      <a href="blog-details.html">
                        <img src="/img/portfolio/portfolio-1.jpg" class="img-thumbnail" alt="">
                      </a>
                    </div>
                    <div class="blog-meta">
                      <span class="date-type">
                        <i class="fa fa-calendar mr-2"></i>2016-03-05
                      </span>
                    </div>
                    <div class="blog-text">
                      <h4>
                        <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                      </h4>          
                    </div>
                  </div>
                </div>
                <!-- Konten 1.2-->
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="single-blog">
                    <div class="single-blog-img">
                      <a href="blog-details.html">
                        <img src="/img/portfolio/portfolio-7.jpg" class="img-thumbnail" alt="">
                      </a>
                    </div>
                    <div class="blog-meta">
                      <span class="date-type">
                        <i class="fa fa-calendar mr-2"></i>2016-03-05
                      </span>
                    </div>
                    <div class="blog-text">
                      <h4>
                        <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing.</a>
                      </h4>                      
                    </div>
                  </div>
                </div>
                <!-- Konten 1.3 -->
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="single-blog">
                    <div class="single-blog-img">
                      <a href="blog-details.html">
                        <img src="/img/portfolio/portfolio-8.jpg" class="img-thumbnail" alt="">
                      </a>
                    </div>
                    <div class="blog-meta">
                      <span class="date-type">
                        <i class="fa fa-calendar mr-2"></i>2016-03-05
                      </span>
                    </div>
                    <div class="blog-text">
                      <h4>
                        <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing.</a>
                      </h4>                      
                    </div>
                  </div>
                </div>              
              </div>
              <!-- End single blog -->
            </div>
            <div class="blog-btn row justify-content-center">
              <span>
                <a href="/halaman-berita" class="ready-btn">baca selengkapnya</a>
              </span>
            </div>
          </div>          
        </div>        
      </div>
    </div>
  </section>

  {{-- Menu Pengumuman --}}
    <section id=announcement>
      <div class="container">
        <div class="row">
          {{-- Pengumuman-Side --}}
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="agenda-title pb-4 pt-5 ml-2"><h2>Pengumuman</h2></div>
            <div class="agenda-post">
              <!-- Pengumuman 1-->
              <div class="announcement-single-post">
                <div class="announcement-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-clr/icon-1.png" alt="">
                  </a>
                </div>
                <div class="announcement-content">
                  <div class="announcement-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                      <i class="fa fa-user-circle mr-1"></i>Name
                    </span>
                  </div>
                  <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis?</a></p>
                </div>
              </div>
              <!-- Pengumuman 2 -->
              <div class="announcement-single-post">
                <div class="announcement-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-clr/icon-1.png" alt="">
                  </a>
                </div>
                <div class="announcement-content">
                  <div class="announcement-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                    </span>
                  </div>
                  <p><a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla.</a></p>
                </div>
              </div>
              <!-- Pengumuman 3 -->
              <div class="announcement-single-post">
                <div class="announcement-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-clr/icon-1.png" alt="">
                  </a>
                </div>
                <div class="announcement-content">
                  <div class="announcement-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                    </span>
                  </div>
                  <p><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias.</a></p>
                </div>
              </div>
              <!-- Pengumuman 4 -->
              <div class="announcement-single-post">
                <div class="announcement-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-clr/icon-1.png" alt="">
                  </a>
                </div>
                <div class="announcement-content">
                  <div class="announcement-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                    </span>
                  </div>
                  <p><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto?</a></p>
                </div>
              </div>
            </div>
            <div class="announcement-btn row">
              <span>
                <a href="#" class="more-btn">Pengumuman Lainnya <i class="fa fa-arrow-right"></i></a>
              </span>
            </div>
          </div>
          <!-- Agenda -->
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="agenda">
              <div class="agenda-title pb-4 pt-5 ml-2"><h2>Agenda</h2></div>
              <div class="box-event-wrap scroll-wrap">
                <div class="box-event novi-bg">
                  <div class="box-event-date-wrap">
                    <h3 class="box-event-date-day">25</h3>
                    <p class="box-event-date-month">feb</p>
                  </div>
                  <div class="box-event-text-wrap">
                    <h5 class="box-event-text-title"><a href="#">Lorem ipsum dolor sit amet.</a></h5>
                  </div>
                </div>
                <div class="box-event novi-bg">
                  <div class="box-event-date-wrap">
                    <h3 class="box-event-date-day">12</h3>
                    <p class="box-event-date-month">mar</p>
                  </div>
                  <div class="box-event-text-wrap">
                    <h5 class="box-event-text-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h5>
                  </div>
                </div>
                <div class="box-event novi-bg">
                  <div class="box-event-date-wrap">
                    <h3 class="box-event-date-day">24</h3>
                    <p class="box-event-date-month">apr</p>
                  </div>
                  <div class="box-event-text-wrap">
                    <h5 class="box-event-text-title"><a href="#">Lorem ipsum dolor sit amet.</a></h5>
                  </div>
                </div>
                <div class="box-event novi-bg">
                  <div class="box-event-date-wrap">
                    <h3 class="box-event-date-day">17</h3>
                    <p class="box-event-date-month">jul</p>
                  </div>
                  <div class="box-event-text-wrap">
                    <h5 class="box-event-text-title"><a href="#">Lorem ipsum dolor sit amet consectetur.</a></h5>
                  </div>
                </div>
                <div class="box-event novi-bg">
                  <div class="box-event-date-wrap">
                    <h3 class="box-event-date-day">18</h3>
                    <p class="box-event-date-month">aug</p>
                  </div>
                  <div class="box-event-text-wrap">
                    <h5 class="box-event-text-title"><a href="#">Lorem ipsum dolor sit amet consectetur.</a></h5>
                  </div>
                </div>
                <div class="box-event novi-bg">
                  <div class="box-event-date-wrap">
                    <h3 class="box-event-date-day">12</h3>
                    <p class="box-event-date-month">OCT</p>
                  </div>
                  <div class="box-event-text-wrap">
                    <h5 class="box-event-text-title"><a href="#">Let It Roll</a></h5>
                  </div>
                </div>
              </div>
              <div class="agenda-btn row">
                <span>
                  <a href="#" class="more-btn">Agenda Lainnya <i class="fa fa-arrow-right"></i></a>
                </span>
              </div>
            </div>
          </div>
          {{-- Lapor-Side --}}
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="agenda-title pb-4 pt-5 ml-2"><h2>Widget Informasi</h2></div>
            <div class="agenda-post">
              <div id="gpr-kominfo-widget-container"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

  {{-- Menu Galeri --}}
  <section id="galeri">
    <div class="galeri-container">
      <div class="video-area">
        <div class="container-fluid">
          <div class="video-wrapper">
            <div class="left-content">
              <div class="row">
                <div class="col-xl-12">
                  <div class="section-title mb-35">
                    <h2 class="mb-10">GALERI KAB BADUNG</h2>
                    <p class="video-cap">
                      Galeri Video dan Foto Pemerintah<br>Kabupaten Badung.
                    </p>
                    <div class="galeri-page-btn d-flex">
                      <button href="#" class="galeri-btn">Channel Pemkab Badung</button>
                      <button href="#" class="galeri-btn">Foto Lainnya</button>
                    </div>
                  </div>
                </div>
                <!--Left Single -->
                <div class="col-lg-6 col-md-6">
                  <div class="single-banner-nw4 mb-30">
                    <div class="banner-img-cap4">
                      <div class="banner-img4">
                        <img src="/img/250x170.png" alt="">
                        <!--video iocn -->
                        <div class="video-icon video-icon2">
                          <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=T6f-O7WEYBQ" data-animation="bounceIn" data-delay=".4s"><i class="fa fa-play"></i></a>
                        </div>
                      </div>
                      <div class="banner-cap4">
                        <h3><a href="post_details.html">Editors with strong points  of view</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="single-banner-nw4 mb-30">
                    <div class="banner-img-cap4">
                      <div class="banner-img4">
                        <img src="/img/250x170.png" alt="">
                        <!--video iocn -->
                        <div class="video-icon video-icon2">
                          <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=AXDoF9mMppc" data-animation="bounceIn" data-delay=".4s"><i class="fa fa-play"></i></a>
                        </div>
                      </div>
                      <div class="banner-cap4">
                        <h3><a href="post_details.html">Dill is part of an unexpected groundswell</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-content">
              <div class="video-img">
                <img src="/img/video_bg.png" alt="">
                <!--video iocn -->
                <div class="video-icon video-icon2">
                  <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=AXDoF9mMppc" data-animation="bounceIn" data-delay=".4s"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
        <a href="/img/slide/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/1.jpg" alt="Foto 1"></a>
        <a href="/img/slide/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/2.jpg" alt="Foto 2"></a>
        <a href="/img/slide/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/3.jpg" alt="Foto 3"></a>
        <a href="/img/slide/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/1.jpg" alt="Foto 1"></a>
        <a href="/img/slide/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/2.jpg" alt="Foto 2"></a>
        <a href="/img/slide/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/3.jpg" alt="Foto 3"></a>
        <a href="/img/slide/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/1.jpg" alt="Foto 1"></a>
        <a href="/img/slide/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="/img/slide/2.jpg" alt="Foto 2"></a>
      </div>
    </div>
  </section>

  {{-- Menu Informasi Kontak --}}
  <section id="contact" class="contact">
    <div class="contact-container">
      <div class="section-title">
          <h2>Kontak Kami</h2>
      </div>
      <div class="contact-content row">
        <div class="contact-body col-lg-8 row">
          <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>Jalan Street No.123</p>
              </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
              <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email dan Sosial Media</h3>
                  <p>info@example.com<br>contact@example.com</p>
              </div>
          </div>
          <div class="col-lg-3 d-flex align-items-stretch">
              <div class="info-box ">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telp.</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="info-box-maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15779.704329154796!2d115.1786036!3d-8.6030957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88eee4faf8f037a7!2sPusat+Pemerintahan+Kabupaten+Badung+-+Mangupraja+Mandala!5e0!3m2!1sid!2sid!4v1539591442930" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="agenda">
            <div class="agenda-title pb-4 ml-2"><h2>Pengaduan Masyarakat</h2></div>
            <div class="lapor-post">
              <!-- Lapor 1-->
              <div class="lapor-single-post">
                <div class="lapor-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-mm/paper-plane.png" alt="">
                  </a>
                </div>
                <div class="lapor-content">
                  <div class="lapor-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                      <i class="fa fa-user-circle mr-1"></i>Name
                    </span>
                  </div>
                  <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis?</a></p>
                </div>
              </div>
              <!-- Lapor 2 -->
              <div class="lapor-single-post">
                <div class="lapor-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-mm/paper-plane.png" alt="">
                  </a>
                </div>
                <div class="lapor-content">
                  <div class="lapor-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                      <i class="fa fa-user-circle mr-1"></i>Name
                    </span>
                  </div>
                  <p><a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla.</a></p>
                </div>
              </div>
              <!-- Lapor 3 -->
              <div class="lapor-single-post">
                <div class="lapor-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-mm/paper-plane.png" alt="">
                  </a>
                </div>
                <div class="lapor-content">
                  <div class="lapor-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                      <i class="fa fa-user-circle mr-1"></i>Name
                    </span>
                  </div>
                  <p><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias.</a></p>
                </div>
              </div>
              <!-- Lapor 4 -->
              <div class="lapor-single-post">
                <div class="lapor-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-mm/paper-plane.png" alt="">
                  </a>
                </div>
                <div class="lapor-content">
                  <div class="lapor-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                      <i class="fa fa-user-circle mr-1"></i>Name
                    </span>
                  </div>
                  <p><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto?</a></p>
                </div>
              </div>
              <!-- Lapor 5 -->
              <div class="lapor-single-post">
                <div class="lapor-img align-self-center">
                  <a href="#">
                    <img src="/img/icon-mm/paper-plane.png" alt="">
                  </a>
                </div>
                <div class="lapor-content">
                  <div class="lapor-date">
                    <span class="date-type">
                      <i class="fa fa-clock-o mr-2"></i>2016-03-05
                      <i class="fa fa-user-circle mr-1"></i>Name
                    </span>
                  </div>
                  <p><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus.</a></p>
                </div>
              </div>
            </div>
            <div class="announcement-btn row">
              <span>
                <a href="#carousel-img" class="more-btn">Lapor.. <i class="fa fa-arrow-right"></i></a>
              </span>
              <span>
                <a href="#" class="more-btn">Lainnya.. <i class="fa fa-arrow-right"></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection