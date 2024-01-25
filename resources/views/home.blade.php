<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    .div_deg
    {
    padding: 30px;
    }
    </style>
    <title>Document</title> 
</head>
<body>
    <center>
        <br>
        <a class="btn btn-success" href="{{url('show_product')}}">Show</a>
        <br>
    <h1>Add Product</h1>
    <!-- {{$errors}} -->
    @if($errors)


        @foreach($errors->all() as $error)
        <li style="color: red;">
            {{$errors}}
        </li>

        @endforeach


    @endif
    <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="div_deg">
            <label for="">Product Title</label>
            <input type="text" name="title">
        </div>
        <div class="div_deg">
            <label for="">Product Description</label>
            <textarea type="text" name="description"></textarea>
        </div>
        <div class="div_deg">
            <label for="">Product Image</label>
            <input type="file" name="image">
        </div>
        <div>
            
            <input class="btn btn-primary" type="submit" value="Add Product">
        </div>
    </form>
    </center>
    
</body>
</html>