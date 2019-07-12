<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ActiceEmail;

class Helper
{
    public static function sendMailLaravel($dataInput)
    {
        Mail::to($dataInput['toEmail'])->send(new ActiceEmail($dataInput));

        // Mail::to($dataInput['toEmail'])->send('emails.ticket', $data, function ($message) {
        //     $message->from('quyen.luongvan13@gmail.com', 'Learning Laravel');

        //     $message->subject('There is a new ticket!');
        // });
    }
}



// namespace App\Helpers;

// use Illuminate\Support\Facades\Mail;

// class Helper
// {
//     public static function sendMailLaravel($dataInput)
//     {
//         $data = [
//             'ticket' => $dataInput['ticket'],
//         ];

//         Mail::to($dataInput['toEmail'])->send('emails.ticket', $data, function ($message) {
//             // $message->from('quyen.luongvan13@gmail.com', 'Learning Laravel');

//             $message->subject('There is a new ticket!');
//         });
//     }
// }