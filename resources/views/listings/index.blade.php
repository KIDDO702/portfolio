@extends('layout')
@section('content')
    @include('partials._project-hero')
    <div class="container mt-3">
        <div class="mb-3">
            <form class="input-group" action="/listings">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-danger text-white" >Search</button>
            </form>
        </div>
        <div class="row mb-2">
            @foreach ($listings as $listing)
                <div class="col-lg-6 mb-4">
                    <div class="card bg-light text-lg-start text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('images/images/no-image.png')}}"
                                         alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="fw-bold text-muted">
                                        <a href="/listings/{{$listing->id}}" class="text-decoration-none">{{ $listing->title }}</a>
                                    </h5>
                                    @php
                                    $tags = explode(',', $listing->tags )
                                    @endphp
                                    <div class="d-flex my-2">
                                        @foreach($tags as $tag)
                                            <span class="badge text text-bg-danger text-white m-1">
                                                <a href="?tag={{ $tag }}" class="text-decoration-none text-white">{{ $tag }}</a>
                                            </span>
                                        @endforeach
                                    </div>
                                    <h6 class="fw-bold pt-2">
                                        {{ $listing->about }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
    {{$listings->links()}}
    </div>
@endsection
