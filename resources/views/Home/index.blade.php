@extends('Home.layouts.Master')
@section('Home-section')
   <!-- Home Section -->
   <section id="home" class="main-home parallax-section">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <h1>کاربر گرامی به سایت Network Studio خوش آمدید</h1>
              </div>

         </div>
    </div>
</section>
@endsection
@section('content')
<div class="row">
    <div class="col-md-offset-1 col-md-10 col-sm-12">

        @foreach ($articles as $article)
        <div class="blog-post-thumb">
            <div class="blog-post-image">
                <a href="{{ route('single' , $article->id) }}">
                    <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}" class="img-responsive" alt="Blog Image">
                </a>
            </div>
            <div class="blog-post-title">
                <h3><a href="{{ route('single' , $article->id) }}">{{ $article->name }}</a></h3>
            </div>
            <div class="blog-post-format">
                <span><a href="#"><img src="" class="img-responsive img-circle"> {{$article->writer}}</a></span>
                <span><i class="fa fa-date"></i>{{$article->created_at}}</span>
            </div>
            <div class="blog-post-des">
                <p>{{ Str::words($article->description, 20, '...') }}</p>

                <a href="{{ route('single' , $article->id) }}" class="btn btn-default">ادامه مطلب</a>
            </div>
        </div>
    @endforeach



    </div>
</div>
@endsection
