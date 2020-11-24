<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        dd('index', ["supplier", $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->company_name = $request->input('company_name');
        $supplier->description = $request->input('description');
        $supplier->country_id = $request->input('country_id');
        $supplier->phone = $request->input('phone');
        $supplier->address = $request->input('address');
        $supplier->logoURL = $request->input('logoURL');
        $supplier->email_address = $request->input('email_address');
        $supplier->password = $request->input('password');
        $supplier = save();
        return redirect()->route('index')->with('succses','saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        ;$request->validate([$request,
            'company_name'=>'required|max:255',
        'company_name'=>'required',
        'description'=>'required',
        'country_id'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'logoURL'=>'required',
        'email_address'=>'required',
        'password'=>'required'
    ]);
        $supplier = Supplier::find($supplier)->update($request->all());
        return redirect()->route('index')->with('success', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        ;$supplier->delete();
    }
}
