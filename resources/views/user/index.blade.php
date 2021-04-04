<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    @foreach ($users as $user)
    <ul style="display: flex; flex-direction: column; justify-content: space-between; background-color: aliceblue;">
        <li>
            {{ $user->id }}
        </li>
        <li>
            {{ $user->name }}
        </li>
        <li>
            {{ $user->surname }}
        </li>
        <li>
            {{ $user->email }}
        </li>
        <li>
            <img src="{{ asset('storage/images/' . $user->photo) }}" style="width: 60px; height: 60px;" alt="img"/>
        </li>
    </ul>
    @endforeach
</body>
</html>
