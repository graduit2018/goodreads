@extends('layouts.app')

@section('content')
<p class="h5 text-center">Authentication Using Oauth</p>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-4">
                <passport-clients></passport-clients>
            </div>
            <div class="mb-4">
                <passport-authorized-clients></passport-authorized-clients>
            </div>
        </div>
    </div>
</div>
@endsection
