<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo-ponpes.ico') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <title>Pondok Pesantren Darul Iman</title>

       
    </head>
    <body>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/ic-logo-ponpes-02.png')}}" height="55" width="195" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Prestasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">kontak</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <button class="btn btn-danger">Register</button>
                </form>
              </div>
            </div>
          </nav>
        {{-- Navbar --}}

        <section id="hero">
            <div class="container text-center text-white">
                <div class="hero-title" data-aos="fade-up">                
                    <div class="hero-text">Selamat Datang Di Pondok Pesantren Darul Iman</div>
                    <p>Sekolah terbaik untuk generasi muda yang terampil, berkarakter dan berwawasan Qur'ani</p>
                </div>
            </div>
        </section>

        <section id="program" style="margin-top: -30px">
          <div class="container col-xxl-9">
            <div class="row">
              <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-item-center">
                  <div>
                    <h5>Pendidikan<br>Berkualitas</h5>
                  </div>
                  <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-item-center">
                  <div>
                    <h5>Pendidikan<br>Berkarakter</h5>
                  </div>
                  <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="">
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-item-center">
                  <div>
                    <h5>Pendidikan<br>Muammalah</h5>
                  </div>
                  <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center">
                  <div>
                    <h5>Pendidikan<br>Teknologi</h5>
                  </div>
                  <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- Berita --}}
        <section id="berita">
          <div class="container py-5">
            <div class="header-berita text-center">
              <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
            </div>

            <div class="row py-5" data-aos="zoom-in">
              <div class="col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                  <div class="konten-berita">
                    <p class="mb-3">30/09/2024</p>
                    <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Darul Iman</h4>
                    <p class="text-secondary">#pesantrenmoderen</p>
                    <a href="" class="text-decoration-none text-success">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                  <div class="konten-berita">
                    <p class="mb-3">30/09/2024</p>
                    <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Darul Iman</h4>
                    <p class="text-secondary">#pesantrenmoderen</p>
                    <a href="" class="text-decoration-none text-success">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                  <div class="konten-berita">
                    <p class="mb-3">30/09/2024</p>
                    <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Darul Iman</h4>
                    <p class="text-secondary">#pesantrenmoderen</p>
                    <a href="" class="text-decoration-none text-success">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="footer-berita text-center">
              <a href="#" class="btn btn-outline-custom">Berita Lainya</a>
            </div>
          </div> 
        </section>
        {{-- Berita --}}

        {{-- Join --}}
        <section id="join" class="py-5">
          <div class="container py-5">
            <div class="row d-flex align-items-center">
              <div class="col-lg-6" data-aos="zoom-in-right"> 
                <div class="d-flex align-item-center mb-3">
                  <div class="stripe me-2"></div>
                  <h5>Daftar Santri</h5>
                </div>
                <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi rabbani </h1>
                <p class="mb-3">Pondok Pesantren Darul Iman merupakan pesantren terbaik di Lampung,
                   dengan meluluskan santi dan menjadi ustadz terkemuka mendakwahkan di pelosok nusantara</p>
                   <button class="btn btn-regis">Register</button>
              </div>  
              <div class="col-lg-6" data-aos="zoom-in-left">
                <img src="{{ asset('assets/images/il-photo-04.png') }}"  class="img-fluid">
              </div>
            </div>
          </div>
        </section>
        {{-- Join --}}

        {{-- Vidio --}}
        <section id="vidio" class="py-5">
          <div class="container py-5" data-aos="zoom-in">
            <div class="text-center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/FKIn3wV8rn0?si=0RFkgM00rra910Uo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </section>
        {{-- Vidio --}}

        <section id="vidio_youtube" class="py-5" data-aos="zoom-in">
          <div class="container">
            <div class="header-berita text-center mb-5">
              <h2 class="fw-bold">Vidio kegiatan Pondok Pesantren</h2>
            </div>
            <div class="row py-5">
              <div class="col-lg-4" data-aos="zoom-in-up">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/FKIn3wV8rn0?si=CutsiuwqWwu4Dk5N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="col-lg-4" data-aos="zoom-in-up">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/FKIn3wV8rn0?si=CutsiuwqWwu4Dk5N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="col-lg-4" data-aos="zoom-in-up">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/FKIn3wV8rn0?si=CutsiuwqWwu4Dk5N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
            <div class="footer-berita text-center">
              <a href="" class="btn btn-outline-success">Berita Lainnya</a>
            </div>
          </div>
        </section>

        {{--  --}}
        <section id="foto" class="section-foto parallax" data-aos="zoom-in-up">
          <div class="container">
            <div class="d-flex justify-content-between alignt-items-center mb-5">
              <div class="d-flex align-items-center">
                <div class="stripe-putih me-2
                "></div>
                <div class="fw-bold text-white">Foto Kegiatan</div>
              </div>
              <div>
                <a href="" class="btn btn-outline-white">Foto Lainnya</a>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ ('assets/images/il-photo-02.png') }}"  class="img-fluid">
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ ('assets/images/il-photo-02.png') }}"  class="img-fluid">
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ ('assets/images/il-photo-02.png') }}"  class="img-fluid">
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ ('assets/images/il-photo-02.png') }}"  class="img-fluid">
              </div>
            </div>
            
          </div>
        </section>
        {{--  --}}

        {{-- Fasilitas --}}
        <section id="fasilitas" class="py-5" data-aos="zoom-in-up">
          <div class="container py-5">
            <div class="text-center mb-5">
              <div>
                <h3 class="fw-bold">Fasilitas Pesantren</h3>
              </div>
            </div>
            <img src="{{ asset('assets/images/il-bg-video.png') }}" class="img-fluid">
            <div class="text-center mt-3">
              <a href="" class="btn btn-outline-success">Fasilitas Lainnya</a>
            </div>
          </div>
        </section>
        {{-- Fasilitas --}}

        {{-- Footer --}}
        <section id="footer" class="bg-white" data-aos="zoom-out">
          <div class="container py-4" >
            <footer>
              <div class="row">
                {{-- kolom 1 Navigasi --}}
                <div class="col-12 col-md-3 mb-3">
                  <h5 class="fw-bold mb-3">Navigasi</h5>
                  <div class="d-flex">
                    <ul class="nav flex-column me-5">
                      <li class="nav-item mb-2"><a href="/berita" class="nav-link p-0 text-muted">Berita Pesantren</a></li>
                      <li class="nav-item mb-2"><a href="/berita" class="nav-link p-0 text-muted">Kegiatan Pesantren</a></li>
                      <li class="nav-item mb-2"><a href="/berita" class="nav-link p-0 text-muted">Gallery Pesantren</a></li>
                      <li class="nav-item mb-2"><a href="/berita" class="nav-link p-0 text-muted">Kegiatan Sosial</a></li>
                    </ul>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Alumni</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Info PSB</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prestasi</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Vidio Kegiatan</a></li>
                    </ul>
                  </div>
                </div>

                {{-- Kolom 2 Media Sosial--}}
                <div class="col-12 col-md-3 mb-3">
                  <h5 class="fw-bold mb-3">Follow Kami</h5>
                  <div class="d-flex">
                    <a href="https://www.instagram.com/ponpes.daruliman/" target="_blank" class="text-decoration-none text-dark">
                      <img src="{{ asset('assets/icons/instagram.svg') }}" height="30" width="30" class="me-4">
                    </a>
                    <a href="https://wa.me/6285769515062" target="_blank" class="text-decoration-none text-dark">
                      <img src="{{ asset('assets/icons/whatsapp.svg') }}" height="30" width="30" class="me-4">
                    </a>
                  </div>
                </div>

                {{-- Kolom 3 Kontak --}}
                <div class="col-12 col-md-3 mb-3">
                  <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">infoponpes.src.id</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">0813-xxxx-xxxx</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">0813-xxxx-xxxx</a></li>
                  </ul>
                </div>

                {{-- Kolom 4 Alamat --}}
                <div class="col-12 col-md mb-3">
                  <h5 class="font-inter fw-bold mb-3">Alamat Sekolah</h5>
                  <p>pondok pesantren darul iman, samping kopra, kampung umbul kates, desa tanjung sari 5, natar. Unnamed Road, Tanjungsari, Kec. Natar, Kabupaten Lampung Selatan, Lampung 35362, Indonesia</p>
                </div>
              </div>
            </footer>
          </div>
        </section>
        {{-- Footer --}}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          const navbar = document.querySelector('.fixed-top');
          window.onscroll = () => {
              if (window.scrollY > 100) {
                  navbar.classList.add("scroll-nav-active");
                  navbar.classList.add("text-nav-active");
                  navbar.classList.remove("navbar-dark");
              } else {
                  navbar.classList.remove("scroll-nav-active");
                  navbar.classList.add("navbar-dark");
              }
          }

        </script>
<script>
  AOS.init();
</script>
        
      
    </body>
</html>
