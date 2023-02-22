<?php

namespace App\Http\Controllers;

use App\Models\Extrakurikuler;
use Illuminate\Http\Request;

class ExtrakurikulerController extends Controller
{
    public function index(){
        $ekskul = Extrakurikuler::with('siswas') -> get();
        return view('extrakurikuler.index',  ['ekskulList' => $ekskul]);
        // dd($ekskul);
    }

    public function create()
    {
        $ekskul = Extrakurikuler::with('siswas')->get();
        // dd($nmSiswa);
        return view('extrakurikuler.create',  ['ekskulList' => $ekskul]);
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        Extrakurikuler::create($request -> except(['_token', 'submit']));
        return redirect('/extrakurikuler');
    }
}
