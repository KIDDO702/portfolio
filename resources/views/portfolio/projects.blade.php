@extends('layout')
@section('content')
     <div class="row m-3 p-5">
    @foreach ($projects as $project)
        <div class="col-lg-6 col-md-6 mb-3">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="p-4">
                        <img src="{{asset('images/images/no-image.png')}}" alt="">
                    </div>
                    <div class="px-2 py-3">
                        <a href="/projects/{project}" class="text-decoration-none" class="fw-5">
                            <h5 class="card-title fw-bold text-muted">{{ $project->title }}</h5>
                        </a>
                        <h6 class="text-muted">{{ $project->about }}</h6>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection