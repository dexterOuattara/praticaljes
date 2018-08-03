<?php

namespace App\Http\Controllers;
use App\Casestudy;
use Illuminate\Support\Facades\DB;

class CasestudyController extends Controller
{


    public function getIndex() {
        $cases = DB::table('casestudies')->paginate(10);
        return view('pages/casestudie', ['cases' => $cases]);
    }


    public function getDetail($id){
        $case = Casestudy::find($id);
        return view('pages/casestudiedetails', ['case' => $case]);
    }


    public function getInside() {
        $insides = DB::table('admins')->leftjoin('casestudies', 'admins.id', '=', 'cases.author')->paginate(6);
        return view('pages/inside', ['insides' => $insides]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
