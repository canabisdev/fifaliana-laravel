@extends('admin.layout.app')



@section('main-content')
<script>
var age_ep = document.from["forme"]["age_ep"];
var nom_ep = document.from["forme"]["nom_ep"];
var prenom_ep = document.from["forme"]["prenom_ep"];
var fonction_ep = document.from["forme"]["fonction_ep"];
var date_ep = document.from["forme"]["date-ep"];
var email_ep = document.from["forme"]["email_ep"];
var cin = document.from["forme"]["mail"];
var tel_ep = document.from["forme"]["tel_ca"];
var situation_ep= document.from["forme"]["situation_ep"];
var ville_ep= document.from["forme"]["ville_ep"];
var adresse_ep= document.from["forme"]["adresse_ep"];
var poste_ep= document.from["forme"]["poste_ep"];
var categorie_ep= document.from["forme"]["categorie_ep"];
var groupe_ep= document.from["forme"]["groupe_ep"];

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
                      var poste_error =document_getElementById("poste_error");
                        var categorie_error =document_getElementById("categorie_error");
                          var groupe_error =document_getElementById("groupe_error");
                            var fonction_error =document_getElementById("fonction_error");
                            



                age_ep.addEventListener("blur" ,numVerify ,true);
                nom_ep.addEventListener("blur" ,nomVerify ,true);
                prenom_ep.addEventListener("blur" ,prenomVerify ,true);
                fonction_ep.addEventListener("blur" ,prenomVerify ,true);
                date_ep.addEventListener("blur" ,datyVerify ,true);
                cin.addEventListener("blur" ,cinVerify ,true);
                email_ep.addEventListener("blur" ,mailVerify ,true);
                tel_ep.addEventListener("blur" ,telVerify ,true);
                situation_ep.addEventListener("blur" ,telVerify ,true);
                ville_ep.addEventListener("blur" ,telVerify ,true);
                adresse_ep.addEventListener("blur" ,adresseVerify ,true);
                poste_ep.addEventListener("blur" ,adresseVerify ,true);
                categorie_ep.addEventListener("blur" ,adresseVerify ,true);
                groupe_ep.addEventListener("blur" ,adresseVerify ,true);

                function Validate(){
                  if(age_ep.value==""){
                    age_ep.style.border="1px solid red";
                    age_error.textContent="numero required"
                    age_ep.focus();
                    return false;
                  }
                  if(nom_ep.value==""){
                    nom_ep.style.border="1px solid red";
                    nom_error.textContent="numero required"
                    nom_ep.focus();
                    return false;
                  }
                  if(prenom_ep.value==""){
                    prenom_ep.style.border="1px solid red";
                    prenom_error.textContent="numero required"
                    prenom_ep.focus();
                    return false;
                  }
                  if(situation_ep.value==""){
                    situation_ep.style.border="1px solid red";
                    situation_error.textContent="numero required"
                    situation_ep.focus();
                    return false;
                  }
                  if(ville_ep.value==""){
                    ville_ep.style.border="1px solid red";
                    ville_error.textContent="numero required"
                    ville_ep.focus();
                    return false;
                  }
                  if(adresse_ep.value==""){
                    adresse_ep.style.border="1px solid red";
                    adresse_error.textContent="numero required"
                    adresse_ep.focus();
                    return false;
                  }
                  if(poste_ep.value==""){
                    poste_ep.style.border="1px solid red";
                    poste_error.textContent="numero required"
                    poste_ep.focus();
                    return false;
                  }
                  if(categorie_ep.value==""){
                    categorie_ep.style.border="1px solid red";
                    categorie_error.textContent="numero required"
                    categorie_ep.focus();
                    return false;
                  }
                  if(groupe_ep.value==""){
                    groupe_ep.style.border="1px solid red";
                    groupe_error.textContent="numero required"
                    groupe_ep.focus();
                    return false;
                  }
                  if(date_ep.value==""){
                    date_ep.style.border="1px solid red";
                    date_error.textContent="numero required"
                    date_ep.focus();
                    return false;
                  }
                }

              function nomVerify() {
                if(nom_ep.value !=""){
                     nom_ep.style.border="";
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
      var num = document.forme.age_ep.value;
      if (isNaN(num) == true) {
          alert("Saisissez un age");
         document.forme.age_ep.value="";
      }
  }
function ControlNom() {
    var test = document.forme.nom_ep.value;
    var nb = test.length;
    if (nb >= 1) {
        var ConvMaj = test.toUpperCase();
        document.forme.nom_ep.value = ConvMaj;
    } else {
        alert("Veuillez entrer votre nom en majuscule");
    }
}


function ControlPrenom() {
    var comm = document.forme.prenom_ep.value;
    var x = 0;
    var y = 1;
    var txt = (comm.substring(x, y)).toUpperCase();
    var prnm = txt;
    for (var i = 0; i < comm.length; i++) {
        x = y;
    }
    prnm = prnm + comm.substring(x, comm.length) + " ";
    document.forme.prenom_ep.value = prnm;
}

function ControlFonction() {
    var comm = document.forme.fonction_ep.value;
    var x = 0;
    var y = 1;
    var txt = (comm.substring(x, y)).toUpperCase();
    var prnm = txt;
    for (var i = 0; i < comm.length; i++) {
        x = y;
    }
    prnm = prnm + comm.substring(x, comm.length) + " ";
    document.forme.fonction_ep.value = prnm;
}

function Controlsituation() {
    var str = document.forme.situation_ep.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var situat = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    situat = situat + str.substring(x, str.length) + " ";
    document.forme.situation_ep.value = situat;
   
}

function ControlVille() {
    var str = document.forme.ville_ep.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var ville = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    ville = ville + str.substring(x, str.length) + " ";
    document.forme.ville_ep.value = ville;
   
}


function ControlAdresse() {
    var str = document.forme.adresse_ep.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var adrss = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    adrss = adrss + str.substring(x, str.length) + " ";
    document.forme.adresse_ep.value = adrss;
   
}

function ControlPoste() {
    var str = document.forme.poste_ep.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var poste = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    poste = poste + str.substring(x, str.length) + " ";
    document.forme.poste_ep.value = poste;
   
}

function ControlCategorie() {
    var str = document.forme.categorie_ep.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var categorie = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    categorie = categorie + str.substring(x, str.length) + " ";
    document.forme.categorie_ep.value = categorie;
   
}

function ControlGroupe() {
    var str = document.forme.groupe_ep.value;
    var x = 0;
    var y = 1;
    var txt = (str.substring(x, y)).toUpperCase();
    var groupe = txt;
    for (var i = 0; i < str.length; i++) {
        x = y;
    }
    groupe = groupe + str.substring(x, str.length) + " ";
    document.forme.groupe_ep.value = groupe;
   
}

function ControlTel() {
  var phon=document.forme.tel_ep.value;
  if(isNaN(phon)==false){
    var isa=phon.length;
    if(isa==10){
      var cs=phon.substring(0,3);
      if(cs=="032" || cs=="033" || cs=="034" || cs=="039"){
        document.forme.tel_ep.value= phon.substring(0,3) +" "+ phon.substring(3,5) +" "+ phon.substring(5,8) +" "+ phon.substring(8,10);
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
                  var str=document.forme.email_ep.value;
                  var s=0;
                  for(var i=0;i<str.length;i++){
                      var qw=str.charAt(i);
                      if(qw=="@"){
                          s=s+1;
                      }
                  }
                  if(s!=1){
                      alert("adresse email invalide");
          document.forme.mail_ep.value="";
                  }
              }

</script>


   
   
<div class="modal-body">
          <div class="login px-4 mx-auto mw-100">
              <h5 class="text-center mb-8" style="font-size:30px">Ajouter nouveau employé </h5>
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
                         <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                         <form  id="forme" onsubmit="return Validate()" name="forme" action="{{route('employer.store')}}" method="post"  enctype="multipart/form-data">
                        {{csrf_field()}}
        
        <div class="col-sm-8">
          
			 <div class="col-sm-6">
         <div class="form-group">
              <label>Inserer votre photo</label>
                    <input type="file" name="image"  id="image" class="file-upload-default">
                        <div class="input-group col-xs-12"> <span class="input-group-btn">                                    </span>
                          </div>
                </div>
                <div class="form-group">
                          <label>Document</label>
                              <input type="file" name="file"  id="image" class="file-upload-default">
                              <div class="input-group col-xs-12"> <span class="input-group-btn">                                    </span>
                         </div>
                    </div>
             
              <div class="form-group">
                    <label for="nom_error">Nom</label>
                      <input type="name" class="form-control" id="nom_error" name="nom_ep" 
                          onblur="ControlNom(forme)"  onBlur="ControllechampVide(document.saisie.nom.value)"
                           data-validation-required-message=" entrer votre nom." placeholder="Nom">
                      </div>
              </div>
            
			 <div class="col-sm-6">
       <div class="form-group">
              <label for="prenom_error">Prenom</label>
                  <input type="Lastname" class="form-control" id="prenom_error" name="prenom_ep" 
                      onblur="ControlPrenom(forme)" data-validation-required-message=" enter votre Prenom."  onfocus="controleprenom(saisie)" placeholder="Prenom">
                  </div>
            </div>
            <div class="col-sm-6">
             
            <div class="form-group">
                 <label for="fonction_error">Fonction</label>
                     <input type="Lastname" class="form-control" id="fonction_error" name="fonction_ep" 
                        onblur="ControlFonction(forme)" data-validation-required-message=" enter votre fonction."  onfocus="controleprenom(saisie)" placeholder="Fonction">
                  </div>
            </div>
           
        
            <div class="col-sm-6">
            <div class="form-group">
                  <label for="email_error">Email</label>
                    <input type="phone" class="form-control" id="email_error"  name="email_ep" 
                      onblur="ControlEmail(forme)"  data-validation-required-message="entrer votre numero email." placeholder="Email">
                 </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                   <label for="tel_error">Contact</label>
                   <input type="phone" class="form-control" id="tel_error"  name="tel_ep" 
                   onblur="ControlTel(forme)"  data-validation-required-message="entrer votre numero phone." placeholder="Contact">
                   </div>
            </div>
			  <div class="col-sm-6">
        <div class="form-group">
                  <label for="ville_error">Ville</label>
                    <input type="text" class="form-control" id="ville_error" name="ville_ep" 
                      onblur="ControlVille(forme)" data-validation-required-message="entrer votre adresse." placeholder="Ville">
              </div>
          </div>
			 <div class="col-sm-6">
       <div class="form-group">
              <label for="adresse_error">Adresse local</label>
                <input type="text" class="form-control" id="adresse_error" name="adresse_ep" 
                onblur="ControlAdresse(forme)" data-validation-required-message="entrer votre adresse." placeholder="Adresse local">
              </div>
			</div>
      
       
    
    
          <div class="form-group">
            <hr>
            <div class="text-right"> 
              <button type="submit" class="btn btn-primary">Enregitrer</button>
            </div>
          </div>
        </div>
    </div>
 
   
	</div>
</form>
   
@endsection

	
     
    



     