@extends('template.base')

@section('content')

<div class="container px-4 mt-3">
    <div class="row">
        <div class="div col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Artikel
                   </div>
                <div class="card body px-3">
                    <form action="{{url('artikel')}}" method="POST" enctype="multipart/form-data">
                    @csrf                    
                        <div class="form-group">
                            <label for="" class="control-label">Judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>                 
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input type="file" class="form-control" name="foto" accept=".png">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                        <br>     
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-dark float-end "><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>               
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection