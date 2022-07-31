<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    
<h1>Create New</h1>
<form action="{{ route('admin.products.store') }}" method="post" >
@csrf


<label for="name">Name</label>
<input type="text" name="name">

<label for="price">Price</label>
<input type="text" name="price">

<input type="file" name="image">

<input type="submit" value="Create">
</form>



</body>
</html>






