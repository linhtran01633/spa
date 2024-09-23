@extends('layout_client.main')
@section('css')
    <style>
        @media (max-width: 768px) {
            #myCarousel {
                margin-top: 70px;
            }
        }
    </style>
@endsection
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/images/slide/slide-1.jpg" class="img-slide" alt="slide1" style="width:100%; ">
                <div class="carousel-caption d-flex">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="caption-txt white-color">
                                    <h2>Massage &amp; Relaxing</h2>
                                    <p>Kokoro hy vọng sẽ mang lại cho quý khách những giây phút trải nghiệm dịch vụ hiệu quả và thư giãn!</p>
                                    <a href="#about-4" class="btn btn-md btn-color-02 tra-white-hover">{{__('about_us')}}</a>
                                </div>
                         </div>
                    </div>
                 </div>
                </div>
            </div>

            <div class="item">
                <img src="/images/slide/slide-2.jpg" class="img-slide" alt="slide2" style="width:100%;">
                <div class="carousel-caption d-flex">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="caption-txt white-color">
                                    <h2>Facial &amp; Skincare</h2>
                                    <p>Sở hữu làn da mịn màng và khoẻ mạnh sau khi trải nghiệm dịch vụ từ những thiết bị chuyên dụng của chúng tôi.</p>
                                    <a href="#about-4" class="btn btn-md btn-color-02 tra-white-hover">{{__('about_us')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about-4">
        <div class="container">
            <div class="row pt-100">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">
                        <h2 class="tra-header txt-color-02"> {{__('welcome')}} </h2>
                        <h3 class="h3-lg txt-color-01"> {{__('welcome.comment')}} </h3>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center bg-color-05">
                <div class="col-lg-6 a4-img">
                    <div class="img-block">
                        <img class="img-fluid" src="/images/slide/slide-1.jpg" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="a4-1" class="abox-2">
                        <h4 class="h4-sm txt-color-01">{{__('about_us')}}</h4>
                       <ul class="txt-list txt-color-01">
                           <li class="list-item">
                               <p> {!! __('about_us.comment1') !!} </p>
                           </li>
                       </ul>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center bg-color-05">
                <div class="col-lg-6">
                    <div id="a4-1" class="abox-2">
                       <ul class="txt-list txt-color-01">
                           <li class="list-item">
                               <p> {!! __('about_us.comment2') !!} </p>
                           </li>
                       </ul>
                    </div>
                </div>
                <div class="col-lg-6 a4-img">
                    <div class="img-block">
                        <img class="img-fluid" src="/images/slide/slide-2.jpg" alt="about-image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-4">
        <div class="container">
            <div class="pt-100">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">
                        <h2 class="tra-header txt-color-02"> {{__('gallery')}} </h2>
                        <h3 class="h3-lg txt-color-01"> {{__('gallery.comment')}} </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="image-grid">
                    <div class="image-container">
                        <img src="/images/about_us/DSC00690.jpg" alt="Image 1">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/traditional-massage">{{__('menu.service.service1')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 2">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/acupressure-massage">{{__('menu.service.service2')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00722.jpg" alt="Image 3">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/thai-massage">{{__('menu.service.service3')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 4">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/neck-and-shoulder-therapy">{{__('menu.service.service4')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00708.jpg" alt="Image 5">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/foot-massage">{{__('menu.service.service5')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 6">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/healthy-shampoo">{{__('menu.service.service6')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 7">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/facial">{{__('menu.service.service7')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00755.jpg" alt="Image 8">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/other-services">{{__('menu.service.service8')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00716.jpg" alt="Image 9">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/vip-room">{{__('menu.service.service9')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 10">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/combo">{{__('menu.service.service10')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>

                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 10">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/">{{__('menu.service.service10')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about-5" class="bg-color-white pt-10 pb-20 rel about-section division">
        <div class="container" style="padding: 0px">
            <div class="col-left-open">
                <div class="working-hours-text">
                    <h2> <b>Giờ mở cửa:</b> </h2>
                    <h4>10:00 - 22:00 hằng ngày</h4>
                </div>
                <div class="working-hours-img">
                    <img class="img-fluid" src="/images/slide/slide-2.jpg" alt="about-image">
                </div>
            </div>
        </div>
    </section>

    @section('scripts')

    @endsection
@endsection
