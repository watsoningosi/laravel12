@extends('layout')
@section('content')
    <section class="contact-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="down-contact">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="sidebar-item contact-form">
                                    <div class="sidebar-heading">
                                        <h2>Edit Article</h2>
                                    </div>
                                    <div class="content">
                                        <form method="POST" action="/posts/{{ $post->id }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <fieldset>
                                                        <label for="">Post Title</label>
                                                        <input name="title" type="text" id="title"
                                                            value="{{ $post->title }}">
                                                        @error('title')
                                                            <p class="mb-2" style="color: red;">{{ $errors->first('title') }}
                                                            </p>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <label for="">Post Body</label>
                                                        <textarea name="body" rows="6" id="body" required="">{{ $post->body }}</textarea>
                                                        @error('body')
                                                            <p class="mb-2" style="color: red;">{{ $errors->first('body') }}
                                                            </p>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" class="main-button">Update/
                                                            Article</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
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
