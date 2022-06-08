@extends('template.base')

@section('content')
<div class="container  px-4 mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Admin
                </div>
                <div class="card-body">
                    <h3>{{$admin->nama}}</h3>
                    <h6>{{$admin->email}}</h6>
                   
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection