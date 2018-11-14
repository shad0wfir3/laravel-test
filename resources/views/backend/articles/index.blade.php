@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Articles
                        <small>
                            <a href="{{ route('articles.create') }}" class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Add</a>
                        </small>

                    </h2>

                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Published Status</th>
                            <th scope="col">Published Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td >{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->slug }}</td>
                            @if($article->published == 1)
                                <td><span class="badge badge-success">Published</span></td>
                            @else
                                <td><span class="badge badge-danger">Unpublished</span></td>
                            @endif
                            @if($article->published_date)
                                <td>{{ $article->published_date->format('d F Y @ H:i') }}</td>
                            @else
                                <td>Unpublished</td>
                            @endif
                            <td>
                                <a href="{{ route('articles.show',$article->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                <form action="{{ route('articles.destroy', $article->id)}}" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button style="display: inline;" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
