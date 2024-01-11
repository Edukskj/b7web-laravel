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
    @component('component.ex01')
        @slot('image')
            {{$pessoa['image']}}
        @endslot
        @slot('name')
            {{$pessoa['nome']}}
        @endslot
        @slot('age')
            {{$pessoa['idade']}}
        @endslot
        @slot('birth')
            {{$pessoa['birth']}}
        @endslot
    @endcomponent
@endforeach
</body>
</html>
