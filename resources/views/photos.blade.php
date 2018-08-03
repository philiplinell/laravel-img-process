<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h2>Photos</h2>
        <form action="/image" method="POST" enctype="multipart/form-data">
            @csrf
            Select image to upload:
            <input type="file" name="photo">
            <input type="submit" value="Upload Image">
        </form>

        @if ($errors->has('photo'))
            <p style="color: red">
                {{ $errors->first('photo') }}
            </p>
        @endif
    </body>
</html>
