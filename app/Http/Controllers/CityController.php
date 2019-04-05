<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\city;
use App\Exception;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $city = city::all();
            if($city) {
                    $response['status'] = 'Success';
                    $response['msg'] = "";
                    $response['data'] = $city;
                    return response()->json($response,200);
            }
        }
        catch(\Exception $e) {
                     $response['status'] = 'Error';
                     $response['msg'] = \Lang::get('api.Global_Error');
                      //$response['msg'] = $e;
                    return response()->json($response, 401);
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
        try {
            $city= city:: create ($request->all());
            if($city){
                $response['status']='Success';
                $response['msg']=\Lang::get('api.Global_Success');
                $response['data']=$city;
                return response()->json($response,200);
            }
        }
        catch(\Exception $e){
            $response['status']='Error';
           // $response['msg']=\Lang::get('api.Global_Error');
            $response['msg']=$e;
            return response()->json($response,401);
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
        try{
            $city=city::find($id);
            if($city){
                $response['status']='Success';
                $response['msg']=\Lang::get('api.Global_Success');
                $response['data']=$city;
                return response()->json($response,200);
            }
        }
        catch(\Exception $e){
            $response['status']='Error';
            $response['msg']=\Lang::get('api.Global_Error');
            return response()->json($response,401);
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
        try{
            $city=city::find($id);
            $update=$city->update($request->all());
            if($update){
                $response['status']='Success';
                $response['msg']=\Lang::get('api.Global_Success');
                $response['data']=$city;
                return response()->json($response,200);
            }
        }
        catch(\Exception $e){
            $response['status']='Error';
            $response['msg']=\Lang::get('api.Global_Error');
            return response()->json($response,401);
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
        try{
            $city=city::find($id);
            $deleted=$city->delete();
            if($deleted){
                $response['status']='Success';
                $response['msg']=\Lang::get('api.Global_Success');
                $response['data']=$city;
                return response()->json($response,200);
            }
        }
        catch(\Exception $e){
            $response['status']='Error';
            $response['msg']=\Lang::get('api.Global_Error');
            return response()->json($response,401);
        }
    }
}
