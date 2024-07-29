<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  class="bg-info">
@include('admin/header')
<form action="{{route('r_admin.update',$rec_emp->Emp_Id)}}" method="POST">
             @csrf
            {{ @method_field('PATCH') }}
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">
        <h3>
            Update Employee
        </h3>     
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control"  value='{{$rec_emp->Emp_Fn}}' name="fullName" placeholder="Full Name"   /> 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value='{{$rec_emp->Emp_Email}}'  name="email" placeholder="Email" > 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Mobile</label>
                    <input type="text" class="form-control"  value='{{$rec_emp->Emp_Mobile}}'  name="mobile" placeholder="Mobile" >   
                    </div>
                    <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control"  value='{{$rec_emp->Emp_City}}'  name="city" placeholder="City" >  
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info"><i class="fa fa-database"></i> Update</button>
       
                </div>        
        </div>
    </div>
    </form>
</body>
</html>