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
<div class="container">
    @foreach ($categories as $category)
        <!-- عنوان دسته‌بندی -->
        <div class="row">
            <div class="col-md-6 text-left">
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">مشاهده همه</a>
            </div>
            <div class="col-md-6 text-right">
                <h2 class="category-title">{{ $category->name }}</h2>
            </div>
        </div>

        <!-- مقالات مربوط به دسته‌بندی -->
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

    @endforeach
</div>
@endsection
