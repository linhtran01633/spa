<div class="w-full">
    @php
        $aboutUs = [
            [
                'title' => 'KOKORO SPA（コンセプトの意味）について',
                'comment' => 'Tọa lạc trên con đường sầm uất và nhiệt độ oi bức đặc trưng của khu vực đường Hai Bà Trưng, Quận 3,こころスパ (Kokoro Spa) chỉ tập trung vào việc mang lại sự cân bằng và chữa lành cho tâm hồn thông qua các liệu pháp thư giãn và phục hồi sức khỏe. Phong cách massage này kết hợp các kỹ thuật truyền thống của Nhật Bản, bao gồm Shiatsu, một liệu pháp dùng áp lực nhẹ nhàng lên các huyệt đạo trên cơ thể để kích thích tuần hoàn và giảm căng thẳng.',
            ],
            [
                'title' => 'Tại Kokoro Spa',
                'comment' => 'Tại Kokoro Spa, không gian được thiết kế tối giản và thanh tịnh, lấy cảm hứng từ sự tinh tế và yên bình của văn hóa Nhật Bản. Mỗi trải nghiệm massage không chỉ giúp thư giãn cơ thể mà còn nuôi dưỡng và làm dịu tâm hồn, giúp khách hàng cảm nhận được sự cân bằng, hài hòa và năng lượng tích cực.',
            ],
            [
                'title' => 'Tên "Kokoro" (心) ',
                'comment' => 'Tên "Kokoro" (心) trong tiếng Nhật có nghĩa là "tâm hồn", thể hiện triết lý chăm sóc toàn diện cả về thể chất lẫn tinh thần, mang lại một trạng thái thư thái và an yên sau mỗi liệu pháp. Đồng thời cũng mang ý nghĩa “sự phục vụ đến từ trái tim” Omotenashi đến từ Nhật Bản.',
            ],
            [
                'title' => 'Dịch vụ tại Kokoro Spa',
                'comment' => 'Tại Kokoro Spa, khách hàng sẽ được trải nghiệm ba dịch vụ chính, bao gồm massage thư giãn trị liệu toàn thân, gội đầu dưỡng sinh, và chăm sóc da cơ bản, tất cả đều mang đậm phong cách truyền thống Nhật Bản, tập trung vào sự hài hòa giữa cơ thể và tâm hồn.',
            ],
        ];
    @endphp
    <div class="flex flex-wrap items-center">
        <div class="w-full sm:w-3/6 pb-5 pb-lg-0">
            <img class="w-full" src="img/about.jpg" alt="">
        </div>

        <div class="w-full sm:w-3/6">
            @foreach ($aboutUs as $value)
                <div class="px-8 sm:px-24 mt-2 mb-4">
                    {{-- bg-light --}}
                    <h1 class="block text-primary uppercase py-1 px-4 mb-4">{{$value['title']}}</h1>
                    <p class="pl-4 border-l border-primary">{{$value['comment']}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
