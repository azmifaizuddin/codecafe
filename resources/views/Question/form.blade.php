@extends('adminlte.master')
@section('title', 'Buat Pertanyaan')
@section('content')
<div class="col-md-12 mx-auto">
    <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Buat Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ url('/questions')}}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="title">Judul Pertanyaan</label>
                            <input id="title" name="title" type="text"
                                class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}"
                                placeholder="Judul pertanyaan ...">
                            @error('title')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="content">Isi Pertanyaan</label>
                            <textarea id="content" name="content" maxlength="6000"
                                class="form-control @error('content') is-invalid @enderror" rows="10" type="text"
                                placeholder="Isi pertanyaan ...">{{ old('content') }}</textarea>
                            @error('content')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                            <span class="pull-right label label-default" id="count_message"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="tag">Hashtag</label>
                            <input id="tag" name="tag" type="text"
                                class="form-control @error('tag') is-invalid @enderror" value="{{old('tag')}}"
                                placeholder="Hashtag ...">
                            @error('tag')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                <a href="/pertanyaan" role="button" class="btn btn-danger">Batal</a>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    @endsection
    @push('scripts')
    <script>
    var text_max = 6000;
    $('#count_message').html('0 / ' + text_max);

    $('#content').keyup(function() {
        var text_length = $('#content').val().length;
        var text_remaining = text_max - text_length;

        $('#count_message').html(text_length + ' / ' + text_max);
    });
    </script>
    @endpush