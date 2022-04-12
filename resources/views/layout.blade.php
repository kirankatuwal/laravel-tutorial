<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div class="header">
        <h2>Header Section</h2>
    </div>
    <div class="container">
        @section('container')
        <h2>Our Container</h2>
        @show
    </div>
    <div class="footer">
        <h2>Footer Section</h2>
    </div>
    
</body>
</html>