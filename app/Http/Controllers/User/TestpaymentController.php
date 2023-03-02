<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestpaymentController extends Controller
{
    public function payment()
    {
        return view('pages.user.payment.payment_index');
    }
}
