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

use App\Http\Controllers\JobController;

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Auth::routes();

// Page Controller

Route::get('/', 'PageController@index');


// Job Controller

Route::resource('/jobs', 'JobController');
//skill controller

Route::resource('skill', 'SkillController');


// Freelancer Controller

Route::get('/userdashboard', 'FreelancerController@index');

Route::post('/profile/store', 'FreelancerController@storeProfile');

Route::post('/profile/edit', 'FreelancerController@updateProfile');

Route::post('/profile/uploadphoto', 'FreelancerController@uploadPhoto');

Route::post('/profile/updatephoto', 'FreelancerController@updatePhoto');

Route::get('/profile/{name}', 'FreelancerController@profile');

Route::get('/my-jobs', 'FreelancerController@myJobs');


// Skill Controller

Route::post('/profile/skills/store', 'SkillController@storeSkill');

Route::post('/profile/skills/edit', 'SkillController@editSkill');

// Education Controller

Route::post('/profile/education/store', 'EducationController@storeEducation');

Route::post('/profile/education/update', 'EducationController@updateEducation');

Route::post('/profile/education/delete', 'EducationController@deleteEducation');

// Client Controller

Route::get('/dashboard', 'ClientController@dashboard');

Route::get('/shortlist/{id}', 'ClientController@shortlist');

Route::get('/proposal/{id}/{user_id}', 'ClientController@proposal');

Route::get('/proposal/{id}/{user}/hire', 'ClientController@hire');

Route::get('/proposal/{id}/{user}/reject', 'ClientController@reject');

// Work Controller

Route::post('/profile/work/store', 'WorkController@storeWork');

Route::post('/profile/work/update', 'WorkController@updateWork');

Route::post('/profile/work/delete', 'WorkController@deleteWork');

// Applicant Controller

Route::get('/job/application/{id}', 'ApplicantController@show');

Route::post('/job/application/{id}/store', 'ApplicantController@store');

Route::get('/applicant/profile/{id}', 'ApplicantController@view');

// Admin Controller

Route::get('/panel/freelancer', 'AdminController@showFreelancers');

Route::post('/panel/users/ban', 'AdminController@banFreelancer');

Route::post('/panel/freelancer/unban', 'AdminController@unbanFreelancer');

Route::get('/panel/clients', 'AdminController@showClients');

Route::post('/panel/client/unban', 'AdminController@unbanClient');

Route::get('/panel/jobs', 'AdminController@showJobs');

Route::get('/panel/jobs/delete/{id}', 'AdminController@deleteJob');

Route::get('/panel/categories', 'AdminController@showCategories');

Route::post('/panel/categories/add', 'AdminController@addCategories');

//User Profile
Route::get('/user/{id}', 'UserController@show')->name('user.profile.show');

// Skill

Route::get('/skills', 'SkillController@index')->name('skill.index');
Route::get('/skill/create', 'SkillController@create')->name('skill.create');
Route::post('/skill/store', 'SkillController@store')->name('skill.store');
Route::get('/skill/{id}/edit', 'SkillController@edit')->name('skill.edit');
Route::put('/skill/{id}/update', 'SkillController@update')->name('skill.update');
Route::delete('/skill/{id}/destroy', 'SkillController@destroy')->name('skill.destroy');

// Education
Route::get('/education', 'EducationController@index')->name('education.index');
Route::get('/education/create', 'EducationController@create')->name('education.create');
Route::post('/education/store', 'EducationController@store')->name('education.store');
Route::get('/education/{id}/edit', 'EducationController@edit')->name('education.edit');
Route::put('/education/{id}/update', 'EducationController@update')->name('education.update');
Route::delete('/education/{id}/destroy', 'EducationController@destroy')->name('education.destroy');

// Course
Route::get('/courses', 'CourseController@index')->name('course.index');
Route::get('/course/create', 'CourseController@create')->name('course.create');
Route::post('/course/store', 'CourseController@store')->name('course.store');
Route::get('/course/{id}/edit', 'CourseController@edit')->name('course.edit');
Route::put('/course/{id}/update', 'CourseController@update')->name('course.update');
Route::delete('/course/{id}/destroy', 'CourseController@destroy')->name('course.destroy');

// Project
Route::get('/projects', 'ProjectController@index')->name('project.index');
Route::get('/project/create', 'ProjectController@create')->name('project.create');
Route::post('/project/store', 'ProjectController@store')->name('project.store');
Route::get('/project/{id}/edit', 'ProjectController@edit')->name('project.edit');
Route::put('/project/{id}/update', 'ProjectController@update')->name('project.update');
Route::delete('/project/{id}/destroy', 'ProjectController@destroy')->name('project.destroy');

// Work Experience
Route::get('/experiences', 'ExperienceController@index')->name('experience.index');
Route::get('/experience/create', 'ExperienceController@create')->name('experience.create');
Route::post('/experience/store', 'ExperienceController@store')->name('experience.store');
Route::get('/experience/{id}/edit', 'ExperienceController@edit')->name('experience.edit');
Route::put('/experience/{id}/update', 'ExperienceController@update')->name('experience.update');
Route::delete('/experience/{id}/destroy', 'ExperienceController@destroy')->name('experience.destroy');


Route::get('/user/{id}', 'UserController@show')->name('user.profile.show');
Route::post('/user/{id}/add-skillset', 'UserController@addSkillset')->name('user.profile.add_skillset');
Route::post('/user/{id}/update-payment-option', 'UserController@updatePaymentOption')->name('user.profile.update_payment_option');
Route::post('/user/{id}/purchase-course', 'UserController@purchaseCourse')->name('user.profile.purchase_course');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
