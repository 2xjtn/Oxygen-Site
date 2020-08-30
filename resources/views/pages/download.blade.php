@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid hide-bg">
        <div class="container">
            <h1 class="display-3">Get Oxygen</h1>
            <p class="lead">Click the button below to go to the Downloads page.</p>
            <hr class="my-2">
            <p class="lead">
                <a href="/downloads/windows" class="btn btn-primary btn-xl bg-info" role="button"><i class="fab fa-windows"></i> Download for Windows</a>
                <a class="btn btn-primary btn-xl bg-info" href="/downloads/linux" role="button"><i class="fab fa-linux"></i> Download for Linux</a>
            </p>
        </div>
    </div>   
@endsection
