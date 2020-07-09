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
                    <a href="{{ url('/forum')}}" class="list-group-item list-group-item-action">Pertanyaan <span class="{{ (request()->is('forum')) ? 'aktif' : '' }}"></span></a>
                    <a href="{{ url('/pengguna')}}" class="list-group-item list-group-item-action">Pengguna <span class="{{ (request()->is('pengguna')) ? 'aktif' : '' }}"></span></a>
                    <a href="{{ url('/tag')}}" class="list-group-item list-group-item-action">Tag <span class="{{ (request()->is('tag')) ? 'aktif' : '' }}"></span></a>
                  </div>
            </div>
            <div class="col-9">
                <div class="card text-truncate">
                    <div class="card-header"><a href="">
                      Judul Pertanyaan Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </a>
                    </div>
                    <div class="card-body" >
                      <p class="card-text text-truncate" style="width: 100%">With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci tempore, culpa pariatur natus, iste unde porro nam autem suscipit ratione explicabo assumenda vel? Vitae, obcaecati perspiciatis. Animi dolorum optio repellat.</p>
                      <a href="#" class="btn btn-xs btn-primary">Tag</a>
                      <a href="#" class="btn btn-xs btn-primary">php</a>
                      <a href="#" class="btn btn-xs btn-primary">html</a>
                    </div>
                    <div class="card-footer text-muted">
                        <i class="far fa-clock" data-toggle="tooltip" data-placement="top" title="Dibuat">&nbsp;</i> 2 hari yang lalu 
                        <span class="float-right">
                        <i class="fas fa-poll" data-toggle="tooltip" data-placement="top" title="Vote">&nbsp;</i> 7
                        </span>
                        <span class="float-right mr-3">
                        <i class="fas fa-comments" data-toggle="tooltip" data-placement="top" title="Jawaban">&nbsp;</i> 16
                        </span>
                      </div>
                    
                  </div>
            </div>
        </div>
    </div>
</div><br>
@endsection