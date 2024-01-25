<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>All</h1>
    

    

    <table border="1px">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    @foreach($data as $data)
    <tr>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td><img src="product/{{$data->image}}" alt="idk"></td>
    </tr>
    @endforeach
    </table>
    </center>
    

    
</body>
</html>