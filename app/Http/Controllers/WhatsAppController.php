<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    public function Whatsapp()
    {
        return view('livechat/whatsapp');
    }

}
