<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Client;
use App\Models\Equipment;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::with(['city','client','equipment'])->orderBy('id','desc')->get();

        return view('admin.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citys=City::orderBy('name','asc')->get();
        $clients=Client::orderBy('name','asc')->get();
        $equipment=Equipment::orderBy('name','asc')->get();
        return view('admin.project.create',compact('citys','clients','equipment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'city_id' => 'required',
            'client_id' => 'required',
            'equipment_id' => 'required',
            'contactphone' => 'required',
            'contactemail' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();
        $project=Project::create($data);
        $equipments=array();
        foreach($request->equipment_id as $equipment)
        {
            $project_equipments=array();
            $project_equipments['equipments_id']=$equipment;
            $project_equipments['status']="active";
            array_push($equipments,$project_equipments);
        }
        $project->project_equipment()->createMany($equipments);
        return redirect()->route('projects.index')->with('success','Project Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project=Project::with(['city','client','project_equipment'])->orderBy('id','desc')->first();
        return view('admin.project.view',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Project::find($id);
        $citys=City::orderBy('name','asc')->get();
        $clients=Client::orderBy('name','asc')->get();
        $equipment=Equipment::orderBy('name','asc')->get();
        return view('admin.project.edit',compact('citys','clients','project','equipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'city_id' => 'required',
            'client_id' => 'required',
            'contactphone' => 'required',
            'contactemail' => 'required',
            'status' => 'required',
            'equipment_id' => 'required',
        ]);

        $projects=Project::find($id);

        $projects->update($request->all());

        return redirect()->route('projects.index')->with('success','Project update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects=Project::find($id);
        $projects->delete();
        return redirect()->route('projects.index')->with('success','Project delete Successfully');
    }
}
