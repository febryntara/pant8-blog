@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            @if (session('success'))
                <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('errorMessage'))
                <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed</strong> {{ session('errorMessage') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin mt-3">
                <form method="POST" action="/sign-in">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput"
                            name="username" placeholder="username" autofocus autocomplete="off" required
                            value="{{ old('username') }}">
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="floatingPassword" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-outline-secondary my-3" type="submit">Sign in</button>
                    <small class="d-block text-center">Not registered? <a href="/sign-up"
                            class="text-decoration-none text-dark fw-bold">Sign-up
                            here</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
