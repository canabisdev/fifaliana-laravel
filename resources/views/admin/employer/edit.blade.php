 @extends('admin.layout.app')



@section('main-content')


<div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
		<a name="candidat"><h3 class="tittle text-center mb-lg-5 mb-3" style="margin-left:180px">Vous pouvez mofdifier</h3></a>
                <p class="tittle text-center mb-lg-5 mb-3" style="margin-left:170px" >Cliquer sur modifier</p>
                <div class="col-md-3 sign-btn">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                         </a>
                </div>
                <div class="col-lg-offset-7 " >
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                    <button type="submit" class="fa fa-edit  btn btn-warning ">Modifier</button>
                </div>
    </div>
    <a href="{{route('employer.index')}}" class="col-lg-offset-7 " >
        <button type="submit" class="fa fa-reply  btn btn-success ">  Retour</button>
    </a>
   
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                   
     
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            
                            
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
   
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Formulaire dE Modification </h5>
                        @if(count($errors) > 0)
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <button type="button" aria-hidden="true" class="close"
                            onclick="this.parentElement.style.display='none';"></button>
                            
                                <span>
                                <b> Danger - </b>{{$error}}</span>
                        </div>
                        @endforeach
                        @endif
                         <!--form store-->
                         <form action="{{route('employer.update', $Employer->id_ep)}}" method="post"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                     
                                  <div class="form-group">
                                      <label for="exampleInputName">Nom</label>
                                      <input type="name" class="form-control" id="exampleInputName" name="nom_ep" placeholder="Nom" value="{{ $Employer->nom_ep}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputLastname">Prenom</label>
                                      <input type="Lastname" class="form-control" id="exampleInputLastName" name="prenom_ep" placeholder="Prenom" 
                                      value="{{ $Employer->prenom_ep}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputfontion">Fonction</label>
                                      <input type="Lastname" class="form-control" id="exampleInputfonction" name="fonction_ep" placeholder="Fonction"
                                      value="{{ $Employer->fonction_ep}}">
                                    </div>
                                     <div class="form-group">
                                    <label for="exampleInputEmail3">Adresse Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3" name="email_ep" placeholder="Email"
                                    value="{{ $Employer->email_ep}}">
                                    </div>
                                   <div class="form-group">
                                    <label for="exampleInputPhone">Contact</label>
                                    <input type="phone" class="form-control" id="exampleInputPhone"  name="tel_ep" placeholder="Contact"
                                    value="{{ $Employer->tel_ep}}">
                                   </div>
                                   
                               
                     
                              <h4 class="card-title">Plus d'information</h4>
                              
                              
                                <div class="form-group">
                                  <label for="exampleInputDate">Date naissance</label>
                                  <input type="Date" class="form-control" id="exampleInputDate" name="date_ep" placeholder="Date"
                                  value="{{ $Employer->date_ep}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputNumber">Age</label>
                                  <input type="number" class="form-control" id="exampleNumber" name="age_ep" placeholder="Age"
                                  value="{{$Employer->age_ep}}">
                                </div>
                              <div class="form-group">
                                  <label class="control-label">Genre</label>
                                   <div class="radio">
                                       <label>
                                            <input type="radio" name="sexe_ep"   value="{{ $Employer->sexe_ep}}">
                                            Homme
                                       </label>
                                   </div>
                                  
                                   <div class="radio">
                                       <label>
                                            <input type="radio" name="sexe_ep"  value="{{ $Employer->sexe_ep}}">
                                            Femme
                                      </label>
                                   </div>
                                   <div class="form-group">
                                  <label for="exampleInputst">Situation familiale</label>
                                  <input type="text" class="form-control" id="exampleCity" name="situation_ep" placeholder="Situation familiale"
                                  value="{{ $Employer->situation_ep}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputCity">Ville</label>
                                  <input type="text" class="form-control" id="exampleCity" name="ville_ep" placeholder="Ville"
                                  value="{{ $Employer->ville_ep}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputAdresse">Adresse local</label>
                                  <input type="text" class="form-control" id="exampleAdresse" name="adresse_ep"placeholder="Adresse local"
                                  value="{{ $Employer->adresse_ep}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputposte">Poste</label>
                                  <input type="text" class="form-control" id="exampleposte"  name="poste_ep" placeholder="poste"
                                  value="{{ $Employer->poste_ep}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputgroupe">Groupe</label>
                                  <input type="text" class="form-control" id="exampleposte" name="categorie_ep" placeholder="Groupe"
                                  value="{{ $Employer->categorie_ep}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputposte">Categorie de projet</label>
                                  <input type="text" class="form-control" id="exampleposte" name="groupe_ep" placeholder="groupe"
                                  value="{{ $Employer->groupe_ep}}">
                                </div>
                               
                                
                                

                            <button type="submit" class="btn btn-primary submit mb-4">Modifier</button>
						 </div>
                        </form>
							 
                

            </div>
        </div>
    </div>


@endsection




     