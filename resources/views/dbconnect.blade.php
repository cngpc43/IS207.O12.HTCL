<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        if (DB::connection()->getDatabaseName()) {
            echo 'connected successfully to database ' . DB::connection()->getDatabaseName();
        } else {
            echo 'could not connect to database';
        }
    @endphp
</body>

</html>
