<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Section_1Controller;
use App\Http\Controllers\SchoolDetailsController;
use App\Http\Controllers\TertiaryDetailsController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\Section_2Controller;
use App\Http\Controllers\Unit_standardController;
use App\Http\Controllers\Section_3Controller;
use App\Http\Controllers\Assessment_evidenceController;
use App\Http\Controllers\Section_4Controller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Section_5Controller;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ViewClassController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\LearnerController;

Route::get('login', [UsersController::class,'login'])->name('login');
Route::post('auth', [UsersController::class,'authenticate']);
Route::get('logout', [UsersController::class,'logout'])->name('logout');


Route::get('about', [AboutController::class,'about'])->name('about');
Route::get('myAccount', [AccountController::class,'account'])->name('account');

Route::middleware(['auth'])->group(function () {
Route::get('/', [IndexController::class,'index'])->name('index');




Route::get('section_3', [Section_3Controller::class,'section_3'])->name('section_3');
Route::get('assessment_evidence', [Assessment_evidenceController::class,'assessment_evidence'])->name('assessment_evidence');
Route::get('section_4', [Section_4Controller::class,'section_4'])->name('section_4');
Route::get('feedback', [FeedbackController::class,'feedback'])->name('feedback');
Route::get('assessment_evaluation', [EvaluationController::class,'assessment_evaluation'])->name('assessment_evaluation');
Route::get('review', [ReviewController::class,'review'])->name('review');
Route::get('section_5', [Section_5Controller::class,'section_5'])->name('section_5');
Route::get('observation', [ObservationController::class,'observation'])->name('observation');

Route::get('view_class', [ViewClassController::class,'view_class'])->name('view_class');
Route::get('students', [StudentsController::class,'students'])->name('students');
Route::get('password', [PasswordController::class,'password'])->name('password');

//users
Route::get('users', [UsersController::class,'users'])->name('users');
Route::post('user/create', [UsersController::class,'create']);

// //school 
Route::get('schools', [SchoolsController::class,'index'])->name('schools');
Route::post('school/create', [SchoolsController::class,'store']);
Route::delete('school/{id}', [SchoolsController::class,'destroy'])->name('school-delete');


// //classes
Route::get('school/{slug}/view', [ClassesController::class,'index'])->name('school/view');
Route::post('class/create', [ClassesController::class,'store']);
Route::delete('classes', [ClassesController::class,'destroy'])->name('classe-delete');
Route::get('classes/{slug}/view', [ClassesController::class,'class_details'])->name('class/view');
Route::get('classes/{slug}/unit_standard', [ClassesController::class,'view'])->name('class/unit_standard');
Route::get('class/{slug}/students', [LearnerController::class,'view'])->name('class/students');
Route::post('class/{slug}/add_us', [ClassesController::class,'add_us'])->name('class/add_us');
Route::post('class/add_assessor', [ClassesController::class,'add_assessor']);
Route::post('class/add_moderator', [ClassesController::class,'add_moderator']);

// //unit_standards
Route::get('unit_standard', [Unit_standardController::class,'index'])->name('unit_standard');
Route::post('unit_standard/create', [Unit_standardController::class,'store']);
Route::get('unit_standard/{slug}/view', [Unit_standardController::class,'view'])->name('unit_standard/view');
Route::get('class/{slug}/us', [Unit_standardController::class,'class_us'])->name('class/us');
Route::get('unit_standard/{name}/details', [Unit_standardController::class,'details'])->name('unit_standard/details');

// learners
Route::post('school/{slug}/add_learner', [LearnerController::class,'store']);
Route::post('learner/{slug}/add_to_class', [LearnerController::class,'add_to_class']);
Route::get('learner/view', [LearnerController::class,'index'])->name('learners/view');
Route::get('class/{slug}/students', [ClassesController::class,'students'])->name('class/students');
Route::get('section_one', [LearnerController::class,'section_one'])->name('section_one');
Route::get('section_2', [Unit_standardController::class,'section_2'])->name('section_2');
Route::post('learner/{id}/update', [LearnerController::class,'update']);
Route::post('learner/{id}/section_2', [LearnerController::class,'updateSection_2']);
Route::get('school_details', [LearnerController::class,'school_details'])->name('school_details');
Route::post('learner/{id}/school_details', [LearnerController::class,'school_details_update']);
Route::get('tertiary_details', [LearnerController::class,'tertiary_details'])->name('tertiary_details');
Route::post('learner/{id}/tertiary_details', [LearnerController::class,'update_tertiary_details']);
Route::get('employment_history', [LearnerController::class,'employment'])->name('employment');
Route::post('learner/{id}/employment_history', [LearnerController::class,'update_employment_history']);
});