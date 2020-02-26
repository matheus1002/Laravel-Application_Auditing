@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Add new article</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.articles.store') }}">
                            @csrf

                            Title:
                            <input type="text" name="title" class="form-control" />
                            <br />

                            Content:
                            <textarea rows="6" name="content" class="form-control"></textarea>
                            <br />

                            <input type="submit" value="Save" class="btn btn-primary" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
