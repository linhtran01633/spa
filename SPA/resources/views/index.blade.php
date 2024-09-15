<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOKORO-SPA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <style>
        .bg-button {
            background-color: #953326;
        }
        .text-primary {
            color: #F9A392;
        }

        .btn-primary {
            background-color: #F9A392;
            border-color: #F9A392;
        }

        .btn-primary:hover {
            background-color: #f7846e;
            border-color: #f67a62;
        }

        .btn {
            text-align: center;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-lg-square {
            width: 46px;
            height: 46px;
        }

        .btn-square,
        .btn-sm-square,
        .btn-lg-square {
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer .btn-primary i {
            color: #FFFFFF !important;
        }


        .swiper-pagination-bullet {
            width: 25px; /* Chiều rộng của dấu phân trang */
            height: 25px; /* Chiều cao của dấu phân trang */
            background-color: transparent; /* Màu nền */
            border: 1px solid white;
            opacity: 1;
            border-radius: 0; /* Đặt border-radius về 0 để có hình vuông */
        }

        /* Tùy chỉnh dấu phân trang đang hoạt động */
        .swiper-pagination-bullet-active {
            width: 50px; /* Chiều rộng của dấu phân trang */
            background-color: white; /* Màu nền khi đang hoạt động */
        }

    </style>
</head>

<body class="bg-body">
    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>086 500 8868</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>kokorospaservices@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="w-full px-3 py-3 py-lg-0 px-lg-5 flex items-center justify-between">
        <div class="flex items-center">
            <button type="button" class="flex items-center text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

            <span class="text-base">MENU</span>
        </div>
        <div>
            <a href="/" class="navbar-brand ml-lg-3">
                <div class="w-28">
                    <img src="/images/logo.jpg" class="w-full" style="aspect-ratio:6/4">
                </div>
            </a>
        </div>

        <div>
            <a  href="#" class="flex items-center px-6 py-2 bg-button rounded-full text-white no-underline">
                <span class="text-xl svg-icon mr-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>
                </span>
                <span class="no-underline">ĐẶT HẸN</span>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div>
          <!-- Carousel Start -->
        @include('/home_slide')
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="w-full py-5">
            @include('/home_about_us')
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-fluid px-0 py-5 my-5">
            @include('service_slide')
        </div>
        <!-- Service End -->


        <!-- Open Hours Start -->
        <div class="container-fluid py-5">
            @include('home_open_house')
        </div>
        <!-- Open Hours End -->


        <!-- Pricing Start -->
        <div class="container-fluid bg-pricing" style="margin: 90px 0;">
            @include('home_pricing')
        </div>
        <!-- Pricing End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                        <h1 class="mb-5">Spa & Beauty Specialist</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Cory Brown</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="position-relative text-center">
                                <div class="team-text bg-primary text-white">
                                    <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                    <p class="m-0">Spa & Beauty Expert</p>
                                </div>
                                <div class="team-social bg-dark text-center">
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            @include('home_feedback')
        </div>
        <!-- Testimonial End -->
    </div>
    <!-- Footer Start -->
        @include('/footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
