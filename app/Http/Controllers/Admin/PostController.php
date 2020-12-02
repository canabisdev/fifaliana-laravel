<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pub;
use DB;
use Illuminate\Support\Facades\Redirect;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pub_info=DB::table('publ')
        ->get();
        $manage_pub=view('admin.post.show') 
       ->with('posts',$pub_info);  
     return view('admin.home')    
      ->with('post.show',$manage_pub) ;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.pub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
         'date_pu'=>'required',
         'date_fu'=>'required',
         'description_pu'=>'required',
       ]);
       $post = new pub;
       $post->date_pu = $request->date_pu;
       $post->date_fu = $request->date_fu;
       $post->description_pu = $request->description_pu;

       $post->save();

       return redirect(route('post.index'));
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
    public function edit($id_pu)
    {
        $off=DB::table('publ')
                       ->select('*')
                       ->where('id_pu',$id_pu)
                        ->first();
     $manage_off=view('admin.post.edit')
                        ->with('post',$off);
      return view('admin.home')
                       ->with('admin.post.edit',$manage_off);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pu)
    {
        $this->validate($request,[
            'date_pu'=>'required',
            'date_fu'=>'required',
            'description_pu'=>'required',
          ]);

          $data=array();
          $data['date_pu']=$request->date_pu;
          $data['date_fu']=$request->date_fu;
          $data['description_pu']=$request->description_pu;
         
          DB::table('publ')
               ->where('id_pu',$id_pu)
               ->update($data);
     
          return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pu)
    {
        pub::where('id_pu',$id_pu)->delete();
         return redirect()->back();
    }
}
