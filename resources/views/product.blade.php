<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach($data as $data)
    <tr>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td><img src="product/{{$data->image}}" alt="idk"></td>
        <td><a onclick="return confirm('are u sure?')"; class="btn btn-danger" href="{{url('delete_product',$data->id)}}">Delete</a></td>
        <td><a class="btn btn-success" href="{{url('update_product',$data->id)}}">Update</a></td>
    </tr>
    @endforeach
    </table>
    </center>
    

    
</body>
</html>