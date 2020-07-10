@extends('pengguna/layouts/master')

@section('title', 'Pengguna')

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
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">Javascript</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">Ruby</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">Node.js</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">Laravel</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">Bootstrap</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">css</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">Php</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <div class="info-box-content">
                      <button class="btn btn-xs btn-primary">Html</button>
                      <span class="info-box-text text-center">Pertanyaan :</span>
                      <span class="info-box-number text-center">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
            </div>
            </div>
        </div>
    </div>
</div><br>
@endsection