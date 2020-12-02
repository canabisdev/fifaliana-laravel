<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\candidat_mb;
use DB;

class inscription extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.layout.candidat');
    }
    public function index1()
    {
        return view('user.layout.cv');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $ajoutcandidat = new candidat_mb();

        $ajoutcandidat->nom_c = $request->input('nom_c');
        $ajoutcandidat->prenom_c = $request->input('prenom_c');
        $ajoutcandidat->email_c = $request->input('email_c');
        $ajoutcandidat->contact_ca = $request->input('contact_c');
        $ajoutcandidat->date_c = $request->input('date_c');
        $ajoutcandidat->situation_c = $request->input('situation_c');
        $ajoutcandidat->ville_c = $request->input('ville_c');
        $ajoutcandidat->adresse_c = $request->input('adresse_c');
        $ajoutcandidat->objectif_c = $request->input('objectif_c');
        $ajoutcandidat->experience_c = $request->input('experience_c');
        $ajoutcandidat->formation_c = $request->input('formation_c');
        $ajoutcandidat->compentence_c = $request->input('compentence_c');
        $ajoutcandidat->langue_c = $request->input('langue_c');
        $ajoutcandidat->loisir_c = $request->input('loisir_c');


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
         return Redirect::to('/layout.candidat');
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
    public function destroy($id)
    {
        //
    }
}
