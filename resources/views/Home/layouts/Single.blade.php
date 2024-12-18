@extends('Home.layouts.Master')
@section('content')

<section id="blog-single-post">
    <div class="container">
         <div class="row">

              <div class="col-md-offset-1 col-md-10 col-sm-12">
                   <div class="blog-single-post-thumb">


                    <div class="blog-post-image">
                        <img src="{{ asset('AdminAssets/Article-image/' . $article->image) }}" class="img-responsive" alt="Blog Image 3">
                   </div>
                        <div class="blog-post-title">
                             <h2>{{$article->name}}</a></h2>
                        </div>

                        <div class="blog-post-format">
                             <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> {{$article->writer}}</a></span>
                             <span><i class="fa fa-date"></i> {{$article->created_at}}</span>
                             <span><a href="#"><i class="fa fa-comment-o"></i> 124 Comments</a></span>
                        </div>

                        <div class="blog-post-des">
                             <p>{{$article->description}}</p>
                        </div>
                        <hr>
                        <div><h3 style="align-content: center">مقاله های مشابه</h3></div>
                        {{-- similar posts --}}
                        <div class="blog-single-post-image">
                            <div class="row">
                                @foreach ($similarPosts as $similarPost)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <a href="{{ route('single', $similarPost->id) }}">
                                            <img src="{{ asset('AdminAssets/Article-image/' . $similarPost->image) }}" class="img-responsive" alt="{{ $similarPost->name }}">
                                        </a>
                                        <h5><a href="{{ route('single', $similarPost->id) }}">{{ $similarPost->name }}</a></h5>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        {{-- about writer --}}
                        <div class="blog-author">
                             <div class="media">
                                  <div class="media-object pull-left">
                                       <img src="images/author-image1.jpg" class="img-circle img-responsive" alt="blog">
                                  </div>
                                  <div class="media-body">
                                       <h3 class="media-heading"><a href="#">Jen Lopez ( Designer )</a></h3>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                  </div>
                             </div>
                        </div>
                        {{-- comments --}}
                        <div class="blog-comment">
                             <h3>Comments</h3>
                                  <div class="media">
                                       
                                       <div class="media-body">
                                            <h3 class="media-heading">Jen Lopez</h3>
                                            <span>July 24, 2017</span>
                                            <p>In auctor dui justo, ac consequat dui posuere ac. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
                                       </div>
                                  </div>
                        </div>
                        {{-- leave a comment  --}}
                        <div class="blog-comment-form">
                             <h3>Leave a Comment</h3>
                                  <form action="#" method="post">
                                             <input type="text" class="form-control" placeholder="Name" name="name" required>
                                       <input type="email" class="form-control" placeholder="Email" name="email" required>
                                       <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" message="message" required="required"></textarea>
                                       <div class="col-md-3 col-sm-4">
                                            <input name="submit" type="submit" class="form-control" id="submit" value="Post Your Comment">
                                       </div>
                                  </form>
                        </div>
                   </div>
         </div>
    </div>
</section>






@endsection
