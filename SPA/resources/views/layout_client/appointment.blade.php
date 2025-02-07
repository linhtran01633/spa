@extends('layout_client.main')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}" />

    <script src="{{ URL::asset('js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/moment-with-locales.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

    <style>
        #fixNav {
            color: #5f5842 !important;
            background-color: white !important;
            box-shadow: 0px 1px 0px 0px #af9c9c;
        }

        #fixNav .menu li a{
            color: #5f5842;
            text-shadow: none;
        }

        body {
            background-color: #f1f1f1 !important;
        }

        /* fds */
        .card .card-header .card-title-wrap {
            margin-left: -1.1rem;
            padding-left: 1.5rem;
            border-left: 3px solid #E9ECEF;
        }
        .card-header .bar-primary {
            border-color: #666EE8 !important;
        }

        .time_open_booking li {
            display: inline-block;
            border: solid 1px #2196f3;
            padding: 15px;
            margin: 0 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            color: #2196f3;
        }

        .time_open_disable {
            border: solid 1px #f1f1f1 !important;
            color: #bfbfbf !important;
            background: #f5f5f5;
        }

        .time_open.active {
            background: #2196f3;
            color: #fff;
        }

        .btn-primary {
            background-color: #0EA3F7 !important;
            border-color: #0EA3F7;
        }

        .btn-primary:hover {
            background-color: #0180c7 !important;
            border-color: #0180c7 !important;
        }

        .booking-form {
            background-color: #F4F5FA;
        }
    </style>
