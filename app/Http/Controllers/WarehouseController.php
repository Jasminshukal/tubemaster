<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouse=Warehouse::all();
        return view('admin.warehouse.index',compact('warehouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $whare=Warehouse::create($request->all());
        return redirect()->route('Warehouse.index')->with('success','Warehouse Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit($warehouse)
    {
        $warehouse=Warehouse::find($warehouse);
        return view('admin.warehouse.edit',compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$warehouse)
    {
        $validated = $request->validate([
            'location'=>'required',
            'phone_number'=>'required',
            'email'=>'required',
            'manager_name'=>'required'
        ]);

        $Warehouse=Warehouse::find($warehouse);

        $Warehouse->update($request->all());

        return redirect()->route('Warehouse.index')->with('success','Warehouse update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy($warehouse)
    {
        $warehouse=Warehouse::find($warehouse);
        $warehouse->delete();
        return redirect()->route('Warehouse.index')->with('success','Warehouse Delete Successfully');
    }
}
