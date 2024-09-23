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
                        <h3 class="h3-lg txt-color-01"> {{__('menu.access')}} </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="google-map mb-80">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2781361151724!2d106.68645347480508!3d10.789996689359604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175297bb8e4bdb7%3A0xf0619319a085e6b9!2sKOKORO%20Spa%20%26%20Aesthetic!5e0!3m2!1sen!2s!4v1726382940312!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="row pt-50">
                <div class="col-md-7 col-lg-8">
                    <img src="/images/slide/slide-2.jpg" class="rounded w-100" alt="Hai Bà Trưng">
                </div>
                 <div class="col-md-5 col-lg-4">
                     <div class="contacts-info mb-40">
                        <h3 class="h4-xs txt-color-01 font-bold"> {{__('access.detail')}} </h3>
                        <p class="txt-color-05"> {{__('access.detail.comment')}} </p>

                        <div class="cbox-1 mt-25 mb-25">
                            <h4 class="h5-xs txt-color-01 font-bold"> {{__('access.location')}} </h4>
                            <p class="txt-color-05"> {{__('access.location.comment')}} </p>
                        </div>

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
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    @endsection
@endsection
