@extends('admin.layout.app')


@section('main-content')


      <div class="row">
      <div class="card h-100">
          
            <div class="card-body">
              <h2 class="card-title" style="margin-left: 90px"> OFFRE DUSTRIBUER </h2>
				<p class="card-text"></p>
              <p class="card-text"></p>
				<p class="card-text"> </p>
            </div>
            <div class="card-footer">
            
                 <div class="modal" id="demo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
										<div class="modal-dialog" >
											<div class="modal-content" >
												<div class="modal-header">
													<h2 class="modal-title">Voulez vous le supprimer ?</h2>
													<button type="button" class="close" data-dismiss="modal"><span >&times;</span></button>
												</div>
												<div class="modal-body">
													<p>Cliquez sur confirmer</p>
												</div>
												<div class="modal-footer">
                          <a href=""><button type="button" class="btn btn-danger">confirmer</button></a>
                                                
												</div>
											</div>
										</div>
									</div>
             
			   <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#demo">supprimer</a>
           
      
        </div>
      </div>
     
    </div>
    

@endsection