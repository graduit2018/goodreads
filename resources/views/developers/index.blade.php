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
            <!-- <br>
            <p class="h5 text-center">Create access tokens for quick testing</p>
            <br>
            <div class="mb-4">
                <passport-personal-access-tokens></passport-personal-access-tokens>
            </div> -->
        </div>
    </div>
</div>
@endsection
