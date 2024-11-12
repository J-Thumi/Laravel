<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    
    public function single($index){
        $persons=[
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
                "age" => 30,
                "email" => "laura@example.com"
            ]
        ];
        $person=$persons[$index];
    
        return view('single',
        ['person'=>$person,
        "index"=>$index
        ]
    );
}

public function query(){
    return view('name',
    ['name'=>request('name'),
    'age'=>request('age')
    ]
    );
}


public function names(){
    //WE CAN RETURN HTML FILE

    $persons=[
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
            "age" => 30,
            "email" => "laura@example.com"
        ]
    ];
    

    return view('names',['persons' => $persons]);

    //PLAIN TEXT
    //return 'hello';

    //JSON
    //return ['name'=>'Jos','age'=>23];


}
}
