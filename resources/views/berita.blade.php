@extends('layout.main')

@section('title', 'Berita')

@section('content')
    <section id="halaman-berita">
        <div class="header-bg page-area">
            <div class="home-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slider-content">
                            <div class="header-bottom">
                                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                    <h1 class="title2">Berita Terkini</h1>
                                </div>
                                <ol class="breadcrumbs">
                                    <li><a href="/">Beranda</a></li>
                                    <li>List Berita</li>
                                  </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="artikel-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-head-blog">
                            <div class="single-blog-page">
                                <!-- recent start -->
                                <div class="left-blog">
                                    <h4>Berita Populer</h4>
                                    <div class="recent-post">
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="/img/icon-clr/icon-2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="/img/icon-clr/icon-2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="/img/icon-clr/icon-2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="/img/icon-clr/icon-2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                    </div>
                                </div>
                                <!-- recent end -->
                            </div>
                            <div class="single-blog-page">
                                <div class="left-blog">
                                    <h4>Pengumuman</h4>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left sidebar -->
                    <!-- Start single blog -->
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="artikel-item row no-gutters">
                                    <div class="artikel-item-img mr-3 col-md-4">
                                        <a href="berita-detail.html">
                                            <img src="/img/icon-clr/icon-2.png" class="img-thumbnail" alt="">
                                        </a>
                                    </div>
                                    <div class="artikel-text col-md-7">
                                        <h4>
                                            <a href="/detail-berita">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, voluptatem.</a>
                                        </h4>
                                        <div class="artikel-meta mb-1">
                                            <span class="date-type">
                                                <i class="fa fa-calendar mr-1"></i>Black Friday, 2016-03-05
                                                <i class="fa fa-user-circle ml-2 mr-1"></i>Name
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam ea expedita dolorum nemo inventore optio!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="artikel-item row no-gutters">
                                    <div class="artikel-item-img mr-3 col-md-4">
                                        <a href="berita-detail.html">
                                            <img src="/img/portfolio/portfolio-1.jpg" class="img-thumbnail" alt="">
                                        </a>
                                    </div>
                                    <div class="artikel-text col-md-7">
                                        <h4>
                                            <a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, voluptatem.</a>
                                        </h4>
                                        <div class="artikel-meta mb-1">
                                            <span class="date-type">
                                                <i class="fa fa-calendar mr-1"></i>Black Friday, 2016-03-05
                                                <i class="fa fa-user-circle ml-2 mr-1"></i>Name
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam ea expedita dolorum nemo inventore optio!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start single blog -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="artikel-item row no-gutters">
                                    <div class="artikel-item-img mr-3 col-md-4">
                                        <a href="berita-detail.html">
                                            <img src="/img/portfolio/portfolio-1.jpg" class="img-thumbnail" alt="">
                                        </a>
                                    </div>
                                    <div class="artikel-text col-md-7">
                                        <h4>
                                            <a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, voluptatem.</a>
                                        </h4>
                                        <div class="artikel-meta mb-1">
                                            <span class="date-type">
                                                <i class="fa fa-calendar mr-1"></i>Black Friday, 2016-03-05
                                                <i class="fa fa-user-circle ml-2 mr-1"></i>Name
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam ea expedita dolorum nemo inventore optio!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="artikel-item row no-gutters">
                                    <div class="artikel-item-img mr-3 col-md-4">
                                        <a href="berita-detail.html">
                                            <img src="/img/portfolio/portfolio-1.jpg" class="img-thumbnail" alt="">
                                        </a>
                                    </div>
                                    <div class="artikel-text col-md-7">
                                        <h4>
                                            <a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, voluptatem.</a>
                                        </h4>
                                        <div class="artikel-meta mb-1">
                                            <span class="date-type">
                                                <i class="fa fa-calendar mr-1"></i>Black Friday, 2016-03-05
                                                <i class="fa fa-user-circle ml-2 mr-1"></i>Name
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam ea expedita dolorum nemo inventore optio!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start single blog -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="artikel-item row no-gutters">
                                    <div class="artikel-item-img mr-3 col-md-4">
                                        <a href="berita-detail.html">
                                            <img src="/img/portfolio/portfolio-1.jpg" class="img-thumbnail" alt="">
                                        </a>
                                    </div>
                                    <div class="artikel-text col-md-7">
                                        <h4>
                                            <a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, voluptatem.</a>
                                        </h4>
                                        <div class="artikel-meta mb-1">
                                            <span class="date-type">
                                                <i class="fa fa-calendar mr-1"></i>Black Friday, 2016-03-05
                                                <i class="fa fa-user-circle ml-2 mr-1"></i>Name
                                            </span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam ea expedita dolorum nemo inventore optio!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <div class="blog-pagination col-md-12 col-sm-12 col-xs-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                      </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection