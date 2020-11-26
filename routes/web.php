<?php

// Route::get('/', function () {
//     return view('Welcome');
// });

//Login de la pagina
Auth::routes();

//Middleware
Route::group(['middleware' => 'admin'], function(){
    //Ruta para llamar todos los campos de usuarios
    Route::resource('users', 'UserController');
});

Route::get('/home', 'HomeController@index')->name('home');

//*******************************Editor************************************ */
//Ruta de Welcome
Route::resource('editor', 'EditorController');
Route::resource('class-two', 'TwoController');
Route::resource('class-three', 'ThreeController');
//*********************** */
Route::resource('videostwo', 'VideotwoController');
Route::resource('videosthree', 'VideothreeController');


Route::resource('/', 'WelcomeController');

//***************************USERS********************************************* */

//Ruta vista Importar Usuarios
Route::get('import', 'UserController@importView');

//Ruta controlador para importar usuarios
Route::post('import-list-excel', 'UserController@importExcel')->name('users.import.excel');

// Genera reportes en PDF Reports
Route::get('generate/pdf/users', 'UserController@pdf');

// Genera reportes en EXCEL Reports
Route::get('generate/excel/users', 'UserController@excel');

//********************************CURSOS*************************************** */
//Ruta de Cursos
Route::resource('cursos', 'CursoController');
//********************************CLASES*************************************** */
//Ruta de Cursos
Route::resource('clases', 'ClaseController');

// *****************************VIDEOS**********************************
//Ruta de Cursos
Route::resource('videos', 'VideoController');

// *****************************EDITOR**********************************

Route::get('mycurso', 'EditorControler@mycurso');
Route::get('myvideo', 'VideoController@index');

//*********************SEMESTRE************************ */
Route::get('semesters', 'SemestreController@index');

Route::resource('semestre/onesemestre', 'OneSemestreController');
Route::resource('semestre/twosemestre', 'TwoSemestreController');
Route::resource('semestre/threesemestre', 'ThreeSemestreController');





