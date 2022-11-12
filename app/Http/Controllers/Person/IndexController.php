<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class IndexController extends Controller
{
//    private array $props = [];
    public function __invoke()
    {
        //$people = Person::all();
        return Person::all()->sortByDesc("name");
//        return Person::orderBy('name')->get();
    }
}
