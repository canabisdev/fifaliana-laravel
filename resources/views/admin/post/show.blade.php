@extends('admin.layout.app')


@section('main-content')

<a href="{{route('post.create')}}" class="col-lg-offset-4 " >
<button type="submit" class="btn btn-primary submit mb-4"> Creer nouveau</button>
</a>
@foreach($posts  as $post)

<br>
       <div class="row">
        <div class="col-md-12 mb-12">
          <div class="card h-100">
            <div class="card-body">
          
            <div class="card-body">
              <h2 class="card-title" style="margin-left: 10px"> PUBLICATION </h2>
              <p class="card-text"><i>Numero : </i>{{$loop->index + 1}}</p>
				<p class="card-text"><i>Date creation : </i>{{$post->date_pu}}</p>
              <p class="card-text"> <i>Date de determination : </i>{{$post->date_fu}}</p>
				<p class="card-text"> {!!htmlspecialchars_decode($post->description_pu)!!}</p>
        </div>
            
          <form id="delete-form-{{$post->id_pu}}" method="post" action="{{route('post.destroy',$post->id_pu)}}" >
                      {{csrf_field()}}
                      {{method_field('DELETE')}}

                  </form>
             
         <a href="" onclick="
         if(confirm('Vous voulez le supprimer')) 
                {
                  event.preventDefault();
                  document.getElementById('delete-form-{{ $post->id_pu}}').submit();
                }
                else{
                  event.preventDefault();

                }"
            class="btn btn-danger" >Supprimer</a>
         
           
          </div>
         
      </div>
      </div>
    </div>
    
 
@endforeach  

@endsection