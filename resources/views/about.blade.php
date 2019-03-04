<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>About Us</h1>

   {{ $user['name'] }}

    <ul>

        @foreach ($user as $key =>$value) 
        <li> {{ $key .' - '.$value }}</li>
        @endforeach
    </ul>


</body>
</html>