@endsection
@section('content')
    <section class="booking-form">
        <br><br><br><br><br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-primary">
                        <h4 class="card-title text-center" id="basic-layout-card-center">
                            {{__('title_appointment')}}
                        </h4>
                        </div>
                        <p class="mb-0 text-center">
                        <strong>{{__('address')}} : <span><i class="fa fa-map-marker"></i> 371 Hai Bà Trưng, Phường Võ Thị Sáu, Quận 3</span><br></strong>
                        <strong> {{__('phone')}}: <span><i class="icon icon-call-end"></i> 0865008868</span></strong>
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="px-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{__('full_name')}}<span class="text-danger">*</span></label>
                                        <input type="text" name="fullname" value="" class="form-control rounded text-left" placeholder="{{__('full_name_placeholder')}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{__('phone')}}<span class="text-danger">*</span></label>
                                        <input type="text" name="telephone" value="" class="form-control rounded text-left" placeholder="{{__('phone_placeholder')}}" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{__('email')}}</label>
                                        <input type="email" name="email" value="" value="" class="form-control rounded text-left" placeholder="{{__('email_placeholder')}}">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>{{__('branch')}}</label>
                                        <select data-rel="select2" class="form-control" name="branch_id" style="width: 100%;">
                                            <option value="2">{{__('name_spa')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <h5 class="mt-2"><label>{{__('date')}} <span class="text-danger">*</span></label></h5>
                                    <div id="apt_date_time_box">
                                    </div>
                                        <input type="hidden" class="date_picker" name="date_picker" value="" />
                                    <input type="hidden" class="time_picker" name="time_picker" value="" />
                                </div>

                                <div class="col-sm-12">
                                    <h5 class="mt-2"><label>{{__('time')}} <span class="text-danger">*</span></label></h5>
                                    <ul class="time_open_booking">
                                       <li class="time_open time_open_0" onclick="choose_time_picker(0, '10:00')">10:00</li>
                                       <li class="time_open time_open_1" onclick="choose_time_picker(1, '10:15')">10:15</li>
                                       <li class="time_open time_open_2" onclick="choose_time_picker(2, '10:30')">10:30</li>
                                       <li class="time_open time_open_3" onclick="choose_time_picker(3, '10:45')">10:45</li>
                                       <li class="time_open time_open_4" onclick="choose_time_picker(4, '11:00')">11:00</li>
                                       <li class="time_open time_open_5" onclick="choose_time_picker(5, '11:15')">11:15</li>
                                       <li class="time_open time_open_6" onclick="choose_time_picker(6, '11:30')">11:30</li>
                                       <li class="time_open time_open_7" onclick="choose_time_picker(7, '11:45')">11:45</li>
                                       <li class="time_open time_open_8" onclick="choose_time_picker(8, '12:00')">12:00</li>
                                       <li class="time_open time_open_9" onclick="choose_time_picker(9, '12:15')">12:15</li>
                                       <li class="time_open time_open_10" onclick="choose_time_picker(10, '12:30')">12:30</li>
                                       <li class="time_open time_open_11" onclick="choose_time_picker(11, '12:45')">12:45</li>
                                       <li class="time_open time_open_12" onclick="choose_time_picker(12, '13:00')">13:00</li>
                                       <li class="time_open time_open_13" onclick="choose_time_picker(13, '13:15')">13:15</li>
                                       <li class="time_open time_open_14" onclick="choose_time_picker(14, '13:30')">13:30</li>
                                       <li class="time_open time_open_15" onclick="choose_time_picker(15, '13:45')">13:45</li>
                                       <li class="time_open time_open_16" onclick="choose_time_picker(16, '14:00')">14:00</li>
                                       <li class="time_open time_open_17" onclick="choose_time_picker(17, '14:15')">14:15</li>
                                       <li class="time_open time_open_18" onclick="choose_time_picker(18, '14:30')">14:30</li>
                                       <li class="time_open time_open_19" onclick="choose_time_picker(19, '14:45')">14:45</li>
                                       <li class="time_open time_open_20" onclick="choose_time_picker(20, '15:00')">15:00</li>
                                       <li class="time_open time_open_21" onclick="choose_time_picker(21, '15:15')">15:15</li>
                                       <li class="time_open time_open_22" onclick="choose_time_picker(22, '15:30')">15:30</li>
                                       <li class="time_open time_open_23" onclick="choose_time_picker(23, '15:45')">15:45</li>
                                       <li class="time_open time_open_24" onclick="choose_time_picker(24, '16:00')">16:00</li>
                                       <li class="time_open time_open_25" onclick="choose_time_picker(25, '16:15')">16:15</li>
                                       <li class="time_open time_open_26" onclick="choose_time_picker(26, '16:30')">16:30</li>
                                       <li class="time_open time_open_27" onclick="choose_time_picker(27, '16:45')">16:45</li>
                                       <li class="time_open time_open_28" onclick="choose_time_picker(28, '17:00')">17:00</li>
                                       <li class="time_open time_open_29" onclick="choose_time_picker(29, '17:15')">17:15</li>
                                       <li class="time_open time_open_30" onclick="choose_time_picker(30, '17:30')">17:30</li>
                                       <li class="time_open time_open_31" onclick="choose_time_picker(31, '17:45')">17:45</li>
                                       <li class="time_open time_open_32" onclick="choose_time_picker(32, '18:00')">18:00</li>
                                       <li class="time_open time_open_33" onclick="choose_time_picker(33, '18:15')">18:15</li>
                                       <li class="time_open time_open_34" onclick="choose_time_picker(34, '18:30')">18:30</li>
                                       <li class="time_open time_open_35" onclick="choose_time_picker(35, '18:45')">18:45</li>
                                       <li class="time_open time_open_36" onclick="choose_time_picker(36, '19:00')">19:00</li>
                                       <li class="time_open time_open_37" onclick="choose_time_picker(37, '19:15')">19:15</li>
                                       <li class="time_open time_open_38" onclick="choose_time_picker(38, '19:30')">19:30</li>
                                       <li class="time_open time_open_39" onclick="choose_time_picker(39, '19:45')">19:45</li>
                                       <li class="time_open time_open_40" onclick="choose_time_picker(40, '20:00')">20:00</li>
                                       <li class="time_open time_open_41" onclick="choose_time_picker(41, '20:15')">20:15</li>
                                       <li class="time_open time_open_42" onclick="choose_time_picker(42, '20:30')">20:30</li>
                                       <li class="time_open time_open_43" onclick="choose_time_picker(43, '20:45')">20:45</li>
                                       <li class="time_open time_open_44" onclick="choose_time_picker(44, '21:00')">21:00</li>
                                       <li class="time_open time_open_45" onclick="choose_time_picker(45, '21:15')">21:15</li>
                                       <li class="time_open time_open_46" onclick="choose_time_picker(46, '21:30')">21:30</li>
                                       <li class="time_open time_open_47" onclick="choose_time_picker(47, '21:45')">21:45</li>
                                    </ul>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{__('service')}}</label>
                                        <select data-rel="select2" multiple="multiple" name="service_groups[]" class="form-control" style="width: 100%;">
                                            <optgroup label="{{__('services.optgroup1')}}">
                                                <option value="95">{{__('services.value95')}}</option>
                                                <option value="82">{{__('services.value82')}}</option>
                                                <option value="81">{{__('services.value81')}}</option>
                                                <option value="80">{{__('services.value80')}}</option>
                                                <option value="79">{{__('services.value79')}}</option>
                                                <option value="78">{{__('services.value78')}}</option>
                                                <option value="74">{{__('services.value74')}}</option>
                                            </optgroup>
                                            <optgroup label="{{__('services.optgroup2')}}">
                                                <option value="94">{{__('services.value94')}}</option>
                                                <option value="93">{{__('services.value93')}}</option>
                                                <option value="92">{{__('services.value92')}}</option>
                                                <option value="91">{{__('services.value91')}}</option>
                                                <option value="89">{{__('services.value89')}}</option>
                                                <option value="88">{{__('services.value88')}}</option>
                                                <option value="87">{{__('services.value87')}}</option>
                                                <option value="86">{{__('services.value86')}}</option>
                                            </optgroup>
                                            <optgroup label="{{__('services.optgroup3')}}">
                                                <option value="90">{{__('services.value90')}}</option>
                                                <option value="85">{{__('services.value85')}}</option>
                                                <option value="84">{{__('services.value84')}}</option>
                                                <option value="83">{{__('services.value83')}}</option>
                                                <option value="75">{{__('services.value75')}}</option>
                                                <option value="72">{{__('services.value72')}}</option>
                                                <option value="71">{{__('services.value71')}}</option>
                                                <option value="68">{{__('services.value68')}}</option>
                                                <option value="67">{{__('services.value67')}}</option>
                                                <option value="64">{{__('services.value64')}}</option>
                                                <option value="55">{{__('services.value55')}}</option>
                                                <option value="54">{{__('services.value54')}}</option>
                                                <option value="53">{{__('services.value53')}}</option>
                                            </optgroup>
                                            <optgroup label="{{__('services.optgroup4')}}">
                                                <option value="77">{{__('services.value77')}}</option>
                                                <option value="76">{{__('services.value76')}}</option>
                                                <option value="70">{{__('services.value70')}}</option>
                                                <option value="69">{{__('services.value69')}}</option>
                                            </optgroup>
                                            <optgroup label="{{__('services.optgroup5')}}">
                                                <option value="66">{{__('services.value66')}}</option>
                                                <option value="65">{{__('services.value65')}}</option>
                                            </optgroup>
                                            <optgroup label="{{__('services.6')}}">
                                                <option value="63">{{__('services.value63')}}</option>
                                                <option value="62">{{__('services.value62')}}</option>
                                                <option value="61">{{__('services.value61')}}</option>
                                                <option value="60">{{__('services.value60')}}</option>
                                                <option value="59">{{__('services.value59')}}</option>
                                                <option value="58">{{__('services.value58')}}</option>
                                                <option value="57">{{__('services.value57')}}</option>
                                                <option value="56">{{__('services.value56')}}</option>
                                                <option value="52">{{__('services.value52')}}</option>
                                                <option value="51">{{__('services.value51')}}</option>
                                                <option value="50">{{__('services.value50')}}</option>
                                            </optgroup>
                                            <optgroup label="{{__('services.optgroup7')}}"></optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <label>{{__('request')}}</label>
                                       <textarea name="note" class="form-control " placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr/>
                                <br/>
                                <div class="col-sm-12">
                                    <button type="button" id="submit_form" class="btn btn-lg btn-primary btn-block btn-rounded text-uppercase"><i class="icon-calendar icon"></i> &nbsp;&nbsp;{{__('appointment')}}</button>
                                </div>
                                <div class="clearfix"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
    @php
        $lang = 'en';
        if(__('lang') == 'jp') {
            $lang = 'ja';
        } else if(__('lang') == 'vn') {
            $lang = 'vi';
        }
    @endphp
    @section('scripts')
        <script>
            function choose_time_picker(index, time) {
                $(".time_open").removeClass('active');
                $(".time_open_" + index).addClass('active');
                $(".time_picker").val(time);
            }

            $(function (){
                let lang = {!! json_encode($lang) !!};
                moment.locale(lang);

                // $('#apt_date_time_box').find('.date_picker').datetimepicker("destroy");
                $('#apt_date_time_box').datetimepicker({
                    inline: true,
                    sideBySide: true,
                    useCurrent: false,
                    minDate: new Date(),
                    format: 'YYYY-MM-DD',
                    locale: moment.locale()
                }).on('dp.change', function(e){
                    var date = e.date.format('YYYY-MM-DD');
                    $(".time_picker").val('');
                    $(".date_picker").val(date);
                    $(".time_open").removeClass('active');
                    $(".time_open").removeClass('time_open_disable');

                    $('.time_open_booking').find('li').each(function(){
                        var time = $(this).attr('onclick').split(",")[1].replace(/'/g, '');
                        var time_picker = date + ' ' + time;
                        var time_picker = moment(time_picker, 'YYYY-MM-DD HH:mm');
                        var now = moment();
                        if(time_picker.isBefore(now)){
                            $(this).addClass('time_open_disable');
                        }
                    });
                });


                $('[data-rel="select2"]').select2();


                // submit form
                $("#submit_form").click(function() {


                    if($("input[name='fullname']").val() == '') {
                        alert("{{__('please_enter_full_name')}}");
                        return false;
                    }

                    if($("input[name='telephone']").val() == '') {
                        alert("{{__('please_enter_phone')}}");
                        return false;
                    }

                    if($("input[name='date_picker']").val() == '') {
                        alert("{{__('please_enter_date')}}");
                        return false;
                    }

                    if($("input[name='time_picker']").val() == '') {
                        alert("{{__('please_enter_time')}}");
                        return false;
                    }

                    let date = document.querySelector(".date_picker").value; // Lấy ngày
                    let time = document.querySelector(".time_picker").value; // Lấy giờ
                    let dateTime = date + " " + time + ":00"; // Gộp ngày + giờ


                    let dataForm = {
                        status : "5",
                        date_time : dateTime,
                        customer_old_new : "2",
                        note : $("textarea[name='note']").val(),
                        fullname : $("input[name='fullname']").val(),
                        telephone: $("input[name='telephone']").val(),
                        service_groups: $("select[name='service_groups[]']").val(),
                    }
                    console.log(dataForm);

                    fetch("https://daruma.idspa.vn/api/merchant/login/login", {
                        method: "POST",
                        headers: {
                            "IDSPA_KEY": "idspa_key_api",
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: new URLSearchParams({
                            "email": "Quanly1@gmail.com",
                            "password": "kokorospa123"
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log("Response:", data);
                        if (data.status == 'ok') {
                            fetch("https://daruma.idspa.vn/api/manager/appointment/aptForm", {
                                method: "POST",
                                headers: {
                                    "IDSPA_KEY": "idspa_key_api",
                                    "USER-TOKEN": data.user_token,
                                    "Content-Type": "application/x-www-form-urlencoded"
                                },
                                body: new URLSearchParams(dataForm)
                            })
                            .then(respons1 => respons1.json())
                            .then(data1 => console.log("Response:", data1))
                            .catch(error1 => console.error("Lỗi:", error1));
                        } else {
                            console.log("Đăng nhập thất bại!");
                        }
                    })
                    .catch(error => console.error("Lỗi:", error));

                });

            });
        </script>
    @endsection
@endsection
