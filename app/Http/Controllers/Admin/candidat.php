<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\candidat_mb;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class candidat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listecandidat_info=DB::table('candidat1')
         ->get();
       $manage_candidat=view('admin.candidat.show') 
        ->with('tous_candidat_info',$listecandidat_info);  
      return view('admin.home')    
       ->with('candidat.show',$manage_candidat) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.candidat.candidat');
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
            'nom_c'=>'required',
            'prenom_c'=>'required',
            'email_c'=>'required',
            'contact_c'=>'required',
            'date_c'=>'required',
            'situation_c'=>'required',
            'ville_c'=>'required',
            'adresse_c'=>'required',
            'ville_c'=>'required',
            'information_c'=>'required',
          
           
            
            ]);
        $ajoutcandidat = new candidat_mb();

        $ajoutcandidat->nom_c = $request->input('nom_c');
        $ajoutcandidat->prenom_c = $request->input('prenom_c');
        $ajoutcandidat->email_c = $request->input('email_c');
        $ajoutcandidat->contact_c = $request->input('contact_c');
        $ajoutcandidat->date_c = $request->input('date_c');
        $ajoutcandidat->situation_c = $request->input('situation_c');
        $ajoutcandidat->ville_c = $request->input('ville_c');
        $ajoutcandidat->adresse_c = $request->input('adresse_c');
        $ajoutcandidat->information_c = $request->input('information_c');
      
       


        if($request->hasfile('image')){
            $file =$request->file('image');
            $destination_path = public_path().'/files';
            $extension = $file->getClientOriginalExtension();
            $files = $file->getClientOriginalName();
            $fileName = $files. '_'.time().'.'.$extension;
          
           $file->move('images/', $fileName);
           $ajoutcandidat->image= $fileName;
          
        } else {
            return $request;
            $ajoutcandidat->image= '';  
            
        }
        
        $ajoutcandidat->save();
        return redirect()->route('candidat.index');


    }


    




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_c)
    {
        $profile_details=DB::table('candidat1')
        ->select('*')
        ->where('id_c',$id_c)
        ->first();
$manage_details_profile=view('admin.candidat.profile')
        ->with('profile_details_profile',$profile_details);
return view('admin.home')
        ->with('candidat.profile',$manage_details_profile);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_c)
    {
        DB::table('candidat1')
        ->where('id_c',$id_c)
        ->delete();
  
        return redirect()->route('candidat.index');
    }
}
