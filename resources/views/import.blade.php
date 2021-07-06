<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <form method="POST" action=" {{ route ('import') }} " enctype="multipart/form-data">
    @csrf
    <label > Excel upload </label></br>
    <input type="file" name="file" id='file'/><br></br>
        <button type="submit">import file </button>
    </form>
</body>

</html>