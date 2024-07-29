<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class AdminController extends Controller
{
    
    public function index()
    {
        $emp_rec = DB::table('EmployeeTable')->get();
        return view('admin.display', ['employeerecord' => $emp_rec]);
    }

   
    public function create()
    {
         return view('admin.index');
    }

    
    public function store(Request $request)
    {
        $data=array();
        $data['Full_Name']=$request->fullName;
        $data['Email']=$request->email;
        $data['Mobile']=$request->mobile;
        $data['City']=$request->city;
        if($data != null)
        {
            DB::table("EmployeeTable")->insert($data);
            return redirect()->action('AdminController@index');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $empdata=DB::table('EmployeeTable')->where('id',$id)->first();
        return view('admin.editpage')->with('rec_emp',$empdata);
    }

    public function update(Request $request, $id)
    {
        $data=array();
        $data['Full_Name']=$request->fullName;
        $data['Email']=$request->email;
        $data['Mobile']=$request->mobile;
        $data['City']=$request->city;
        DB::table('EmployeeTable')
            ->where('id', $id)
            ->update($data);
            return redirect()->action('AdminController@index');
    }

    public function destroy($id)
    {
        DB::table('EmployeeTable')->where('id',$id)->delete();
        return redirect()->action('AdminController@index');
    }
}
