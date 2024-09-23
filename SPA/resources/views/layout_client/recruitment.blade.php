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
                        <h3 class="h3-lg txt-color-01"> {{__('menu.service.service4')}} </h3>
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

    <section>
        <div class="row tile-detail container">
            <div class="col-lg-10 offset-lg-1">
                <div class="terms-box">
                    <h3 class="h5-lg txt-color-01 font-bold">* Kỹ thuật viên &amp; Chuyên viên</h3>
                    <h3 class="h5-lg txt-color-01 font-bold">1. Mô tả công việc</h3>
                    <ul class="txt-list txt-color-05">

                        <li class="list-item font-bold">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Thực hiện các bài massage thư giãn và trị liệu cho khách hàng.</span>
                        </li>

                        <li class="list-item">
                            <i class="fas fa-angle-right "></i>
                            <span class="txt-500">Môi trường làm việc thân thiện, lành mạnh.</span>
                        </li>

                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Không yêu cầu kinh nghiệm, sẽ có giáo viên đào tạo bài bản.</span>
                        </li>

                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Làm việc theo ca do công ty quy định.</span>
                        </li>

                    </ul>

                </div>

                <div class="terms-box">
                    <h3 class="h5-lg txt-color-01 font-bold">2. Yêu cầu công việc</h3>
                    <ul class="txt-list txt-color-05">
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Ngoại hình ưa nhìn, Nữ tuổi từ 18 đến 32.</span>
                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Sức khỏe tốt, lý lịch rõ ràng.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Ưu tiên ứng viên có nhu cầu gắn bó và làm việc lâu dài.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Cẩn thận, có tâm với nghề.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Yêu thích ngành dịch vụ Nhật Bản.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Hòa đồng và có trách nhiệm trong công việc.</span>

                        </li>
                    </ul>
                </div>

                <div class="terms-box">
                    <h3 class="h5-lg txt-color-01 font-bold">3. Quyền lợi</h3>
                    <ul class="txt-list txt-color-05">
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">	Lương cố định từ 8tr – 10tr/tháng </span><br>
                            <span> &ensp; Mức lương sẽ được đánh giá &amp; đề xuất dựa vào tay nghề của ứng viên</span>
                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">	Hoa hồng dịch vụ 10%</span>
                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">	Phụ cấp gửi xe 980.000đ/tháng</span>
                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Lễ tết lương 300%</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Không áp doanh số.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Chế độ xét tăng lương hàng năm.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Cơ hội thăng tiến cao.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Nghỉ ca 5 ngày/tháng hoặc theo nhu cầu của công ty (Trừ thứ 7, CN)</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Làm việc trong môi trường năng động, được học hỏi và trao dồi ngoại ngữ.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Được cập nhật kĩ năng, các kĩ thuật massage thường xuyên.</span>

                        </li>
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Lương + thưởng tháng 13 và 12 ngày phép năm.</span>

                        </li>
                    </ul>
                </div>
                <div class="terms-box">
                    <h3 class="h5-lg txt-color-01 font-bold">Ứng viên phù hợp vui lòng chuẩn bị hồ sơ đầy đủ và liên hệ trực tiếp để nộp hồ sơ tại:</h3>
                    <ul class="txt-list txt-color-05">
                        <li class="list-item">
                            <i class="fas fa-angle-right"></i>
                            <span class="txt-500">Kokoro spa &amp; aesthetic</span><br>
                            <span class="txt-500">371 Hai bà trưng , Phường Võ Thị Sáu</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    @endsection
@endsection
