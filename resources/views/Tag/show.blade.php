@extends('pengguna/layouts/master')

@section('title', 'Pengguna')

@section('content')
<div class="content bg-white">
    <div class="container">
        <div class="row mt-4">
              <div class="row">
                @foreach($tags as $key => $tag)
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">{{$tag->tag}}</h4>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</div><br>
@endsection