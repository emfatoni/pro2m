<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramActivityLog;

class ProgramActivityLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProgramActivityLog::all();

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
        $data = new ProgramActivityLog();

        $data->date = $request->input('date');
        $data->document = $request->input('document');
        $data->program_id = $request->input('program_id');
        $data->activity_id = $request->input('activity_id');

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
        $data = ProgramActivityLog::where('id',$id)->get();

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
        $data = 
        $data = ProgramActivityLog::where('id',$id)->first();

        $data->date = $request->input('date');
        $data->document = $request->input('document');
        $data->program_id = $request->input('program_id');
        $data->activity_id = $request->input('activity_id');

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
        $data = ProgramActivityLog::where('id',$id)->first();

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
