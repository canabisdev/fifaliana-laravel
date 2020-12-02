@extends('admin.layout.app')



@section('main-content')

 
 
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="{{URL::to('images/' .$profile_details_profile->image)}}"  width="200" heigth="200"  alt="">
           <div class=" mb-2">
            <div class="card-footer">
              
            </div>
        </div>
        </div>
       
        <div class="col-lg-6">
          
			<div class="about-info-p">
			<strong  style="font-size: 18px ">Nom : {{$profile_details_profile->nom_c}} </strong>
		
			
            </div>
            <div class="about-info-p">
			<strong  style="font-size: 18px ">Prenom : {{$profile_details_profile->prenom_c}} </strong>
		
		
            </div>
            
			<div class="about-info-p">
			<strong class="font-weight-bold" style="font-size: 14px ">Adresse Mail : {{$profile_details_profile->email_c}}  </strong>
			
			</div>
			<div class="about-info-p">
			<strong class="font-weight-bold" style="font-size: 14px ">Contact : {{$profile_details_profile->contact_c}} </strong>
			
			</div>
      <div class="about-info-p">
			<strong class="font-weight-bold" style="font-size: 14px ">Née le : {{$profile_details_profile->date_c}} </strong>
			
			</div>
      <div class="about-info-p">
			<strong class="font-weight-bold" style="font-size: 14px ">Situation familiale : {{$profile_details_profile->situation_c}} </strong>
			
			</div>
      <div class="about-info-p">
			<strong class="font-weight-bold" style="font-size: 14px ">Ville : {{$profile_details_profile->ville_c}} </strong>
			
			</div>
      <div class="about-info-p">
			<strong class="font-weight-bold" style="font-size: 14px ">Adresse : {{$profile_details_profile->adresse_c}} </strong>
			
			</div>
																		
       </div>
		  
        
      </div>
     
      

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-12 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Qualité perconnel</h2>
              
        
              <p class="card-text"> {!!htmlspecialchars_decode($profile_details_profile->information_c)!!}</p>
              

				
            </div>
            
          </div>
        </div>
        
        
		<div class="col-md-1 mb-2">
            <div class="card-footer">
              <a href="#" class="btn btn-warning"  style="font-size:18px">Imprimer</a>
            </div>
            <div class="card-footer">
              <a href="{{route('candidat.index')}}" class=" fa fa-reply  btn btn-success"  style="font-size:18px">Retour</a>
            </div>
           
        </div>
        
        

      </div>
     

    </div>
</nav>

	

@endsection