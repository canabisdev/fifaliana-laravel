@extends('admin.layout.app')



@section('main-content')

<script language="JavaScript" type="text/javascript">

var age_ca = document.from["forme"]["age_ca"];
var nom_ca = document.from["forme"]["nom_ca"];
var prenom_ca = document.from["forme"]["prenom_ca"];
var date_ca = document.from["forme"]["date-ca"];
var email_ca = document.from["forme"]["email_ca"];
var cin = document.from["forme"]["mail"];
var tel_ca = document.from["forme"]["tel_ca"];
var situation_ca= document.from["forme"]["situation_ca"];
var ville_ca= document.from["forme"]["ville_ca"];
var adresse_ca= document.from["forme"]["adresse_ca"];

  var age_error =document_getElementById("age_error");
    var nom_error =document_getElementById("nom_error");
      var prenom_error =document_getElementById("prenom_error");
        var date_error =document_getElementById("date_error");
          var cin_error =document_getElementById("cin_error");
            var email_error =document_getElementById("email_error");
              var tel_error =document_getElementById("tel_error");
                var situation_error =document_getElementById("situation_error");
                 var ville_error =document_getElementById("ville_error");
                   var adresse_error =document_getElementById("adresse_error");

                age_ca.addEventListener("blur" ,numVerify ,true);
                nom_ca.addEventListener("blur" ,nomVerify ,true);
                prenom_ca.addEventListener("blur" ,prenomVerify ,true);
                date_ca.addEventListener("blur" ,datyVerify ,true);
                cin.addEventListener("blur" ,cinVerify ,true);
                email_ca.addEventListener("blur" ,mailVerify ,true);
                tel_ca.addEventListener("blur" ,telVerify ,true);
                situation_ca.addEventListener("blur" ,telVerify ,true);
                ville_ca.addEventListener("blur" ,telVerify ,true);
                adresse_ca.addEventListener("blur" ,adresseVerify ,true);

                function Validate(){
                  if(age_ca.value==""){
                    age_ca.style.border="1px solid red";
                    age_error.textContent="numero required"
                    age_ca.focus();
                    return false;
                  }
                  if(nom_ca.value==""){
                    nom_ca.style.border="1px solid red";
                    nom_error.textContent="numero required"
                    nom_ca.focus();
                    return false;
                  }
                  if(prenom_ca.value==""){
                    prenom_ca.style.border="1px solid red";
                    prenom_error.textContent="numero required"
                    prenom_ca.focus();
                    return false;
                  }
                  if(date_ca.value==""){
                    date_ca.style.border="1px solid red";
                    date_error.textContent="numero required"
                    date_ca.focus();
                    return false;
                  }
                }

              function nomVerify() {
                if(nom_ca.value !=""){
                     nom_ca.style.border="";
                     nom_error.innerHTML="";
                     return true
                }

              }




function ControllechampVide(champ) {
      if (champ == "") {
          confirm("Il y a champs vide!");
      }
  }

function ControlNum() {
      var num = document.forme.age_ca.value;
      if (isNaN(num) == true) {
          alert("Saisissez un age");
         document.forme.age_ca.value="";
      }
  }
function ControlNom() {
    var test = document.forme.nom_ca.value;
    var nb = test.length;
    if (nb >= 1) {
        var ConvMaj = test.toUpperCase();
        document.forme.nom_ca.value = ConvMaj;
    } else {
        alert("Veuillez entrer votre nom en majuscule");
    }
}


function ControlPrenom() {
    var comm = document.forme.prenom_ca.value;
    var x = 0;
    var y = 1;
    var txt = (comm.substring(x, y)).toUpperCase();
    var prnm = txt;
    for (var i = 0; i < comm.length; i++) {
        x = y;
    }
    prnm = prnm + comm.substring(x, comm.length) + " ";
    document.forme.prenom_ca.value = prnm;
}

function Controlsituation() {
    var str = document.forme.situation_ca.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var situat = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    situat = situat + str.substring(x, str.length) + " ";
    document.forme.situation_ca.value = situat;
   
}

function ControlVille() {
    var str = document.forme.ville_ca.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var ville = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    ville = ville + str.substring(x, str.length) + " ";
    document.forme.ville_ca.value = ville;
   
}

function ControlAdresse() {
    var str = document.forme.adresse_ca.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var adrss = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    adrss = adrss + str.substring(x, str.length) + " ";
    document.forme.adresse_ca.value = adrss;
   
}

