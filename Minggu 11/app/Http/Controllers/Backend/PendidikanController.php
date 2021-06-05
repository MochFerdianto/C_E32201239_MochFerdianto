<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Redirect;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::get();
        return view('backend.pendidikan.index', compact('pendidikan'));
    }
    public function create()
    {
        $pendidikan = null;
        return view('backend.pendidikan.create',compact('pendidikan'));
    }
    public function store (Request $request)
    {
        pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')->with('sucsess','Data Baru Telah disimpan.');
    }
    public function edit(Pendidikan $pendidikan)
    {
        return view('backend.pendidikan.create',compact('pendidikan'));
    }
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $pendidikan->update($request->all());
        
        return redirect()->route('pendidikan.index')->with('sucsess','Data Telah Berhasil Diubah.');
    }
}
