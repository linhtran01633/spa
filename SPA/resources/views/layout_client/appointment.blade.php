@extends('layout_client.main')
@section('css')
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

        .step {
            width: 550px;
            margin: 0 auto;
            background-color: white;
        }

        /* Styling cho lịch */
        .calendar {
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .calendar-month-year {
            font-size: 18px;
            font-weight: bold;
        }

        .prev-month, .next-month {
            font-size: 24px;
            cursor: pointer;
        }

        .calendar-table {
            width: 100%;
            border-collapse: collapse;
        }

        .calendar-table th, .calendar-table td {
            width: 14.28%;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
        }

        .calendar-table td {
            cursor: pointer;
        }

        .calendar-table td:hover {
            background-color: #eee;
        }

        .selected-day {
            color: white;
            border-radius: 5px;
            background-color: #f2ebc3f0;
        }

        .confirm-btn {
            width: 100%;
            border: none;
            padding: 15px;
            display: block;
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            text-transform: uppercase;
            background-color: #f2ebc3f0;
        }

        .confirm-btn:hover {
            background-color: #f2ebc3f0;
        }


        .time-frame {
            display: flex;
            flex-wrap: wrap;
            width: 500px;
            margin: 0 auto;
        }

        .time-frame .time_slot  input {
            display: none;
        }

        .time-frame  .time_slot {
            width: 70px;
            height: 70px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            border: 1px solid #f2ebc3f0;
        }

        .time-frame  .time_slot label {
            width: 100%;
            height: 100%;
            font-weight: normal;
        }

        .time-frame .time_slot .time-slot-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            height: 100%;
            border-radius: 5px;
        }

        /* Áp dụng màu đỏ khi input được checked */
        .time_slot input[type="radio"]:checked + .time-slot-content {
            background-color: #f2ebc3f0;
            color: white;
        }

        .popup {
            display: none; /* Ẩn popup mặc định */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%; /* Toàn bộ chiều rộng */
            height: 100%; /* Toàn bộ chiều cao */
            background-color: rgba(0, 0, 0, 0.5); /* Nền tối mờ */
        }

        .popup-content {
            background-color: #fff;
            margin: 15% auto; /* Căn giữa popup */
            padding: 20px;
            border: 1px solid #888;
            width: 500px; /* Chiều rộng của popup */
            border-radius: 8px; /* Bo góc */
        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .flex {
            display: flex;
        }

        .col1_popup {
            width: 150px;
        }

        .disabled {
            opacity: 0.5; /* Làm mờ khung giờ đã vô hiệu hóa */
            pointer-events: none; /* Ngăn không cho nhấp chuột */
        }

        @media (max-width: 480px) {
            .step {
                width: 400px;
            }

            .time-frame {
                width: 400px;
            }

            .calendar {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
@endsection
@section('content')
    <section class="booking-form">
        <div class="container pt-200">
            <!-- Bước 2: Chọn thời gian và nhân viên -->
            <div class="step">
                <div class="text-center">
                    <br>
                    <strong>Booking information</strong><br><br>
                </div>
                <div class="row" style="width:95%; margin: 0 auto">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('full_name')}}<span class="text-danger">*</span></label>
                            <input type="text" id="fullname" required class="form-control rounded text-left" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('phone')}}<span class="text-danger">*</span></label>
                            <input type="text" id="phone" required class="form-control rounded text-left" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('email')}}</label>
                            <input type="email" id="email" class="form-control rounded text-left" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('menu.service')}}<span class="text-danger">*</span></label>
                            <select class="form-control rounded text-left" id="service" required>
                                <option value="">{{__('menu.service')}}</option>
                                <option value="1">{{__('menu.service.service1')}}</option>
                                <option value="2">{{__('menu.service.service2')}}</option>
                                <option value="3">{{__('menu.service.service3')}}</option>
                                <option value="4">{{__('menu.service.service4')}}</option>
                                <option value="5">{{__('menu.service.service5')}}</option>
                                <option value="6">{{__('menu.service.service6')}}</option>
                                <option value="7">{{__('menu.service.service7')}}</option>
                                <option value="8">{{__('menu.service.service8')}}</option>
                                <option value="9">{{__('menu.service.service9')}}</option>
                                <option value="10">{{__('menu.service.service10')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>

                <div style="width:95%; margin: 0 auto">
                    <h5>{{__('staft')}}</h5>
                    <select id="staff" class="form-control rounded text-left">
                        <option value="">Ngẫu nhiên</option>
                        @foreach ($users as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <br>

                <h5 style="width:95%; margin: 0 auto">{{__('date')}}<span class="text-danger">*</span></h5>

                <!-- Calendar -->
                <div class="calendar">
                    <div class="calendar-header">
                        <div class="prev-month" onclick="prevMonth()">&#10094;</div>
                        <div class="calendar-month-year" id="month-year"></div>
                        <div class="next-month" onclick="nextMonth()">&#10095;</div>
                    </div>
                    <table class="calendar-table">
                        <thead>
                            <tr>
                                <th style="color:red">Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th style="color:blue">Sat</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body">
                            <!-- Rows for the days will be dynamically created here -->
                        </tbody>
                    </table>
                </div>

                <br>
                <h5 style="width:95%; margin: 0 auto">{{__('time')}} <span class="text-danger">*</span></h5>
                <div class="time-frame">
                    <div class="time_slot" data-time="09:30">
                        <label for="time_select1">
                            <input type="radio" id="time_select1" name="time_select" value="09:30">
                            <div class="time-slot-content">
                                <div class="text-center">09:30</div>
                                <div class="text-center status">hết chổ</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="10:00">
                        <label>
                            <input type="radio" name="time_select" value="10:00">
                            <div class="time-slot-content">
                                <div class="text-center">10:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="10:30">
                        <label>
                            <input type="radio" name="time_select" value="10:30">
                            <div class="time-slot-content">
                                <div class="text-center">10:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="11:00">
                        <label>
                            <input type="radio" name="time_select" value="11:00">
                                <div class="time-slot-content">
                                <div class="text-center">11:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="11:30">
                        <label>
                            <input type="radio" name="time_select" value="11:30">
                                <div class="time-slot-content">
                                <div class="text-center">11:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="12:00">
                        <label>
                            <input type="radio" name="time_select" value="12:00">
                                <div class="time-slot-content">
                                <div class="text-center">12:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="12:30">
                        <label>
                            <input type="radio" name="time_select" value="12:30">
                            <div class="time-slot-content">
                                <div class="text-center">12:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="13:00">
                        <label>
                            <input type="radio" name="time_select" value="13:00">
                            <div class="time-slot-content">
                                <div class="text-center">13:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="13:30">
                        <label>
                            <input type="radio" name="time_select" value="13:30">
                            <div class="time-slot-content">
                                <div class="text-center">13:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="14:00">
                        <label>
                            <input type="radio" name="time_select" value="14:00">
                            <div class="time-slot-content">
                                <div class="text-center">14:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="14:30">
                        <label>
                            <input type="radio" name="time_select" value="14:30">
                            <div class="time-slot-content">
                                <div class="text-center">14:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="15:00">
                        <label>
                            <input type="radio" name="time_select" value="15:00">
                            <div class="time-slot-content">
                                <div class="text-center">15:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="15:30">
                        <label>
                            <input type="radio" name="time_select" value="15:30">
                            <div class="time-slot-content">
                                <div class="text-center">15:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="16:00">
                        <label>
                            <input type="radio" name="time_select" value="16:00">
                            <div class="time-slot-content">
                                <div class="text-center">16:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="16:30">
                        <label>
                            <input type="radio" name="time_select" value="16:30">
                            <div class="time-slot-content">
                                <div class="text-center">16:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="17:00">
                        <label>
                            <input type="radio" name="time_select" value="17:00">
                            <div class="time-slot-content">
                                <div class="text-center">17:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>

                    <div class="time_slot" data-time="17:30">
                        <label>
                            <input type="radio" name="time_select" value="17:30">
                            <div class="time-slot-content">
                                <div class="text-center">17:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>
                    <div class="time_slot" data-time="18:00">
                        <label>
                            <input type="radio" name="time_select" value="18:00">
                            <div class="time-slot-content">
                                <div class="text-center">18:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>
                    <div class="time_slot" data-time="18:30">
                        <label>
                            <input type="radio" name="time_select" value="18:30">
                            <div class="time-slot-content">
                                <div class="text-center">18:30</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>
                    <div class="time_slot" data-time="19:00">
                        <label>
                            <input type="radio" name="time_select" value="19:00">
                            <div class="time-slot-content">
                                <div class="text-center">19:00</div>
                                <div class="text-center status">{{ __('has_slots')}}</div>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="step" style="width:80%; margin: 0 auto">
                    <button type="button" id="button_submit_form" class="confirm-btn uppercase"> {{__('appointment')}}</button>
                </div>

                <div id="popup" class="popup">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="flex">
                            <span class="col1_popup">{{__('full_name')}} :</span>
                            <span id="full_name_text"></span>
                        </div>
                        <div class="flex">
                            <span class="col1_popup">{{__('phone')}} :</span>
                            <span id="phone_text"></span>
                        </div>
                        <div class="flex">
                            <span class="col1_popup">{{__('email')}} :</span>
                            <span id="email_text"></span>
                        </div>
                        <div class="flex">
                            <span class="col1_popup">{{__('menu.service')}} :</span>
                            <span id="service_text"></span>
                        </div>
                        <div class="flex">
                            <span class="col1_popup">{{__('staff')}} :</span>
                            <span id="staff_text"></span>
                        </div>

                        <div class="flex">
                            <span class="col1_popup">{{__('date')}} :</span>
                            <span id="date_text"></span>
                        </div>

                        <div class="flex">
                            <span class="col1_popup">{{__('time')}} :</span>
                            <span id="time_text"></span>
                        </div>
                        <div class="flex">
                            <button id="btn_submit" class="confirm-btn uppercase">
                                {{__('confirm')}}
                            </button>
                        </div>
                    </div>
                </div>

                <br><br>
            </div>
        </div>
    </section>
    @section('scripts')
        <script>
            var date = '';
            let currentMonth = new Date().getMonth();
            let currentYear = new Date().getFullYear();
            const monthNames = ["January", "February", "March", "April", "May", "June",
                                "July", "August", "September", "October", "November", "December"];

            const calendarBody = document.getElementById("calendar-body");
            const monthYearText = document.getElementById("month-year");

            document.addEventListener("DOMContentLoaded", function() {
                renderCalendar(currentMonth, currentYear);
            });

            function renderCalendar(month, year) {
                // Set month and year in header
                monthYearText.textContent = `${monthNames[month]} ${year}`;

                // Get first day of the month
                const firstDay = new Date(year, month).getDay();

                // Get number of days in the month
                const daysInMonth = 32 - new Date(year, month, 32).getDate();

                // Clear previous cells
                calendarBody.innerHTML = "";

                let date = 1;

                // Create the rows for the calendar
                for (let i = 0; i < 6; i++) {
                    const row = document.createElement("tr");

                    // Create 7 cells for each day of the week
                    for (let j = 0; j < 7; j++) {
                        const cell = document.createElement("td");

                        if (i === 0 && j < firstDay) {
                            cell.textContent = "";
                        } else if (date > daysInMonth) {
                            break;
                        } else {

                            // Tô màu cho thứ 7 và chủ nhật
                            if (j === 0 ) {
                                cell.style.color = "red";
                            }

                            if (j === 6) {
                                cell.style.color = "blue";
                            }

                            cell.textContent = date;

                            // Create a closure to hold the current date
                            cell.addEventListener("click", (function(currentDate) {
                                return function() {
                                    selectDate(cell, currentDate, month, year);
                                };
                            })(date)); // Pass in the current date

                            date++;
                        }

                        row.appendChild(cell);
                    }

                    calendarBody.appendChild(row);
                }
            }

            // Handle selecting date
            function selectDate(cell, day, month, year) {
                const selectedDate = `${year}-${month + 1}-${day}`;
                // alert(`Bạn đã chọn ngày: ${selectedDate}`);
                date = selectedDate;
                console.log(`Bạn đã chọn ngày: ${selectedDate}`);

                check_time_frame(date);

                // Clear previously selected day
                const selectedDay = document.querySelector(".selected-day");
                if (selectedDay) {
                    selectedDay.classList.remove("selected-day");
                }

                // Mark the new selected day
                cell.classList.add("selected-day");
            }

            // Move to previous month
            function prevMonth() {
                if (currentMonth === 0) {
                    currentMonth = 11;
                    currentYear--;
                } else {
                    currentMonth--;
                }
                renderCalendar(currentMonth, currentYear);
            }

            // Move to next month
            function nextMonth() {
                if (currentMonth === 11) {
                    currentMonth = 0;
                    currentYear++;
                } else {
                    currentMonth++;
                }
                renderCalendar(currentMonth, currentYear);
            }


            // Lấy các phần tử cần thiết
            const popup = document.getElementById('popup');
            const closeBtn = document.querySelector('.close-btn');

            // Đóng popup khi nhấn nút đóng
            closeBtn.addEventListener('click', function() {
                popup.style.display = 'none'; // Ẩn popup
            });

            $('#button_submit_form').on('click', function(e) {
                var staff = document.getElementById('staff');
                var fullname = document.getElementById('fullname');
                var email = document.getElementById('email');
                var phone = document.getElementById('phone');
                var service = document.getElementById('service');
                var time = $('input[name="time_select"]:checked').val(); // Lấy giá trị của radio button đang được chọn

                if (!fullname.checkValidity()) {
                    alert('Please enter your name');
                } else if (!phone.checkValidity()) {
                    alert('Please enter phone');
                } else if (!service.checkValidity()) {
                    alert('Please enter service');
                } else if (!date) {
                    alert('Please enter date');
                } else if (!time) {
                    alert('Please enter time');
                } else {

                    $('#full_name_text').text(fullname.value);
                    $('#phone_text').text(phone.value);
                    $('#email_text').text(email.value);
                    $('#service_text').text(service.value);
                    $('#staff_text').text(staff.value);
                    $('#date_text').text(date);
                    $('#time_text').text(time);
                    popup.style.display = 'block'; // Hiển thị popup
                }
            });

            $('#btn_submit').on('click', function(e) {
                var postSearchURL = "{{ route('submit-booking') }}";
                let data = {
                    full_name: $('#fullname').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val(),
                    service: $('#service').val(),
                    user_id: $('#staff').val(),
                    date: date,
                    time: $('input[name="time_select"]:checked').val(),
                }
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    url: postSearchURL,
                    type: "POST",
                    data: data,
                    success: function(result) {
                        alert("Đặt lịch thành công");
                        popup.style.display = 'none'; // Ẩn popup
                        window.location.reload();
                    },
                    error: function(data) {
                        alert("ご住所がありません");
                    },
                });
            });

            $('#staff').on('change', function(e) {
                if(date != '') {
                    check_time_frame(date);
                }
            });

            function check_time_frame(date) {

                const radioButtons = document.querySelectorAll('input[name="time_select"]');
                radioButtons.forEach(radio => {
                    radio.checked = false; // Bỏ chọn
                });


                var postSearchURL = "{{ route('check-time-frame') }}";
                let data = {
                    date: date,
                    user_id: $('#staff').val(),
                }
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    url: postSearchURL,
                    type: "POST",
                    data: data,
                    success: function(result) {
                        console.log(result);
                        updateTimeSlots(result)
                    },
                    error: function(data) {
                        alert("error");
                    },
                });
            }

            // Hàm để cập nhật giao diện
            function updateTimeSlots(availableSlots) {
                const timeSlots = document.querySelectorAll('.time_slot');

                timeSlots.forEach(slot => {
                    const timeValue = slot.getAttribute('data-time');
                    const input = slot.querySelector('input[type="radio"]');
                    const statusText = slot.querySelector('.status'); // Lấy phần tử status

                    if (availableSlots.includes(timeValue)) {
                        statusText.textContent = "{{ __('has_slots') }}";
                        statusText.style.color = 'green'; // Đổi màu chữ thành xanh
                        slot.classList.remove('disabled'); // Gỡ bỏ lớp disabled nếu có
                        input.disabled = false; // Bật radio
                    } else {
                        statusText.textContent = "{{ __('no_slots') }}";
                        statusText.style.color = 'red'; // Đổi màu chữ thành đỏ
                        slot.classList.add('disabled'); // Thêm lớp disabled
                        input.disabled = true; // Vô hiệu hóa radio
                    }
                });
            }
        </script>
    @endsection
@endsection
