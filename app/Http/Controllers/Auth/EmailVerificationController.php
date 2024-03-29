<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function index(Request $request){
        return view("auth.layout.verification-notice");
    }

    public function verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect()->route("home");
    }
}
