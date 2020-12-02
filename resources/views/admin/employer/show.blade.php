@extends('admin.layout.app')


@section('main-content')
<a href="{{route('employer.create')}}" class="col-lg-offset-4 " >
<button type="submit" class="btn btn-primary submit mb-4">Ajouter nouveau</button>
</a>


<div id="content">
     
     <section class="tables-section">
         
         <div class="outer-w3-agile mt-3">
             <h4 class="tittle-w3-agileits mb-4">LISTE DES EMPLOYES</h4>
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th scope="col">N.Id</th>
                         <th scope="col">Photos</th>
                         <th scope="col">Nom</th>
                         <th scope="col">Prenom</th>
                         <th scope="col">Fonction</th>
                         <th scope="col">Email</th>
                         <th scope="col">Contact</th>
                         <th scope="col">CV</th>
                         <th scope="col">Options</th>
                     </tr>
                 </thead>
                 <tbody> 
                 @foreach($employers  as $employer)
                     <tr>
                        <td >{{$loop->index + 1}}</td>
                        <td><img src="{{URL::to('images/' .$employer->image)}}" heigth="50px" width="50px" alt="image"></td>
                        <td > {{$employer->nom_ep}}</td>
                        <td >{{$employer->prenom_ep}}</td>
                        <td >{{$employer->fonction_ep}}</td>
                        <td > {{$employer->email_ep}}</td>
                        <td >{{$employer->tel_ep}}</td> 
                        <td ><a href="" class="fa fa-download btn btn btn-success" ></a></td> 
                         <td>

                         <div class="list-inline-item">
							
							<a href="{{route('employer.edit',$employer->id_ep)}}" class="fa fa-pencil btn btn btn-warning" ></a>
							   
                            <form id="delete-form-{{$employer->id_ep}}" method="post" action="{{route('employer.destroy',$employer->id_ep)}}" >
                      {{csrf_field()}}
                      {{method_field('DELETE')}}

                  </form>
             
               <a href="" onclick="
               if(confirm('Vous voulez le supprimer')) 
                {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$employer->id_ep}}').submit();
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

