<?php

namespace App\Http\Controllers;

use App\Casestudy;
use App\Category;
use App\Post;
use App\Profile;
use App\User;
use App\Assessment;
use App\Typeassessment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * @return CRUD POST
     *
     *
     *
     */

    public function indexHome()
    {

        return view('home');
    }
    public function index()
    {
        $posts = Post::all();

        return view('admin', ['posts' => $posts]);
    }

    public function getPost($id){
        $post = Post::find($id);
        return view('post/post_detail', ['post' => $post]);
    }

    public function getPostForm() {
        return view('post/post_form')->with('categories', Category::all() );
    }

    public function createPost(Request $request){
        $post = Post::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
//            'imgPost' => Input::get('imgPost'),
//            'category_id' => Input::get('category_id'),
            'author' => Auth::user()->id
        ));


        return redirect('/admin')->with('success', 'Post has been successfully added!');

    }



    public function editPost($id) {
        $post = Post::find($id);
        return view('post/edit_post', ['post' => $post]);
    }

    public function updatePost(Request $request, $id) {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->description = $request->description;
//        $post->imgPost = $request->imgPost;
        $post->save();
        return redirect('/admin')->with('success', 'Post has been updated successfully!');
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect('/admin')->with('success', 'Post has been deleted successfully!');
    }



    /**
     * @return CRUD Case Study
     *
     *
     *
     */
    public function indexCase()
    {
        $casestadies = Casestudy::all();

        return view('/case', ['casestadies' => $casestadies]);
    }

    public function getCaseForm() {
        return view('casestudy/case_form');
    }

    public function createCase(Request $request){
        $casestadies = Casestudy::create(array(
            'name' => Input::get('name'),
            'description' => Input::get('description'),
            'challenge' => Input::get('challenge'),
            'solution' => Input::get('solution'),
            'numberOfApplicants' => Input::get('numberOfApplicants'),
            'numberOfMeeting' => Input::get('numberOfMeeting'),
            'numberOfDaysSaves' => Input::get('numberOfDaysSaves'),
            'numberOfHiring' => Input::get('numberOfHiring'),
            'emberVideo' => Input::get('emberVideo'),
            'imageCase' => Input::get('imageCase'),
            'linkResources' => Input::get('linkResources'),
            'author' => Auth::user()->id
        ));
        return redirect('/admin')->with('success', 'Post has been successfully added!');

    }

    public function getCase($id){
        $casestadies = Casestudy::find($id);
        return view('casestudy/case_detail', ['casestadie' => $casestadies]);
    }

    public function editCase($id) {
        $casestadies = Casestudy::find($id);
        return view('casestudy/edit_case', ['casestadie' => $casestadies]);
    }

    public function updateCase(Request $request, $id) {
        $casestadies = Casestudy::find($id);
        $casestadies->name = $request->name;
        $casestadies->description = $request->description;
        $casestadies->challenge = $request->challenge;
        $casestadies->solution = $request->solution;
        $casestadies->numberOfApplicants = $request->numberOfApplicants;
        $casestadies->numberOfMeeting = $request->numberOfMeeting;
        $casestadies->numberOfDaysSaves = $request->numberOfDaysSaves;
        $casestadies->numberOfHiring = $request->numberOfHiring;
        $casestadies->emberVideo = $request->emberVideo;
        $casestadies->imageCase = $request->imageCase;
        $casestadies->linkResources = $request->linkResources;
        $casestadies->author = $request->author;
        $casestadies->save();
        return redirect('/admin')->with('success', 'Post has been updated successfully!');
    }

    public function deleteCase($id) {
        $casestadies = Casestudy::find($id);
        $casestadies->delete();
        return redirect('/admin')->with('success', 'Post has been deleted successfully!');
    }


    /**
     * @return CRUD User
     *
     *
     *
     */

    public function indexUser()
    {
//        $users = User::all();

        return view('/user')->with('users', User::all());
    }

    public function getUserForm() {
        return view('user/user_form');
    }

    public function getUser($id){
        $users = User::find($id);
        return view('user/user_detail', ['user' => $users]);
    }

    public function editUser($id) {
        $users = User::find($id);
        return view('user/edit_user', ['user' => $users]);
    }

    public function updateUser(Request $request, $id) {
        $users = User::find($id);
        $users->name = $request->name;
        $users->last_name = $request->last_name;
//        $users->username = $request->username;
//        $users->company = $request->company;
//        $users->imgProfile = $request->imgProfile;
//        $users->typeUser = $request->typeUser;
//        $users->email = $request->email;
//        $users->phone = $request->phone;
//        $users->mobile = $request->mobile;
//        $users->address = $request->address;
//        $users->linkedin = $request->linkedin;
//        $users->facebook = $request->facebook;
//        $users->github = $request->github;
//        $users->twitter = $request->twitter;
//        $users->country_id = $request->country_id;
//        $users->rating = $request->rating;
//        $users->biography = $request->biography;
//        $users->website = $request->website;
//        $users->password = $request->password;
        $users->save();
        return redirect('/admin')->with('success', 'Post has been updated successfully!');
    }

    public function deleteUser($id) {
        $users = User::find($id);
        $users->delete();
        return redirect('/admin')->with('success', 'Post has been deleted successfully!');
    }



    /**
     * @return CRUD ASSESSMENT
     *
     *
     *
     */

    public function indexAssessment()
    {
        $assessments = Assessment::all();

        return view('/assessment', ['assessments' => $assessments]);
    }

    public function getAssessmentForm() {
        return view('assessment/assessment_form')->with('typeassessments', Typeassessment::all() );
    }

    public function createAssessment(Request $request){
        $assessments = Assessment::create(array(
            'name' => Input::get('name'),
            'description' => Input::get('description'),
            'level' => Input::get('level'),

            'image1' => Input::get('image1'),
            'image2' => Input::get('image2'),
            'image3' => Input::get('image3'),
            'image4' => Input::get('image4'),
            'image5' => Input::get('image5'),
            'image6' => Input::get('image6'),

            'requirement1' => Input::get('requirement1'),
            'requirement2' => Input::get('requirement2'),
            'requirement3' => Input::get('requirement3'),
            'requirement4' => Input::get('requirement4'),
            'requirement5' => Input::get('requirement5'),
            'requirement6' => Input::get('requirement6'),
            'requirement7' => Input::get('requirement7'),
            'requirement8' => Input::get('requirement8'),
            'requirement9' => Input::get('requirement9'),
            'requirement10' => Input::get('requirement10'),

            'typeassess_id' => Input::get('typeassess_id'),
//            'author' => Auth::user()->id
        ));

//        $assessments->name = $request->name;
//        $assessments->level = $request->level;
//        $assessments->description = $request->description;
////        $assessments->image1 = $request->image1;
////        $assessments->image2 = $request->image2;
////        $assessments->image3 = $request->image3;
////        $assessments->image4 = $request->image4;
////        $assessments->image5 = $request->image5;
////        $assessments->image6 = $request->image6;
//
//        $assessments->requirement1 = $request->requirement1;
//        $assessments->requirement2 = $request->requirement2;
//        $assessments->requirement3 = $request->requirement3;
//        $assessments->requirement4 = $request->requirement4;
//        $assessments->requirement5 = $request->requirement5;
//        $assessments->requirement6 = $request->requirement6;
//        $assessments->requirement7 = $request->requirement7;
//        $assessments->requirement8 = $request->requirement8;
//        $assessments->requirement9 = $request->requirement9;
//        $assessments->requirement10 = $request->requirement10;
//        $assessments->typeassess_id = $request->typeassess_id;





        return redirect('/admin')->with('success', 'Post has been successfully added!');

    }

    public function getAssessment($id){
        $assessments = Assessment::find($id);
        return view('assessment/assessment_detail', ['assessment' => $assessments]);
    }



    public function editAssessment($id) {
        $assessments = Assessment::find($id);
        return view('assessment/edit_assessment', ['assessment' => $assessments])->with('typeassessments', Typeassessment::all() );
    }

    public function updateAssessment(Request $request, $id) {
        $assessments = Assessment::find($id);
        $assessments->name = $request->name;
        $assessments->description = $request->description;
        $assessments->level = $request->level;
//        $assessments->image1 = $request->image1;
//        $assessments->image2 = $request->image2;
//        $assessments->image3 = $request->image3;
//        $assessments->image4 = $request->image4;
//        $assessments->image5 = $request->image5;
//        $assessments->image6 = $request->image6;

        $assessments->requirement1 = $request->requirement1;
        $assessments->requirement2 = $request->requirement2;
        $assessments->requirement3 = $request->requirement3;
        $assessments->requirement4 = $request->requirement4;
        $assessments->requirement5 = $request->requirement5;
        $assessments->requirement6 = $request->requirement6;
        $assessments->requirement7 = $request->requirement7;
        $assessments->requirement8 = $request->requirement8;
        $assessments->requirement9 = $request->requirement9;
        $assessments->requirement10 = $request->requirement10;
        $assessments->typeassess_id = $request->typeassess_id;
        $assessments->save();
        return redirect('/admin')->with('success', 'Assessment has been updated successfully!');
    }

    public function deleteAssessment($id) {
        $post = Assessment::find($id);
        $post->delete();
        return redirect('/admin')->with('success', 'Post has been deleted successfully!');
    }


    /**
     * @return CRUD Type Assessment
     *
     *
     *
     */

    public function indexTypeassess()
    {
        $typeassesses = Typeassessment::all();

        return view('/typeassess', ['typeassesses' => $typeassesses]);
    }
    public function getTypeassessForm() {
        return view('typeassess/typeassess_form')->with('typeassessments', Typeassessment::all() );
    }

    public function createTypeassess(Request $request){
        $typeassess = Typeassessment::create(array(
            'title' => Input::get('title'),
            'type_assessment' => Input::get('type_assessment'),

//            'author' => Auth::user()->id
        ));


        return redirect('admin/typeassess')->with('success', 'Post has been successfully added!');

    }

    public function getTypeassess($id){
        $typeassesses = Typeassessment::find($id);
        return view('typeassess/typeassess_detail', ['typeassess' => $typeassesses]);
    }



    public function editTypeassess($id) {
        $typeassesses = Typeassessment::find($id);
        return view('typeassess/edit_typeassess', ['typeassess' => $typeassesses]);
    }

    public function updateTypeassess(Request $request, $id) {
        $typeassesses = Typeassessment::find($id);
        $typeassesses->type_assessment = $request->type_assessment;

        $typeassesses->save();
        return redirect('admin/typeassess')->with('success', 'Type Assessment has been updated successfully!');
    }

    public function deleteTypeassess($id) {
        $typeassess = Typeassessment::find($id);
        $typeassess->delete();
        return redirect('admin/typeassess')->with('success', 'Type Assessment has been deleted successfully!');
    }


    /**
     * @return CRUD Type Assessment
     *
     *
     *
     */

    public function indexCategory()
    {
        $categories = Category::all();

        return view('/category', ['categories' => $categories]);
    }
    public function getCategoryForm() {
        return view('category/category_form')->with('categories', Category::all() );
    }

    public function createCategory(Request $request){
        $categories = Category::create(array(
            'name' => Input::get('name'),
            'slug' => Input::get('slug'),

//            'author' => Auth::user()->id
        ));


        return redirect('admin/category')->with('success', 'Category has been successfully added!');

    }

    public function getCategory($id){
        $categories = Category::find($id);
        return view('category/category_detail', ['category' => $categories]);
    }



    public function editCategory($id) {
        $categories = Category::find($id);
        return view('category/edit_category', ['category' => $categories]);
    }

    public function updateCategory(Request $request, $id) {
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->slug = $request->slug;

        $categories->save();
        return redirect('admin/category')->with('success', 'Type Category has been updated successfully!');
    }

    public function deleteCategory($id) {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('admin/category')->with('success', 'Type Assessment has been deleted successfully!');
    }


}
