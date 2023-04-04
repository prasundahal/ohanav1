<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    <h1>Message From Client</h1><br>
    <div>Name : {{ $name }}</div>
    <div>Subject : {{ $subject }}</div>
    <div>Email : {{ $email }}</div>
    <div>Message : {{ $text }}</div>
</body>
</html>

{{-- Event::listen('auth.login', function() {
    Session::set('variableName', $value);
}); --}}
