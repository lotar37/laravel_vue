<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;
use Illuminate\Http\Request;

class ShowController extends Controller
{
//    private array $props = [];
    public function __invoke( Person $person)
    {
        return new PersonResource($person);
    }
}