function ControlTel() {
  var phon=document.forme.tel_ca.value;
  if(isNaN(phon)==false){
    var isa=phon.length;
    if(isa==10){
      var cs=phon.substring(0,3);
      if(cs=="032" || cs=="033" || cs=="034" || cs=="039"){
        document.forme.tel_ca.value= phon.substring(0,3) +" "+ phon.substring(3,5) +" "+ phon.substring(5,8) +" "+ phon.substring(8,10);
      }else{
        alert("Operateur inconnu � M/car");
      }
    }else{
      alert("Numero invalide");
    }
  }else{
    alert("Le numero est en chiffre");
  }


}
function controlecin(){
    var val=document.forme.cin.value;
    if(isNaN(val)==false){
      var n=val.length;
      if (n==12){
        var pc = val.substring(0,1);
        if(pc==1 || pc==2 || pc==3 || pc==4 || pc==5 || pc==6){
          var cs=val.substring(5,6);
          if(cs==1 || cs==2){
            document.forme.cin.value=val.substring(0,3) + " " + val.substring(3,6) + " " + val.substring(6,9) + " " + val.substring(9,12);
          }else{
            alert("sexe inconnu ou bisexe ? ");
          }
        }else{
          alert("CIN invalide � M/car");
        }
      }else{
        alert("votre num CIN est incorrect");
        document.forme.cin.value="";
        document.forme.cin.value.setFocus(true);
        return forme.cin;
      }

    }else{
      alert("Le numero doit etre un chiffre");
    }
  }

  function controlemail(forme){
                  var str=document.forme.email_ca.value;
                  var s=0;
                  for(var i=0;i<str.length;i++){
                      var qw=str.charAt(i);
                      if(qw=="@"){
                          s=s+1;
                      }
                  }
                  if(s!=1){
                      alert("adresse email invalide");
          document.forme.mail_ca.value="";
                  }
              }

</script>

<div class="content-wrapper">

<h2 class="col-lg-offset-2 " style="margin-top:25px">Vous ajouter une  incription</h2>

@if(count($errors) > 0)
     @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach
      @endif
<form action="{{route('candidat.store')}}" method="post"  enctype="multipart/form-data">
                        {{csrf_field()}}
        
   
                        
                        <div class="form-group">
                                  <label>Inserer votre photo</label>
                                  <input type="file" name="image"  id="image" class="file-upload-default">
                                  <div class="input-group col-xs-12"> <span class="input-group-btn">                                    </span>
                                  </div>
                         </div>
		             
					   <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nom_c" required placeholder="Nom*">
                        </div>
                        </div>	
						<div class="col-sm-10">
                         <div class="form-group">
                             <input type="text" class="form-control" name="prenom_c" required placeholder="Prenom*">
                        </div>
                        </div>
						<div class="col-sm-10">
                         <div class="form-group">
                             <input type="text" class="form-control" name="email_c" required placeholder=" Adresse mail*">
                        </div>
                        </div>
						<div class="col-sm-10">
                         <div class="form-group">
                             <input type="text" class="form-control" name="contact_c" required placeholder="Contact*">
                        </div>
                        </div>
						<div class="col-sm-10">
                         <div class="form-group">
                             <input type="date" class="form-control" name="date_c" required placeholder="Date de naissance*">
                        </div>
                        </div>
						<div class="col-sm-10">
                         <div class="form-group">
                             <input type="text" class="form-control" name="situation_c" required placeholder="Situation familiale*">
                        </div>
                        </div>
						<div class="col-sm-10">
                         <div class="form-group">
                             <input type="text" class="form-control" name="ville_c" required placeholder="Ville*">
                        </div>
                        </div>
						<div class="col-sm-10">
                         <div class="form-group">
                             <input type="text" class="form-control" name="adresse_c" required placeholder="Adresse*">
                        </div>
                        </div>
					
					<div class="col-md-12">
                       <div class="box box-info">
					<div class="btn-adn">
					  <h3  style=" font-size: 15px" >Mettez dans  la cadre les informations dans modele (Experiences , Formations et dipomes,competences informatique)
					  voici un exemple  
						
					  </h3>
					  <!-- tools box -->
					  <div class="pull-right box-tools" >
						
					  </div>
                 </div>
           
          
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" class="ckeditor" required="required" name="information_c" rows="10" cols="80" >
                                            
                    </textarea>
              </form>
            </div>
         		
        


     </form> 
</div>

<a href="{{route('candidat.index')}}" class="fa fa-reply  btn btn-success">
 Retour</button>
</a> 


@endsection




     