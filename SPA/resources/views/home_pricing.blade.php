<div class="container">
    @php
        $pricing = [
            [
                'title' => 'Gói cơ bản',
                'price' => '400,000 VND',
                'service' => [
                    [
                        'icon' => 'check',
                        'text' => 'Chăm sóc da mặt',
                        'color' => 'text-success',
                    ],

                    [
                        'icon' => 'check',
                        'text' => 'Điều trị da chuyên sâu',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Chăm sóc đặt quyền',
                        'color' => 'text-red-500',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Massage toàn thân',
                        'color' => 'text-red-500',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Liệu trình thẩm mỹ',
                        'color' => 'text-red-500',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Triệt lông vĩnh viễn',
                        'color' => 'text-red-500',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Giảm béo toàn thân',
                        'color' => 'text-red-500',
                    ],
                ]
            ],
            [
                'title' => 'Gói nâng cao',
                'price' => '800,000 VND',
                'service' => [
                    [
                        'icon' => 'check',
                        'text' => 'Chăm sóc da mặt',
                        'color' => 'text-success',
                    ],

                    [
                        'icon' => 'check',
                        'text' => 'Điều trị da chuyên sâu',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Chăm sóc đặt quyền',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Massage toàn thân',
                        'color' => 'text-red-500',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Liệu trình thẩm mỹ',
                        'color' => 'text-red-500',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Triệt lông vĩnh viễn',
                        'color' => 'text-red-500',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Giảm béo toàn thân',
                        'color' => 'text-red-500',
                    ],
                ]
            ],
            [
                'title' => 'Gói vip',
                'price' => '1,200,000 VND',
                'service' => [
                    [
                        'icon' => 'check',
                        'text' => 'Chăm sóc da mặt',
                        'color' => 'text-success',
                    ],

                    [
                        'icon' => 'check',
                        'text' => 'Điều trị da chuyên sâu',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Chăm sóc đặt quyền',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Massage toàn thân',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Liệu trình thẩm mỹ',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Triệt lông vĩnh viễn',
                        'color' => 'text-success',
                    ],
                    [
                        'icon' => 'check',
                        'text' => 'Giảm béo toàn thân',
                        'color' => 'text-success',
                    ],
                ]
            ]
        ];
    @endphp
    <div class="row">
        <div class="col-lg-5" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="img/pricing.jpg" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-7 pt-5 pb-lg-5">
            <div class="pricing-text bg-body p-4 p-lg-5 my-lg-5">
                <div class="owl-carousel pricing-carousel">
                    @foreach ($pricing as $item)
                        <div class="bg-white">
                            <div class="flex items-center justify-content-between border-b border-primary p-4">
                                <h1 class="text-3xl mb-0">
                                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;"></small>
                                    {{$item['price']}}
                                    <small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/lần</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">{{$item['title']}}</h5>
                            </div>
                            <div class="p-4">
                                @foreach ($item['service'] as $value)
                                    <p><i class="fa fa-{{$value['icon']}} {{$value['color']}} mr-2"></i>{{$value['text']}}</p>
                                @endforeach
                                <a href="" class="btn btn-primary my-2">Đặt Hẹn</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
