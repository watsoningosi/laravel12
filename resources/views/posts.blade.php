@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-blog-posts">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-8 mt-5">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="assets/images/blog-post-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="/details/{{ $post->id }}">
                                        <h4>{{ $post->title }}</h4>
                                    </a>
                                    <p>{{ Illuminate\Support\Str::limit($post->body, 200) }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection