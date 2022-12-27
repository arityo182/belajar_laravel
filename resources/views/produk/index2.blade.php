<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data produk</h1>
    <table border="1">
        <thead>
            <tr>No</tr>
            <tr>Nama Produk</tr>
        </thead>
        <tbody>
            @foreach ($produk as $i => $v)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $v }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>