@extends('Home.layouts.Master')

@section('content')
<div class="row">
    <div class="col-md-offset-1 col-md-10 col-sm-12">

        @foreach ($articles as $article)
        <div class="blog-post-thumb">
            <div class="blog-post-image">
                <a href="single-post.html">
                    <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}" class="img-responsive" alt="Blog Image">
                </a>
            </div>
            <div class="blog-post-title">
                <h3><a href="single-post.html">{{ $article->name }}</a></h3>
            </div>
            <div class="blog-post-format">
                <span><a href="#"><img src="" class="img-responsive img-circle"> Jen Lopez</a></span>
                <span><i class="fa fa-date"></i>{{ $article->created_at }}</span>
            </div>
            <div class="blog-post-des">
                <p>{{ $article->description }}</p>
                <a href="single-post.html" class="btn btn-default">ادامه مطلب</a>
            </div>
        </div>
    @endforeach



    </div>
</div>
@endsection
