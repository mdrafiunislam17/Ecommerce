<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Factory|View|Application|RedirectResponse|\Illuminate\View\View
     *
     *
     *
     */
    public function index()
    {
        if (Auth::check())
        {
            $role = Auth::user()->role;

            if ($role == '1') {
                return view('admin.index');
            }
            else if ($role == '2') {
                return view('vendor');
            }
            else {
                return redirect()->route('home')->with('error', 'Unauthorized access');

            }
        }
        else {
            return redirect()->route('login')->with('warning', 'You need to log in first');
        }
    }


}
