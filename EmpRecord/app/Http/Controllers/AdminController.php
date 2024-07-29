<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
   
    public function index()
    {
        $emp_rec = DB::table('emp_tbl')->get();
        return view('admin.show', ['employeerecord' => $emp_rec]);
        
    }

   
    public function create()
    {
        return view("Admin/create");
    }

    public function store(Request $request)
    {
        $data=array();
        $data['name']=$request->fullName;
        $data['email']=$request->email;
        $data['mobile']=$request->mobile;
        $data['city']=$request->city;
        if($data != null)
        {
            DB::table("emp_tbl")->insert($data);
            return redirect()->action('AdminController@index');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $empdata=DB::table('emp_tbl')->where('id',$id)->first();
        return view('admin.editpage')->with('rec_emp',$empdata);
    }

    public function update(Request $request, $id)
    {
        $data=array();
        $data['name']=$request->fullName;
        $data['email']=$request->email;
        $data['mobile']=$request->mobile;
        $data['city']=$request->city;
        DB::table('emp_tbl')
            ->where('id', $id)
            ->update($data);
            return redirect()->action('AdminController@index');
    }

    public function destroy($id)
    {
        DB::table('emp_tbl')->where('id',$id)->delete();
        return redirect()->action('AdminController@index');
    }
}
