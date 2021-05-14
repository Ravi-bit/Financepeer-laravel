<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function search(Request $request){
        $searching= $request->searchText;

        $sproducts=DB::table('products')->where('name', 'like', '%' . $searching . '%')->get();
        // $jap=json_encode($ap);

        // $arr = json_decode($jap);
        //  print_r($arr);
        return view('resource.search',compact('sproducts','searching'));
    }
}
