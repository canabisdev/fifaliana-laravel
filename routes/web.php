<?php


/*use App\candidat;
use Illuminate\Http\Request; */

// user Routes

Route::group(['namespace'=>'User'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('admin/home','HomeController@index1')->name('admin.name');
    Route::get('/candidat','inscription@index');
    Route::resource('user/layout','inscription');
    Route::get('user/cv','inscription@index1');
    Route::resource('user/layout','CandidatController');


   
    
});


Route::get('/backend', function () {
    return view('admin.admin_login');
});
 

Route::group(['namespace'=>'Admin'],function(){

    //routes recruteur
    Route::resource('admin/user','UserController');
   // Route::resource('admin/user','UserControllerindex');
   //pub routes
    Route::resource('admin/post','PostController');
  
    //Route::resource('admin/post','PostControllerindex');


    //offre routes
    Route::resource('admin/offre','OffreController');
   // Route::resource('admin/offre','OffreControllerindex');
    //employer routes
    Route::resource('admin/employer','EmployerController');
    //Route::resource('admin/employer','EmployerControllerindex');
    //candidat routes
    Route::resource('admin/candidat','candidat');
    Route::resource('admin/recrut','selectioncontroller');
    Route::post('/adminlogin','AdminController@login_dashboard');
    Route::get('/admin_dashboard','AdminController@admin_dashboard');
    Route::get('/logout','AdminController@logout');
   
});

Route::get('/download',function(){
    
      $file = public_path()."/cv/rasolofoson-2019-02-04-5c57ed82d57ee.pdf";

      $headers =array(
     'Content-type: application/pdf',
      );
      return Response::download($file,"Input Groupe.pdf", $headers);
});




//Route::get('admin/home', function () {
    //return view('admin.home');
//});

//Route::get('admin/post', function () {
   // return view('admin.post.pub');
//});


//Route::get('admin/offre', function () {
   // return view('admin.offre.offre');
//});

//Route::get('admin/employer', function () {
   // return view('admin.employer.employer');
//});

//Route::get('admin/candidat', function () {
    //return view('admin.candidat.candidat');
//});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


