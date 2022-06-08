<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends controller{
    function index (){
        $data['list_artikel'] = Artikel::all();
        return view('artikel.index', $data);
    }
    function create(){
        return view('artikel.create');
    } function store(){
        $artikel = new Artikel;
        $artikel->judul =request('judul');
        $artikel->deskripsi =request('deskripsi');
        $artikel->save();

        $artikel->handleUploadFoto();

        return redirect('artikel')->with('success', 'data Berhasil Ditambahkan');
    }
    function show(Artikel $artikel){
        $data ['artikel'] = $artikel;
        return view('artikel.show', $data);

    }
    function edit(Artikel $artikel ){
        $data ['artikel'] = $artikel;
        return view('artikel.edit', $data);

    }
    function update(Artikel $artikel){
        $artikel->judul =request('judul');
        $artikel->deskripsi =request('deskripsi');
        $artikel->save();

        $artikel->handleUpdateFoto();

        
        return redirect('artikel')->with('success', 'data Berhasil Diedit');

    }
    function destroy(Artikel $artikel){
        $artikel->handleDeleteFoto();
        $artikel->delete();

        return redirect('artikel')->with('danger', 'data Berhasil Dihapus');
    }
}