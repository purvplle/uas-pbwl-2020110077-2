<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }
    public function client()
    {
        return view('client.index');
    }
    public function peserta()
    {
        return view('peserta.index');
    }
}
