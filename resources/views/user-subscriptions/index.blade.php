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
                                        <h5 class="font-weight-bold"># {{ $subscription->book->id }} {{ $subscription->book->title }}</h5>
                                        <div>by {{ $subscription->book->author }}</div>
                                        <div>ISBN13: {{ $subscription->book->isbn13 }}</div>
                                        <br>
                                        <form action="{{ route('users.subscriptions.destroy2', $subscription->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-secondary">Don't Want to Read</button>
                                        </form>
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
