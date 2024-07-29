<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class POSTDemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rec= DB::table('posts')->get();
        return view('posts.index')->with('rec',$rec);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post= new Post;
        $post->fullname = $request->fullname;
        $post->email = $request->email;
        $post->mobile = $request->mobile;
        $post->city = $request->city;
        $post->save();
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
         $mydata=DB::table('posts')->where('id',$id)->first();
         return view('posts.edit')->with('rec',$mydata);
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
         $data['fullname']=$request->fullname;
         $data['email']=$request->email;
         $data['mobile']=$request->mobile;
         $data['city']=$request->city;
 
         $res= DB::table('posts')->where('id',$id)->update($data);
 
         if($res)
         {
 
          
           $request->session()->flash('info','user updated successfully');
           return redirect()->action('POSTDemoController@index');
          
 
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
         DB::table('posts')->where('id',$id)->delete();      
            return redirect()->action('POSTDemoController@index');
    }
}
