@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>
                                        <h5 class="font-weight-bold"># {{ $book->id }} {{ $book->title }}</h5>
                                        <div>by {{ $book->author }}</div>
                                        <div>ISBN13: {{ $book->isbn13 }}</div>
                                        <br>
                                        <want-to-read-button :data-subscription="{{ json_encode(Auth::user()->subscriptionTo($book)) }}" :book="{{ $book }}"></want-to-read-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">{{ $books->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
