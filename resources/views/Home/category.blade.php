@extends('Home.layouts.Master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="category-title">{{ $category->name }}</h2>
        </div>
    </div>

    <div class="row">
        @foreach ($category->articles as $article)
            <div class="col-md-4 col-sm-6">
                <div class="blog-post-thumb">
                    <div class="blog-post-image">
                        <a href="{{ route('single', $article->id) }}">
                            <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}" class="img-responsive" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h3>
                            <a href="{{ route('single', $article->id) }}">{{ $article->name }}</a>
                        </h3>
                    </div>
                    <div class="blog-post-format">
                        <span><a href="#">{{ $article->writer }}</a></span>
                        <span><i class="fa fa-calendar"></i> {{ $article->created_at->format('Y-m-d') }}</span>
                    </div>
                    <div class="blog-post-des">
                        <p>{{ Str::words($article->description, 20, '...') }}</p>
                        <a href="{{ route('single', $article->id) }}" class="btn btn-default">ادامه مطلب</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
