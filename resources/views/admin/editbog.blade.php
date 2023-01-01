@extends('adminlayout')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="fw-bold text-uppercase text-primary">Robert Ochieng</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 text-end">
                <a class="justify-content-end btn-danger btn text-white" href="/admin/addblog">
                    <i class="fas fa-plus"></i> Add Blog
                </a>
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
            <div class="card">
                <div class="card-header bg-transparent fw-bold text-primary d-flex">
                    Edit Blog
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead class="text-primary bg-light text-uppercase text-muted">
                        <th>#</th>
                        <th>Title</th>
                        <th>Meta</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @php
                        $count = 1
                        @endphp
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->meta }}</td>
                                <td class="d-flex text-center">
                                    <a href="/admin/editblog/{{ $blog->id }}/edit" class="btn btn-outline-success btn-sm m-1">
                                        <i class="fa-solid fa-file-pen"></i>
                                    </a>
                                    <form action="/admin/editblog/{{ $blog->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm m-1">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $count ++
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                    <div class="justify-content-end">
                        {{$blogs->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
