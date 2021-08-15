@extends('layout.main')
@section('content')

<div class="border-bottom-2 py-32pt position-relative">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                               
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                   
                                    <li class="breadcrumb-item active">
                                     Section 4
                                    </li>
                                </ol>
                            </div>                      
                      </div>
                    </div>
                </div>



<div class="container page__container page__container page-section">
                    <div class="page-separator">
                        <div class="page-separator__text">Section 4</div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-4">
                                <a href="{{ route('feedback') }}" class="border rounded d-flex align-items-center p-16pt" >
                                    <div class="avatar avatar-sm mr-8pt">
                                        <span class="avatar-title rounded bg-secondary">1</span>
                                    </div>
                                    <small class="ml-4pt flex">
                                        <span class="d-flex align-items-center">
                                            <span class="flex d-flex flex-column">
                                           <strong class="text-100">Feedback Form</strong>                                              
                                            </span>
                                            <i class="material-icons icon-16pt text-50 ml-4pt">folder_open</i>
                                        </span>
                                    </small>
                                </a>
                               
                            </div>



                            <div class="col-lg-4">
                                <a href="{{ route('assessment_evaluation') }}" class="border rounded d-flex align-items-center p-16pt" >
                                    <div class="avatar avatar-sm mr-8pt">
                                        <span class="avatar-title rounded bg-secondary">2</span>
                                    </div>
                                    <small class="ml-4pt flex">
                                        <span class="d-flex align-items-center">
                                            <span class="flex d-flex flex-column">
                                           <strong class="text-100">Learner Assessment Evaluation</strong>                                              
                                            </span>
                                            <i class="material-icons icon-16pt text-50 ml-4pt">folder_open</i>
                                        </span>
                                    </small>
                                </a>
                               
                            </div>

                            <div class="col-lg-4">
                                <a href="{{ route('review') }}" class="border rounded d-flex align-items-center p-16pt" >
                                    <div class="avatar avatar-sm mr-8pt">
                                        <span class="avatar-title rounded bg-secondary">3</span>
                                    </div>
                                    <small class="ml-4pt flex">
                                        <span class="d-flex align-items-center">
                                            <span class="flex d-flex flex-column">
                                           <strong class="text-100">Assessor Review and Ethics Form</strong>                                              
                                            </span>
                                            <i class="material-icons icon-16pt text-50 ml-4pt">folder_open</i>
                                        </span>
                                    </small>
                                </a>
                               
                            </div>
                    </div>


                </div>
@endsection