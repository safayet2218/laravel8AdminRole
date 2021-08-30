@extends('layouts.reg_log')
@section('content')
<main>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-floating mb-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                    <label for="inputEmail">Email address</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                                <label for="inputPassword">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                
                                            
                                <div class="d-grid gap-2 col-6 mx-auto">
                                                
                                <button type="submit" class="btn btn-primary">
                                       Sign In
                                </button>
                            </div>
                        </form>
                     </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
 @endsection           