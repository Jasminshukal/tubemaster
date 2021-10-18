<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Client;
use App\Models\Equipment;
use App\Models\Project;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments=Equipment::orderBy('id','desc')->get();
        return view('admin.equipment.index',compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citys=City::orderBy('name','asc')->get();
        $clients=Client::where('status','=',1)->orderBy('name','asc')->get();
        $projects=Project::where('status','=',1)->orderBy('title','asc')->get();
        $warehouse=Warehouse::all();
        return view('admin.equipment.create',compact('citys','clients','projects','warehouse'));
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
            'name' => 'required',
            'serialnumber' => 'required',
            'status' => 'required',
            'part'=>'required',
        ]);

        // $data = $request->all();
        $equipment=Equipment::create($data);
        // dd($equipment);
        return redirect()->route('equipments.index')->with('success','Equipment Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment=Equipment::with(['city','client','project'])->where('id','=',$id)->first();
        $citys=City::orderBy('name','asc')->get();
        $clients=Client::where('status','=',1)->orderBy('name','asc')->get();
        $projects=Project::where('status','=',1)->orderBy('title','asc')->get();
        return view('admin.equipment.view',compact('citys','clients','projects','equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment=Equipment::find($id);
        $citys=City::orderBy('name','asc')->get();
        $clients=Client::orderBy('name','asc')->get();
        $projects=Project::orderBy('title','asc')->get();
        $warehouse=Warehouse::all();
        return view('admin.equipment.edit',compact('citys','clients','projects','equipment','warehouse'));
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
            'name' => 'required',
            'serialnumber' => 'required',
            'status' => 'required',
            'part' => 'required',
        ]);

        $equipment=Equipment::find($id);

        $data = $request->all();
        $equipment->update($data);

        return redirect()->route('equipments.index')->with('success','Equipment update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipment=Equipment::find($id);
        $equipment->delete();

        return redirect()->route('equipments.index')->with('success','Equipment Delete Successfully');

    }
}
