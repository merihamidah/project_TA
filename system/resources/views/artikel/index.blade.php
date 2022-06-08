@extends('template.base')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Artikel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard/ Artikel</li>
    </ol>
</div>
<div class="container px-4 mt-3">
    <div class="row">
        <div class="div col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Artikel
                    <a href="{{url('artikel/create')}}" class="btn btn-dark float-md-end"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card body px-3">
                    <table>
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul</th>
                            </thead>
                            <tbody>
                                @foreach ($list_artikel as $artikel)
                                    
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('artikel', $artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('template.utils.delete', ['url'=> url('artikel', $artikel->id)])
                                        </div>
                                    </td>
                                    <td>{{$artikel->judul}}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection