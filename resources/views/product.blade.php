<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All</h1>
    @foreach($data as $data)

    
    <h1>{{$data->title}}</h1>
    <h3>{{$data->description}}</h3>
    <img src="product/{{$data->image}}" alt="idk">

    @endforeach
</body>
</html>