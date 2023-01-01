@extends('adminlayout')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold text-uppercase text-primary">Robert Ochieng</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    @if(session()->has('message'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
             class="alert alert-success my-3" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-light fw-bold">
                    Project (Add a Project)
                </div>
                <div class="card-body">
                    <form action="/admin/addproject" method="post" class="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="text" class="fw-bold text-primary mb-2">Title</label>
                                    <input type="text" name="title" id="text" class="form-control" value="{{ old('title') }}">
                                    @error('title')
                                    <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="about" class="fw-bold text-primary mb-2">About</label>
                                    <input type="text" name="about" id="about" class="form-control" value="{{ old('about') }}">
                                    @error('about')
                                    <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="meta" class="fw-bold text-primary mb-2">Tags</label>
                                    <input type="text" name="tags" id="meta" class="form-control" value="{{ old('meta') }}">
                                    @error('tags')
                                    <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="fw-bold text-primary mb-2">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    @error('image')
                                    <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="summernote" class="fw-bold text-primary mb-2">Content</label>
                                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control" value="{{ old('content') }}"></textarea>
                                @error('content')
                                <p class="small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 me-1">
                                <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
        });
    </script>
@endsection
