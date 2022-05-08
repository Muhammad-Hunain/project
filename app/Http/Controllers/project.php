<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class project extends Controller
{
     public function createproject (request $req){
         $data =[
             'name'=>$req->input('name'),
             'project_id'=>$req->input('projectId'),
         ];
         
        $insert= DB::table('project')->insert($data);
        if($insert){
            return redirect('project');
        }
     } 
}
