@extends('layout')
@section('content')
    <section class="bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col card bg-white rounded-3">
                    <div class="container">
                        <h3 class="fw-bold text-muted pt-3 text-center">{{ $listing->title }}</h3>
                        <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('images/images/no-image.png')}}"
                             alt="" class="img-fluid my-3">
                        <h5 class="fw-bold py-3 text-start">{{ $listing->about }}</h5>
                        <p class="text-start">{!! $listing->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
