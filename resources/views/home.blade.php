@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Home Page </div>

                <div class="card-body"> 
                    <h3>Thank You ......</h3>   
                    <h1>Mr. {{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
