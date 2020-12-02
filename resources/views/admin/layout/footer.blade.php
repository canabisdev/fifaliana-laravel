
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="">ACEUIL</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="">
                        <i class="fas fa-th-large"></i>
                       MENU
                    </a>
                </li>
                <li>
                    <a href="{{route('employer.index')}}"  >
                        <i class="fas fa-users"></i>
                        Employées
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    
                </li>
                <li>
                    <a href="{{route('offre.index')}}" >
                        <i class="fas fa-laptop"></i>
                        Publication 
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="Offre">
                        <li>
							
                            <a href="{{URL::to('/ajoutoffre')}}"><i class="far fa-envelope-open"></i>Créer</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/vueoffre')}}"><i class="fas fa-info-circle"></i>Touts</a>
                        </li>
                       
                    </ul>
                </li>
				  <li>
                    <a href="{{route('post.index')}}" >
                        <i class="fas fa-eye"></i>
                        Offre d'emploie
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="Publication">
                        <li>
							
                            <a href="{{URL::to ('/ajoutpub')}}"><i class="far fa-envelope-open"></i>Créer</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/vuepub')}}"><i class="fas fa-info-circle"></i>Touts</a>
                        </li>
                       
                    </ul>
                </li>
				<li>
                    <a href="{{route('candidat.index')}}" >
                        <i class="fas fa-users"></i>
                        Candidat
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                   
                </li>
                <li>
                    <a href="{{route('recrut.index')}}" >
                        <i class="fas fa-users"></i>
                        Selectionement
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                   
                </li>
               
                <li>
                    <a href="{{route('user.index')}}" >
                        <i class="fas fa-user-circle"></i>
                        Recruteur
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                      <!--  <i class="far fa-envelope"></i>-->
                      
                        <span class="badge badge-secondary float-md-right bg-danger"></span>
                    </a>
                </li>
               
                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <div class="col-md mb-4">
        
        <div class="card h-100">
          <div class="card-body">
          <img class="img-fluid rounded" style="margin-left:20px" src="{{asset('otwoo.png')}}"  width="100" heigth="80"  alt="image">
       <div style="margin-top:-120px">   
       <p class="font-weight-bold" style="margin-left:300px; margin-top:15px"><i > APPLICATION DE GESTION DE RECRUTEMENT<i> </p>
      <br>

          <p class="font-weight-normal" style="margin-left:300px; font-size:16px " ><i>Bienvenue dans la page administrateur.Vous povez utiliser les differents <br> options qui existe dans l'Application</i></p>
          
   </div>
            <nav class="navbar  mb-xl-4 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Chercher ici... " aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Recherche</button>
                    </form>
                    
                    <form action="#" method="post" class="form-inline mx-auto user-form">
                     <a href="#" class="dropdown-item mt-3">
                    <h4> <i class="far fa-user"></i> Utilisateur</h4>
                        </a>   
                    </form>
                    <form action="#" method="post" class="form-inline mx-auto logout-form">
                     <a href="{{URL::to('/logout')}}" class="dropdown-item mt-2">
                                    <h4>
                                     <i class="fas fa-lock mr-2"></i>Deconnetez-vous</h4>
                                </a>
                    </form>
                    <!--// Search-from -->
                   
                
                </div>
       
            </nav>

     
            
            <div class="content-wrapper">
              <div class="row">
                  @yield('content')
               </div>
         </div>  

        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
    
    <script src="{{asset('admin/js/jquery-2.2.3.min.js')}}"></script>
    
    <script src="{{asset('admin/js/modernizr.js')}}"></script>
    <script>
        
        $(window).load(function () {
            
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    <script src="{{asset('admin/js/SimpleChart.js')}}"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6",
                    Y: 300.00
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function () {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="{{asset('admin/js/rumcaJS.js')}}"></script>
    <script src="{{asset('admin/js/example.js')}}"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="{{asset('admin/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/js/pignose.calender.js')}}"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    
    <script src="{{asset('admin/js/script.js')}}"></script>
    <script src="{{asset('admin/js/jquery-2.1.4.min.js')}}"></script>
   
    
    <script src="{{asset('admin/js/simplyCountdown.js')}}"></script>
    
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>

<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/sweetalert.js')}}"></script>
<script src="{{asset('admin/js/polyfills.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<script>
  $(function () {
   
    CKEDITOR.replace('editor1')
  
    $('.textarea').wysihtml5()
  })
</script>

