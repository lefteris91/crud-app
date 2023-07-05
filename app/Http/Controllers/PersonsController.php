<?php

namespace App\Http\Controllers;

use App\Models\Persons;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function display(){
        return view('index'); 
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
        return view('index');
    }
}
