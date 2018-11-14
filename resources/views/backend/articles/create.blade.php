@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Article</div>

                <div class="card-body">
                    <form action="{{ route('articles.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Title</label>
                                <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Title">
                                @if($errors->has('title'))
                                    <div class="text-danger">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Category</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="0">Select category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Content</label>
                            <textarea class="textarea" name="content" id="" cols="30" rows="10"></textarea>
                            @if($errors->has('content'))
                                <div class="text-danger">
                                    {{ $errors->first('content') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="published">
                                <label class="form-check-label" for="gridCheck">
                                    Published
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
<script>
    $('.textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
@endsection
