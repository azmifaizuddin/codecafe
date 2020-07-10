@extends('forum/layouts/master')

@section('content')
<table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Pertanyaan</th>
        <th scope="col">Tag</th>
        <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($questions as $key => $question)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$question->title}}</td>
                <td>{{$question->content}}</td>
                <td>{{$question->tag}}</td>
                <td>
                    <a href="/answers/{{$question->id}}" class = "btn btn-sm btn-success">
                        Jawab
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
