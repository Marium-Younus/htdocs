@include("admin.header")


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">
        <h3>
            Update Employee
        </h3>
            <form action="{{route('r_admin.update',$rec_emp->id)}}" method="POST">
            {!! csrf_field() !!}
            {{ @method_field('PATCH') }}
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" value="{{$rec_emp->name}}" name="fullName" placeholder="Full Name" > 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="{{$rec_emp->email}}" name="email" placeholder="Email" > 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Mobile</label>
                    <input type="text" class="form-control" value="{{$rec_emp->mobile}}" name="mobile" placeholder="Mobile" >   
                    </div>
                    <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" value="{{$rec_emp->city}}" name="city" placeholder="City" >  
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-database"></i> Update</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>

@include("admin.footer")