
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Login :: w3layouts</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
   
    <link href="{{asset('admin/css/fontawesome-all.css')}}" rel="stylesheet">
    
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Se connecter</h2>
            <p class="alert-danger"><?php
                $exception=Session::get('exception');
                 if ($exception)
                     {
                       echo $exception;
                       Session::put('exception',null);
                     }
             ?></p>
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
            
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">

                    <form method="post" action="{{ route('admin.login')}}">
                        {{ csrf_field() }}
          
                    <div class="form-group">
                        <label>Nom utilisateur</label>
                        <input type="text"  value="Adresse Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Adresse Mail';}"
                        class="form-control " name="email" placeholder="Adresse Mail">
                    </div>
                    <div class="form-group">
                        <label>Mots de passe</label>
                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" class="form-control " name="password" placeholder="Mots de passe">
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souviez</label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                            <a href="#">Mots de passe oubliez?</a>
                        </div>
                    </div>
                    <button type="submit" onclick="myFunction()" value="Login" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Connexion</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Vous n'avez pas un Compte
                    <a href="#">Creer un compte</a>
                </p>
                
            </div>

           
            
           
        </div>
    </div>


  
    <script src="{{asset('admin/js/jquery-2.2.3.min.js')}}"></script>
    
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>

   <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    

</body>

</html>