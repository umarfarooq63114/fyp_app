<?php

namespace App\Http\Controllers;

use App\Technician;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{




    public function index()
    {
        return Technician::all();
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
        /*$technician = new Technician();
        $technician->technician_name=$request->technician_name;
        $technician->technician_category=$request->technician_category;
        $technician->technician_no=$request->technician_no;
        $technician->technician_rating=$request->technician_rating;
        $technician->technician_cnic=$request->technician_cnic;
        $technician->technician_address=$request->technician_address;
        $technician->save();
        return "created";*/
        return Technician::create($request->all());





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Technician::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // return new TechnicianResource($technician);

        $technician = Technician::find($id);
        return $technician;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $technician =Technician::find($id);
        $technician->technician_name=$request->input('technician_name');
        $technician->technician_category=$request->input('technician_category');
        $technician->technician_no=$request->input('technician_no');
        $technician->technician_rating=$request->input('technician_rating');
        $technician->technician_cnic=$request->input('technician_cnic');
        $technician->technician_address=$request->input('technician_address');
        $technician->save();

        return "created";


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technician $technician)
    {
        $technician->delete();
        return "deleted";
    }
}
