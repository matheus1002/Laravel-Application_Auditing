@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Articles</div>

                    <div class="card-body">

                        <a href="{{ route('admin.articles.create')  }}" class="btn btn-sm btn-primary">Add new</a>
                        <br /><br />

                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>Title</td>
                                <td>Content</td>
                                <td>Actions</td>
                            </tr>
                            @forelse($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ mb_strimwidth($article->content, 0, 25, "...") }}</td>
                                <td>
                                    <form method="post" action="{{ route('admin.articles.destroy', $article->id) }}">
                                        <a href="{{ route('admin.articles.show', $article->id) }}" class="btn btn-sm btn-success">Show</a>
                                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2">No records found.</td>
                            </tr>
                            @endforelse
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
