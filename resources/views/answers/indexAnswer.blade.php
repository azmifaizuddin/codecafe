@extends('layouts.master');

@section('content')

    <div class="card">
        <div class="card-body">
            <p>{{$new_answer->content}}</p>
        </div>
    </div>
@endsection
