@extends('template.base')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard/ Admin</li>
    </ol>
</div>
<div class="container px-4 mt-3">
    <div class="row">
        <div class="div col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Admin
                    <a href="{{url('admin/create')}}" class="btn btn-dark float-md-end"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card body px-3">
                    <table>
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Email</th>

                            </thead>
                            <tbody>
                                @foreach ($list_admin as $admin)
                                    
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin', $admin->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('admin', $admin->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('template.utils.delete', ['url'=> url('admin', $admin->id)])
                                        </div>
                                    </td>
                                    <td>{{$admin->nama}}</td>
                                    <td>{{$admin->email}}</td>

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