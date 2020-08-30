@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Linux downloads</h1>
        <p class="lead">Choose the download link for you:</p>
        <hr class="my-2">
        <p class="lead">
            <div class="list-group">
                <a href="/downloads/pkg/tar-gz" class="list-group-item list-group-item-action">tar.gz</a>
                <a href="/downloads/pkg/deb" class="list-group-item list-group-item-action">deb package</a>
                <a href="/downloads/pkg/rpm" class="list-group-item list-group-item-action">rpm package</a>
            </div>
        </p>
    </div>
@endsection