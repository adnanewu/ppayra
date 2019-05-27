<?php
use App\census;
use Illuminate\Support\Facades\Input;



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
Route::get('/view-census/{id}', 'CensusController@ViewCensus')->name('detail.census');
Route::get('/delete-census/{id}', 'CensusController@DeleteCensus');
Route::get('/edit-census/{id}','CensusController@EditCensus');
Route::post('/update-census/{id}','CensusController@UpdateCensus');
//Route::get('/all_census','CensusController@Join_Query')->name('all.censes');


Route::get('/add_dperson', 'TraineeController@index')->name('add.dperson');
Route::post('/insert-dperson','TraineeController@store');
Route::get('/all_dperson','TraineeController@Allperson')->name('all.dperson');
Route::get('/view-dperson/{id}', 'TraineeController@Viewdperson');
Route::get('/delete-dperson/{id}', 'TraineeController@Deletedperson');
Route::get('/edit-dperson/{id}','TraineeController@Editdperson');
Route::post('/update-dperson/{id}','TraineeController@Updatedperson');

Route::get('/add_course', 'CourseController@index')->name('add.course');
Route::post('/insert-course','CourseController@store');


Route::get('/list_course','CourseController@Allcourse')->name('list.course');
Route::get('/Del-course/{id}','CourseController@DeleteCourse');
Route::get('/edit-course/{id}','CourseController@editCourse');
Route::post('/update-course/{id}','CourseController@updateDataCourse');
Route::get('/view-course/{id}', 'CourseController@ViewCourse');



// ------------------------------------------------------------------
// Join Table Route are here

Route::get('/add_parent','ParentController@index')->name('add.parent');
Route::post('/insert-parent','ParentController@store');

Route::get('/add_child','ChildController@index')->name('add.child');
Route::post('/insert-child','ChildController@store');


////// Join edit-dperson

Route::get('/join','JoinController@Join_Query')->name('join');

Route::post('/insert-join','JoinController@store');
Route::get('/all_join','JoinController@AllTable')->name('all.join');
Route::get('/edit-join/{id}','JoinController@editJoin');

///Join Tree
Route::get('/join_tree','JoinController@Join_tree_q')->name('join.tree');




////course route 
//Route::get('/add_course','coursecontroller@index')->name('add.course');
//Route::post('/InsertData_course','coursecontroller@store');


///Search
//Route::get('/search_census','CensusController@search')->name('search.census');
Route::get ( '/search_census', function () {
	$dummyDetails = census::paginate(15);
	return view ( '/search_census' )->withcensuses($dummyDetails);
} )->name('search.census');
Route::any ( '/search', 'CensusController@search');






