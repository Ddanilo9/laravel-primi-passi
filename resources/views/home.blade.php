<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<style>
   
</style>
<body>
    <h1>Hello Laravel</h1>
    <h3>Lista della spesa</h3>
    <ul>
       @forelse ($lista_della_spesa as $item)
           <li>{{$item}}</li>
       @empty
           <li>Nessuna lista</li>
       @endforelse 
    </ul>
</body>
</html>