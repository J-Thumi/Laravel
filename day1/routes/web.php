<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/names',function(){
    //WE CAN RETURN HTML FILE

    $perso=[
        [
            "name" => "Bob Smith",
            "age" => 25,
            "email" => "bob@example.com"
        ],
        [
            "name" => "Carol White",
            "age" => 32,
            "email" => "carol@example.com"
        ],
        [
            "name" => "David Brown",
            "age" => 45,
            "email" => "david@example.com"
        ],
        [
            "name" => "Eve Green",
            "age" => 29,
            "email" => "eve@example.com"
        ],
        [
            "name" => "Frank Harris",
            "age" => 40,
            "email" => "frank@example.com"
        ],
        [
            "name" => "Grace Lee",
            "age" => 36,
            "email" => "grace@example.com"
        ],
        [
            "name" => "Henry Young",
            "age" => 27,
            "email" => "henry@example.com"
        ],
        [
            "name" => "Isabel King",
            "age" => 31,
            "email" => "isabel@example.com"
        ],
        [
            "name" => "Jack Wilson",
            "age" => 33,
            "email" => "jack@example.com"
        ],
        [
            "name" => "Laura Scott",
            "age" => 38,
            "email" => "laura@example.com"
        ]
    ];
    

    return view('names',['perso' => $perso]);

    //PLAIN TEXT
    //return 'hello';

    //JSON
    //return ['name'=>'Jos','age'=>23];


});