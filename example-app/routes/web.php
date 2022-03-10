<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//su dung request trong callback cua route

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
    $students = [
        [
            'name' => 'ducnn20',
            'age' => 22,
            'class' => 'WE16201',
            'id' => '1',
            'avatar' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt7a3d6c549708c048/607496eb1f74bb759da6a062/RiotX_ChampionList_gwen.jpg?quality=90&width=250'
        ],
        [
            'name' => 'ducnn20',
            'age' => 22,
            'class' => 'WE16201',
            'id' => '2',
            'avatar' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt7a3d6c549708c048/607496eb1f74bb759da6a062/RiotX_ChampionList_gwen.jpg?quality=90&width=250'
        ],
        [
            'name' => 'ducnn20',
            'age' => 22,
            'class' => 'WE16201',
            'id' => '3',
            'avatar' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt7a3d6c549708c048/607496eb1f74bb759da6a062/RiotX_ChampionList_gwen.jpg?quality=90&width=250'

        ]

    ];
    return view('welcome', ['students' => $students]);
});
Route::get('/login',function(){
    $email = 'ducnnph10350@fpt.edu.vn';
    $password = '123456';
    // return view('auth.login')->with('email', $email);
    return view('auth.login',[
        'email' => $email,
        'password' =>$password
    ]);
});
Route::get('/home',function(){
    return view('home');
});
// Route keem query string va params
// Voi tham so truyen vao url thi function nhan 1 tham so tuong ung
// bien o url va funciton khong nhat thiet phai  giong nhau vi no an theo vi tri
// ? o url va = o function la dat gia tri mac dinh khi url thieu bien ?
//Requets: lay tat ca du lieu ? sau url roi cho vao 1 mang 
// VD: /profile?name=ducnn&id=20 => 'name' => ducnn, 'id' = 20
// Route::get('/users/{userId}/{username?}', function(
//     Request $requets,
//     $userId, $userName = 'profile'){
//     dd($userId, $userName, $requets->all());
// });
Route::get('/user/{userId?}',function(
    Request $requets,
    $userId = 1
){  
    $a = $requets->all();
    $users = [
        [
            'name' => 'ducnn',
            'height' => 180,
            'weight' => 66,
            'age' => 22,
            'gender' => 'nam',
            'avatar' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt7a3d6c549708c048/607496eb1f74bb759da6a062/RiotX_ChampionList_gwen.jpg?quality=90&width=250'
        ]
        ];
    return view('user', ['requets' => $a], ['users' => $users]);

});