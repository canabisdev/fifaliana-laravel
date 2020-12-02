<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\employer;
use DB;
use Illuminate\Support\Facades\Redirect;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empl_info=DB::table('empl')
        ->get();
        $manage_empl=view('admin.employer.show') 
       ->with('employers',$empl_info);  
       return view('admin.home')    
      ->with('employer.show',$manage_empl) ;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employer.employer');
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
           'nom_ep'=>'required',
           'prenom_ep'=>'required',
           'fonction_ep'=>'required',
           'email_ep'=>'required',
           'tel_ep'=>'required',
           'ville_ep'=>'required',
           'adresse_ep'=>'required',
           'file'=>'required',
           'image'=>'required|mimes:jpeg,jpg,bmp,png',

       ]);
      /* if($request->hasFile('image')){
        $request->image->getClientOriginalName();
           $request->image->move('images');
           
       } */

       $image = $request->file('image');
       $slug = str_slug($request->nom_ep);
       if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate. '-'. uniqid() .'.'.
            $image->getClientOriginalExtension();
            $image->move('images' ,$imagename );
        }
        else{
            $imagename = "default.png";
        }

        $image = $request->file('file');
        $slug = str_slug($request->nom_ep);
        if(isset($image)){
             $currentDate = Carbon::now()->toDateString();
             $filename = $slug.'-'.$currentDate. '-'. uniqid() .'.'.
             $image->getClientOriginalExtension();
             $image->move('images' ,$filename );
         }
         else{
             $filename = "default.png";
         }
    

       $employer = new employer;

       $employer->nom_ep = $request->nom_ep;
       $employer->prenom_ep = $request->prenom_ep;
       $employer->fonction_ep = $request->fonction_ep; 
       $employer->email_ep = $request->email_ep;
       $employer->tel_ep = $request->tel_ep;
       $employer->ville_ep = $request->ville_ep;
       $employer->adresse_ep = $request->adresse_ep;
       $employer->image = $imagename;
       $employer->file = $filename;
       $employer->save();
       return redirect()->route('employer.index');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_ep)
    {
        $profile_details=DB::table('empl')
        ->select('*')
        ->where('id_ep',$id_ep)
        ->first();
 $manage_details_profile=view('admin.employer.profile')
        ->with('profile',$profile_details);
  return view('admin.home')
        ->with('employer.profile',$manage_details_profile);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ep)
    { 

        $modifie_employer=DB::table('empl')
        ->select('*')
        ->where('id_ep',$id_ep)
         ->first();
       $manage_modifie_employer=view('admin.employer.edit')
         ->with('Employer',$modifie_employer);
        return view('admin.home')
        ->with('employer.edit',$manage_modifie_employer);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ep)
    {
        $this->validate($request,[
            'nom_ep'=>'required',
            'prenom_ep'=>'required',
            'fonction_ep'=>'required',
            'email_ep'=>'required',
            'tel_ep'=>'required',
            'ville_ep'=>'required',
            'adresse_ep'=>'required',
            'image'=>'required',
            'file'=>'required',
 
 
        ]);
      
            
        $data=array();
        $data['nom_ep']=$request->nom_ep;
        $data['prenom_ep']=$request->prenom_ep;
        $data['fonction_ep']=$request->fonction_ep;
        $data['email_ep']=$request->email_ep;
        $data['tel_ep']=$request->tel_ep;
        $data['ville_ep']=$request->ville_ep;
        $data['adresse_ep']=$request->adresse_ep;
        $data['image']=$request->image;
        $data['file']=$request->image;
        
         
        DB::table('empl')
        ->where('id_ep',$id_ep)
        ->update($data); 
        return redirect()->route('employer.index')->with('successMsg','Modification reuisssi');
         
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ep)
    {
        employer::where('id_ep',$id_ep)->delete();
        return redirect()->back();
        if(file_exists('images/' .$Employer->image))
        {
            unlink('images/'.$Employer->image);
        }
       
        return redirect()->back()->with('successMsg','suppression reuissi');
    }
}
