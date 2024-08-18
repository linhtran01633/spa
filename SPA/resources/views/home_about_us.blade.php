<div class="w-full">
    @php
        $aboutUs = [
            [
                'title' => 'Không gian spa',
                'comment' => 'KOKORO được thiết kế dung hòa giữa phong cách Minimalism và Zen – thiền định của Nhật Bản. Sự pha trộn giữa nét hiện đại và truyền thống, giữa thiên nhiên và hơi thở của sự sống, tạo ra một không gian tĩnh mặc và chiều lòng người. Trong diện tích lên đến gần 900m',
            ],
            [
                'title' => 'Dịch vụ',
                'comment' => 'Mỗi ngày, chúng tôi mang về nhà những đoá hoa thơm, thắp lên từng ngọn nến nhỏ. Mọi thứ tinh tươm, trong mát sẵn sàng tiếp đón khách mến thương. Khách đến, chúng tôi chu đáo chuẩn bị phòng riêng hoặc phòng cho nhóm bạn tuỳ theo dịch vụ và mong muốn của bạn.',
            ],
            [
                'title' => 'Con người',
                'comment' => 'Mỗi một nhân viên tại IMA KOKO đều hiểu rõ sứ mệnh của họ. Chúng tôi tin rằng mỗi vẻ đẹp như một cái cây xanh, luôn cần những bàn tay chăm lo và tiêu tưới. Và chúng tôi chính là những người “làm vườn” ấy. Từ sự chỉn chu đón khách đến tay nghề chuyên môn được đào tạo, nâng cấp liên tục, đội ngũ IMA KOKO luôn nỗ lực không ngừng nghỉ nhằm mang đến cho bạn những trải nghiệm trọn vẹn nhất ở đây.',
            ],
        ];
    @endphp
    <div class="flex flex-wrap items-center">
        <div class="w-full sm:w-3/6 pb-5 pb-lg-0">
            <img class="w-full" src="img/about.jpg" alt="">
        </div>

        <div class="w-full sm:w-3/6">
            @foreach ($aboutUs as $value)
                <div class="px-8 sm:px-24 my-4">
                    {{-- bg-light --}}
                    <h1 class="block text-primary uppercase py-1 px-4 mb-4">{{$value['title']}}</h1>
                    <p class="pl-4 border-l border-primary">{{$value['comment']}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
