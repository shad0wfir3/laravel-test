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
                            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Add</a>
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td >{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a href="{{ route('categories.show',$category->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('categories.destroy', $category->id)}}" method="post" style="display:inline">
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
