@props(['project'])
<div class="col-lg-4 mb-5">
    <img src="{{asset('images/images/no-image.png')}}" alt="" class="card-img-top">
    <div class="card shadow-sm bg-light text-center">
        <h5 class="card-title mb-2 fw-bold">{{$project->title}}</h5>
        <div class="mb-2">
            <div class="badge rounded-pill bg-danger">Laravel</div>
            <div class="badge rounded-pill bg-danger">Bootsrap</div>
            <div class="badge rounded-pill bg-danger">Database(MySql)</div>
        </div>
        <p class="py-3">{{$project->description}}</p>
        <a href="#" class="btn btn-primary btn-sm">Live Demo</a>
        <a href="#" class="btn btn-danger btn-sm">Source Code</a>
    </div>
</div>