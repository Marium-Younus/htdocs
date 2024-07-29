<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
   
    public function index()
    {

        $emp_record = DB::table('employeetable')->get(); //select * from table
        return view('admin.index', ['record' =>$emp_record]);
        
    }
   public function edit($id)
    {
        $empdata=DB::table('employeetable')->where('Emp_Id',$id)->first();
        return view('admin.editpage')->with('rec_emp',$empdata);
    }
   
    public function create()
    {
        return view('admin/create');
    }

        //insert operation
    public function store(Request $request)
    {
        $data = array();
        $data['Emp_Fn'] = $request->fullName;
        $data['Emp_Email'] = $request->email;
        $data['Emp_Mobile'] = $request->mobile;
        $data['Emp_City'] = $request->city;
        if($data != null)
        {
            DB::table('employeetable')->insert($data);
            return view('admin/create');

        }
    } 
    public function update(Request $request, $id) //update operation
    {
        $data=array();
        $data['Emp_Fn']=$request->fullName;
        $data['Emp_Email']=$request->email;
        $data['Emp_Mobile']=$request->mobile;
        $data['Emp_City']=$request->city;
        DB::table('employeetable')->where('Emp_Id', $id)->update($data);
            return redirect()->action('AdminController@index');
    }





    public function show($id)
    {
        //
    }

   
 

   
  

    
    public function destroy($id)
    {
        DB::table('employeetable')->where('Emp_Id', $id)->delete();
       return redirect()->action('AdminController@index');
    }
}
