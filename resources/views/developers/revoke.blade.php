@extends('layouts.app')

@section('content')
<p class="h5 text-center">Revoke Authorized Application</p>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-4">
                <passport-authorized-clients></passport-authorized-clients>
            </div>
        </div>
    </div>
</div>
@endsection
