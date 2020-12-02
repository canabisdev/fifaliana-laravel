<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.layout.head')
   
</head>
<body>

<div class="se-pre-con"></div> 
        <div class="wrapper">
        
       
        <div id="content">
      
        @include('admin.layout.footer')
     
        <section class="content-header">
       
          </section>
        
       
          <div class="container-fluid">
        
          @section('main-content')
          
             @show
           @section('content')
            
           @show
         
         </div>
        </div>
         </div>
      </div>    
</body>
</html>