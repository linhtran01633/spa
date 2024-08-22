<div class="w-full">
    @php
        $list_services = [
            [
                'title' => 'Kỹ thuật massage truyền thống Nhật Bản Shiatsu',
                'comment' => 'Được thực hiện bởi các kỹ thuật viên chuyên nghiệp, massage Shiatsu là phương pháp trị liệu sử dụng áp lực ngón tay lên các điểm huyệt trên cơ thể. Điều này giúp kích thích lưu thông máu, giải tỏa căng thẳng cơ bắp, và cân bằng năng lượng trong cơ thể.',
                'image' => '/images/service_slide/service1.jpg',
            ],
            [
                'title' => 'Thư giãn toàn diện với tinh dầu thiên nhiên',
                'comment' => 'Buổi trị liệu kéo dài khoảng 60-90 phút, trong đó toàn bộ cơ thể sẽ được chăm sóc từ đầu đến chân. Tinh dầu thiên nhiên Aroma được sử dụng để mang lại cảm giác thư thái, cùng với âm nhạc nhẹ nhàng và không gian yên tĩnh, giúp xua tan mệt mỏi và căng thẳng.',
                'image' => '/images/service_slide/service2.jpg',
            ],
            [
                'title' => 'Massage Thái',
                'comment' => 'là một phương pháp trị liệu truyền thống của Thái Lan, nổi tiếng với việc kết hợp các động tác kéo giãn, bấm huyệt và xoa bóp sâu để cải thiện tuần hoàn máu, tăng cường hệ miễn dịch, giảm căng thẳng và lo âu, cải thiện sự linh hoạt của cơ bắp và khớp, đồng thời hỗ trợ trong việc giải độc cơ thể qua hệ thống bạch huyết.',
                'image' => '/images/service_slide/service3.jpg',
            ],
            [
                'title' => 'Dưỡng tóc và da đầu',
                'comment' => 'Phương pháp gội đầu dưỡng sinh tại Kokoro Spa không chỉ làm sạch mà còn giúp dưỡng tóc và da đầu. Kỹ thuật massage nhẹ nhàng trên da đầu kết hợp với các sản phẩm dưỡng chất từ thiên nhiên giúp thư giãn, kích thích lưu thông máu, và nuôi dưỡng tóc từ gốc đến ngọn.',
                'image' => '/images/service_slide/service4.jpg',
            ],
            [
                'title' => 'Trải nghiệm thư giãn',
                'comment' => 'Trong quá trình gội đầu, khách hàng sẽ được tận hưởng cảm giác thư giãn sâu, giúp giảm căng thẳng và mang lại sự thoải mái cho cả cơ thể và tinh thần.',
                'image' => '/images/service_slide/service5.jpg',
            ],
            [
                'title' => 'Làm sạch sâu và dưỡng da',
                'comment' => 'Dịch vụ chăm sóc da cơ bản bao gồm các bước làm sạch sâu, tẩy tế bào chết, và đắp mặt nạ dưỡng da. Sử dụng các sản phẩm từ thiên nhiên, an toàn cho mọi loại da, liệu trình này giúp tái tạo và phục hồi làn da, mang lại sự tươi trẻ và mịn màng.',
                'image' => '/images/service_slide/service6.jpg',
            ],
            [
                'title' => 'Thư giãn và chăm sóc toàn diện',
                'comment' => 'Không chỉ dừng lại ở việc chăm sóc bề mặt da, dịch vụ còn kết hợp với massage mặt và cổ, giúp khách hàng thư giãn và giảm căng thẳng.',
                'image' => '/images/service_slide/service7.jpg',
            ]
        ];
    @endphp
    <div class="row mx-0 justify-content-center text-center">
        <div class="w-full mx-auto flex items-center justify-center">
            {{-- bg-light  --}}
            <h1 class="text-4xl w-64 block text-white text-uppercase bg-primary py-1 px-2 mb-4">CÁC DỊCH VỤ</h1>
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
