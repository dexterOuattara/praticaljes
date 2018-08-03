<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test01', function () {
    return App\Store::find(1)->candidate_stores;
});


Route::get('/test1', function () {
    return App\Profile::find(1)->user;
});


Route::get('/test', function () {
    return App\User::find(1)->skills;
});
Route::get('/test2', function () {
    return App\Skill::find(1)->users;
});




Route::get('/test3', function () {
    return App\Candidate::find(1)->skills;
});

Route::get('/test4', function () {
    return App\Skill::find(1)->candidates;
});

Route::get('/test5', function () {
    return App\Assessment::find(1)->users;
});

Route::get('/test6', function () {
    return App\User::find(1)->assessments;
});

Route::get('/test7', function () {
    return App\Candidate::find(1)->profilecandidates;
});

Route::get('/test8', function () {
    return App\Profilecandidate::find(1)->candidates;
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'PostController@getIndex');

Route::get('/casestudie', 'CasestudyController@getIndex')->name('pages.casestudie');

Route::get('/inside', 'PostController@getInside')->name('pages.inside');



Route::get('/articledetail/{id}', 'PostController@getDetail')->name('pages.articledetail');
Route::get('/casestudiedetails/{id}', 'CasestudyController@getDetail')->name('pages.casestudiedetails');







Route::get('casestudiedetails', function () {
    return View::make('pages.casestudiedetails');
});

Route::get('articledetail', function () {
    return View::make('pages.articledetail');
});

Route::get('article', function () {
    return View::make('pages.article');
});

Route::get('video', function () {
    return View::make('pages.video');
});

Route::get('videodetail', function () {
    return View::make('pages.videodetail');
});

Route::get('ressourcesdetails', function () {
    return View::make('pages.ressourcesdetails');
});

Route::get('howiswork', function () {
    return View::make('pages.howiswork');
});





Route::get('freetrial', function () {
    return View::make('pages.freetrial');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//admin route for our multi-auth system

Route::prefix('admin')->group(function () {

    //API

    Route::get('/api/alluser', function () {
        return App\User::all();
    });


    Route::get('/api/alladmin', function () {
        return App\Admin::all();
    });

    Route::get('/api/allassessment', function () {
        return App\Assessment::all();
    });

    Route::get('/api/allcandidate', function () {
        return App\Candidate::all();
    });

    Route::get('/api/allcasestudy', function () {
        return App\Casestudy::all();
    });

    Route::get('/api/allpost', function () {
        return App\Post::all();
    });

    Route::get('/api/alltypecontract', function () {
        return App\Typecontract::all();
    });

    Route::get('/api/allskill', function () {
        return App\Skill::all();
    });

    Route::get('/api/allstore', function () {
        return App\Store::all();
    });
    //END API


    Route::get('/home', 'AdminController@indexHome')->name('admin.home');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/case', 'AdminController@indexCase')->name('admin.case');
    Route::get('/user', 'AdminController@indexUser')->name('admin.user');

    Route::get('/category', 'AdminController@indexCategory')->name('admin.category');
    Route::get('/assessment', 'AdminController@indexAssessment')->name('admin.assessment');
    Route::get('/typeassess', 'AdminController@indexTypeassess')->name('admin.typeassess');

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    /*
 *post setting
 */

    Route::get('/author/post', 'AdminController@getPostForm')->name('post.form');
    Route::post('/author/post', 'AdminController@createPost')->name('post.form');

    Route::get('/author/post/detail/{id}', 'AdminController@getPost')->name('post.detail');
    Route::get('/author/post/edit/{id}', 'AdminController@editPost')->name('post.edit');
    Route::post('/author/post/edit/{id}', 'AdminController@updatePost')->name('post.update');
    Route::get('/author/post/delete/{id}', 'AdminController@deletePost')->name('post.delete');

    /*
 *case stududy setting
 */
    Route::get('/author/casestudy', 'AdminController@getCaseForm')->name('casestudy.form');
    Route::post('/author/casestudy', 'AdminController@createCase')->name('casestudy.form');

    Route::get('/author/casestudy/detail/{id}', 'AdminController@getCase')->name('casestudy.detail');
    Route::get('/author/casestudy/edit/{id}', 'AdminController@editCase')->name('casestudy.edit');
    Route::post('/author/casestudy/edit/{id}', 'AdminController@updateCase')->name('casestudy.update');
    Route::get('/author/casestudy/delete/{id}', 'AdminController@deleteCase')->name('casestudy.delete');


    /*
*User setting
*/
    Route::get('/author/user', 'AdminController@getUserForm')->name('user.form');
    Route::post('/author/user', 'AdminController@createUser')->name('user.form');

    Route::get('/author/user/detail/{id}', 'AdminController@getUser')->name('user.detail');
    Route::get('/author/user/edit/{id}', 'AdminController@editUser')->name('user.edit');
    Route::post('/author/user/edit/{id}', 'AdminController@updateUser')->name('user.update');
    Route::get('/author/user/delete/{id}', 'AdminController@deleteUser')->name('user.delete');

    /*
*Assessment setting
*/
    Route::get('/author/assessment', 'AdminController@getAssessmentForm')->name('assessment.form');
    Route::post('/author/assessment', 'AdminController@createAssessment')->name('assessment.form');

    Route::get('/author/assessment/detail/{id}', 'AdminController@getAssessment')->name('assessment.detail');
    Route::get('/author/assessment/edit/{id}', 'AdminController@editAssessment')->name('assessment.edit');
    Route::post('/author/assessment/edit/{id}', 'AdminController@updateAssessment')->name('assessment.update');
    Route::get('/author/assessment/delete/{id}', 'AdminController@deleteAssessment')->name('assessment.delete');

    /*
*Type Assessment setting
*/
    Route::get('/author/typeassess', 'AdminController@getTypeassessForm')->name('typeassess.form');
    Route::post('/author/typeassess', 'AdminController@createTypeassess')->name('typeassess.form');

    Route::get('/author/typeassess/detail/{id}', 'AdminController@getTypeassess')->name('typeassess.detail');
    Route::get('/author/typeassess/edit/{id}', 'AdminController@editTypeassess')->name('typeassess.edit');
    Route::post('/author/typeassess/edit/{id}', 'AdminController@updateTypeassess')->name('typeassess.update');
    Route::get('/author/typeassess/delete/{id}', 'AdminController@deleteTypeassess')->name('typeassess.delete');


    /*
*Type category setting
*/
    Route::get('/author/category', 'AdminController@getCategoryForm')->name('category.form');
    Route::post('/author/category', 'AdminController@createCategory')->name('category.form');

    Route::get('/author/category/detail/{id}', 'AdminController@getCategory')->name('category.detail');
    Route::get('/author/category/edit/{id}', 'AdminController@editCategory')->name('category.edit');
    Route::post('/author/category/edit/{id}', 'AdminController@updateCategory')->name('category.update');
    Route::get('/author/category/delete/{id}', 'AdminController@deleteCategory')->name('category.delete');
});


Route::group(['middleware'=>'auth'], function () {

/*
|--------------------------------------------------------------------------
| Recruter Dashboard Pages
|--------------------------------------------------------------------------
|
| Just for the recruter dashboard
|
*/


    Route::get('profile', 'RecruiterController@profile');
    Route::post('profile', 'RecruiterController@update_avatar');
    Route::post('photo', 'RecruiterController@update_photo');

    Route::get('contact', 'RecruiterController@contact');
    Route::get('mycontact', 'RecruiterController@mycontact');
    Route::get('contact_skill/{id}', 'RecruiterController@contact_skill');
    Route::get('contact/{id}', 'RecruiterController@getContact');

    Route::get('createprojet', 'RecruiterController@createprojet');
    Route::get('chooseframelang/getstates/{id}','RecruiterController@getStates');

    Route::get('dashboard', 'RecruiterController@dashboard');
    Route::get('listassessment/{id}','RecruiterController@listassessment');


    Route::get('chooseframelang/{id}', 'RecruiterController@getAssessment');
    Route::post('chooseframelang', 'RecruiterController@createassessment')->name('chooseframelang.form');

    Route::get('/brand', 'ImportController@getImport')->name('import');
    Route::post('/import_parse', 'ImportController@parseImport')->name('import_parse');
    Route::post('/import_process', 'ImportController@processImport')->name('import_process');





    Route::get('/candidate', function()
    {
        return View::make('pagesrecruter.candidate');
    });

    Route::get('/overview', function()
    {
        return View::make('pagesrecruter.overview');
    });

    Route::get('/measure', function()
    {
        return View::make('pagesrecruter.measure');
    });

    Route::get('/review', function()
    {
        return View::make('pagesrecruter.review');
    });

    Route::get('chooseframelang', function()
    {
        return View::make('pagesrecruter.chooseframelang');
    });
    Route::get('/createproject', function()
    {
        return View::make('pagesrecruter.createproject');
    });



    Route::get('invitation', function()
    {
        return View::make('pagesrecruter.invitation');
    });

    Route::get('congratulation', function()
    {
        return View::make('pagesrecruter.payment');
    });



    Route::get('project', function()
    {
        return View::make('pagesrecruter.project');
    });



    Route::get('requirement', function()
    {
        return View::make('pagesrecruter.requirement');
    });


});

Route::group(['prefix' => 'candidate'], function () {
  Route::get('/login', 'CandidateAuth\LoginController@showLoginForm')->name('candidate.login');
  Route::post('/login', 'CandidateAuth\LoginController@login');
  Route::post('/logout', 'CandidateAuth\LoginController@logout')->name('candidate.logout');

  Route::get('/register', 'CandidateAuth\RegisterController@showRegistrationForm')->name('candidate.register');
  Route::post('/register', 'CandidateAuth\RegisterController@register');

  Route::post('/password/email', 'CandidateAuth\ForgotPasswordController@sendResetLinkEmail')->name('candidate.password.request');
  Route::post('/password/reset', 'CandidateAuth\ResetPasswordController@reset')->name('candidate.password.email');
  Route::get('/password/reset', 'CandidateAuth\ForgotPasswordController@showLinkRequestForm')->name('candidate.password.reset');
  Route::get('/password/reset/{token}', 'CandidateAuth\ResetPasswordController@showResetForm');


    Route::get('/calltoapply', 'CandidateController@calltoapply')->name('candidate.calltoapply');

    Route::get('/myresume', 'CandidateController@myresume');




    Route::get('candidateskillform', 'CandidateController@candidateskillform')->name('candidate.candidateskillform');
    Route::post('candidateskillform', 'CandidateController@createCandidateskillform')->name('candidate.candidateskillform');
    Route::get('candidateskilldetail/{id}', 'CandidateController@candidateskilldetail');


    Route::get('candidatescontractform', 'CandidateController@candidatescontractform')->name('candidate.candidatescontractform');
    Route::post('candidatescontractform', 'CandidateController@createCandidatescontractform')->name('candidate.candidatescontractform');


    Route::get('candidatesrewardform', 'CandidateController@candidatesrewardform')->name('candidate.candidatesrewardform');
    Route::post('candidatesrewardform', 'CandidateController@createCandidatesrewardform')->name('candidate.candidatesrewardform');


    Route::post('pendingproject_detail', 'CandidateController@candidate_store')->name('pendingproject_detail.form');


    Route::post('/myresume', 'CandidateController@update_myresume')->name('candidate.update_myresume');
    Route::post('/', 'CandidateController@update_mysocial')->name('candidate.update_mysocial');
    Route::post('/photocandidate', 'CandidateController@update_photocandidate')->name('candidate.update_photocandidate');


    Route::get('/pendingproject', 'CandidateController@pendingproject')->name('candidate.pendingproject');

    Route::get('detailsproject/{id}', 'CandidateController@detailsproject');


    Route::get('pendingproject_detail/{id}', 'CandidateController@getPendingproject');

    Route::post('pendingproject_detail', 'CandidateController@candidate_store')->name('pendingproject_detail.form');


    Route::get('/detailsproject', 'CandidateController@detailsproject')->name('candidate.detailsproject');

    Route::get('profile/{id}', 'RecruiterController@getProfile');


});
