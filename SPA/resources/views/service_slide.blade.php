<div class="w-full">
    @php
        $list_services = [
            [
                'title' => 'Chăm sóc da mặt',
                'comment' => 'Mang đến sự rạng rỡ từ sâu bên trong.',
                'image' => '/images/service_slide/service1.jpg',
            ],
            [
                'title' => 'Điều trị da chuyên sâu',
                'comment' => 'Giải quyết những vấn đề làn da.',
                'image' => '/images/service_slide/service2.jpg',
            ],
            [
                'title' => 'Chăm sóc đặt quyền',
                'comment' => 'Nuông chiều bản thân thông qua trải nghiệm liệu trình chăm sóc cơ thể toàn diện và độc quyền.',
                'image' => '/images/service_slide/service3.jpg',
            ],
            [
                'title' => 'Massage toàn thân',
                'comment' => 'Phục hồi năng lượng với quy trình điều trị kết hợp kỹ thuật trị liệu của phương Đông và phương Tây.',
                'image' => '/images/service_slide/service4.jpg',
            ],
            [
                'title' => 'Liệu trình thẩm mỹ',
                'comment' => 'Vẻ đẹp toàn diện đánh bại nấc thang thời gian.',
                'image' => '/images/service_slide/service5.jpg',
            ],
            [
                'title' => 'Triệt lông vĩnh viễn',
                'comment' => 'Để sự tự tin chưa bao giờ giới hạn.',
                'image' => '/images/service_slide/service6.jpg',
            ],
            [
                'title' => 'Giảm béo toàn thân',
                'comment' => 'Khai phá sự nỗ lực cải thiện thể lực và sức khỏe, lấy lại vóc dáng bạn mong muốn.',
                'image' => '/images/service_slide/service7.jpg',
            ]
        ];
    @endphp
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            {{-- bg-light  --}}
            <h1 class="text-4xl blocktext-primary uppercase py-2 px-4">CÁC DỊCH VỤ</h1>
        </div>
    </div>

    <div class="owl-carousel service-carousel">
        @foreach ($list_services as $item)
            <div class="service-item relative">
                <img class="img-fluid" src="{{ $item['image'] }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">{{ $item['title'] }}</h4>
                    <p class="text-white px-3 mb-3">{{ $item['comment'] }}</p>
                    <div class="w-full bg-white text-center p-4">
                        <a class="btn btn-primary" href="">Đặt Hẹn</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
