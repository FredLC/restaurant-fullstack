<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function subscribers() {
        return view('admin/customers/subscribers');
    }

    public function reservations() {
        return view('admin/customers/reservations');
    }
}
