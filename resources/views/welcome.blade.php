<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
    <ul>
        @foreach($allTodos as $todo)
        <li>{{ $todo->title}}</li>
        @endforeach
    </ul>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>