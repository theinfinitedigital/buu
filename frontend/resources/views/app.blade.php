<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
        <div class="w-3/4">
            <div class="whitespace-pre-wrap">Hey everyone!

                It's almost 2022 and we still don't know if there is aliens living among us, or do we? Maybe the person
                writing this is an alien.

                You will never know.</div>
        </div>
    </div>
</body>

</html>
