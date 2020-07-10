@extends('forum/layouts/master');

@section('content')

    <div>

    </div>
    <div class="ml-3 mt-3">
        <form action="/questions" method = "POST">
            @csrf
            <div class="form-group">
                <label for="name">Title : </label>
                <input type="text" class="form-control" placeholder="Title Pertanyaan" name="title" id="name">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <input type="text" class="form-control" placeholder="Isi pertanyaan" name="content" id="content">
            </div>
            <div class="form-group">
                <label for="tag">tag:</label>
                <input type="text" class="form-control" placeholder="tag" name="tag" id="tag">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
