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
                <div class="pt-3">
                    <a href="questions/create" class="btn btn-sm btn-success">Buat Pertanyaan</a>
                </div>
            </div>
            <div class="col-9">
              @foreach($questions as $key => $question)
                <div class="card text-truncate">
                    <div class="card-header"><a href="/pertanyaan/{{$question->id}}">
                      <h5>{{$question->title}}</h5>
                    </a>
                    </div>
                    <div class="card-body" >
                      <p class="card-text text-truncate" style="width: 100%">{{$question->content}}</p>
                      <?php $tag = explode(' ',$question->tag); ?>
                      @for ($i=0; $i < str_word_count($question->tag); $i++)
                      <a href="/tag/{{$tag[$i]}}" class="btn btn-xs btn-primary">{{$tag[$i]}}</a>
                      @endfor
                    </div>
                    @foreach ($questions as $key => $question)

                        <div class="card-body" >
                            <p class="card-text text-truncate" style="width: 100%">{{$question->content}}</p>
                            <a href="#" class="btn btn-xs btn-primary">Tag</a>
                            <a href="#" class="btn btn-xs btn-primary">php</a>
                            <a href="#" class="btn btn-xs btn-primary">html</a>
                        </div>
                    @endforeach

                    <div class="card-footer text-muted">
                        <i class="far fa-clock" data-toggle="tooltip" data-placement="top" title="Dibuat">&nbsp;</i> {{$question->created_at}}
                        <span class="float-right">
                        <i class="fas fa-poll" data-toggle="tooltip" data-placement="top" title="Vote">&nbsp;</i> 7
                        </span>
                        <span class="float-right mr-3">
                        <i class="fas fa-comments" data-toggle="tooltip" data-placement="top" title="Jawaban">&nbsp;</i> 16
                        </span>
                      </div>
                  </div>
                  @endforeach
                  {{ $questions->links() }}
            </div>
        </div>
    </div>
</div><br>
@endsection
