<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Program::all();

        if(count($data) > 0){
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }else{
            $res['message'] = "Empty!";
            return response($res);
        }
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
        $data = new Program();

        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->priority = $request->input('priority');
        $data->cost = $request->input('cost');
        $data->commitment_date = $request->input('commitment_date');
        $data->payment_date = $request->input('payment_date');
        $data->time_plan = $request->input('time_plan');
        $data->sp_id = $request->input('sp_id');
        $data->pic_id = $request->input('pic_id');

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = $data;
            return response($res);
        }else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Program::where('id',$id)->get();

        if(count($data) > 0){
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Program::where('id',$id)->first();

        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->priority = $request->input('priority');
        $data->cost = $request->input('cost');
        $data->commitment_date = $request->input('commitment_date');
        $data->payment_date = $request->input('payment_date');
        $data->time_plan = $request->input('time_plan');
        $data->sp_id = $request->input('sp_id');
        $data->pic_id = $request->input('pic_id');

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Program::where('id',$id)->first();

        if($data->delete()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }
}
