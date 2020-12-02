<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\candidat_md;
use DB;

use Illuminate\Support\Facades\Redirect;

class candidatcontroller extends Controller
{
    public function ajoutcandidat(){
        return view('admin.candidat.ajoutcandidat');
    }
    public function storecandidat(Request $request){

        $this->validate($request,[
            'nom_ca'=>'required',
            'prenom_ca'=>'required',
            'email_ca'=>'required',
            'tel_ca'=>'required',
            'date_ca'=>'required',
            'age_ca'=>'required',
            'sexe_ca'=>'required',
            'situation_ca'=>'required',
            'ville_ca'=>'required',
            'adresse_ca'=>'required',
            'date_ca'=>'required',
            
            ]);
        $ajoutcandidat = new candidat_md();

        $ajoutcandidat->nom_ca = $request->input('nom_ca');
        $ajoutcandidat->prenom_ca = $request->input('prenom_ca');
        $ajoutcandidat->email_ca = $request->input('email_ca');
        $ajoutcandidat->tel_ca = $request->input('tel_ca');
        $ajoutcandidat->date_ca = $request->input('date_ca');
        $ajoutcandidat->age_ca = $request->input('age_ca');
        $ajoutcandidat->sexe_ca = $request->input('sexe_ca');
        $ajoutcandidat->situation_ca = $request->input('sexe_ca');
        $ajoutcandidat->ville_ca = $request->input('ville_ca');
        $ajoutcandidat->adresse_ca = $request->input('adresse_ca');
        $ajoutcandidat->date_de = $request->input('date_de');




        
        
        
         if($request->hasfile('image')){
             $file =$request->file('image');
             $destination_path = public_path().'/files';
             $extension = $file->getClientOriginalExtension();
             $files = $file->getClientOriginalName();
             $fileName = $files. '_'.time().'.'.$extension;
           
            $file->move('cv/', $fileName);
            $ajoutcandidat->image= $fileName;
           
         } else {
             return $request;
             $ajoutcandidat->image= '';  
             
         }


         if($request->hasfile('image1')){
            $file =$request->file('image1');
            $destination_path = public_path().'/files';
            $extension = $file->getClientOriginalExtension();
            $files = $file->getClientOriginalName();
            $fileName1 = $files. '_'.time().'.'.$extension;
          
           $file->move('images/', $fileName1);
           $ajoutcandidat->image1= $fileName1;
          
        } else {
            return $request;
            $ajoutcandidat->image1= '';  
            
        }
         
         $ajoutcandidat->save();
         return Redirect::to('/listecandidat');
         
         
    }
    public function listecandidat(){
        $listecandidat_info=DB::table('cand')
         ->get();
       $manage_candidat=view('admin.candidat.listecandidat') 
        ->with('tous_candidat_info',$listecandidat_info);  
      return view('admin.home')    
       ->with('listecandidat',$manage_candidat) ;
       
 }
 //suppression
 public function supprimercandidat($id_ca){
     DB::table('cand')
       ->where('id_ca',$id_ca)
       ->delete();
 
       return Redirect::to('/listecandidat');
 
   }  
   //vue profile detail
 
  public function vuecandidat($id_ca){
     $profile_details=DB::table('cand')
                         ->select('*')
                         ->where('id_ca',$id_ca)
                         ->first();
       $manage_details_profile=view('admin.candidat.profile')
                         ->with('profile_details_profile',$profile_details);
       return view('admin.home')
                         ->with('candidat.profile',$manage_details_profile);
           
   }
}
