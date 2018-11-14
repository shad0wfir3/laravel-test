@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category : {{ $category->title }}</div>

                <div class="card-body">
                    <h1>
                        Title: {{ $category->title }}
                    </h1>

                    <h2>
                        Slug: {{ $category->slug }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center margin-top-10">
        <div class="col-md-8 ">
            <h4>Articles</h4>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($category->articles as $article)
            <div class="card margin-top-10">
                <div class="card-header">
                    {{ ucfirst($article->title) }}
                </div>
                <div class="card-body">
                    {!! $article->revision->content !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>


            </div>
        </div>
    </div>
</div>
@endsection
