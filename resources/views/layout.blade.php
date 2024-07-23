<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>Header</header>
    <nav><h1>Danh mục Sách</h1>

        <ul>
            @foreach($categories as $category)
               <a href="{{ route('books.detail', $category->id) }}"> <li>{{ $category->name }}</li></a>
            @endforeach
        </ul></nav>
    <article>
        @yield('content')
    </article>
    <aside>Aside</aside>
    <footer>Footer</footer>
</body>
</html>