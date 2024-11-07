<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullName;
    public $date;
    public $time;
    public $phone;

    // Constructor để nhận các tham số
    public function __construct($fullName, $date, $time, $phone)
    {
        $this->fullName = $fullName;
        $this->date = $date;
        $this->time = $time;
        $this->phone = $phone;
    }

    // Phương thức để định nghĩa cách gửi email
    public function build()
    {
        return $this->subject('Đặt lịch trên Kokoro Spa') // Tiêu đề email
                    ->html('<h3>Kokoro SPA</h3><p>Khách hàng: ' . $this->fullName . '<br>Đặt lịch vào: ' . $this->date . ' ' . $this->time . '<br>Số điện thoại: ' . $this->phone .'</p>'); // Nội dung email
    }

}
