@extends('layout_client.main')
@section('css')
    <style>
        #fixNav {
            color: #5f5842 !important;
            background-color: white !important;
        }

        #fixNav .menu li a{
            color: #5f5842;
            text-shadow: none;
        }
    </style>
@endsection
@section('content')
    <div id="about-4">
        <div class="container">
            <div class="row pt-200">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">
                        <h2 class="tra-header txt-color-02"> {{__('menu')}}</h2>
                        <h3 class="h3-lg txt-color-01"> {{$serviceName}} </h3>
                    </div>
                </div>
            </div>

            <div class="pricing-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-1-table">
                            <ul class="pricing-list">
                                @foreach ($listService as $value)
                                    <li class="pricing-list-txt">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p class="lbl-pricing txt-color-01">{{$value['name']}}</p>
                                                <p class="txt-color-05">{{$value['description']}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row text-right">
                                                    <div class="col-6 text-right">
                                                        <h6 class="h5-md txt-color-01"></h6>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <p class="lbl-pricing txt-color-01 pr-4">{{$value['price']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section id="services-1" class="pb-90">
        <div class="container">
             <div class="sbox-1-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sbox-1">
                            <img class="img-fluid" src="/images/slide/slide-2.jpg" alt="service-image">
                            <h5 class="h5-md txt-color-01"></h5>
                            <p class="txt-color-05"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sbox-1">
                            <img class="img-fluid" src="/images/slide/slide-2.jpg" alt="service-image">
                            <h5 class="h5-md txt-color-01"></h5>
                            <p class="txt-color-05"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sbox-1">
                            <img class="img-fluid" src="/images/slide/slide-2.jpg" alt="service-image">
                            <h5 class="h5-md txt-color-01"></h5>
                            <p class="txt-color-05"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    @endsection
@endsection
