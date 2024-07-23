@extends('layout')

@section('content')

<h1>Danh sách sách theo loại sách</h1>

@if ($booksCategory->isEmpty())
    <p>Không có sách nào thuộc loại này.</p>
@else
    <ul>
        @foreach ($booksCategory as $book)
            <li>
                <strong>{{ $book->title }}</strong> - Tác giả: {{ $book->author }}
            </li>
        @endforeach
    </ul>
@endif

@endsection