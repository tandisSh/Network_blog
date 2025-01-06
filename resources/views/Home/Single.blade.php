@extends('Home.layouts.Master')
@section('content')
    <section id="blog-single-post">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-single-post-thumb">


                        <div class="blog-post-image">
                            <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}" class="img-responsive"
                                alt="Blog Image 3">
                        </div>
                        <div class="blog-post-title">
                            <h2>{{ $article->name }}</a></h2>
                        </div>

                        <div class="blog-post-format">
                            <span><a href="#">
                                    {{ $article->writer }}</a></span>
                            <span><i class="fa fa-date"></i> {{ $article->created_at }}</span>
                        </div>

                        <div class="blog-post-des">
                            <p>{{ $article->description }}</p>
                        </div>
                        <hr>
                        <div>
                            <h3 style="align-content: center">مقاله های مشابه</h3>
                        </div>
                        {{-- similar posts --}}
                        <div class="blog-single-post-image">
                            <div class="row">
                                @foreach ($similarPosts as $similarPost)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <a href="{{ route('single', $similarPost->id) }}">
                                            <img src="{{ asset('AdminAssets/Article-image/' . $similarPost->image) }}"
                                                class="img-responsive" alt="{{ $similarPost->name }}">
                                        </a>
                                        <h5><a href="{{ route('single', $similarPost->id) }}">{{ $similarPost->name }}</a>
                                        </h5>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- comments --}}
                        <div class="blog-comment">
                            <h3>کامنت ها</h3>
                            @forelse ($article->comments as $comment)

                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="media-heading">{{ $comment->user->name }}</h3>
                                        <span>{{ $comment->created_at->format('F j, Y') }}</span>
                                        <p>{{ $comment->message }}</p> 
                                    </div>
                                </div>
                            @empty
                                <p>هنوز نظری وجود ندارد. اولین نفری باشید که نظر می دهد!</p>
                            @endforelse
                        </div>

                            {{-- leave a comment --}}
                            @if (Auth::check() && Auth::user())
                                <div class="blog-comment-form">
                                    <h3>کامنت بگذارید</h3>
                                    <form action="{{ route('comments') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="article_id" value="{{ $article->id }}">


                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                        <input type="text" class="form-control" placeholder="Name"
                                            value="{{ Auth::user()->name }}" disabled>
                                        <input type="email" class="form-control" placeholder="Email"
                                            value="{{ Auth::user()->email }}" disabled>

                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" required="required"></textarea>
                                        <div class="col-md-3 col-sm-4 mt-3">
                                            <input name="submit" type="submit" class="form-control btn btn-primary"
                                                id="submit" value="ثبت نظر">
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="blog-comment-form">
                                    <h3>کامنت بگذارید</h3>
                                    <form action="#" method="POST">
                                        @csrf
                                        <input type="hidden" name="article_id" value="{{ $article->id }}">


                                        <input type="text" class="form-control" placeholder="Name" value="Login required"
                                            disabled>
                                        <input type="email" class="form-control" placeholder="Email"
                                            value="Login required" disabled>

                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" disabled></textarea>
                                        <div class="col-md-3 col-sm-4 mt-3">
                                            <button type="button" class="form-control btn btn-secondary" disabled>ثبت نظر </button>
                                        </div>
                                    </form>
                                    <br>
                                    <div style="display: flex; margin-top: 10px;">
                                        <h4>برای ثبت کامنت، لطفا به حساب کاربری خود وارد شوید</h4>
                                        <a href="{{ route('LoginForm') }}" class="btn btn-link">ورود به حساب</a>
                                    </div>
                                </div>
                            @endif

                    </div>
                </div>
            </div>
    </section>
@endsection
