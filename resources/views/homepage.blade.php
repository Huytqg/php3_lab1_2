@extends('layout')
@section('title', 'Trang Sản phẩm')

@section('content')

<h1>Top 8 Sản Phẩm Có Giá Cao Nhất</h1>

@foreach ($topPricedBooks as $book)
    <div>
        <a href="{{ url('/book/'.$book->id) }}"> <!-- Thêm đường dẫn đến chi tiết sách -->
            <h3>{{ $book->title }} - Giá: ${{ $book->price }}</h3>
        </a>  
    </div> 
@endforeach

<h1>Top 8 Sản Phẩm Có Giá Thấp Nhất</h1>

@foreach ($lowestPricedBooks as $book)
    <div>
        <a href="{{ url('/book/'.$book->id) }}"> <!-- Thêm đường dẫn đến chi tiết sách -->
            <h3>{{ $book->title }} - Giá: ${{ $book->price }}</h3>
        </a>  
    </div> 
@endforeach

@endsection