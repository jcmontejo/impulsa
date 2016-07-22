<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
*/

Route::get('about', function()
{
	return view('information.about');
});
Route::get('address', function()
{
	return view('information.address_book');
});
Route::get('comunity', function()
{
	return view('information.comunity');
});
Route::get('consultation', function()
{
	return view('information.consultation');
});
Route::get('company', function()
{
	return view('information.company');
});
Route::get('impulsarte', function()
{
	return view('information.impulsarte');
});
Route::get('godfather', function()
{
	return view('information.godfather');
});
Route::get('emunicach', function()
{
	return view('information.emunicach');
});
Route::get('events', function()
{
	return view('information.events');
});
Route::get('after', function()
{
	return view('extras.after');
});
Route::get('during', function()
{
	return view('extras.during');
});
Route::get('performance', function()
{
	return view('extras.performance');
});
Route::get('tips', function()
{
	return view('extras.tips');
});
Route::get('employment', function()
{
	return view('extras.employment');
});
Route::get('consider', function()
{
	return view('extras.consider');
});
Route::get('importance', function()
{
	return view('extras.importance');
});
Route::get('main_cv', function()
{
	return view('extras.main_cv');
});
Route::get('avoid', function()
{
	return view('extras.avoid');
});
/*
|--------------------------------------------------------------------------
| End General Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'internal', 'middleware' => ['auth', 'is_internal']], function(){
	//Route::get('/', 'InternalController@index');
	//Route::get('/prueba', 'InternalController@prueba');
});

Route::group(['middleware' => ['web']], function () {
	

	Route::resource('personal','PersonalController');
	Route::resource('access', 'LoginController');
	Route::resource('student', 'StudentController');
	Route::resource('academic', 'AcademicController');
	Route::resource('work', 'WorkController');
	Route::resource('profile', 'ProfileController');
	Route::resource('home', 'ApplyController');
	Route::resource('postulate', 'PostulateController');
	Route::resource('poll', 'PollController');

	/*
	* Routes company
	*/
	Route::resource('company','CompanyController');	  
	Route::resource('quality', 'QualityController');
	Route::resource('publication', 'PublicationController');
	Route::resource('notification', 'NotificationController');
	Route::resource('profile-company','ProfilecompanyController');
	/*
	* End Routes company
	*/
	/*
	* Routes admin
	*/
	Route::resource('admin','AdminController');	 
	Route::resource('profile-admin', 'ProfileadminController'); 
	Route::resource('view-student', 'ViewstudentController');
	Route::resource('view-company', 'ViewcompanyController');
	Route::resource('confirm', 'ConfirmController');
	Route::resource('evaluation','Evaluationcontroller');

});



Route::auth();
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/confirm/id/{id}', 'Auth\AuthController@confirmRegister');

Route::get('admin/register-admin', 'Auth\AuthController@getRegister');
Route::post('admin/register-admin', 'Auth\AuthController@postRegister');

Route::get('auth/logout',  function ()
{
    Auth::logout();
    Session::flush();
    return redirect('/');
});

Route::get('user/id/{id}', ['middleware' => 'is_admin', function($id)
{	
	$users = DB::select('select * from users where id = ?', [$id]);  
	DB::table('users')
            ->where('id', $id)
            ->update(['status' => 'active']);
    return redirect('/confirm');
	
}]);

//Route::get('/home', 'HomeController@index');
Route::get('/homecompany', 'HomeCompanyController@index');

Route::get('pdf', function(){

	$pdf = PDF::loadView('curriculum');
	return $pdf->download('archivo.pdf');
});

Route::get('/curriculum', function()
{	
	return view('curriculum');
});
Route::get('/curriculum/id/{id}', function($id)
{	
	$user = $id;
	return view('admin.curriculum',[
			'user' => $user
		]);
});

/*
/*pdf company*
*/
Route::get('vacancy', function(){

	$pdf = PDF::loadView('vacancy');
	return $pdf->download('archivo.pdf');
});

Route::get('convenio', function(){

	$pdf = PDF::loadView('convenio');
	return $pdf->download('archivo.pdf');
});
/*endpdfcompany*/

Route::get('postulate/id/{id}', function($id)
{	
	$applies = DB::select('select * from applies where publication_id = ?', [$id]);  
	
	return view('company.show', [
		'applies' => $applies
		]);
    //return redirect('/confirm');
	
});
Route::get('view_postulate/id/{id}', function($id)
{	
	$post = DB::select('select * from students where user_id = ?', [$id]);  
	//dd($post);
	return view('company.view_postulate', [
		'post' => $post
		]);
    //return redirect('/confirm');
	
});

Route::get('admin-postulate/id/{id}', function($id)
{	
	$applies = DB::select('select * from applies where publication_id = ?', [$id]);  
	
	return view('admin.admin-postulate', [
		'applies' => $applies
		]);
    //return redirect('/confirm');
	
});

Route::get('view-post/id/{id}', function($id)
{	
	$post = DB::select('select * from students where user_id = ?', [$id]);  
	//dd($post);
	return view('admin.view-post', [
		'post' => $post
		]);
    //return redirect('/confirm');
	
});



