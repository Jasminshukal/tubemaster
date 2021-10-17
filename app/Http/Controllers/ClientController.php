<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\City;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::where('status',Client::ACTIVE)->with(['city'])->orderBy('id','desc')->get();
        return view('admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citys=City::orderBy('name','asc')->get();
        return view('admin.client.create',compact('citys'));
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
            'companyname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city_id' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();
        Client::create($data);
        return redirect()->route('clients.index')->with('success','Client Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client=Client::whereId($id)->with(['city'])->first();

        return view('admin.client.view',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $client=Client::find($id);
        $citys=City::orderBy('name','asc')->get();
        return view('admin.client.edit',compact('citys','client'));
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
            'companyname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city_id' => 'required',
            'status' => 'required',
        ]);
        
        $clients=Client::find($id);
    
        $clients->update($request->all());
        return redirect()->route('clients.index')->with('success','Client update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients=Client::find($id);
        $clients->delete();
        return redirect()->route('clients.index')->with('success','Client delete Successfully');
    }
}
