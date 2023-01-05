<?php

namespace App\Http\Controllers;

use App\Models\Training_Types;
use App\Models\Employee;
use App\Models\Island;
use App\Models\Village;
use Illuminate\Http\Request;

class Training_TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

     //Index Function
     public function index()
     {
        $training_types = Training_Types::all();  //add tarining types

        return view('training_types.index', ['training_types' => $training_types]); //Pass data to view

     }

     //Create Function
     public function create()
     {
        return view('training_types.create');
     }

     //Store Function
     public function store(Request $request)
     {
        $input = $request->all();
        $result = Training_Types::create($input);

        return redirect()->route('training_types.index');
     }

     //Show Function
     public function show($id)
     {
        $training_types = Training_Types::find($id);

        return view('training_types.show')->withTraining_Types($training_types);
     }

     //Edit Function
     public function edit($id)
     {
        $training_types = Training_Types::find($id);
        return view('training_types.edit')->withTraining_Types($training_types);
     }

     //Update Function
     public function update(Request $request, $id)
     {
        $data = Training_Types::find($id)->update($request->all());
            return redirect()->route('training_types.index')->withTraining_Types('message', 'Update Successfully'); //***** */
     }

     //Destroy Function
     public function destroy(Training_Types $training_Types)
     {

     }
}