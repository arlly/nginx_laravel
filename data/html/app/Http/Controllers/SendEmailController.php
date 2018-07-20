<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminderEmail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function index()
    {
        $this->dispatch(new SendReminderEmail(\Config::get('mail.from.address'), "f_arlly@nifty.com", "テスト送信です。"));
        return redirect()->route('home');
    }
}
