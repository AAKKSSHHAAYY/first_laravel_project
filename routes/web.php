<?php
// use DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('get_list','CustomersController@getlist');
Route::post('add_customers','CustomersController@save');
Route::get('add_compony',function()
{
   $c =  DB::table('companies')->insertGetId(
        ['name' => 'Manu Industries', 'phone' => '12345667']
    );
    if($c){
        echo "success ";
        echo "<br>",$c;
    }
    else{
        echo "data not inserted in database";
    }
    

});
