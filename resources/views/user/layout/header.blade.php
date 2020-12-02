<!-- banner-inner -->
<div id="demo-1" data-zs-src='["frontend/images/1.jpg", "frontend/images/2.jpg","frontend/images/3.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            <div class="col-md-4">
                                <span style="margin-left:-100px;">Bienvenue!</span>
                            </div>
                            <div class="col-md-3 sign-btn">
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fas fa-lock"></i>Deconnetez-vous </a>
                            </div>
                           
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                    <button id="trigger-overlay" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <!-- open/close -->
                                <div class="overlay overlay-door">
                                    <button type="button" class="overlay-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <form action="#" method="post" class="d-flex">
                                        <input class="form-control" type="search" placeholder="Rechercher ici ..." required="">
                                        <button type="submit" class="btn btn-primary submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- open/close -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="index1.html">
                                    <img src="frontend/images/otwoo.png" heigth="30px" width="30px" alt="image"></a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">Accueil
                                        <span class="sr-only"></span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link  " href="#offre">Offres et publications</a>
                                </li>
                                <li class="nav-item  dropdown">
                                    <a class="nav-link  " href="#candidat">Candidats
                                    </a>
                                </li>
                                <li class="nav-item">
                                </li>
                                <li class="nav-item  dropdown">
                                    <a class="nav-link " href="#employer">
                                        Employés
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="#contact">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>
			</div>
		
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

                <h3>
                    <span>Trouvez le bon travail</span> .
                    <span>Maintenant.</span>
                </h3>
                <p>Votre recherche de travail se commence et se finisse avec nous.</p>

                <form action="#" method="post" class="ban-form row">
                    <div class="col-md-3 banf">
                    </div>
                    <div class="col-md-3 banf">
                    </div>
                    <div class="col-md-3 banf">
                    </div>
                </form>
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->
    <!--offre-->
	     <a name="offre"> <h3 class="tittle text-center mb-lg-4 mb-3" style="margin-top: 30px;" > publication</h3></a>
                    <!---728x90--->
               
               
                <div class="col-lg-offset-8 ">
                        <div class="work-info">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut consectetur adipisicing elit sedc labore et dolore magna aliqua uta enim ad minim.. </p>  
                       
                        </div>
                    </div>
                   
               <a name="offre"> <h3 class="tittle text-center mb-lg-4 mb-3" style="margin-top: 30px;" > Offre d'emploi </h3></a>
               @foreach($pubs as $pub )
               
                    <div class="col-lg-offset-8 ">
						<div class="work-info">
                        <p>{!!htmlspecialchars_decode($pub->description_pu)!!}</p>
                            
                        </div>
                        
                    </div>
				
                @endforeach
                
      <!--candidat-->
	<div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
		<a name="candidat"><h3 class="tittle text-center mb-lg-5 mb-3">Espace candidat</h3></a>
                <p class="tittle text-center mb-lg-5 mb-3">Votre recherche de travail se commence et se finisse avec nous.</p>
                
                <div class="tittle text-center mb-lg-5 mb-3">
                    <a href="{{URL::to('/candidat')}}" >
                        <i class="far fa-user"></i> S'inscrire</a>
                </div>
    </div>
   
    <div class="row">
    @foreach($candidat as $cand )
        <div class="col-md-3 mb-3" style="margin-left:12px">
        
          <div class="card h-100">
			  <div class="emply-img">
                  <img src="{{asset('images/'.$cand->image)}}" alt="" class="img-fluid">
               </div>
                <div class="card-body">
                <h2 class="card-title" style="font-size: 18px">{{$cand->nom_c}}</h2>
                <h2 class="card-title" style="font-size: 18px">{{$cand->prenom_c}}</h2>
                    <p>{{$cand->email_c}}</p>
                    <p>{{$cand->contact_c}}</p>
                </div>
              
          </div>
        </div>
        @endforeach
    </div>
   
	<!--/candidates -->
    <section class="banner-bottom-wthree bg-light py-lg-5 py-3 text-center">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3"> Candidats recrutés</h3>
                <div class="row mt-5">
               
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                   
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4></h4>
                                    <p style="color:red">Pas de rectutement pour le moment !!!! </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
	
	<!--candidat-->
       <!--employer-->
			<section class="clents-slide py-lg-5 py-3">
          <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
               <a name="employer"> <h3 class="tittle text-center mb-lg-5 mb-3" style="margin-top: -60px;">Profiles des employers</h3></a>
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-5">
                        <div class="carousel-item active">
                            <div class="row">
                           
                            @foreach($Employer as $employer )
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>{{$employer->nom_ep}}</h6>
                                            <p style="font-size:16px">{{$employer->prenom_ep}}</p>
                                            <p style="font-size:16px">{{$employer->fonction_ep}}</p>
                                            <p style="font-size:16px">{{$employer->email_ep}}</p>
                                            <p style="font-size:16px">{{$employer->tel_ep}}</p>
                                        </div>
                                       
                                        <div class="col-md-3 col-sm-3 col-xs-3 ">
                                            <img class="img-fluid" src="{{asset('images/'.$employer->image)}}" alt="">
                                        </div>
        
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<!--employer-->   
   <!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<a name="contact"></a><h3 class="tittle text-center mb-lg-5 mb-3">Contactez-nous</h3></a>
				<!---728x90--->
				<div class="container">
						<div class="address row mb-5">
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-map"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">ADRESSE</h6>
										<p> Lot II.M.97 Antsakaviro, Antananarivo.
		
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Email</h6>
										<p>Email :
											<a href="mailto:example@email.com"> mail@example.com</a>
										</p>
									</div>
		
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Téléphone</h6>
										<p>+261 33 60 366 00</p>
		
									</div>
								</div>
							</div>
						</div>
					</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
						    allowfullscreen></iframe>

					</div>
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Envoyez-nous un message</h4>
							<form action="#" method="post">
								<div class="form-group">
									<label class="my-2">Nom</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="Email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" placeholder=""></textarea>
								</div>
								<div class="input-group1">
									<input class="form-control" type="submit" value="Envoyer">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- //contact -->
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
                        <h5 class="text-center mb-4">Vous allez ou ?</h5>
                        <p style="color:red">  Fermer immediatement cette message , si vous n'êtez pas l'adimistrateur ,si non continuer </p><br>
                        <a href="{{URL::to('/logout')}}">
                            <button type="submit" class="btn btn-primary submit mb-4"> Continuer </button>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

     
                            