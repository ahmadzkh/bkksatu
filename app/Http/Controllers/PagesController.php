<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Halaman Landing Pages
     */
    public function index()
    {
        return view('pages.landingpage', [
            'active' => 'home',
        ]);
    }

    /**
     * Halaman Profil BKK
     */
    public function about()
    {
        return view('pages.profile', [
            'active' => 'about',
        ]);
    }

    /**
     * Halaman Alumni dan Search Alumni
     */
    public function alumni()
    {
        # code...
    }

    /**
     * Halaman Detail Alumni
     */
    public function detailalumni()
    {
        # code...
    }

    /**
     * Halaman Loker dan Search Loker
     */
    public function jobvacancy()
    {
        # code...
    }

    /**
     * Halaman Detail Loker dan Search Detail Loker
     */
    public function detailvacancy()
    {
        # code...
    }

    /**
     * Halaman Mitra dan Search Mitra
     */
    public function partners()
    {
        # code...
    }

    /**
     * Halaman Detail Mitra
     */
    public function detailpartners()
    {
        # code...
    }

    /**
     * Halaman Information dan Search Information
     */
    public function information()
    {
        # code...
    }

    /**
     * Halaman Detail Information
     */ 
    public function detailinformation()
    {
        # code...
    }
}