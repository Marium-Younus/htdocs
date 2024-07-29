<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $rec= DB::table('emp')->get();
       return view('Emp.index')->with('rec',$rec);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Emp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=array();
        $data['emp_name']=$request->empName;
        $data['designation']=$request->empDesignation;
        $data['skill']=$request->empSkill;
        $data['salary']=$request->empSal;
        if(!empty($data))
        {

          DB::table('emp')->insert($data);
          
          return redirect()->action('EmpController@index');
         

        }
        else
        {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mydata=DB::table('emp')->where('emp_id',$id)->first();

         return view('Emp.edit')->with('rec',$mydata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=array();
        $data['emp_name']=$request->empName;
        $data['designation']=$request->empDesignation;
        $data['skill']=$request->empSkill;
        $data['salary']=$request->empSal;

        $res= DB::table('emp')->where('emp_id',$id)->update($data);

        if($res)
        {

         
          $request->session()->flash('info','user updated successfully');
          return redirect()->action('EmpController@index');
         

        }
        else
        {
            echo "error";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('emp')->where('emp_id',$id)->delete();
          return redirect()->action('EmpController@index');
    }
}
