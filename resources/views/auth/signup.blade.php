@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin mt-3">
                <form method="post" action="/sign-up">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Please Sign-up</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                            name="email" value="{{ old('email') }}" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
                            name="name" value="{{ old('name') }}" placeholder="your name...">
                        <label for="floatingInput">Name</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput"
                            name="username" value="{{ old('username') }}" placeholder="your username...">
                        <label for="floatingInput">Username</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-outline-secondary my-3" type="submit">Sign in</button>
                    <small class="d-block text-center">Alredy registered? <a href="/sign-in"
                            class="text-decoration-none text-dark fw-bold">Sign-in
                            here</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
