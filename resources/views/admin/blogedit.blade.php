@extends('adminlayout')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold text-uppercase text-primary">Edit Blogs</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-light fw-bold">
                    Blog (Edit a Blog)
                </div>
                <div class="card-body">
                    <form action="/admin/editblog/{{ $blog->id }}" method="post" class="">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="text" class="fw-bold text-primary mb-2">Title</label>
                                    <input type="text" name="title" id="text" class="form-control" value="{{ $blog->title }}">
                                    @error('title')
                                    <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="about" class="fw-bold text-primary mb-2">About</label>
                                    <input type="text" name="about" id="about" class="form-control" value="{{ $blog->about }}">
                                    @error('about')
                                    <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="meta" class="fw-bold text-primary mb-2">Meta</label>
                                    <input type="text" name="meta" id="meta" class="form-control" value="{{ $blog->meta }}">
                                    @error('meta')
                                    <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="text" class="fw-bold text-primary mb-2">Image</label>
                                    <input type="file" name="file" id="text" class="form-control" value=" {{ $blog->image }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="summernote" class="fw-bold text-primary mb-2">Content</label>
                                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control">{{ $blog->content }}"</textarea>
                                @error('content')
                                <p class="small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 me-1">
                                <button type="submit" class="btn btn-primary text-uppercase">Update</button>
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
