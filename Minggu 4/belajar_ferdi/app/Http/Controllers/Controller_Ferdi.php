<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class Controller_Ferdi extends Controller

{
    Public function index()
    {
        // return "Halo Nama Saya Mochammad Ferdianto, dan saya sedang belajar membuat controller laravel";
        // return "method ini nantinya akan digunakan untuk mengembil semua data user";
        $nama = "Mochammad ferdianto";

        $pelajaran = ["pemrograman lanjut", "MVC"];

        return view('halamanhome', compact('nama', 'pelajaran'));
    }
    public function create()
    {
        return "method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(Request $request)
    {
        return "method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id)
    {
        return "method ini nantinya akan digunakan untuk mengambil 1 data user dengab id=" . $id;
    }
    public function edit($id)
    {
        return "method ini nantinya akan ddigunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update(Request $request, $id)
    {
        return "method ini nantinya akan digunakan untuk mengubah data user dangan id=" . $id;
    }
    public function destroy($id)
    {
        return "method ini nanti digunakan untuk menghapus user dengan id=" . $id;
    }

}
