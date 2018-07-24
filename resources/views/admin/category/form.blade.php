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
    <h1>Creat Milk Tea</h1>
    <form action="/admin/category/store" method="POST">
        {{csrf_field()}}
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="image">
        </div>
        <div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>