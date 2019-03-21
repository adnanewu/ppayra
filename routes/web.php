<?php



Route::get('/', function () {
    return redirect()->Route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/inbox', function(){
	echo "working";

})->name('inbox');

Route::get('/calender', function(){
	echo "showing calender";

})->name('calender');

Route::get('/typography', function(){
	echo "showing typography";

})->name('typography');*/
//Census Routes are here
Route::get('/add_census', 'CensusController@index')->name('add.census');
Route::post('/insert-census','CensusController@store');
Route::get('/all_census','CensusController@AllCensus')->name('all.census');
Route::get('/view-census/{id}', 'CensusController@ViewCensus');
Route::get('/delete-census/{id}', 'CensusController@DeleteCensus');
Route::get('/edit-census/{id}','CensusController@EditCensus');
Route::post('/update-census/{id}','CensusController@UpdateCensus');


Route::get('/add_dperson', 'TraineeController@index')->name('add.dperson');
Route::post('/insert-dperson','TraineeController@store');
Route::get('/all_dperson','TraineeController@Allperson')->name('all.dperson');
Route::get('/view-dperson/{id}', 'TraineeController@Viewdperson');
Route::get('/delete-dperson/{id}', 'TraineeController@Deletedperson');
Route::get('/edit-dperson/{id}','TraineeController@Editdperson');
Route::post('/update-census/{id}','TraineeController@Updatedperson');

Route::get('/add_course', 'CourseController@index')->name('add.course');
Route::post('/insert-course','CourseController@store');
Route::get('/all_course','CourseController@AllCensus')->name('all.course');



