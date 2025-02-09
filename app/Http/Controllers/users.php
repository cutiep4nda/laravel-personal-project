<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = \App\Models\Users::paginate(15);
        //dd($data);
        return view('pages.userlists', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|min:11|max:11',
            'divisi' => 'required',
            'password' => 'required'
        ],[
            'nama.required' => 'Kolom Nama harus diisi',
            'nama.string' => 'Kolom Nama harus string',
            'nim.required' => 'Kolom NIM harus diisi',
            'nim.min' => 'Kolom NIM harus berisi 11 karakter',
            'nim.max' => 'Kolom NIM harus berisi 11 karakter',
            'password.required' => 'Kolom Password harus diisi'
        ]);
        if(\App\Models\Users::where('nim', $data['nim'])->first()){
            return redirect()->back()->withErrors(['Data telah ada di dalam database']);
        }
        $datastore = new \App\Models\Users();
        // $datastore->create($data);
        $datastore->nama = $data['nama'];
        $datastore->nim = $data['nim'];
        $datastore->div = $data['divisi'];
        $datastore->password = Hash::make($data['password']);
        $datastore->save();
        return to_route('userlist');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Users::where('id', $id)->delete();
        return self::index();
    }

    public function count(){
        $divisi = ['Biro Riset Pengembangan', 'Biro Media dan Branding', 'Biro Kolaborasi dan Kemitraan', 'Biro Internal', 'Departemen Ekonomi Kreatif', 'Departemen Pengembangan Sumber Daya Mahasiswa', 'Departemen Sosial Lingkungan Hidup', 'Departemen Seni dan Budaya', 'Departemen Advokasi Kesejahteraan Mahasiswa', 'Departemen Pemuda Olahraga', 'Departemen Akademik Prestasi', 'Departemen Dinamika Gerakan Politik'];
        $nmb = [];
        for ($i=0; $i < 12; $i++) { 
            $value = $divisi[$i];
            $nmb = array_merge($nmb, array($value => \App\Models\Users::where('div', $value)->count()));
        }
        $nmb = array_merge($nmb, array('total' => \App\Models\Users::count()));
        // dd($nmb);
        return view('pages.home', ['number' => $nmb, 'divisi' => $divisi]);
    }
}
