<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Danh sách sách</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Title</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Publication</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category Name</th>
                <th>
                    <a href="#" class="btn btn-success">Create New</a>
                </th>
            </tr>
        </thead>
        <tbody>  
            @foreach ($books as $book)  
                <tr>  
                    <th scope="row">{{ $book->id }}</th>  
                    <td>{{$book->title }}</td>  
                    <td><img src="{{$book->thumbnail }}" width="60" alt=""></td>  
                    <td>{{$book->author }}</td>  
                    <td>{{ $book->publisher }}</td>  
                    <td>{{ $book->publication }}</td>  
                    <td>{{ $book->quantity }}</td>  
                    <td>{{ $book->name }}</td>  
                    <td>  
            
                    </td>  
                </tr>  
            @endforeach  
        </tbody>  
    </table>
</body>

</html>
