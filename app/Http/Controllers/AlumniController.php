<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;
use App\Models\User;

class AlumniController extends Controller
{
    /**
     * Construct
     */
    public function __construct()
    {
        //s
    }

    /**
     * Display a dashboard of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.alumni.main', [
            'active' => 'alumni',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $alumni = DB::table('alumni')->get();
        $jurusan = DB::table('jurusan')->get();
        $angkatan = DB::table('angkatan')->get();

        return view('admin.alumni.daftar-alumni', [
            'active' => 'alumni',
            'alumnis' => $alumni,
            'jurusan' => $jurusan,
            'angkatan' => $angkatan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumni = DB::table('alumni')->get();
        $jurusan = DB::table('jurusan')->get();
        $angkatan = DB::table('angkatan')->get();

        // dd($jurusan[0]->id);
        return view('admin.alumni.add-alumni', [
            'active' => 'alumni',
            'alumnis' => $alumni,
            'jurusan' => $jurusan,
            'angkatan' => $angkatan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataAlumni = $request->validate([
            'nama' => 'required',
            'nis' => 'required|size:10',
            'nisn' => 'required|size:11',
            'id_jurusan' => 'required|size:8',
            'id_angkatan' => 'required|size:8',
            'id_user' => 'required|size:8',
        ]);

        $dataUser = $request->validate([
            'username' => 'required|max:20',
            'password' => 'required|min:8'
        ]);

        dd($dataAlumni);

        Alumni::create($dataAlumni);
        User::create($dataUser);

        return redirect('/dashboard/alumni/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}