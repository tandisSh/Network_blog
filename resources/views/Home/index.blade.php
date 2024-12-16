@extends('Home.layouts.Master')

@section('content')
<div class="row">

    <div class="col-md-offset-1 col-md-10 col-sm-12">
         <div class="blog-post-thumb">
              <div class="blog-post-image">
                   <a href="single-post.html">
                        <img src="images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
                   </a>
              </div>
              <div class="blog-post-title">
                   <h3><a href="single-post.html">We Help You Create Perfect Modern Design</a></h3>
              </div>
              <div class="blog-post-format">
                   <span><a href="#"><img src="images/author-image1.jpg"
                                  class="img-responsive img-circle"> Jen Lopez</a></span>
                   <span><i class="fa fa-date"></i> July 22, 2017</span>
                   {{-- <span><a href="#"><i class="fa fa-comment-o"></i> 35 Comments</a></span> --}}
              </div>
              <div class="blog-post-des">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
                   <a href="single-post.html" class="btn btn-default">Continue Reading</a>
              </div>
         </div>




    </div>

</div>
@endsection
