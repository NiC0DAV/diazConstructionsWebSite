<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diaz Constructions</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ url('./css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('./css/lightbox.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
       
        <!-- JS -->
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
        <script src="https://kit.fontawesome.com/a4edce8cc0.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ url('./js/main.js') }}"></script>

    </head>
    <body id="body">

        <header id="header">
                <a href="#" class="logo">Diaz Constructions</a>
                <div id="toggle" onclick=navToggle();></div>
                <div id="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#abUsSec">About Us</a></li>
                        <li><a href="#ProfessionalServices">Services</a></li>
                        <li><a href="#sectionGallery">Gallery</a></li>
                        <li><a href="#reviewsSection">Reviews</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>
        </header>

        <div class="responsive-menu">
            <section id="Home">Home Page</section>
            <section id="abUs">About Us</section>
            <section id="services">Services</section>
            <section id="gallery">Gallery</section>
            <section id="reviews">Reviews</section>
            <section id="conUs">Contact Us</section>
        </div>
                    
        <section class="sliderSection">
            <div class="slider">
                @foreach($images as $image)
                    @if($image->sliderStatus == 1)
                        <div class="slide @if ($loop->index == 0) active @endif">
                            <img class="sliderImage" src="{{ url('uploads/'.$image->pathImage) }}" alt="">
                            <div class="content">
                                <h2>{{ $image->imageTitle }}</h2>
                                <p>
                                    {{ $image->imageDescription }}
                                </p>
                                <a href="#sectionGallery">View More Images</a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="navigation">
                <i class="fas fa-chevron-left prev-btn"></i>
                <i class="fas fa-chevron-right next-btn"></i>
                </div>

                <div class="navigation-visibility">
                    @foreach($images as $image)
                        @if($image->sliderStatus == 1)
                            <div class="slide-icon @if ($loop->index == 0) active @endif"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

            <div class="mainContainer" id="abUsSec">
                <div class="abUsBx">
                    <div class="abUsContent" >
                        <h1>ABOUT US</h1>
                        <hr>
                        <p>{{ $content->aboutUsText }}</p>
                    </div>
                </div>
                <div class="abUsCardContainer">
                    <div class="container">
                        <div class="abUsCard">
                            <div class="circle">
                                <h2>Mission</h2>
                            </div>
                            <div class="cardContent">
                                <p>
                                    {{ $content->mission }}
                                </p>
                            </div>
                        </div>
                        <div class="abUsCard">
                            <div class="circle">
                                <h2>Vision</h2>
                            </div>
                            <div class="cardContent">
                                <p>
                                    {{ $content->vission }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                

                <img src="{{ url('storage/images/wave1.png')}}" alt="" class="wavePath">
            </div>
            {{-- <div class="userSatisfy">
                <h1>Hola</h1>
            </div> --}}
            {{-- <div class="pfServices">
                <div class="pfServicesContainer">
                    
                    

                </div>
            </div> --}}
            <div class="mainContainer2" id="ProfessionalServices">
            <img src="{{ url('storage/images/wave2.png')}}" alt="" class="wavePath2">
            <div class="pfSVContainer" id="pfSVContainer">
                <h1 class="pfSvTitle">Professional Services</h1>
                <section class="pfSvSec">
                    <div class="pfSvContainer left-side">
                        <div class="left"></div>
                        <div class="right">
                            <div class="content" style="color:#fff">
                                <h1>Professional Services</h1>
                                <p>Quality Work Great Rates</p>
                                <p>
                                    {{ $content->pfSv1 }}
                                </p>
                                    {{-- <a href="#" class="btn">Click Me</a> --}}
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pfSvSec">
                    <div class="pfSvContainer right-side">
                        <div class="left"></div>
                        <div class="left1">
                            <div class="content" style="color:#fff">
                                <h1>Professional Services</h1>
                                <p>Customized To Your Preferences</p>
                                <p>
                                    {{ $content->pfSv2 }}
                                </p>
                                    {{-- <a href="#" class="btn">Click Me</a> --}}
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="gallery" id="sectionGallery">
                <h1 class="galleryTitle">Images Gallery</h1>
                <section class="sectionGallery" id="sectionGallery">
                    @foreach ($images as $image)
                        
                        <a class="example-image-link" href="{{ url('uploads/'.$image->pathImage) }}" data-lightbox="example-1">
                            <img class="example-image" src="{{ url('uploads/'.$image->pathImage) }}" alt="image-1" />
                        </a> 
                        
                    @endforeach
                </section>
            </div>
            
            <h1 class="reviewsTitle" id="reviewsSection">Reviews</h1>
            <div class="containerReviewButton">
                <a href="/newReview" target="_blank" class="btn-review">Leave a Review</a>
            </div>
            <div class="reviewsBackg">
                <div class="reviewsBody">
                    <div class="reviewsContainer">
                    @php
                        $count = 0;
                    @endphp
                    @foreach($reviews as $review)
                    @break($count == 8)
                    @if($review->reviewStatus == 1)
                        <div class="reviewCard">
                            <div class="cardContent">
                                <h2>{{ $review->userLocation }}</h2>
                                <h3>{{ $review->userName }}</h3>
                                <p>
                                    {{ $review->userDescription }}
                                </p>
                            </div>
                        </div>
                    @endif
                        @php
                        $count++;
                        @endphp
                    @endforeach
                    @if ($count == 0)
                        <h3>Ouch! sorry, there aren't reviews available to show</h3>
                    @endif
                    </div>
                </div>
                
            </div>
        </div>
            <img src="{{ url('storage/images/wave.svg')}}" alt="" class="waveFooter">

            <div class="footer">
                <footer>
                    <div class="footerContainer">
                        <div class="sec aboutUsFooter">
                            <div class="companyName">
                                <h2>About Us</h2>
                            </div>
                            <p>
                                {{ $content->aboutUsText }}
                            </p>
                            <ul class="sci">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="sec quickLinks">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#abUsSec">About</a></li>
                                <li><a href="#ProfessionalServices">Services</a></li>
                                <li><a href="#sectionGallery">Gallery</a></li>
                                <li><a href="#reviewsSection">Reviews</a></li>
                            </ul>
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.663825917543!2d-73.69786728411115!3d40.747422179327984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26286bce3c663%3A0x3b8bacc570ae03d9!2s2%20Flower%20Ln%2C%20New%20Hyde%20Park%2C%20NY%2011040%2C%20EE.%20UU.!5e0!3m2!1ses!2sco!4v1631813475966!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                        </div>

                        <div class="sec contactFooter">
                            <h2>Contact Information</h2>
                            <ul class="info">
                                <li>
                                    <span><i class="bi bi-geo-alt-fill"></i></span>
                                    <span>Address: {{ $content->address }}</span>
                                </li>
                                <li>
                                    <span><i class="bi bi-telephone-fill"></i>
                                    <span>Tel: {{ $content->telText }}</span>
                                </li>
                                <li>
                                    <span><i class="bi bi-envelope-fill"></i></span>
                                    <span>Email: {{ $content->emailText }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <div class="copyRightText">
                    <p>Copyright &copy; 2021 Diaz Constructions. All rights reserved.</p>
                </div>
            </div>
        
        <script type="text/javascript">
            if (window.screen.width > 780) {
                document.write( 
                    '<script type="text/javascript" src="{{ url("./js/vanilla-tilt.js") }}"><\/script>'
                )
            }
        </script>
        <script type="text/javascript" src="{{ url('./js/lightbox.js') }}"></script>
        <script type="text/javascript" src="{{ url('./js/lightbox.js') }}"></script>' +
        <script type="text/javascript">
            VanillaTilt.init(document.querySelectorAll(".reviewCard"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 1,
            });
            
            //It also supports NodeList
            VanillaTilt.init(document.querySelectorAll(".reviewCard"));
        </script>
    </body>
</html>