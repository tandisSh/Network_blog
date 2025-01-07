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
        <br>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6 text-left">
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary" style="margin-top: 20px;">مشاهده همه</a>
            </div>
            <div class="col-md-6 text-right">
                <h2 class="category-title">{{ $category->name }}</h2>
            </div>
        </div>
        <br>

        <div class="row">
            @foreach ($category->articles as $article)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="blog-post-thumb" style="border: 2px solid #ccc; border-radius: 10px; padding: 15px;">

                        <div class="blog-post-image" style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0;">
                            <a href="{{ route('single', $article->id) }}">
                                <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}" alt="{{ $article->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                        </div>

                        <div class="blog-post-title" style="margin: 15px 0;">
                            <h3 style="font-size: 20px; font-weight: bold; text-align: center;">
                                <a href="{{ route('single', $article->id) }}">
                                    {{ Str::limit($article->name, 50, '...') }}
                                </a>
                            </h3>
                        </div>

                        <div class="blog-post-format" style="font-size: 14px; color: #666; text-align: center; margin-bottom: 10px;">
                            <span>{{ $article->writer }}</span>
                            <span style="margin-left: 10px;"><i class="fa fa-calendar"></i> {{ $article->created_at->format('Y-m-d') }}</span>
                        </div>

                        <div class="blog-post-des" style="font-size: 14px; line-height: 1.6; color: #333; text-align: center;">
                            <p>{{ Str::limit($article->description, 120, '...') }}</p>
                        </div>

                        <div style="text-align: center; margin-top: 15px;">
                            <a href="{{ route('single', $article->id) }}" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px;">ادامه مطلب</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>


@endsection
