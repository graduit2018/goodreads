@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Want to Read</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($user->subscriptions as $subscription)
                                <tr>
                                    <td>
                                        <h5 class="font-weight-bold">{{ $subscription->book->title }}</h5>
                                        <div>by {{ $subscription->book->author }}</div>
                                        <div>ISBN13: {{ $subscription->book->isbn13 }}</div>
                                        <br>
                                        <a href="#" class="btn btn-primary btn-sm">Read</a>
                                        <a href="#" class="btn btn-danger btn-sm float-right">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
