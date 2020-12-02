@extends('admin.layout.app')



@section('main-content')

 
        
	          <div class="col-lg-8 job_info_left">
                        <!--/ Emply List -->
                        <div class="emply-resume-list row mb-3">
                            <div class="col-md-9 emply-info">
                                <div class="emply-img">
                                    <img src="{{URL::to('images/' .$profile->image)}}" alt="" width="170" heigth="180">
                                </div>
                                <div class="emply-resume-info">
                                    <h4><a href="candidates_single.html">{{$profile->nom_ep}}</a></h4>
                                    <h5 class="mt-2" style="font-size:15px"><b> {{$profile->prenom_ep}}</b> </h5>
                                    <p><i class="fas fa-desktop"></i> {{$profile->fonction_ep}}</p>
									<p><i class="far fa-envelope"></i> {{$profile->email_ep}}</p>
									<p><i class="fa fa-phone"></i> {{$profile->tel_ep}}</p>
                                </div>
								
								<div class="emply-resume-info"  >
                                    <b>Plus d'information personnel</b>
                                    <br>
                                    <p><i>Nee :</i> {{$profile->date_ep}}</p>
									<p><i>Age :</i> {{$profile->age_ep}}</p>
									<p><i>Genre :</i>{{$profile->sexe_ep}}</p>
									<p><i>Situation Familial :</i>{{$profile->situation_ep}}</p>
									<p><i>Ville :</i>{{$profile->ville_ep}}</p>
									<p><i>Adresse :</i>{{$profile->adresse_ep}}</p>
                                </div>
								<div class="emply-resume-info">
									<div class="">
                                    <b>Information au travail</b>
                                    <p><i>Poste :</i>{{$profile->poste_ep}}</p>
									<p><i>Categorie de projet : </i>{{$profile->categorie_ep}}</p>
									<p><i>Groupe : </i>{{$profile->groupe_ep}}</p>
                                </div>
								</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3 emp_btn text-right">
                            <a href="{{route('employer.index')}}" class="col-lg-offset-7 " >
                        <button type="submit" class="fa fa-reply  btn btn-success ">Retour</button>
                        </a>
                            </div>
                        </div>
                        <!--// Emply List -->
	                 </div>
                   </div>
			      </div>

	
	

@endsection