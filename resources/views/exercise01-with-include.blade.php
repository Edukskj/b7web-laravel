<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex01</title>
</head>
<body>
@foreach ($pessoas as $pessoa)
    @include('component.ex01', ['image'=>$pessoa['image']])
    @include('component.ex01', ['name'=>$pessoa['nome']])
    @include('component.ex01', ['age'=>$pessoa['idade']])
    @include('component.ex01', ['birth'=>$pessoa['birth']])
@endforeach
</body>
</html>
