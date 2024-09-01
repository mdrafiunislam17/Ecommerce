<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAttrubuteController extends Controller
{
    //

    public function index()
    {
        return view('admin.productAttrubute.create');
    }

    public function manage()
    {
        return view('admin.productAttrubute.manage');
    }
}
