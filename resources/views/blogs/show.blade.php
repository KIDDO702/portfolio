@extends('layout')
@section('content')
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="container border rounded-2 mt-5 p-4 bg-white justify-content-center">
                        <div class="">
                            <h2 class="fw-bolder text-primary text-center">{{ $blog->title }}</h2>
                        </div>
                        <div class="text-center py-4">
                            <img src="{{$blog->image ? asset('storage/'. $blog->image) : asset('images/images/laravel-2.svg')}}"
                            class="img-fluid"  style="width: 100%; min-height: 500px; height: 100px;">
                        </div>
                        <div class="text-start d-flex">
                            <h4 class="text-muted mx-3">{{ $blog->about }}</h4>
                            <span class="badge text text-bg-danger text-white">{{ $blog->meta }}</span>
                        </div>
                        <div class="text-start mx-3">
                            <p> {!! $blog->content !!} </p>
                        </div>
                        <hr class="mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="fw-bold text-danger">Add Comment</h5>
                                    <form action="/blogs/{{ $blog->id }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <textarea name="comment" id="comment" cols="3" rows="3" class="form-control" placeholder="Comment"></textarea>
                                            </div>
                                            <div class="col-md-12 mt-2 text-end">
                                                <button type="submit" class="btn btn-danger btn-sm text-white">Send</button>
                                            </div>
                                            <hr class="mt-3">
                                            <div class="col-md-12 mt-0">
                                                <h6 class="fw-bold text-muted">Comments</h6>
                                                <div class="row">
                                                    @foreach($comments as $comment)
                                                        <div class="container">
                                                            <div class="col-md-12 border">
                                                                <small class="fw-bold text-danger">{{ $comment->name }}</small>
                                                                <p>{{ $comment->comment }}</p>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container border rounded-2 py-5 mt-5 bg-white">
                        <form class="input-group">
                            <input class="form-control" name="search" placeholder="Search">
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-search text-white"></i>
                            </button>
                        </form>
                        <div class="my-4 d-flex justify-content-center">
                            <span class="badge text text-bg-danger m-1 text-white">Coding</span>
                            <span class="badge text text-bg-danger m-1 text-white">Life</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($listings as $listing)
                                <li class="list-group-item">
                                    <h5 class="fw-bold text-muted">{{ $listing->title }}</h5>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
