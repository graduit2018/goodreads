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
                                        <div class="font-weight-bold">{{ $book->title }}</div>
                                        <div>by {{ $book->author }}</div>
                                        <br>
                                        <a href="#" class="btn btn-success btn-sm">Want to Read</a>
                                        <a href="#" class="btn btn-primary btn-sm">Read</a>
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
