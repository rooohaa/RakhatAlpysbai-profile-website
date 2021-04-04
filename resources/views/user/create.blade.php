<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <form class="form" method="POST" action="{{ route('add-user') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" required />
        </div>

        <div>
            <label for="surname">Фамилия</label>
            <input type="text" id="surname" name="surname" required />
        </div>

        <div>
            <label for="email">Почта</label>
            <input type="email" id="email" name="email" required />
        </div>


        <div>
            <label for="photo">Ваша фотка</label>
            <input type="file" name="photo" id="photo" required>
        </div>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>
