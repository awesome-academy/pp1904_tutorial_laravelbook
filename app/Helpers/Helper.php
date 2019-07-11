<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ActiceEmail;

class Helper
{
    public static function sendMailLaravel($dataInput)
    {
        Mail::to($dataInput['toEmail'])->send(new ActiceEmail($dataInput));
    }
}
