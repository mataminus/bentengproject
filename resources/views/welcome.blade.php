@extends('front.layouts.app')

@section('content')
  <!--Top Banner-->
  <section id="top-banner">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12 top-banner-base no-padding">
          @include('slider-area')
          </div>
          </div>
      </div>
  </section>
  <!--Services-->
  <section id="service">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 no-padding service-title">
                  <div class="col-sm-8 col-md-10 heading text-left ">
                      <h3>Temukan update artikel, aplikasi, peraturan, dan masih banyak lagi di website kami!</h3>
                  </div>
                  <div class="col-sm-4 col-md-2 button text-right">
                      <a href="/home" class="btn">Login Member</a>
                  </div>
              </div>
              <div class="col-sm-12 service-base space">
                  <div class="col-sm-4 service-block">
                      <div class="service-inner">
                          <img src="/images/pdms.jpg" alt="Services">
                          <div class="service-text">
                              <h4>Seksi PDMS</h4>
                              <p>Program dari Seksi Pencairan Dana dan Manajemen Satker.  </p>
                              <a href="/segera">Lebih Lanjut</a>
                          </div>

                      </div>
                  </div>
                  <div class="col-sm-4 service-block">
                      <div class="service-inner">
                          <img src="/images/bank.jpg" alt="Services">
                          <div class="service-text">
                              <h4>Seksi Bank</h4>
                              <p>Program dari Seksi Bank </p>
                              <br>

                              <a href="/segera">Lebih Lanjut</a>
                          </div>

                      </div>
                  </div>
                  <div class="col-sm-4 service-block">
                      <div class="service-inner">
                          <img src="/images/veraki.jpg" alt="Services">
                          <div class="service-text">
                              <h4>Seksi Vera/KI</h4>
                              <p>Program dari Seksi Verifikasi Akuntansi dan Kepatuhan Internal. </p>
                              <a href="/segera">Lebih Lanjut</a>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

@include('download-area')

  <!-- About us -->
  <section id="about">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 about-base space">
                  <div class="col-sm-12 col-md-4 about-block">
                      <img src="/images/pantai.jpg" alt="About">
                      <h5>Layanan Lainnya</h5>
                      <p>Selain Layanan Utama, Kami juga memiliki beberapa layanan untuk Anda, antara lain:</p>
                  </div>
                  <div class="col-sm-6 col-md-4 about-block">
                      <div class="about-item col-sm-12 col-xs-12 no-padding">
                          <div class="col-sm-3 col-xs-4 about-icon no-padding">
                              <span class="icon-lightbulb"></span>
                          </div>
                          <div class="about-text col-sm-9 col-xs-8 no-padding">
                              <h6>Video Tutorial</h6>
                              <p>Berisi tutorial-tutorial aplikasi..</p>
                              <a href="/tutorial">Masuk</a>
                          </div>
                      </div>
                      <div class="about-item col-sm-12 col-xs-12 no-padding">
                          <div class="col-sm-3 col-xs-3 about-icon no-padding">
                              <span class="icon-key"></span>
                          </div>
                          <div class="about-text col-sm-9 col-xs-8 no-padding">
                              <h6>Layanan SAKTI</h6>
                              <p>Berisi Layanan SAKTI</p>
                              <a href="/program-sakti">Masuk</a>
                          </div>
                      </div>
                      <div class="about-item col-sm-12 col-xs-12 no-padding">
                          <div class="col-sm-3 col-xs-4 about-icon no-padding">
                              <span class="icon-puzzle"></span>
                          </div>
                          <div class="about-text col-sm-9 col-xs-8 no-padding">
                              <h6>FAQ</h6>
                              <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                              <a href="/faq">Masuk</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-4 about-block">
                      <div class="about-item col-sm-12 col-xs-12 no-padding">
                          <div class="col-sm-3 col-xs-4 about-icon no-padding">
                              <span class="icon-hotairballoon"></span>
                          </div>
                          <div class="about-text col-sm-9 col-xs-8 no-padding">
                              <h6>Kamus KPPN</h6>
                              <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                              <a href="/kamus-kppn">Masuk</a>
                          </div>
                      </div>


                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end About us -->


  <!-- Certifications -->
  <section id="certification">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 certification space">
                  <div class="main-heading text-center col-sm-12">
                      <h2>PENGHARGAAN KPPN BENTENG</h2>

                  </div>
                  <div class="certi-base col-sm-12 no-padding">

                      <div class="col-sm-4 certi-block text-center animate-in move-up">
                          <span class="icon-trophy"></span>
                          <h4>Lorem</h4>
                          <p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>
                      </div>


                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end Certifications -->

  <!-- Start work -->
  <section id="work">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 work space">
                  <div class="col-sm-8 work-block animate-in left-out">
                      <h3>Menjadi
                          <span>Pengelola Perbendaharaan Negara</span>
                          yang unggul
                          <span>DI TINGKAT DUNIA</span></h3>
                      <p>
                          Visi
                          <em> Direktorat Jenderal Perbendaharaan </em>


                      </p>
                  </div>

              </div>
          </div>
      </div>
  </section>
  <!-- end work -->

  <!-- News -->
  <section id="news">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 news space">
                  <div class="main-heading text-center col-sm-12">
                      <h2>Blog</h2>
                      <p>Artikel terbaru yang berkaitan dengan kegiatan KPPN Benteng.</p>
                  </div>
                  <div class="news-base col-sm-12 no-padding">
                      <!-- News slider -->
                      <div id="news-slider">
                          <!-- slide 1 -->
                          @foreach($blogs as $blog)
                          <div class="item">
                              <div class="col-sm-12 news-block">
                                  <div class="news-inner">
                                      <img src="/image/blog/{{$blog->cover}}" alt="Services" class="img-responsive center-block" >
                                      <div class="news-text">
                                          <h4><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h4>
                                          <ul class="news-post-info">
                                              <li><i class="fa fa-user"></i>Oleh <span>{{$blog->author}}</span></li>
                                              <li><a href="#"><i class="fa fa-comment-o"></i><span>0</span> Komentar</a></li>
                                          </ul>
                                          <p>{!!$blog->description!!}</p>
                                          <a href="/blog/{{$blog->slug}}">Selengkapnya</a>
                                      </div>
                                      <div class="news-top-btn">
                                          <p class="top-btn">{{date('d F Y',strtotime($blog->created_at))}}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- slide 2 -->
                    @endforeach

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- News end -->

  <!-- Team -->
  <section id="team">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 team-base space">
                  <div id="team-slider">
                      <div class="item">
                          <div class="col-sm-12 team-block text-center">
                              <img src="images/team01.jpg" alt="Testimonials">
                              <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet pellentesque felis. Morbi in sem quis dui placerat ornare.entesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
                              <div class="name">Joko Widodo</div>
                              <div class="profession">Presiden Republik Indonesia</div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Team end -->

  <!-- Partner logo -->
  <section id="partner">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 partner space">
                  <div class="main-heading text-center col-sm-12">
                      <h2>MITRA KERJA</h2>
                      <p>Mitra Kerja KPPN Benteng.</p>
                  </div>
                  <div class="col-sm-12 partner-base no-padding">
                      <ul>
                          <li class="col-sm-2 animate-in left-out">
                              <a href="#"><img src="images/original_100_client-11.png" alt="Partners"></a>
                          </li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Partner logo end -->
@endsection
