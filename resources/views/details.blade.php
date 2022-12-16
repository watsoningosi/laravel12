@extends('layout')
@section('content')
    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mt-4">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="/assets/images/blog-post-02.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Lifestyle</span>
                                        <a href="post-details.html">
                                            <h4>{{ $post->title  }}</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">{{ $post->created_at }}</a></li>
                                           
                                        </ul>
                                        <p>{{ $post->body }}
                                        </p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">Best Templates</a>,</li>
                                                        <li><a href="#">TemplateMo</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#"> Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
