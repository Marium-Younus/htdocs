<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="bg-info">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index_page">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pro_Page">Add Product</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">
        <h3>
            Insert Employee
        </h3>
            <form action="{{route('main_res.update',$rec->id)}}" method="POST" >
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name" value='{{$rec->fullname}}' > 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value='{{$rec->email}}'> 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" value='{{$rec->mobile}}' >   
                    </div>
                    <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" placeholder="City" value='{{$rec->city}}'>  
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info"><i class="fa fa-database"></i> Update</button>
                   
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>