<?php

namespace App\Http\Controllers;

use App\Models\Island;
use Illuminate\Http\Request;
use App\Models\TrainingType;

class TrainingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $trainingTypes = TrainingType::all();
        

        // Pass data to view
        return view('training_types.index', compact('trainingTypes'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('training_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $input = $request->all();
        
            $results = TrainingType::create($input);


        return redirect()->route('training_types.index')->with('exception', 'Operation failed !');
    }

    
    public function show($id)
    {
        $trainingTypes = TrainingType::find($id);

		return view('training_types.show')->with('training_types',$trainingTypes);//match aran am variable aikai ma are n te views iaan te resouces
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainingTypes = TrainingType::find($id);
		return view('training_types.edit')->withtrainingType($trainingTypes);//match aran am variable aikai ma are n te views iaan te resouces
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $trainingType = $request->all();
     
        $data = TrainingType::find($id)->update($request->all());


           return redirect()->route('training_types.index')->with('message', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
