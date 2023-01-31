<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h1>Hai scritto: {{$post->title}}</h1>
    <p>Il contenuto è:
        {{$post->body}}
    </p>
    <p>Le categorie sono:
        {{$post->category->name}}
    </p>
    <ul>
        @foreach($post->tags as $elem)
            <li>{{$elem->name}}</li>
        @endforeach
    </ul>
</body>
</html>