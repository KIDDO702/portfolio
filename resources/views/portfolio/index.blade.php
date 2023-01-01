@extends('layout')
@section('content')
    @include('partials._hero-index')
    @include('partials._about')


    {{-- projects section --}}
    <section class="bg-info py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h3 class="text-uppercase fw-bold">Projects</h3>
                    </div>
                </div>
            </div>
            <div class="swiper py-5">
                <div class="py-3 px-4 container-fluid row" style="overflow: hidden">
                    <div class="col-md-4 swiper-wrapper">
                        @unless (count($listings) === 0)
                        @foreach ($listings as $listing)
                            <div class="card swiper-slide text-center bg-light shadow">
                                <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('images/images/no-image.png')}}"
                                     alt="" class="card-img-top img-fluid p-4">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-muted">{{ $listing->title }}</h5>
                                    @php
                                        $tags = explode(',', $listing->tags )
                                    @endphp
                                    <div class="d-flex my-2 justify-content-center">
                                        @foreach($tags as $tag)
                                            <span class="badge text text-bg-danger text-white m-1">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                    <h6 class="fw-bold pt-2">{{ $listing->about }}</h6>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-download"></i> Demo
                                     </a>
                                </div>
                            </div>
                        @endforeach
                        @else
                            <div class="container">
                                <p class="fw-3 fw-bold text-uppercase">
                                    no projects found
                                </p>
                            </div>
                        @endunless
                    </div>
                </div>
                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    {{-- Blogs section --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="text-dark text-uppercase">Blogs</h3>
                    </div>
                </div>
            </div>
            <div class="swiper py-5">
                <div class="py-5 container-fluid px-4 row">
                    <div class="col-md-4 swiper-wrapper">
                        @foreach ($blogs as $blog)
                            <div class="blog-grid swiper-slide">
                                <div class="blog-grid-img">
                                    <img
                                        src="{{$blog->image ? asset('storage/'. $blog->image) : asset('images/images/react.svg')}}"
                                        alt="" class="img-fluid">
                                    <div class="blog-grid-info pt-2">
                                        <div class="b-meta">
                                            <span class="date fw-bold">{{ $blog->created_at }} | </span>
                                            <span class="meta text-uppercase fw-bold">{{ $blog->meta }}</span>
                                            <h5 class="fw-bold my-2">{{ $blog->title }}</h5>
                                            <p class="text-muted">{{ $blog->about }}</p>
                                        </div>
                                        <div class="btn-grid">
                                            <a href="/blogs/{{ $blog->id }}" class="text-decoration-none text-danger text-uppercase fw-bold" style="font-size: 14px; border-bottom: 2px solid currentColor;">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    @include('partials._contact')
@endsection
