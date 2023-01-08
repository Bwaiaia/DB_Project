<?php

namespace App\Http\Controllers;

use App\Models\Island;
use Illuminate\Http\Request;
use App\Models\TrainingType;
use App\Models\Training;
class TrainingController extends Controller
{
    
    public function index()
    {
        
        $training = Training::all();
        

        // Pass data to view
        return view('trainings.index', compact('training'));

        
    }

    public function create()
    {

        $island = Island::all()->toArray();
        dd($island);
        return view('trainings.create', compact('island'));
    }

    public function store(Request $request)
    {
            $input = $request->all();
        
            $results = Training::create($input);


        return redirect()->route('trainings.index')->with('exception', 'Operation failed !');
    }

    
    public function show($id)
    {
        $training = Training::find($id);

		return view('training_types.show')->with('trainings',$training);//match aran am variable aikai ma are n te views iaan te resouces
    }

    
    public function edit($id)
    {
        $training = Training::find($id);
		return view('trainings.edit')->withtraining($training);//match aran am variable aikai ma are n te views iaan te resouces
    }

   
    public function update(Request $request, $id)
    {
     
        $data = Training::find($id)->update($request->all());


           return redirect()->route('trainings.index')->with('message', 'Updated successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
