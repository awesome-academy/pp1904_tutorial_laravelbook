<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActiveMail;
class Helper
{
    public static function sendMailLaravel($dataInput)
    {
        Mail::to($dataInput['toEmail'])->send(new ActiveMail($dataInput));
        // Mail::to($dataInput['toEmail'])->send('emails.ticket', $data, function ($message) {
        //     $message->from('quyen.luongvan13@gmail.com', 'Learning Laravel');
        //     $message->subject('There is a new ticket!');
        // });
    }
}
