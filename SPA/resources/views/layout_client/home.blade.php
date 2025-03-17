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
                                    <h2>{{__('facial_and_skincare')}}</h2>
                                    <p>{!!__('facial_and_skincare_detail')!!}</p>
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
                                    <h2>{{__('facial_and_skincare')}}</h2>
                                    <p>{!!__('facial_and_skincare_detail')!!}</p>
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
                <video width="100%" height="100%" controls poster="/images/video-thumbnail.jpg">
                    <source src="/video/home.mp4" type="video/mp4">
                </video>
            </div>
        </div>

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
                                <h3><b><a href="/services/1">{{__('menu.service.service1')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 2">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/2">{{__('menu.service.service2')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00722.jpg" alt="Image 3">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/3">{{__('menu.service.service3')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 4">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/4">{{__('menu.service.service4')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00708.jpg" alt="Image 5">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/5">{{__('menu.service.service5')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 6">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/6">{{__('menu.service.service6')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 7">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/7">{{__('menu.service.service7')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00755.jpg" alt="Image 8">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/8">{{__('menu.service.service8')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/about_us/DSC00716.jpg" alt="Image 9">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/9">{{__('menu.service.service9')}} </a></b></h3>
                                <h5> {{__('name_spa')}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="/images/slide/slide-2.jpg" alt="Image 10">
                        <div class="hover-text">
                            <div class="image-data">
                                <h3><b><a href="/services/10">{{__('menu.service.service10')}} </a></b></h3>
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
                    <div class="cbox-1 mb-25">
                        <h4 class="h5-xs txt-color-01 font-bold"> {{__('access.contact')}} </h4>
                        <p class="txt-color-05"><span> {{__('access.contact.phone')}} </span> {{__('access.contact.phone.comment')}} </p>
                        <p class="txt-color-05"><span> {{__('access.contact.email')}} </span> {{__('access.contact.email.comment')}} </p>
                    </div>

                    <div class="cbox-1">
                        <h4 class="h5-xs txt-color-01 font-bold"> {{__('access.working_hours')}} </h4>
                        <p class="txt-color-05"><span> {{__('access.working_hours.everyday')}} </span> {{__('access.working_hours.everyday.comment')}} </p>
                        <p class="txt-color-05"><span> {{__('access.working_hours.last_entry')}} </span> {{__('access.working_hours.last_entry.comment')}} </p>
                        <p class="txt-color-05"> {{__('access.working_hours.note')}} </p>
                    </div>
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
