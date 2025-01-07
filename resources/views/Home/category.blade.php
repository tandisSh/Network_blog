@extends('Home.layouts.Master')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <h2 class="category-title" style="font-weight: bold; font-size: 2rem; border-bottom: 2px solid #007bff; display: inline-block; padding-bottom: 10px;">
                {{ $category->name }}
            </h2>
        </div>
    </div>

    <div class="row">
        @foreach ($category->articles as $article)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm h-100" style="border-radius: 10px; display: flex; flex-direction: column;">

                    <a href="{{ route('single', $article->id) }}" class="d-block">
                        <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}"
                             alt="Blog Image"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover;">
                    </a>

                    <div class="card-body d-flex flex-column" style="direction: rtl; text-align: right;">

                        <h5 class="card-title" style="font-size: 18px; font-weight: bold;">
                            <a href="{{ route('single', $article->id) }}" class="text-dark text-decoration-none">
                                {{ Str::limit($article->name, 30, '...') }}
                            </a>
                        </h5>

                        <div class="card-text text-muted mb-3">
                            <span><i class="fa fa-user"></i> {{ $article->writer }}</span>
                            <span class="mx-2">|</span>
                            <span><i class="fa fa-calendar"></i> {{ $article->created_at->format('Y-m-d') }}</span>
                        </div>

                        <p class="card-text text-muted" style="flex-grow: 1;">
                            {{ Str::limit($article->description, 120, '...') }}
                        </p>
                        <div class="text-center mt-auto">
                            <a href="{{ route('single', $article->id) }}" class="btn btn-primary btn-sm px-4">ادامه مطلب</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
