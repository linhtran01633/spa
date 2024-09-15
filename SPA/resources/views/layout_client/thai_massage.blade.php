@extends('layout_client.main')
@section('css')
    <style>
        #fixNav {
            color: black !important;
            background-color: white !important;
        }

        #fixNav .menu li a{
            color: black;
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
                        <h3 class="h3-lg txt-color-01"> {{__('menu.service.service3')}} </h3>
                    </div>
                </div>
            </div>

            <div class="row pl-3">
                <p class="txt-color-05 pl-3">
                    <i>
                        {!! __('note1') !!}<br>
                        {!! __('note2') !!}<br>
                        &nbsp;{!! __('note3') !!}<br>
                        &nbsp;{!! __('note4') !!}<br>
                        &nbsp;{!! __('note5') !!}<br>
                        &nbsp;{!! __('note6') !!}<br>
                        {!! __('note7') !!}<br>
                        {!! __('note8') !!}
                        <br><br>
                    </i>
                </p>
            </div>

            <div class="pricing-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-1-table">
                            <ul class="pricing-list">
                                @for ($i = 1; $i < 3; $i++)
                                    <li class="pricing-list-txt">
                                        <div class="row">
                                            <div class="col-lg-8 mb-3">
                                                <p class="lbl-pricing txt-color-01"> {!! __('thai_massage.service'.$i)!!} </p>
                                                <p class="txt-color-05"> {!! __('thai_massage.comment'.$i)!!} </p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row text-right">
                                                    <div class="col-6 text-right">
                                                        <h6 class="h5-md txt-color-01"></h6>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <p class="lbl-pricing txt-color-01"> {!! __('thai_massage.price'.$i)!!} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endfor
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
