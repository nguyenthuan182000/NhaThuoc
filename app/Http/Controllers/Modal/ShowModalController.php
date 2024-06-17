<?php

namespace App\Http\Controllers\Modal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowModalController extends Controller
{
    public function showLogin() {
        return view('frontend.partials.modal.ModalLogin');
    }
}
