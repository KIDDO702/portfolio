@extends('layout')
 @section('content')
    @include('partials._hero-blogs')
    <section class="">
        <div class="container py-3">
            <div class="mb-3">
                <form action="#"  class="input-group">
                    <input type="text" name="search" id="" placeholder="Search" class="form-control">
                    <button class="btn btn-danger text-white" type="submit">Search</button>
                </form>
            </div>
            <div class="row mb-2">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light">
                            <div class="row py-3">
                                <div class="col-lg-6">
                                    <img
                                         src="{{$blog->image ? asset('storage/'. $blog->image) : asset('images/images/no-image.png')}}"
                                         alt=""
                                         class="card-img-top img-fluid px-2">
                                </div>
                                <div class="col-md-6 text-lg-start text-center px-3">
                                    <a href="/blogs/{{$blog->id}}" class="text-decoration-none">
                                        <h5 class="fw-bold card-title">{{ $blog->title }}</h5>
                                    </a>
                                    <span class="badge text text-bg-danger my-2">
                                        <a class="text-decoration-none text-white" href="?meta={{ $blog->meta }}"> {{ $blog->meta }}</a>
                                    </span>
                                    <h6 class="text-muted mt-2">{{ $blog->about }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                 {{$blogs->links()}}
            </div>
        </div>
    </section>
 @endsection
