<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;
use Illuminate\Http\Request;

class IndexController extends Controller
{
//    private array $props = [];
    public function __invoke()
    {
        //$people = Person::all();
       $people =  Person::all()->sortByDesc("name");
       return PersonResource::collection($people);
//        return Person::orderBy('name')->get();
    }
}
