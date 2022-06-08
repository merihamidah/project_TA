@extends('template.base')

@section('content')

<div class="container px-4 mt-3">
    <div class="row">
        <div class="div col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Admin
                   </div>
                <div class="card body px-3">
                    <form action="{{url('admin')}}" method="POST">
                    @csrf                    
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
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