<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;
// use App\Models\Api;
class apiController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apicreate(Request $request)
    {
        $flutter_api = new Api;
        $flutter_api->name = $request->name;
        $response = $flutter_api->save();
        return response()->json(['Create Successfully']);   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function apishow()
    {
        $flutter = Api::get();
        return response()->json($flutter);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function apiupdate(Request $request)
    {
        // $data = $request->all();
        $id = $request->id;
        $name = $request->name;
        $flutter_update = Api::find($id);
        if ($flutter_update) {
            $flutter_update->name = $name; 
            $flutter_update->update();
            return response()->json(["Updated Successfully"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function apidelete($api)
    {
        $flutter = Api::find($api);
        $flutter->delete();
        return response()->json(['Delete Successfully']);
    }
}
