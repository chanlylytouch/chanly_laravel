<?php

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
Route::get('/action', function () {
    return view('pages.ourAction');
})-> name('action');
Route::get('/about', function () {
    return view('pages.aboutUs');
})-> name('about');
Route::get('/join', function () {
    return view('pages.joinUs');
})-> name('join');
Route::get('/news', function () {
    return view('pages.news');
})-> name('news');
Route::get('/contact', function () {
    return view('pages.contactUs');
})-> name('contact');
// Route::get('/teacher/{index}',function($index){
//     $teachers = array('Channak','Ronan','Sieha','Rady','Rith');
//     $arrlength = count($teachers);
//     if($index < $arrlength){
//         echo "The teacher is: ".$teachers[$index];
//     }else{
//         echo "The array is: ";
//         $indexs = $arrlength - 1;
//         for($i = 0; $i <= $indexs; $i++){
//             if($i < $indexs){
//                 echo "[$i]$teachers[$i], ";
//             }else if($i == $indexs){
//                 echo "[$i]$teachers[$i]";
//             } 
//         }
//         echo "<br>";
//         echo "Not teacher with this index: " .$index ."<br>";
//         echo "The largest index is: " .$indexs;
//     }
// });
Route::get('customer','pageController@listCustomer');