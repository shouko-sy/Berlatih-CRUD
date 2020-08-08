<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan);
        return view('asks.index', compact('pertanyaan'));
    }

    public function create(){
        return view('asks.create');
    }

    public function store(Request $request){ 
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'pertanyaan' => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert([
            "judul"=>$request['judul'],
            "isi"=>$request['pertanyaan']
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan');
    }

    public function show($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        // dd($pertanyaan);
        return view('asks.show', compact('pertanyaan'));
    }

    public function edit($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('asks.edit', compact('pertanyaan'));
    }

    public function update($pertanyaan_id, Request $request){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['pertanyaan']
        ]);
        return redirect('/pertanyaan')->with('success', 'Data Berhasil Di Update');
    }

    public function destroy($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'Data Berhasil Di Hapus');
    }
}
