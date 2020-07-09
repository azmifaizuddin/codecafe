@extends('layouts.master');

@section('content')

    <div class="card">
        <div class="card-body">
            <h2>{{$question->title}}</h2>
            <p>{{$question->content}}</p>
        </div>
    </div>
    <div class="ml-3 mt-3">
    <form action="/answers/{{$question->id}}" method = "POST">
            @csrf

            <div class="form-group">
                <label for="name">Jawaban </label>
                <input type="text" class="form-control" placeholder="Jawaban" name="content" id="name">
            </div>
            <div style="display: none;">
                <input type="number" name="question_id" value="$question->id" readonly>
            </div>



            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
