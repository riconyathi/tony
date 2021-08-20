@extends('layout.main')
@section('content')
<div class="container page__container page-section pb-0">
    <h1 class="h2 mb-0">Section</h1>

    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>

        <li class="breadcrumb-item">

            <a href="#">section</a>

        </li>

        <li class="breadcrumb-item active">

            Section one

        </li>

    </ol>
    <button class="btn btn-info float-right" data-toggle="modal" data-target="#auth"> Authenticity</button>

</div>



<div class="container page__container page-section">
    <div class="row mb-32pt">

        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">

                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                    <div class="card-header p-0 nav">
                        <div class="row no-gutters" role="tablist">
                            <div class="col-auto">
                                <a href="{{ route('section_one') }}"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center  justify-content-start">
                                    <span class="h2 mb-0 mr-3">1</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Personal</strong>
                                        <small class="card-subtitle text-50"> Details</small>
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto border-left border-right">
                                <a href="{{ route('school_details') }}"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center active justify-content-start ">
                                    <span class="h2 mb-0 mr-3">2</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">School</strong>
                                        <small class="card-subtitle text-50"> Details</small>
                                    </span>
                                </a>
                            </div>

                            <div class="col-auto border-left border-right">
                                <a href="{{ route('tertiary_details') }}"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start ">
                                    <span class="h2 mb-0 mr-3">3</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Tertiary</strong>
                                        <small class="card-subtitle text-50"> Details</small>
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto border-left border-right">
                                <a href="{{ route('employment') }}"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start ">
                                    <span class="h2 mb-0 mr-3">4</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Employment</strong>
                                        <small class="card-subtitle text-50"> History</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active text-70" id="1">

                            <form action="/learner/{{auth()->user()->id}}/school_details" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-1 pr-lg-0"></div>
                                    <div class="col-lg-10 pr-lg-0">

                                        <div class="page-section">
                                            <h4>School Information</h4>
                                            <div class="list-group list-group-form">

                                                <div class="list-group-item">
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="form-label col-form-label col-sm-3">Last School
                                                            Attended</label>
                                                        <div class="col-sm-9">
                                                            <input name="last_school" type="text" class="form-control"
                                                                placeholder="School Name "
                                                                value="{{$user->last_school_attended}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="form-label col-form-label col-sm-3">Highest
                                                            Standard Passed</label>
                                                        <div class="col-sm-9">
                                                            <input name="highest_grade" type="text" class="form-control"
                                                                placeholder="Score" value="{{$user->highest_grade}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="form-label col-form-label col-sm-3">
                                                            Subjects Passed</label>
                                                        <div class="col-sm-9">
                                                            <textarea name="subject_passed" class="form-control">
                                                                {{$user->subjects_passed}}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="list-group-item">
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="form-label col-form-label col-sm-3">
                                                            Date of Birth</label>
                                                        <div class="col-sm-9">
                                                            <input name="date_of_birth" type="date" class="form-control"
                                                                value="{{$user->date_of_birth}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list-group-item">
                                                    <div class="form-group row align-items-center mb-0">

                                                        <div class="col-sm-9">
                                                            <input type="submit" class="form-control btn btn-primary"
                                                                value="Save">
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



</div>
@endsection