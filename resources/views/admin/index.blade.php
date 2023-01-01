@extends('adminlayout')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold text-uppercase text-primary">Welcome Robert</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <div class="col-md-4">
            <div class="card bg-light bg-one d-flex">
                <div class="card-body d-flex">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fa-brands fa-microblog text-white"></i>
                        </div>
                        <div class="db-info fw-bold text-uppercase text-end text-muted me-1">
                            <h3 class="">{{ count($blogs) }}</h3>
                            <small class="">blogs</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="text-decoration-none d-flex" href="/admin/editblog">
                        <span>View Details</span>
                        <i class="fas fa-chevron-right d-flex align-items-center ms-auto justify-content-center"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light d-flex">
                <div class="card-body d-flex">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        <div class="db-info fw-bold text-uppercase text-end text-muted me-1">
                            <h3 class="">{{ count($listings) }}</h3>
                            <small class="">projects</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="text-decoration-none d-flex" href="/admin/editproject">
                        <span>View Details</span>
                        <i class="fas fa-chevron-right d-flex align-items-center ms-auto justify-content-center"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light d-flex">
                <div class="card-body d-flex">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fa-solid fa-address-card"></i>
                        </div>
                        <div class="db-info fw-bold text-uppercase text-end text-muted me-1">
                            <h3 class="">{{ count($contacts) }}</h3>
                            <small class="">contacts</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="text-decoration-none d-flex">
                        <span>View Details</span>
                        <i class="fas fa-chevron-right d-flex align-items-center ms-auto justify-content-center"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-transparent fw-bold">
                    Comments
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                        <th>#</th>
                        <th class="text-center">blog_id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Comment</th>
                        <th class="text-center">Published</th>
                        </thead>
                        <tbody>
                        @php
                        $id = 1
                        @endphp
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $id }}</td>
                                <td class="text-center"> {{ $comment->blog_id }} </td>
                                <td class="text-center"> {{ $comment->name }} </td>
                                <td class="text-center"> {{ $comment->comment }} </td>
                                <td class="text-center">
                                    <input type="checkbox" name="" id="" class="form-check-input">
                                </td>
                            </tr>
                            @php
                            $id ++
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-transparent fw-bold">
                    Contacts
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="bg-light">
                        <th>#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Comment</th>
                        </thead>
                        <tbody>
                        @php
                        $count = 1
                        @endphp
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $count }}</td>
                                <td class="text-center"> {{ $contact->name }} </td>
                                <td class="text-center"> {{ $contact->email }} </td>
                                <td class="text-center"> {{ $contact->body }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
