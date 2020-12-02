@extends('admin.layout.app')



@section('main-content')
 
<div class="content-wrapper">

<h2 class="col-lg-offset-2 " style="margin-top:25px">Vous pouvez modifier </h2>

@if(count($errors) > 0)
     @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach
      @endif
<form action="{{route('post.update',$post->id_pu)}}" method="post"  enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                       
        
   
        <div class="form-group" style="margin-top:20px">
            <label for="exampleInputDate2">Date debut de debut de publiction</label>
            <input type="Date" class="form-control" id="exampleInputDate2"  name="date_pu" placeholder="Date" value="{{$post->date_pu}}">
        </div>
   
    
        <div class="form-group">
            <label for="exampleInputDate1">Date fin de fin de publication</label>
            <input type="Date" class="form-control" id="exampleInputDate1"  name="date_fu" placeholder="Date" value="{{$post->date_fu}}">
        </div>
        

<section class="content">
<div class="row">
<div class="col-md-12">
 <div class="box box-info">
   <div class="box-header">
   <h3 class="box-title" style="font-size:16px">INFORMATION DE PUBLICATION:
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
           <textarea id="editor1" name="description_pu" rows="10" cols="80">
                                   
           {{$post->description_pu}}  </textarea>
     </form>
     <br>
   </div>
 </div>
 

</div>
</div>
</section>
</form> 
</div>

<a href="{{route('post.index')}}" class="fa fa-reply  btn btn-success">
 Retour</button>
</a> 

@endsection