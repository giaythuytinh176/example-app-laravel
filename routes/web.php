<?php

use Illuminate\Support\Facades\Route;

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

//$aa = function($name){
//    return "Xin chào " . $name;
//};
//Route::get('/user/(:any)', $aa);

//Route::get("/user/{any?}/{nothing?}", function ($any = null, $nothing = null) {
//    if (!empty($any)) {
//        echo $any;
//        echo $nothing;
//    } else {
//        echo "file not found";
//    }
//});

//Route::get("/user/{name}/{age?}", function ($name, $age = null) {
//    if ($age == null ){
//        $hello  = "my name is $name";
//        return view("hello")->with("hl", $hello);
//    }
//    else {
//        $hello  = "my name is $name and age is $age";
//        return view("hello")->with("hl", $hello);
//    }
//
//})->where("name", '[a-zA-Z0-9]+');

use Illuminate\Http\Request;

Route::get("/login", function () {
    return view("login");
});

Route::post("/login", function (Request $request) {
    echo "<pre>";
    $request->setJson(json_encode(["a"=>1]));
    print_r($request->toArray());


DebugBar::info($request);


});


Route::get('/role',[
    'middleware' => 'role:superadmin',
    'uses' => 'App\Http\Controllers\MainController@checkRole',
]);


//Route::get("/test", function (){
//   echo 111111;
//});
//
//Route::get("/user/{name?}/{bb?}", function($name, $bb){
//   echo  $name;
//   echo  $bb;
//});
