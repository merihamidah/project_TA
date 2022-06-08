<?php

namespace App\Models;
use Illuminate\Support\Str;

class Artikel extends Model{
    protected $table = 'artikel';

    function handleUploadFoto(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/artikel";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();

        }
    }
    function handleUpdateFoto(){
        $this->HandleDeleteFoto();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/artikel";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();

        }
    }
    function HandleDeleteFoto(){
        $foto = $this->foto;
        $path  = public_path($foto);
        if(file_exists($path)){
            unlink($path);
        }
        return true;
    }

    
}