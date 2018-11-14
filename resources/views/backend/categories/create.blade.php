@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Article</div>

                <div class="card-body">
                    <form method="post" action="{{route('categories.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Category Title">
                            </div>
                        </div>
                        @if($errors->has('title'))
                            <div class="alert alert-danger">
                                {!! $errors->first('title') !!}
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')


@endsection
