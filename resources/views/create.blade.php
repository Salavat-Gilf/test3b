<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('books')}}" method="POST">
        <label for="fullname">ФИО</label><br>
        <input type="text" id="fullname" name="fullname"><br>
        <label for="number">Номер телефона</label><br>
        <input type="text" id="number" name="number"><br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>