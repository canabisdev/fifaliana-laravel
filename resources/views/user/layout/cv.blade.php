<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Pillar - Bootstrap 4 Resume/CV Template for Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Resume Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('frontend/assets/css/pillar-1.css')}}">


</head> 

<body>	

    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="media flex-column flex-md-row">
				    <img class="mr-3 img-fluid picture mx-auto" src="{{URL::to('images/' .$profile_details_profile->image)}}" alt="">
				    <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
					    <div class="primary-info">
						    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"></h1>
						    <div class="title mb-3">Full Stack Developer</div>
						    <ul class="list-unstyled">
							    <li class="mb-2"><a href="#"><i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>kanaexemple@gmail.com</a></li>
							    <li><a href="#"><i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i>Numero</a></li>
						    </ul>
					    </div><!--//primary-info-->
					    <div class="secondary-info ml-md-auto mt-2">
						    <ul class="resume-social list-unstyled">
				                <li class="mb-3"><a href="#">Née le : Date naissance</a></li>
				                <li class="mb-3"><a href="#">Situation familiale : votre situation</a></li>
				                <li class="mb-3"><a href="#">Adresse et ville : Votre adresse et ville </a></li>
				                <li><a href="#">code postal : postale</a></li>
						    </ul>
					    </div><!--//secondary-info-->
					    
				    </div><!--//media-body-->
			    </div><!--//media-->
		    </header>
		    <div class="resume-body p-5">
				<div class="col-lg-9">
					<section class="resume-section summary-section mb-5">
					  <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Objectif</h2>
					  <div class="resume-section-content">
							<p class="mb-0">Cette section vous sert de présentation votre obectif au de notre société</p>
						</div>
					</section><!--//summary-section-->
				</div>
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
							
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Expériences</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
											<p>Cette section vous sert de présentation toutes votre  experience</p>
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Première</h3>
										        
										    </div><!--//row-->
											
										    <div class="resume-position-time">Lieu - Date</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										   <p> Une  description du poste, décrivez votre rôle et vos tâches en quelques mots afin que le recruteur en sache plus sur la nature de votre travail.</p>
										    
										   
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Deuxième</h3>
										        
										    </div><!--//row-->
										    <div class="resume-position-time">Lieu - Date</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										  
										     <p> Une  description du poste, décrivez votre rôle et vos tâches en quelques mots afin que le recruteur en sache plus sur la nature de votre travail.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Ainsi de suite....</h4>
										    
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								       
							    </div><!--//resume-timeline-->
							    
							    
						    </div>
					    </section><!--//experience-section-->
				    </div>
				   
			    </div><!--//row-->
				<div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
							
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Formations et Educations</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
											<p>Cette section vous sert de présentation toutes votre  formations et educations</p>
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Nom de la formation / diplôme à nom de l'école</h3>
										        
										    </div><!--//row-->
											
										    <div class="resume-position-time">Lieu - Date</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										   <p> Une  description du poste, décrivez votre rôle et vos tâches en quelques mots afin que le recruteur en sache plus sur la nature de votre travail.</p>
										    
										   
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Nom de la formation / diplôme à nom de l'école</h3>
										        
										    </div><!--//row-->
											<div class="resume-position-time">Lieu - Date</div>
										    
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
					
										      <p> Une  description du poste, décrivez votre rôle et vos tâches en quelques mots afin que le recruteur en sache plus sur la nature de votre travail.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Ainsi de suite....</h4>
										    
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								       
							    </div><!--//resume-timeline-->
							    
							    
						    </div>
					    </section><!--//experience-section-->
				    </div>
				   
			    </div><!--//row-->
				<div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
							
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Compétences en informatique</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
											<p>Cette section vous sert de présentation toutes votre  competemces en informatique</p>
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Bureautique </h3>
										        
										    </div><!--//row-->
											
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										   <p>  Décrivez votre compétence en informatique bureatique </p>
										    
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Language de programmation</h3>
										        
										    </div><!--//row-->
											
										    
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
											<p>  Décrivez toutes votre Language de programmation </p>
		
										    
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
									 <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Language de programmation WEB</h3>
										        
										    </div><!--//row-->
											
										    
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
											<p>  Décrivez toutes votre Language de programmation WEB </p>
		
										    
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								       
							    </div><!--//resume-timeline-->
							    
							    
						    </div>
					    </section><!--//experience-section-->
				    </div>
			    </div><!--//row-->
				<div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
							
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Connaissances linguistiques</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
											<p>Cette section vous sert de présentation toutes votre  connaissances linguistiques</p>
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Exemple </h3>
										        
										    </div><!--//row-->
											<p> Malgache : Native </p>
											<p> Français : Professionnel </p>
											Vous pouvez aussi créer de tableau 
									    </div><!--//resume-timeline-item-header-->
									   <!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								   
								   
								       
							    </div>
		   
							</div>  
							</div>  
					</div><!--//resume-body-->
		      <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
							
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">LOIRSIRS</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
											<p>Cette section vous sert de présentation toutes votre  Loisirs</p>
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Exemple </h3>
										        
										    </div><!--//row-->
											<p>Sports : si vous en pratiquez</p>

                                           <p>Association : si vous êtes membre d'une association</p> 
											<p>D'autres loisirs plus vagues, complétez ici.</p>


									    </div><!--//resume-timeline-item-header-->
									   <!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								   
								   
								       
							    </div>
		   
							</div>  
							</div>  
					</div><!--//resume-body-->
				  
		    
	    

    
    <footer class="footer text-center pt-2 pb-5">
	     
              <div class="card-footer">
              <a href="{{URL::to('/')}}" class="btn btn-info">Retour au page d'acueil</a>
            </div> 
    </footer>

    

</body>
</html> 

