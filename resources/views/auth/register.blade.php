@extends('layouts.reg_log')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                            <label for="inputEmail">Name</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                            <label for="inputEmail">Email address</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                                    <label for="inputPassword">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                    </div>
                                    </div>
                                </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
