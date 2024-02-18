<?php

namespace App\Http\Controllers\email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GmailController extends Controller
{
    public function emailOrder($param,$address){
        Mail::send('email.order',$param,function($email)use($address){
            $email->to($address);
        });
    }

    public function emailSignUp($address){
        Mail::send('email.registration',$address,function($email)use($address){
            $email->to($address);
        });
    }
}
