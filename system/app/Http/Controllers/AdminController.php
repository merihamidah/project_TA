<?php

namespace App\Http\Controllers;
use App\Models\Admin;

class AdminController extends controller{
    function index (){
        $data['list_admin'] = Admin::all();
        return view('admin.index', $data);
    }
    function create(){
        return view('admin.create');
    } function store(){
        $admin = new Admin;
        $admin->nama =request('nama');
        $admin->email =request('email');
        $admin->password = bcrypt( request('email'));
        $admin->save();

        return redirect('admin')->with('success', 'data Berhasil Ditambahkan');
    }
    function show(Admin $admin){
        $data ['admin'] = $admin;
        return view('admin.show', $data);

    }
    function edit(Admin $admin ){
        $data ['admin'] = $admin;
        return view('admin.edit', $data);

    }
    function update(Admin $admin){
        $admin->nama = request('nama');
        $admin->email = request('email');
        if(request('password')) $admin->password = bcrypt( request('email'));
        $admin->save();
        
        return redirect('admin')->with('success', 'data Berhasil Diedit');

    }
    function destroy(Admin $admin){
        $admin->delete();

        return redirect('admin')->with('danger', 'data Berhasil Dihapus');
    }
}