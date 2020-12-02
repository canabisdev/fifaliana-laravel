@extends('admin.layout.app')



@section('main-content')
 
<div class="content-wrapper">

       <h2 style="margin-top:25px">Vous pouvez passez au creation maintenant</h2>  
       @if(count($errors) > 0)
     @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach
      @endif
<form action="{{route('offre.store')}}" method="post">
                        {{csrf_field()}}
        
        <div class="form-group" style="margin-top:20px">
            <label for="exampleInputDate2">Date debut de debut de publiction</label>
            <input type="Date" class="form-control" id="exampleInputDate2"  name="date_job" placeholder="Date">
        </div>
   
    
        <div class="form-group">
            <label for="exampleInputDate1">Date fin de fin de publication</label>
            <input type="Date" class="form-control" id="exampleInputDate1"  name="date_fob" placeholder="Date">
        </div>
        

<section class="content">
<div class="row">
<div class="col-md-12">
 <div class="box box-info">
   <div class="box-header">
   <h3 class="box-title" style="font-size:16px">INFORMATION DE L'OFFRE:
       <small style="font-size:11px">Insert du text , tableau ou image dans le cadre.</small>
       <small style="font-size:11px">Apres votre insertion glisser le curseur sur menu puis clique engeristrer  </small>
     </h3>
     <!-- tools box -->
     <div class="pull-right box-tools">
       <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
               title="Collapse">
         <i class="fa fa-minus"></i></button>
       <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
               title="Remove">
         <i class="fa fa-times"></i></button>
     </div>
     <!-- /. tools -->
   </div>
   <!-- /.box-header -->
   <div class="box-body pad">
     <form>
           <textarea id="editor1" name="info_job" rows="10" cols="80">
                                   
           </textarea>
     </form>
   </div>
 </div>
 

</div>
</div>
</section>

     </form> 
</div>

@endsection