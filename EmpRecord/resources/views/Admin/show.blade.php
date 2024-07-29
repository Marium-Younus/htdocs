@include("admin.header")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">

<h3><a class="btn btn-secondary" href="{{route('r_admin.create')}}"><i class="fa fa-plus"></i> Create New</a> Employee List</h3>
<table class="table table-stripped">
<thead>
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th colspan="2">Action</th>
    </tr>
    <tbody>
    @foreach($employeerecord as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->mobile}}</td>
           <td>{{$item->city}}</td>
           <td><a href="{{route('r_admin.edit',$item->id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a><td>
           <td>
           <form action="{{route('r_admin.destroy',$item->id)}}" method="post">
            {{ @csrf_field() }}
            {{ @method_field('DELETE') }}
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
            
        </form></td>
       </tr>
    @endforeach
    </tbody>
</thead>
</table>
</div>
</div>

</div>
@include("admin.footer")