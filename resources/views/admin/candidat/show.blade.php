@extends('admin.layout.app')


@section('main-content')
<a href="{{route('candidat.create')}}" class="col-lg-offset-4 " >
<button type="submit" class=" btn btn-primary submit mb-4">Ajouter nouveau</button>
</a>
<div id="content">
     
     <section class="tables-section">
         
         <div class="outer-w3-agile mt-3">
             <h4 class="tittle-w3-agileits mb-4">LISTE DE CANDIDATS</h4>
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         
                     <th scope="col">N.Id</th>
                        <th scope="col">Photos</th>
                         <th scope="col">Nom</th>
                         <th scope="col">Prenom</th>
                         
                         <th scope="col">Email</th>
						 <th scope="col">Contact</th>
						  <th scope="col">Selection</th>
						
                         <th scope="col">Options</th>
                        
                     </tr>
                 </thead>
                 <tbody>
                 @foreach($tous_candidat_info as $v_candidat)
                     <tr>
                     <td >{{$loop->index + 1}}</td>
                     <td><img src="{{URL::to('images/' .$v_candidat->image)}}" heigth="50px" width="50px" alt="image"></td>
                       <td >{{$v_candidat->nom_c}}</td>
                        <td >{{$v_candidat->prenom_c}}</td>
                        <td >{{$v_candidat->email_c}}</td>
                        <td >{{$v_candidat->contact_c}}</td>
						
                        <td><label for="subscribe" class="checkbox-inline">
			                    <input name="subscribe" type="checkbox" value="subscribe"  data-toggle="collapse" 
					               data-target="#email">
			                     Sélectionner </label>
								
                        <td>
                         <!-- alert supprimer-->
                         
						 <div class="list-inline-item">
                         <a href="{{route('candidat.show',$v_candidat->id_c)}}" class="fa fa-user btn btn btn-dark" ></a>
							<a href="" class="fa fa-pencil btn btn btn-warning" ></a>
							   
                        <form id="delete-form-{{$v_candidat->id_c}}" method="post" action="{{route('candidat.destroy',$v_candidat->id_c)}}" >
                      {{csrf_field()}}
                      {{method_field('DELETE')}}

                  </form>
             
               <a href="" onclick="
               if(confirm('Vous voulez le supprimer')) 
                {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$v_candidat->id_c}}').submit();
                }
                else{
                  event.preventDefault();

                }"
               class="fa fa-trash btn btn-danger" ></a>     
						 </div>   
                       
                        </td>  
            
                     </tr>
                @endforeach 
                 </tbody>
             </table>
       </div>
        

   </section>

  
 
</div>



@endsection