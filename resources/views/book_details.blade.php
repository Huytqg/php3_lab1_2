@extends('layout')

@section('content')

<h1>Chi tiết sách</h1>

@if ($book)
    <h2>{{ $book->title }}</h2>
    <p>Tác giả: {{ $book->author }}</p>
    <p>Giá: ${{ $book->price }}</p>
    <p>Nhà xuất bản: {{ $book->publisher }}</p>
    <p>Ngày xuất bản: {{ $book->publication }}</p>
    <p>Số lượng: {{ $book->quantity }}</p>
    <p>Mã loại: {{ $book->category_id }}</p>
    <!-- You can add more details like thumbnail, etc. -->
@else
    <p>Không tìm thấy thông tin cho sách này.</p>
@endif

@endsection