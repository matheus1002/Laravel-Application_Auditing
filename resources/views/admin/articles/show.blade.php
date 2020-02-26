@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Show article</div>

                    <div class="card-body">

                        <ul>
                            <h3>Title: {{ $article->title }}</h3>
                            <p class="text-justify">Content: {{ $article->content }}</p>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
