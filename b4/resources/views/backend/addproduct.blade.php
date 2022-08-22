<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   
<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <form action="{{Route ('productstore') }}"method="POST">
            @csrf
            <div class="form-group">
                <label for="">Product Name</label>
               <input type="text" name="pname" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Product description</label>
               <input type="text" name="pdes"class="form-control">
            </div>
            <div class="form-group">
                <label for="">Category</label>
               <input type="text" name="cat" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Sub Category</label>
               <input type="text" name="scat" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Product price</label>
               <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="">status</label>
              <select name="status"class="form-control">
                <option value="0">----select status------</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>
            </div>
            <button class="btn btn-primary mt-3">Add product</button>
        </form>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>