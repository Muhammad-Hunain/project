<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class task extends Controller
{
    public function createtask(request $req){
        $data =[
            'task_name'=>$req->input('taskname'),
            'categories'=>$req->input('cate'),
            'start_time'=>$req->input('start'),
            'end_time'=>$req->input('end'),
        ];
        
       $insert= DB::table('task')->insert($data);
       if($insert){
           return redirect('task');
       }
    } 
}
