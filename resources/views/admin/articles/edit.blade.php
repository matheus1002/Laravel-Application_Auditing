@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit article</div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin.articles.update', $article->id) }}">
                            @csrf
                            @method('put')

                            Title:
                            <input type="text" name="title" value="{{ $article->title }}" class="form-control" />
                            <br />

                            Content:
                            <textarea rows="6" name="content" class="form-control">{{ $article->content }}</textarea>
                            <br />

                            <input type="submit" value="Save" class="btn btn-primary" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
