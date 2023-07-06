<?php

namespace App\Http\Controllers;

use App\Models\Persons;
use Illuminate\Http\Request;

class PersonsController extends Controller
{

    public function deletePerson(Persons $person){
        
            $person->delete();
            return redirect('/');
    }

    public function display(){
        
        $persons = Persons::all();
        return view('index', ['persons' => $persons]);
    }

    public function showCreateForm(){

        return view('add');
    }

    public function createPerson(Request $request){

        $incomingFields = $request->validate([
            'name'=> 'required',
            'surname'=> 'required'
        ]);
        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['surname'] = strip_tags($incomingFields['surname']);
        Persons::create($incomingFields);
        return redirect('/');
    }
}
