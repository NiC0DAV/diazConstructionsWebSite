<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ url('./css/style.css') }}">

        <!-- JS -->
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
        <script type="text/javascript" src="{{ url('./js/main.js') }}"></script>
        <script src="https://kit.fontawesome.com/a4edce8cc0.js" crossorigin="anonymous"></script>

    </head>
    <body>
        
        <header id="header">
            {{-- <div id="headerContainer"> --}}
                <a href="#" class="logo">Diaz Constructions</a>
                {{-- <img src="{{ url('storage/images/logo.png')}}" alt=""> --}}
                <div id="toggle" onclick=navToggle();></div>
                <div id="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#abUsSec">About Us</a></li>
                        <li><a href="#ProfessionalServices">Services</a></li>
                        <li><a href="#sectionGallery">Gallery</a></li>
                        <li><a href="#reviewsSection">Reviews</a></li>
                        <li><a href="#" onclick=modalToggle();>Contact Us</a></li>
                    </ul>
                </div>
            {{-- </div> --}}
        </header>

        <div class="responsive-menu">
            <section id="Home">Home Page</section>
            <section id="abUs">About Us</section>
            <section id="services">Services</section>
            <section id="gallery">Gallery</section>
            <section id="reviews">Reviews</section>
            <section id="conUs">Contact Us</section>
        </div>

        {{-- <div id="popup">
            <h2>Hola</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo doloribus neque nam temporibus asperiores distinctio aspernatur,
                ad culpa ipsa quidem obcaecati sunt in dolorum tempore doloremque corporis cum, aut error magni fuga quae quod? Totam consectetur 
                est expedita laborum eos recusandae harum reiciendis, dolor eveniet doloremque doloribus quia voluptate repellat quo quisquam deserunt, 
                quos sequi quod id at quae explicabo!</p>
                <a onclick=modalToggle();>Close</a>
        </div> --}}
        
            <div class="slider" id="slider">
                <input type="radio" name="slider" id="checkbox1" checked="true" value="">
                <div class="imgBx">
                    <img class="sliderImage" src="{{ url('storage/images/img1.jpg')}}" alt="">
                    <div class="content">
                        <h2>Slide One</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi vero illo modi a recusandae debitis. 
                            Est sit a porro et, perspiciatis blanditiis sed nobis possimus mollitia magni fugit nihil illo ullam eveniet quam. 
                            Culpa ab illo id fuga laborum consequuntur impedit nesciunt eos fugiat iure ipsa amet, doloribus nihil!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium magnam, enim harum quidem quasi accusamus tempore? 
                            Qui natus corrupti cumque.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <input type="radio" name="slider" id="checkbox2">
                <div class="imgBx">
                    <img class="sliderImage" src="{{ url('storage/images/img2.jpg')}}" alt="">
                    <div class="content">
                        <h2>Slide Two</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi vero illo modi a recusandae debitis. 
                            Est sit a porro et, perspiciatis blanditiis sed nobis possimus mollitia magni fugit nihil illo ullam eveniet quam. 
                            Culpa ab illo id fuga laborum consequuntur impedit nesciunt eos fugiat iure ipsa amet, doloribus nihil!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium magnam, enim harum quidem quasi accusamus tempore? 
                            Qui natus corrupti cumque.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <input type="radio" name="slider" id="checkbox3">
                <div class="imgBx">
                    <img class="sliderImage" src="{{ url('storage/images/img3.jpg')}}" alt="">
                    <div class="content">
                        <h2>Slide Three</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi vero illo modi a recusandae debitis. 
                            Est sit a porro et, perspiciatis blanditiis sed nobis possimus mollitia magni fugit nihil illo ullam eveniet quam. 
                            Culpa ab illo id fuga laborum consequuntur impedit nesciunt eos fugiat iure ipsa amet, doloribus nihil!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium magnam, enim harum quidem quasi accusamus tempore? 
                            Qui natus corrupti cumque.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <input type="radio" name="slider" id="checkbox4">
                <div class="imgBx">
                    <img class="sliderImage" src="{{ url('storage/images/img4.jpg')}}" alt="">
                    <div class="content">
                        <h2>Slide Four</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi vero illo modi a recusandae debitis. 
                            Est sit a porro et, perspiciatis blanditiis sed nobis possimus mollitia magni fugit nihil illo ullam eveniet quam. 
                            Culpa ab illo id fuga laborum consequuntur impedit nesciunt eos fugiat iure ipsa amet, doloribus nihil!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium magnam, enim harum quidem quasi accusamus tempore? 
                            Qui natus corrupti cumque.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <input type="radio" name="slider" id="checkbox5">
                <div class="imgBx">
                    <img class="sliderImage" src="{{ url('storage/images/img5.jpg')}}" alt="">
                    <div class="content">
                        <h2>Slide Five</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi vero illo modi a recusandae debitis. 
                            Est sit a porro et, perspiciatis blanditiis sed nobis possimus mollitia magni fugit nihil illo ullam eveniet quam. 
                            Culpa ab illo id fuga laborum consequuntur impedit nesciunt eos fugiat iure ipsa amet, doloribus nihil!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium magnam, enim harum quidem quasi accusamus tempore? 
                            Qui natus corrupti cumque.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="mainContainer" id="abUsSec">
                <div class="abUsBx">
                    <div class="abUsContent" >
                        <h1>ABOUT US</h1>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Harum quae aliquid rerum laborum nisi quidem fugit aspernatur rem voluptatum nesciunt reiciendis adipisci ipsum, 
                            earum voluptatibus magnam perspiciatis provident officia pariatur! Quisquam odio quos deserunt quas architecto tenetur 
                            debitis accusantium omnis?</p>
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
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi vero illo modi a recusandae debitis. 
                                    Est sit a porro et, perspiciatis blanditiis sed nobis possimus mollitia magni fugit nihil illo ullam eveniet quam. 
                                    Culpa ab illo id fuga.
                                </p>
                            </div>
                        </div>
                        <div class="abUsCard">
                            <div class="circle">
                                <h2>Vision</h2>
                            </div>
                            <div class="cardContent">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi vero illo modi a recusandae debitis. 
                                    Est sit a porro et, perspiciatis blanditiis sed nobis possimus mollitia magni fugit nihil illo ullam eveniet quam. 
                                    Culpa ab illo id fuga
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
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                    Harum quae aliquid rerum laborum nisi quidem fugit aspernatur rem voluptatum nesciunt reiciendis adipisci ipsum, 
                                    earum voluptatibus magnam perspiciatis provident officia pariatur! Quisquam odio quos deserunt quas architecto tenetur 
                                    debitis accusantium omnis?
                                </p>
                                    <a href="#" class="btn">Click Me</a>
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
                                <p>Quality Work Great Rates</p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                    Harum quae aliquid rerum laborum nisi quidem fugit aspernatur rem voluptatum nesciunt reiciendis adipisci ipsum, 
                                    earum voluptatibus magnam perspiciatis provident officia pariatur! Quisquam odio quos deserunt quas architecto tenetur 
                                    debitis accusantium omnis?
                                </p>
                                    <a href="#" class="btn">Click Me</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="gallery" id="sectionGallery">
                <h1 class="galleryTitle">Images Gallery</h1>
                {{-- <span class="linea"></span> --}}
                <section class="sectionGallery" id="sectionGallery">
                    <a href="#image1" class="galleryHiperV">
                        <img src="{{ url('storage/images/uno.jpg')}}" alt="">
                    </a>
                    <a href="#image2">
                        <img src="{{ url('storage/images/dos.jpg')}}" alt="">
                    </a>
                    <a href="#image3" >
                        <img src="{{ url('storage/images/tres.jpg')}}" alt="">
                    </a>
                    <a href="#image4">
                        <img src="{{ url('storage/images/cuatro.jpg')}}" alt="">
                    </a>
                    <a href="#image5">
                        <img src="{{ url('storage/images/cinco.jpg')}}" alt="">
                    </a>
                    <a href="#image6">
                        <img src="{{ url('storage/images/seis.jpg')}}" alt="">
                    </a>
                </section>

                <article class="light-box" id="image1">
                    <a href="#image6" class="next"><i class="fas fa-arrow-left"></i></a>
                    <img src="{{ url('storage/images/uno.jpg')}}" alt="">
                    <a href="#image2" class="next"><i class="fas fa-arrow-right"></i></a>
                    <a href="#sectionGallery" class="close">X</a>
                </article>

                <article class="light-box" id="image2">
                    <a href="#image1" class="next"><i class="fas fa-arrow-left"></i></a>
                    <img src="{{ url('storage/images/dos.jpg')}}" alt="">
                    <a href="#image3" class="next"><i class="fas fa-arrow-right"></i></a>
                    <a href="#sectionGallery" class="close">X</a>
                </article>
                
                <article class="light-box" id="image3">
                    <a href="#image2" class="next"><i class="fas fa-arrow-left"></i></a>
                    <img src="{{ url('storage/images/tres.jpg')}}" alt="">
                    <a href="#image4" class="next"><i class="fas fa-arrow-right"></i></a>
                    <a href="#sectionGallery" class="close">X</a>
                </article>

                <article class="light-box" id="image4">
                    <a href="#image3" class="next"><i class="fas fa-arrow-left"></i></a>
                    <img src="{{ url('storage/images/cuatro.jpg')}}" alt="">
                    <a href="#image5" class="next"><i class="fas fa-arrow-right"></i></a>
                    <a href="#sectionGallery" class="close">X</a>
                </article>

                <article class="light-box" id="image5">
                    <a href="#image4" class="next"><i class="fas fa-arrow-left"></i></a>
                    <img src="{{ url('storage/images/cinco.jpg')}}" alt="">
                    <a href="#image6" class="next"><i class="fas fa-arrow-right"></i></a>
                    <a href="#sectionGallery" class="close">X</a>
                </article>

                <article class="light-box" id="image6">
                    <a href="#image5" class="next"><i class="fas fa-arrow-left"></i></a>
                    <img src="{{ url('storage/images/seis.jpg')}}" alt="">
                    <a href="#image1" class="next"><i class="fas fa-arrow-right"></i></a>
                    <a href="#sectionGallery" class="close">X</a>
                </article>
            </div>
            
            <h1 class="reviewsTitle" id="reviewsSection">Reviews</h1>
            <div class="reviewsBackg">
                <div class="reviewsBody">
                    <div class="reviewsContainer">
                    @php
                        $count = 0;
                    @endphp
                    @foreach($reviews as $review)
                    @break($count == 8)
                        <div class="reviewCard">
                            <div class="cardContent">
                                <h2>{{ $review->userLocation }}</h2>
                                <h3>{{ $review->userName }}a</h3>
                                <p>
                                    {{ $review->userDescription }}
                                </p>
                            </div>
                        </div>
                        @php
                        $count++;
                        @endphp
                    @endforeach
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
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum quae aliquid rerum laborum nisi quidem fugit aspernatur 
                                rem voluptatum nesciunt reiciendis adipisci ipsum, earum voluptatibus magnam perspiciatis provident officia pariatur! Quisquam 
                                odio quos deserunt quas architecto tenetur debitis accusantium omnis?
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
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <span>Address: 2 Flower LN, New Hyde Park, 
                                        <br/>New York 11040, USA</span>
                                </li>
                                <li>
                                    <span><i class="fas fa-phone-alt"></i></span>
                                    <span>Tel: 718 6143299</span>
                                </li>
                                <li>
                                    <span><i class="fas fa-envelope"></i></span>
                                    <span>Email: josevicentediazsusa@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <div class="copyRightText">
                    <p>Copyright &copy; 2021 Diaz Constructions. All rights reserved.</p>
                </div>
            </div>
        <script type="text/javascript" src="{{ url('./js/vanilla-tilt.js') }}"></script>
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
