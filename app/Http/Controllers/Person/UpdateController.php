<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
//    private array $props = [];
    public function __invoke(UpdateRequest $request, Person $person)
    {
        $data = $request->validated();
        $person->update($data);
        return $person;
    }
}
