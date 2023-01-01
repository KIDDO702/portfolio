@extends('layout')
@section('content')
    <section class="vh-100 bg-light">
        <div class="container">
            <div class="row vh-100 align-items-center justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                    <h5 class="fw-bold text-primary text-uppercase text-center mb-3">
                        Bob Developer <i class="fa-brands fa-dev"></i>
                    </h5>
                    <form action="/users/authenticate" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{--                            <div class="col-md-12 mt-3">--}}
                            {{--                                <div class="form-check">--}}
                            {{--                                    <input type="checkbox" name="logged-in" id="logged" class="form-check-input">--}}
                            {{--                                    <label for="logged" class="form-check-label text-muted">Keep me singed in</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-md-12 mt-3">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">LogIn</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
