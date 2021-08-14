<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\record;


class RecordController extends Controller
{
    public function get(Request $request){

        return view('resource.record');
    }
    public function post(Request $re){
        $re->validate(['file'=>'required |mimes:json']);
        $data = file_get_contents($re->file);
        $result = json_decode($data,true);

        if (json_last_error() === JSON_ERROR_NONE) {
             foreach($result as $row){
                 $record = new record();
                 $record->userId = $row["userId"];
                 $record->id = $row["id"];
                 $record->title = $row["title"];
                 $record->body = $row["body"];
                 $record->save();
             }

            return view('resource.RecordSuccess');
        }else{
            return "Not a Json data";
        }

    }

    public function display(){
        $record = new record();
        $records = $record::all();
        return view('resource.TableRecords', compact('records'));
    }
}
