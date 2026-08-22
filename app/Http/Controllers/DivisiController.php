<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index(){
        $divisi=Divisi::all();

        return view('divisi.index',compact('divisi'));
    }

    public function create(){
        return view('divisi.create');
    }

    public function store(Request $r){
        $r->validate([
            'kode'=>'required|unique:divisis',
            'nama'=>'required'
        ]);

        Divisi::create($r->all());
        return redirect()->route('divisi.index')->with('success','Data Divisi Berhasil dibuat');
    }

    public function edit(Divisi $divisi){
        return view('divisi.edit',compact('divisi'));
    }

    public function update(Request $r, Divisi $divisi){
        $r->validate([
            'kode'=>'required',
            'nama'=>'required'
        ]);

        $divisi->update($r->all());
        return redirect()->route('divisi.index')->with('success','Data Divisi Berhasil diupdate');
    }

    public function delete(Divisi $divisi){
        $divisi->delete();
        return redirect()->route('divisi.index')->with('success','Data Divisi Berhasil dihapus');
    }
}
