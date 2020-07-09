@extends('forum/layouts/master')

@section('title', 'Forum')

@section('content')
<div class="content bg-white">
    <div class="container">
        <div class="row mt-4">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active bg-1">
                      <i class="fa fa-globe" aria-hidden="true">&nbsp;</i> PUBLIK
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Pertanyaan <span class="aktif"></span></a>
                    <a href="#" class="list-group-item list-group-item-action">Pengguna</a>
                    <a href="#" class="list-group-item list-group-item-action">Tag <span class="float-right badge bg-2">31</span></a>
                  </div>
            </div>
        </div>
    </div>
</div><br>
@endsection