@extends('template.base')

@section('content')
<div class="container  px-4 mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Artikel
                </div>
                <div class="card-body">
                    <h3>{{$artikel->judul}}</h3>
                    <h6>{{$artikel->created_at->diffForHumans()}}</h6>
                    <hr>
                    <p>
                        <img width="300px" src="{{url("public", $artikel->foto)}}" alt="">
                    </p>
                    <p>{!! nl2br($artikel->deskripsi) !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection