<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\billinfo;

class BillInfoController extends Controller
{
    public function index(){
        $info=billinfo::get();
        return json_decode($info);
    }

    public function submitInfo(Request $request){
        $info=new billinfo;
        $info->brand_name = $request->post("brand_name");
        $info->brand_id = $request->post("brand_id");
        $info->due = $request->post("due");
        $info->due = $request->post("status");
        $info->due_info = $request->post("due_info");
        if($info->save()){
            return response()->json(
                [
                    'code'=>0,
                    'msg'=>'success'
                ]);}
                return response()->json([
                'code'=>-1,
                'msg'=>'fail'
                ]);
    }
}
