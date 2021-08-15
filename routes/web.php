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



Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('about', [AboutController::class,'about'])->name('about');
Route::get('myAccount', [AccountController::class,'account'])->name('account');
Route::get('section_1', [Section_1Controller::class,'section_1'])->name('section_1');
Route::get('school_details', [SchoolDetailsController::class,'school_details'])->name('school_details');
Route::get('tertiary_details', [TertiaryDetailsController::class,'tertiary_details'])->name('tertiary_details');
Route::get('employment_history', [EmploymentController::class,'employment'])->name('employment');
Route::get('section_2', [Section_2Controller::class,'section_2'])->name('section_2');

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
Route::get('users', [UsersController::class,'users'])->name('users');

// //school 
Route::get('schools', [SchoolsController::class,'index'])->name('schools');
Route::post('school/create', [SchoolsController::class,'store']);
Route::delete('school/{id}', [SchoolsController::class,'destroy'])->name('school-delete');

// //classes
Route::get('classes', [ClassesController::class,'index'])->name('classes');
Route::post('class/create', [ClassesController::class,'store']);
Route::delete('classes', [ClassesController::class,'destroy'])->name('classe-delete');
Route::get('classes/{slug}/view', [ClassesController::class,'view'])->name('class/view');
Route::get('classes/{slug}/unit_standard', [ClassesController::class,'view'])->name('class/unit_standard');
Route::get('class/{slug}/students', [LearnerController::class,'view'])->name('class/students');
Route::post('class/{slug}/add_us', [ClassesController::class,'add_us'])->name('class/add_us');

// //unit_standards
Route::get('unit_standard', [Unit_standardController::class,'unit_standard'])->name('unit_standard');
Route::post('unit_standard/create', [Unit_standardController::class,'store']);
Route::get('unit_standard/{slug}/view', [Unit_standardController::class,'view'])->name('unit_standard/view');
Route::get('class/{slug}/us', [Unit_standardController::class,'class_us'])->name('class/us');
Route::get('unit_standard/{name}/details', [Unit_standardController::class,'details'])->name('unit_standard/details');

// learners
Route::get('learner/view', [LearnerController::class,'index'])->name('learners/view');
Route::get('class/{slug}/students', [ClassesController::class,'students'])->name('class/students');

