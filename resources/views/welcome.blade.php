<!DOCTYPE html>
<html lang="en" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Livewire</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <livewire:styles/>
</head>
<body>
{{--@livewire('counter')--}}
@livewire('comments')
@livewireScripts
</body>
</html>
