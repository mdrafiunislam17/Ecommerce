<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function setting()
    {
        return view('admin.setting');

    }

    public function manage_user()
    {
        return view('admin.manage.user');
    }

    public function  manage_stores()
    {
      return view('admin.manage.store');
    }

    public function cart_history()
    {
        return view('admin.cart.history');
    }

    public function order_history()
    {
        return view('admin.order.history');
    }
}
