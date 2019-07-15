<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bayarku | Lazisnu Lamongan</title>

    <!-- Social FOnt Icon -->
    <link rel="stylesheet" href="https://s3.amazonaws.com/icomoon.io/114779/Socicon/style.css?9ukd8d">
    <!-- Bootstrap CSS Libarary -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- SLic ThemeCSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick-theme.css') }}"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">
  </head>
  <body>

  <nav id="navTop" class="navbar navbar-expand-lg navbar-light bg-first fixed-top">
    <div class="container-fluid">
      <a href="/" style="text-decoration: none;">
<!--         <img id="img-logo" src="{{ asset('img/logo_.png') }}" width="71px" height="58px">
        <img id="img-logo2" src="{{ asset('img/tittle_.png') }}" width="149px" height="30px"> -->
        <h1 class="logo">Bayarku</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#mainHeader">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fitur">Fitur</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trig-ydsf">Partner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trig-promo">Promo Produk</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimoni">Testimoni</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header id="mainHeader">
    <div class="container-fluid">
      <div class="box">
        <img src="{{ asset('img/ornament.png') }}"
             srcset="{{ asset('img/ornament@2x.png') }} 2x,
                     {{ asset('img/ornament@3x.png') }} 3x"
             class="Ornament">
         <img src="{{ asset('img/icon.png') }}"
              srcset="{{ asset('img/icon@2x.png') }} 2x,
                      {{ asset('img/icon@3x.png') }} 3x"
              class="Icon">
        <img src="{{ asset('img/mobile-01.png') }}"
             srcset="{{ asset('img/mobile-01@2x.png') }} 2x,
                     {{ asset('img/mobile-01@3x.png') }} 3x"
             class="Mobile-01">
       <img src="{{ asset('img/mobile-02.png') }}"
            srcset="{{ asset('img/mobile-02@2x.png') }} 2x,
                    {{ asset('img/mobile-02@3x.png') }} 3x"
            class="Mobile-02">
      </div>
      <div class="heading text-center">
        <img src="{{ asset('img/ornament.png') }}"
             srcset="{{ asset('img/ornament@2x.png') }} 2x,
                     {{ asset('img/ornament@3x.png') }} 3x"
             class="Ornament">
        <div class="title">Satu aplikasi untuk semua kebutuhan pembayaran anda</div>
        <div class="desc">Aplikasi multi payment yang mempermudah anda dalam melakukan pembayaran<br>kebutuhan sehari hari.</div>
        <div class="button">
          <a href="#fitur" class="btn btn-primary-orange btn-lg learn">Learn More</a>
          <a href="http://www.youtube.com/bayarin" target="_blank" class="btn btn-primary-orange-outline btn-lg video">
            <img src="{{ asset('img/icon-play.png') }}"
                 srcset="{{ asset('img/icon-play@2x.png') }} 2x,
                         {{ asset('img/icon-play@3x.png') }} 3x"
                 class="Icon-Play"><span>Watch Video</span>
          </a>
        </div>
      </div>
    </div>
  </header>

  <section id="fitur">
    <div class="container-fluid">
      <div class="row top">
        <div class="col-12 col-sm-12 col-md-6 text text-right two-sec">
          <div class="title">Pembayaran<br>Listrik, Pulsa etc.</div>
          <div class="desc">Satu aplikasi untuk semua kebutuhan pembayaran mulai dari Listrik, Pulsa, BPJS, dan kebutuhan lainnya</div>
          <div class="button">
            <p>Download Aplikasi</p>
            <a href="https://play.google.com/store/apps/details?id=com.aknela.bayarinaja" target="_blank" class="btn btn-primary-orange btn-lg btn-download">
              <img src="{{ asset('img/icon-playstore.png') }}"
                   srcset="{{ asset('img/icon-playstore@2x.png') }} 2x,
                           {{ asset('img/icon-playstore@3x.png') }} 3x"
                   class="Icon-Playstore"><span>Playstore</span>
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 phone" style="background-image: url({{ asset('img/ornament.png') }})">
          <img src="{{ asset('img/mobile-03.png') }}"
               srcset="{{ asset('img/mobile-03@2x.png') }} 2x,
                       {{ asset('img/mobile-03@3x.png') }} 3x"
               class="Mobile-03">
        </div>
      </div>
      <div class="row mid align-items-center">
        @foreach ($partners as $partner)
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-center">
          <img src="{{ asset('storage/'.$partner->image) }}" class="px-Logo_PLNsvg" alt="{{ $partner->name }}">
        </div>
        @endforeach
      </div>
    </div>
    <div class="bot">
      <div class="feature-icon">
        @foreach ($features as $feature)
        <div class="slide">
          <img src="{{ asset('storage/'.$feature->image) }}" class="Icon" alt="{{ $feature->name }}"><div class="text">{{ $feature->name }}</div>
        </div>
        @endforeach
      </div>

    </div>

  </section>

  <section id="ydsf">
    <div class="container-fluid">
      <div id="trig-ydsf" class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 card-text">
          <div class="rectangle rect-1 align-item-center">
            <img src="{{ asset('img/icon-bantuan.png') }}" class="icon">
            <div class="title">Bantuan kemanusiaan</div>
            <div class="desc">Salurkan kepedulian anda membantu saudara kita yang tertimpa musibah</div>
          </div>
          <div class="rectangle rect-1 align-item-center">
            <img src="{{ asset('img/icon-infaq.png') }}" class="icon">
            <div class="title">Infaq dan sedekah</div>
            <div class="desc">Salurkan Infaq dan Sedekah anda dengan mudah dan aman melalui aplikasi bayarku</div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 text two-sec">
          <div class="bread">bayarku dan lazisnu</div>
          <div class="title">Peduli sesama melalui jalinan kasih</div>
          <div class="desc">Bayarku dan Lazisnu Lamongan bekerja sama dalam menualurkan dana sosial untuk membantu sesama</div>
          <div class="button">
            <p>Download Aplikasi</p>
            <a href="https://play.google.com/store/apps/details?id=com.kafa.ydsfmobile" target="_blank" class="btn btn-primary-green btn-lg btn-download">
              <img src="{{ asset('img/icon-playstore.png') }}"
                   srcset="{{ asset('img/icon-playstore@2x.png') }} 2x,
                           {{ asset('img/icon-playstore@3x.png') }} 3x"
                   class="Icon-Playstore"><span>Playstore</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="promo">
    <div class="container-fluid">
      <div id="trig-promo" class="heading-sec text-center">
        <div class="title">Promo Produk Unggulan Lokal</div>
        <div class="desc">Informasi Produk unggulan berkualitas di sekitar anda</div>
      </div>
      <div class="row content">
        @foreach($deals as $deal)
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="promo-card">
            <img src="{{ asset('storage/'.$deal->thumbnail) }}" class="img-promo">
            <div class="text-promo">
              <div class="time">
                <img src="{{ asset('img/icon-time.png') }}"
                     srcset="{{ asset('img/icon-time@2x.png') }} 2x,
                             {{ asset('img/icon-time@3x.png') }} 3x"
                     class="Icon-Time">
                <span>Published on {{ $deal->created_at->format('d M Y') }}</span>
              </div>
              <div class="title"><a href="promo/{{ $deal->id }}">{{ $deal->title }}</a></div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="button text-center">
        <a href="#" class="btn btn-primary-grey-outline btn-lg view-all">View All Promotion</a>
      </div>
    </div>
  </section>

  <section id="testimoni">
    <div class="container-fluid">
      <div class="heading-sec2 text-center">
        <div class="title">Testimoni Pengguna</div>
        <div class="desc">Cerita kepuasan layanan konsumen dan mitra Bayarku.</div>
        <div class="box-testimoni">
          @foreach($testimonis as $testimoni)
          <div class="box">
            <div class="quote">‘’ {{ $testimoni->testimoni }} ‘’</div>
            <div class="people">
              <img src="{{ asset('storage/'.$testimoni->image) }}" class="img-people">
              <div class="text">
                <div class="name">{{ $testimoni->name }}</div>
                <div class="sub">{{ $testimoni->sub_name }}</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section id="join">
      <div class="box">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-10">
            <div class="text">
              Gabung dan menjadi mitra<br>
              Bayarku Nikmati kemudahan transaksi<br>
              untuk bisnis anda
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-2 align-items-center">
            <a href="#" class="btn-btn btn btn-primary-orange btn-lg"><span class="btn-text">Join Now</span></a>
          </div>
        </div>
      </div>
  </section>

  <footer id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center logo">
        <img src="{{ asset('img/logo_.png') }}"
             srcset="{{ asset('img/logo@2x.png') }} 2x,
                     {{ asset('img/logo@3x.png') }} 3x"
             class="foot-logo" width="90%">
          <ul class="social">
            <li><a href="#"><span class="socicon socicon-twitter"></span></a></li>
            <li><a href="#"><span class="socicon socicon-facebook"></span></a></li>
            <li><a href="#"><span class="socicon socicon-youtube"></span></a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
          <div class="title">Product</div>
          <ul class="foot-list">
            <li><a href="">Listrik PLN dan Token</a></li>
            <li><a href="">Pulsa</a></li>
            <li><a href="">BPJS Kesehatan</a></li>
            <li><a href="">TV Berlangganan</a></li>
            <li><a href="">Indihome</a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
          <div class="title">Company</div>
          <ul class="foot-list">
            <li><a href="">Our Partner</a></li>
            <li><a href="">Lazisnu</a></li>
            <li><a href="">Mitra Bayarku</a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
          <div class="title">Quick Link</div>
          <ul class="foot-list">
            <li><a href="">Join with Us</a></li>
            <li><a href="">Help and Support</a></li>
            <li><a href="">F A Q</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <section id="copyright">
    <div class="text-center">
      <div class="text">2019 © PT. Barokah Artha Agung. All rights reserved.</div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  </body>
</html>
