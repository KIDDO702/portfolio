<section class="bg-info py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h3 class="text-uppercase fw-bold">CONTACT ME</h3>
                </div>
            </div>
        </div>
        <div class="contact-form border bg-light p-5 mt-5">
            <h3 class="text-muted fw-bold">Drop me a line</h3>
            <p class="text-muted">I am here to answer any question you may have</p>

            @if(session()->has('message'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                     class="alert alert-success my-3" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <form action="/" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        @error('name')
                        <p class="small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        @error('email')
                        <p class="small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-sm-12 mt-3">
                        <textarea name="body" class="form-control" cols="30" rows="10" placeholder="Question or Comment"></textarea>
                        @error('body')
                        <p class="small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-8 mt-3">
                    <small class="text-muted">
                      I respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your information
                    </small>
                    </div>
                    <div class="col-md-4 mt-3 text-end">
                        <button class="btn btn-danger btn-sm text-white shadow-sm" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
