<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Ivan',
                'age' => 23,
                'job' => 'developmer'
            ],
            [
                'id' => 2,
                'name' => 'Petr',
                'age' => 24,
                'job' => 'creater'
            ],
            [
                'id' => 3,
                'name' => 'Sidor',
                'age' => 26,
                'job' => 'singer'
            ],
        ];
        return $persons;
    }
}
