<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NYAPA-CRM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="images/logo-nyapa.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-B5DlOgDTPInCq3Ury6L9HCA8HSNlOfJnKcFCaDoSxrGax5/dBsMMa4n7F8zzN/C2" crossorigin="anonymous">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo"><img src="{{asset('images/logo-nyapa.png')}}" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#banner">Home</a></li>
                    <li><a class="nav-link scrollto" href="#hero">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    @foreach ($buttonlink as $buttonlink )
                    <li><a class="getstarted scrollto" href="{{$buttonlink->link}} " target="_blank"><i class="bx bx-phone"></i> Mulai Sekarang</a></li>    
                    @endforeach
                    
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= banner Section ======= -->
    
    <section id="banner" class="d-flex align-items-center">
        <div class="square">
            <img class="boxBanner" src="{{asset('assets/img/box-banner.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                @if ($banner = $banner->first() )
                    <div class="col-md-6 text-justify">
                        <h3>{{$banner->header}}</h3>
                        <h1>{{$banner->title}}</h1>
                        <h3>{{$banner->details}}</h3>
                        <div class="text-left">
                            <a href="{{$buttonlink->link}}" target="_blank" class="btn-get-started scrollto"><i class="bx bx-phone"></i>Mulai Sekarang</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ url('storage/' . $banner->images) }}" alt="Logo" />
                        
                    </div>
                @endif
            </div>
        </div>
    </section><!-- End Banner -->

    <main id="main">

        <!-- ======= Hero Section ======= -->
   
        <section id="hero" class="d-flex align-items-center">
            <div class="square">
                <img class="boxHero" src="{{ asset('assets/img/box-hero.png') }}"
                    alt="">
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($hero as $hero )
                    <div class="col-md-3 mb-5 text-justify" style="display: inline-block; margin-right: -10px">
                        <img src="{{ url('storage/'.$hero->image1)}}" alt="Logo" class="img-fluid" />
                    </div>
                    <div class="col-md-3 mb-5 text-center" style="display: inline-block; margin-left: 0px">
                        <img src="{{ url('storage/'.$hero->image2)}}" alt="Logo" class="img-fluid" />
                    </div>
                    <div class="text">
                        <h1>{{$hero->header}}</h1>
                        <p>
                        <h5>{{$hero->details}}</h5>
                        </p>
                        <div class="details-link">
                            <a href="https://www.contoh.com">
                                Selengkapnya
                                <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Hero -->

        <section id="services">
            <div class="container">
                <div class="square">
                    <img class="boxServices" src="{{asset('assets/img/box-services.png')}}" alt="">
                </div>
                <div class="text">
                    @foreach ($service as $service )
                        <h1>{{$service->header}}
                        </h1>
                        <p>{{$service->detail}}
                        <p>
                            {{$service->text}}
                        </p>
                        </p>
                        <div class="text-left">
                            <a href="{{$buttonlink->link}}" target="_blank" class="btn-get-started scrollto"><i class="bx bx-phone"></i> Coba Sekarang</a>
                        </div>
                    @endforeach
                </div>
                <div class="cards-container">
                    @foreach ([$firstSetOfData, $secondSetOfData] as $cardSet)
                    <div class="cards">
                        @foreach ($cardSet as $data)
                        <div class="card">
                            <i class="bx {{ $data->icon->icon_code }}"></i>
                            <h3>{{ $data->title }}</h3>
                            <p>{{ $data->detail }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="square">
                <img class="boxPricing" src="{{ asset('assets/img/box-pricing.png') }}" alt="">
            </div>
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        
                <div class="section-title">
                    <h2>Paket Menarik Buatmu</h2>
                </div>
                <div class="row">
                    @foreach($packetNames as $packetName)
                    <div class="col-lg-4 col-md-4" data-aos="zoom-im" data-aos-delay="100">
                        <div class="box featured">
                            <span class="badge-pricing">
                                {{$packetName->packet_name}}
                            </span>
                            <h4><sup>Rp</sup>{{ $packetName->price }}<span>{{$packetName->unit}}</span></h4>
                            <h3>{{$packetName->type}}</h3>
                            <hr>
                            <ul>
                                @foreach($packetName->features as $feature)
                                    <li><i class="{{$feature->icon}}"></i>{{ $feature->name }}<i class="{{$feature->icon}}"></i></li>
                                @endforeach
                            </ul>
                            <div class="btn-wrap">
                                <a href="{{$buttonlink->link}}" class="btn-buy">
                                    Pilih Paket
                                    <i class="bx bx-right-arrow-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="fade-up">
                
                        <div class="section-title">
                            <h2>Apa Kata Mereka</h2>
                        </div>
                
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial )
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="rating">
                                            <label for="star-rating-{{$testimonial->id}}"></label>
                                            <div class="stars">
                                                @for ($i = 1; $i <= 5; $i++) @if ($i <=$testimonial->rating)
                                                    <i class="bx bxs-star" data-value="{{$i}}"></i>
                                                    @else
                                                    <i class="bx bx-star" data-value="{{$i}}"></i>
                                                    @endif
                                                    @endfor
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{$testimonial->quote}}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ url('storage/' . $testimonial->images) }}" class="testimonial-img" alt="">
                                        <h3>{{$testimonial->name}}</h3>
                                        <h4>{{$testimonial->job}}</h4>
                                    </div>
                                </div><!-- End testimonial item -->
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            
                        </div>
                
                    </div>
                </section><!-- End Testimonials Section -->

                <section id="started" class="d-flex align-items-center">
                    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                        <div class="row">
                            @foreach ($started as $started)
                            <div class="col-md-12 text-center">
                                <h1>{{$started->header}}</h1>
                                    <p>
                                        <h3>{{$started->details}}</h3>
                                    <p>
                                        <h3>{{$started->text}}</h3></p>
                                </p>
                                @endforeach
                                <div class="text-center">
                                    <a href="{{$buttonlink->link}}" target="_blank" class="btn-get-started scrollto">
                                    <i class="bx bx-phone"></i>Mulai Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="{{asset('images/logo-nyapa-white.png')}}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">Term & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Project</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>About</h4>
                        <ul>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Store</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Product</h4>
                        <ul>
                            @foreach ($product as $product)
                            <li><a href="{{ $product->link }}" target="_blank">{{ $product->product_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Social</h4>
                        <ul>
                            @foreach ($social as $socialItem)
                            <li><i class="{{ $socialItem->icon->icon_code }}"><a href="{{ $socialItem->link }}">{{ $socialItem->social }}</a></i>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <hr>
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright {{date('Y')}} <strong><span>Nyapa CRM</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>