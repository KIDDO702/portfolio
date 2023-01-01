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
            <div class="card">
                <div class="card-header bg-transparent fw-bold text-primary">
                    Edit Project
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead class="text-primary bg-light text-uppercase text-muted">
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @php
                            $count = 1
                        @endphp
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $listing->title }}</td>
                                <td>{{ $listing->tags }}</td>
                                <td class="d-flex">
                                    <a class="btn btn-sm btn-outline-success m-1" href="/admin/editproject/{{ $listing->id }}/edit">
                                        <i class="fa-solid fa-file-pen"></i>
                                    </a>
                                    <form action="/admin/editproject/{{ $listing->id }}" method="post" class="m-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash text-white"></i>
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
                    {{ $listings->links() }}
            </div>
        </div>
    </div>
@endsection
