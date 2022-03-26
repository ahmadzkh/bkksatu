<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifyController extends Controller
{
    /**
     * Halaman Notification
     */
    public function index()
    {
        return view('admin.dashboard.notification', [
            'active' => 'dashboard'
        ]);
    }

    /**
     * Halaman Detail Notification
     */
    public function detail()
    {
        return view('admin.dashboard.detailnotif');
    }
}
