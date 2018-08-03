<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class DataController extends Controller
{
    //
    public function getCountries()
    {
        $countries = DB::table('skills')->pluck("name","id");
        return view('dropdown',compact('skills'));
    }

    public function getStates($id)
    {
        $states = DB::table("typeskills")->where("typeskills_id",$id)->pluck("name","id");
        return json_encode($states);
    }
}
