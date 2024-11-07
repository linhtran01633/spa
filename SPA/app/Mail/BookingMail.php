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

    // Constructor để nhận các tham số
    public function __construct($fullName, $date, $time)
    {
        $this->fullName = $fullName;
        $this->date = $date;
        $this->time = $time;
    }

    // Phương thức để định nghĩa cách gửi email
    public function build()
    {
        return $this->subject('Đặt lịch trên Kokoro Spa') // Tiêu đề email
                    ->html('<h3>Kokoro SPA</h3><p>Khách hàng: ' . $this->fullName . '<br>Đặt lịch vào: ' . $this->date . ' ' . $this->time . '</p>'); // Nội dung email
    }

}
