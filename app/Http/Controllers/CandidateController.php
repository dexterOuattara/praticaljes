<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Candidate_skill;
use App\Candidate_skills;
use App\Candidate_stores;
use App\Profile;
use App\Profilecandidate;
use App\Reward;
use App\Skill;
use App\Stack;
use App\Store;
use App\Typecontract;
use App\User;
use App\CandidateStore;


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Assessment;
use App\Typeassessment;


class CandidateController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:candidate');
    }




    public function myresume()
    {

        $myresumes = Candidate::with(['skills']);

        return view('candidate/myresume', ['myresumes' => $myresumes]);

    }

    public function candidateskill($id) {
        $myresume = Candidate::findOrFail($id);
        return view('candidate/candidateskill', ['myresume' => $myresume]);
    }

    public function candidateskillform()

    {
        return view('candidate/candidateskillform')->with('skills', Skill::all() );
    }



    public function createCandidateskillform(Request $request){

        $request->validate([
            'candidate_id' => 'string',
            'skill_id' => 'string',
        ]);

        $team = Candidate::findOrFail($request->candidate_id);
        $team->skills()->toggle($request->skill_id);


        return redirect('candidate/myresume')->with('success', 'Post has been successfully added!');

    }


    public function candidatescontractform()

    {
        return view('candidate/candidatescontractform')->with('typecontracts', Typecontract::all() );
    }


    public function createCandidatescontractform(Request $request){

        $team = Candidate::findOrFail($request->candidate_id);
        $team->typecontracts()->toggle($request->typecontract_id);


        return redirect('candidate/myresume')->with('success', 'Post has been successfully added!');

    }

    public function candidatesrewardform()

    {
        return view('candidate/candidatesrewardform')->with('rewards', Reward::all() );
    }


    public function createCandidatesrewardform(Request $request){

        $team = Candidate::findOrFail($request->candidate_id);
        $team->rewards()->toggle($request->reward_id);


        return redirect('candidate/myresume')->with('success', 'Post has been successfully added!');

    }



    public function update_myresume(Request $request){

        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'github' => 'string',
            'linkedin' => 'string',
            'facebook' => 'string',
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->github = $request->github;
        $user->linkedin = $request->linkedin;
        $user->facebook = $request->facebook;

        $user->save();

        return redirect('candidate/myresume')->with('success', 'edit new step!');


    }


    public function update_photocandidate(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }



    public function pendingproject()
    {
        $myprojects = Candidate_stores::all();

        return view('candidate/pendingproject', ['myprojects' => $myprojects]);
    }

    public function detailsproject($id){
        $myproject = Candidate_stores::find($id);
        return view('candidate/detailsproject', ['myproject' => $myproject]);
    }


    public function calltoapply()
    {
        $calltoapplys = Store::all();

        return view('candidate/calltoapply', ['calltoapplys' => $calltoapplys]);
    }

    public function getPendingproject($id){
        $calltoapply = Store::find($id);
        return view('candidate/pendingproject_detail', ['calltoapply' => $calltoapply]);
    }

    public function candidate_store(Request $request){
        $calltoapply = Candidate_stores::create(array(
//            'user_id' => Input::get('user_id'),
            'store_id' => Input::get('store_id'),
            'candidate_id' => Input::get('candidate_id'),
            'proglanguage' => Input::get('proglanguage'),
            'framelanguage' => Input::get('framelanguage'),
            'framecss' => Input::get('framecss'),
            'framehtml' => Input::get('framehtml'),

//            'assessment_id' => Input::get('assessment_id'),
            'level' => Input::get('level'),
            'price' => Input::get('price'),
            'mytimeassessment' => Input::get('mytimeassessment'),
            'numberapplicant' => Input::get('numberapplicant'),
            'timeassessment' => Input::get('timeassessment'),
            'image1' => Input::get('image1'),
            'requirement1' => Input::get('requirement1'),
            'description' => Input::get('description'),
            'name' => Input::get('name'),
            'typeassessment' => Input::get('typeassessment'),
            'dateassessment' => Input::get('dateassessment'),
            'endassessment' => Input::get('endassessment'),
            'validate' => Input::get('validate'),

        ));

        return redirect('candidate/pendingproject')->with('success', 'pendingproject !');

    }



    public function meeting()
    {
        return view('candidate/meeting');
    }



}
