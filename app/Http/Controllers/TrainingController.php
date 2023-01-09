<?php

namespace App\Http\Controllers;

use App\Models\Island;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\TrainingType;
use App\Models\TrainingDetail;
use DB;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trainings = DB::table('islands')
        ->select('trainings.id', 'islands.island_name', 'villages.village_name', 'trainings.training_date', 'training_details.participant_first_name', 'training_details.participant_last_name', 'training_details.age', 'training_details.gender', 'training_types.training_name')
        ->leftJoin('trainings','islands.id','=','trainings.island_id')
        ->leftJoin('training_types','trainings.training_type_id','=','training_types.id')
        ->leftJoin('training_details','trainings.id','=','training_details.training_id')
        ->leftJoin('villages','training_details.village_id','=','villages.id')
        ->whereNotNull('trainings.training_type_id')
        ->whereNotNull('training_details.village_id')
        ->get();
        // dd( $trainings);

        // Pass data to view
        return view('trainings.index', ['trainings' => $trainings]);

        //return 'welcome'; //view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $islands = Island::all()->toArray();
        $types =   TrainingType::all()->toArray();
        $villages =   Village::all()->toArray();
        // dd($types);
        return view('trainings.create')->withIslands($islands)->withTypes($types)->withVillages($villages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        DB::beginTransaction();
        try {
            $training = new Training();
            $training->island_id = $request->island_id;
            $training->training_type_id = $request->training_type_id;
            $training->training_date = $request->training_date;
            $training->save();

           

            $training->trainingdetails()->create([
                'village_id'=>$request->village_id,
                'participant_first_name'=>$request->participant_first_name,
                'participant_last_name'=>$request->participant_last_name,
                'training_id'=>$request->training_id,
                'age'=>$request->age,
                'gender'=>$request->gender,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return 'something went wrong';
        }

        return redirect()->route('training.index')->with('exception', 'Operation failed !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::find($id);

		return view('trainings.show')
	        ->with('training',$training);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = Training::find($id);
        $islands = Island::all()->toArray();
        $types =   TrainingType::all()->toArray();
        $villages =   Village::all()->toArray();
		return view('trainings.edit')->withTraining($training)->withIslands($islands)->withTypes($types)->withVillages($villages);
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
        // $Training = $request->all();
     
        $data = Training::find($id)->update($request->all());


           return redirect()->route('training_type.index')->with('message', 'Updated successfully.');
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