<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Телефонная книга</h1>

    <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($books as $book)
                    <td>{{$book->fullname}}</td>
                    <td>{{$book->number}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</body>

</html>