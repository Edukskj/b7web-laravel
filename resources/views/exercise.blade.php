<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex02</title>
</head>
<body>
    @for ($i=0; $i<=50; $i++)
        <img src="{{$url.$i}}" alt="foto-pessoa">
    @endfor
</body>
</html>
