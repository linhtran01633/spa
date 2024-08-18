<div class="container py-5">
    @php
        $testimonial = [
            [
                'name' => 'Hai Nguyên',
                'comment' => 'Không gian sang trọng, tay nghề KTV cao, giá trị tương xứng với dịch vụ, thái độ phục vụ và chăm sóc khách hàng ần cần chu đáo. Là nơi đáng để tận hưởng những phút giây thư giãn riêng tư với người thân.',
                'image' => 'img/testimonial-1.jpg',
            ],
            [
                'name' => 'Xuân Mai',
                'comment' => 'Massage đem lại cảm giác khác hoàn toàn với các nơi khác. Không gian đẹp, tay nghề nhân viên cao. Làm xong thấy nhẹ người, đỡ đau mỏi.',
                'image' => 'img/testimonial-2.jpg',
            ],
            [
                'name' => 'Nho Nho',
                'comment' => 'Spa rất đẹp. Nhân viên ân cần chuyên nghiệp. Massage ấn huyệt phê lắm.',
                'image' => 'img/testimonial-3.jpg',
            ],
        ]
    @endphp
    <div class="row align-items-center">
        <div class="col-lg-6 pb-5 pb-lg-0">
            <img class="img-fluid w-100" src="img/testimonial.jpg" alt="">
        </div>
        <div class="col-lg-6">
            <h6 class="w-64 block text-primary uppercase bg-light py-1 px-2 mb-3">Feedback từ khách hàng</h6>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($testimonial as $value)
                    <div class="relative">
                        <i class="fa fa-3x fa-quote-right text-primary absolute" style="top: -6px; right: 0;"></i>
                        <div class="flex items-center mb-3">
                            <img class="img-fluid rounded-circle" src="{{$value['image']}}" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="uppercase">{{$value['name']}}</h6>
                            </div>
                        </div>
                        <p class="m-0">{{$value['comment']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
