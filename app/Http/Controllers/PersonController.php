<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    public function index()
    {
        return Person::all();
    }

    public function store(PersonRequest $request)
    {
        return Person::create($request->validated());
    }

    public function update(Person $person, PersonRequest $request)
    {
        $person->update($request->validated());
        return $person;
    }

    public function delete(Person $person)
    {
        $person->delete();
        return response('person deleted', 200);
    }
}
