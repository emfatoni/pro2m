<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramActivity;

class ProgramActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProgramActivity::all();

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
        $data = new ProgramActivity();

        $data->phase = $request->input('phase');
        $data->subphase = $request->input('subphase');
        $data->activity = $request->input('activity');

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
        $data = ProgramActivity::where('id',$id)->get();

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
        $data = ProgramActivity::where('id',$id)->first();

        $data->phase = $request->input('phase');
        $data->subphase = $request->input('subphase');
        $data->activity = $request->input('activity');

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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProgramActivity::where('id',$id)->first();

        if($data->delete()){
            $res['message'] = "Success!";
            $res['value'] = $data;
            return response($res);
        }else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }
}
