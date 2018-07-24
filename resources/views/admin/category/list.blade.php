<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Milk Tea" href="{{{ asset('favicon.ico') }}}">
    <title>Cups Of Tea</title>
</head>
<body>
    <h1>Category Milk Tea</h1>
    <ul>
        @foreach($list_obj as $item)
            <li>
                {{$item -> name}}
                <img src="{{$item -> image}}" alt="" style="width: 150px">
                <a href="/admin/category/edit/{{$item -> id}}">Edit</a>
            </li>
        @endforeach
    </ul>
</body>
</html>