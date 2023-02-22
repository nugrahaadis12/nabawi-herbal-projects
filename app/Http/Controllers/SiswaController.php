<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $nmSiswa = Siswa::with('extrakurikulers')->get();
        // dd($nmSiswa);
        return view('siswa.index',  ['siswaList' => $nmSiswa]);
    }

    public function create()
    {
        $nmSiswa = Siswa::with('extrakurikulers')->get();
        // dd($nmSiswa);
        return view('siswa.create',  ['siswaList' => $nmSiswa]);
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        Siswa::create($request -> except(['_token', 'submit']));
        return redirect('/siswa');
    }
}
