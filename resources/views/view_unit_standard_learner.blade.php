@extends('layout.main')
@section('content')
<div class="container page__container page-section pb-0">

    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">
            Unit Standard
        </li>
        <li class="breadcrumb-item active">
            View
        </li>

    </ol>

    <br><br>


    <div class="page-separator">
        <div class="page-separator__text"> </div>
    </div>

    <div class="row">
        <div class="col-lg-12  p-5">
            <div class="alert alert-soft-secondary mb-lg-32ptt">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 list-group list-group-form">
                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard</label>
                                    <div class="col-sm-12">
                                        <input name="us_name" type="text" class="form-control" value="{{$us->us_name}}">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard Title</label>
                                    <div class="col-sm-12">
                                        <input name="us_title" type="text" class="form-control"
                                            value="{{$us->us_title}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 list-group list-group-form">

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard Level</label>
                                    <div class="col-sm-12">
                                        <input name="us_level" type="text" class="form-control"
                                            value="{{$us->us_level}}">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard Credit</label>
                                    <div class="col-sm-12">
                                        <input name="us_credit" type="text" class="form-control"
                                            value="{{$us->us_credit}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="page-separator">
                                <div class="page-separator__text">Attachments</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative mr-16pt">
                                                    <div
                                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <i class="fa fa-file-pdf"
                                                            style="color: crimson; font-size: 25px;"></i>
                                                    </div>
                                                    <canvas width="48" height="48"
                                                        class="chart-canvas position-relative z-1 js-update-chart-progress-accent"
                                                        id="lateProgressChart"
                                                        data-chart-line-background-color="teal;gray"
                                                        data-chart-disable-tooltips="true"
                                                        data-chart-line-background-opacity="1"
                                                        style="display: block;"></canvas>
                                                </div>
                                                <div class="flex">
                                                    <strong>COPIES OF UNIT STANDARD</strong>
                                                </div>
                                                <div class="text-50">
                                                    <a href="{{asset('storage/us_docs/'.$us->formative)}}"
                                                        class="btn btn-sm btn-outline-secondary"><i
                                                            class="fa fa-eye"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative mr-16pt">
                                                    <div
                                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <i class="fa fa-file-pdf"
                                                            style="color: crimson; font-size: 25px;"></i>
                                                    </div>
                                                    <canvas width="48" height="48"
                                                        class="chart-canvas position-relative z-1 js-update-chart-progress"
                                                        id="inTimeProgressChart"
                                                        data-chart-line-background-color="primary;gray"
                                                        data-chart-disable-tooltips="true" style="display: block;"
                                                        data-chart-line-background-opacity="1"></canvas>
                                                </div>
                                                <div class="flex">
                                                    <strong>COPIES OF ALIGNMENT METRICS </strong>
                                                </div>
                                                <div class="text-50"><a
                                                        href="{{asset('storage/us_docs/'.$us->us_copies)}}"
                                                        class="btn btn-sm btn-outline-secondary"><i
                                                            class="fa fa-eye"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative mr-16pt">
                                                    <div
                                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <i class="fa fa-file-pdf"
                                                            style="color: crimson; font-size: 25px;"></i>
                                                    </div>
                                                    <canvas width="48" height="48"
                                                        class="chart-canvas position-relative z-1"
                                                        id="absentsProgressChart"
                                                        data-chart-line-background-color="yellow;gray"
                                                        data-chart-disable-tooltips="true"
                                                        style="display: block;"></canvas>
                                                </div>
                                                <div class="flex">
                                                    <strong>LEANER GUIDE</strong>
                                                </div>
                                                <div class="text-50"><a
                                                        href="{{asset('storage/us_docs/'.$us->us_alignment)}}"
                                                        class="btn btn-sm btn-outline-secondary"><i
                                                            class="fa fa-eye"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative mr-16pt">
                                                    <div
                                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <i class="fa fa-file-word"
                                                            style="color: rgb(0, 89, 255); font-size: 25px;"></i>
                                                    </div>
                                                    <canvas width="48" height="48"
                                                        class="chart-canvas position-relative z-1"
                                                        id="vacationProgressChart"
                                                        data-chart-line-background-color="yellow;gray"
                                                        data-chart-disable-tooltips="true"
                                                        style="display: block;"></canvas>
                                                </div>
                                                <div class="flex">
                                                    <strong>FORMATIVE</strong>
                                                </div>
                                                <div class="text-50"><a
                                                        href="{{asset('storage/us_docs/'.$us->formative)}}"
                                                        class="btn btn-sm btn-outline-success"><i
                                                            class="fa fa-download"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative mr-16pt">
                                                    <div
                                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <i class="fa fa-file-word"
                                                            style="color: rgb(0, 89, 255); font-size: 25px;"></i>
                                                    </div>
                                                    <canvas width="48" height="48"
                                                        class="chart-canvas position-relative z-1"
                                                        id="vacationProgressChart"
                                                        data-chart-line-background-color="yellow;gray"
                                                        data-chart-disable-tooltips="true"
                                                        style="display: block;"></canvas>
                                                </div>
                                                <div class="flex">
                                                    <strong>SUMMATIVE</strong>
                                                </div>
                                                <div class="text-50"><a
                                                        href="{{asset('storage/us_docs/'.$us->summative)}}"
                                                        class="btn btn-sm btn-outline-success"><i
                                                            class="fa fa-download"></i></a></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @if ($us->other != null)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative mr-16pt">
                                                    <div
                                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <i class="fa fa-file-word"
                                                            style="color: rgb(0, 89, 255); font-size: 25px;"></i>
                                                    </div>
                                                    <canvas width="48" height="48"
                                                        class="chart-canvas position-relative z-1"
                                                        id="vacationProgressChart"
                                                        data-chart-line-background-color="yellow;gray"
                                                        data-chart-disable-tooltips="true"
                                                        style="display: block;"></canvas>
                                                </div>
                                                <div class="flex">
                                                    <strong>OTHER</strong>
                                                </div>
                                                <div class="text-50"><a href="{{asset('storage/us_docs/'.$us->other)}}"
                                                        class="btn btn-sm btn-outline-success"><i
                                                            class="fa fa-download"></i></a></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                @endif

                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>

    @if (!$unit_standard)
    <div class="col-lg-12 p-5">
        <div class="alert alert-soft-secondary mb-lg-32ptt">
            <form action="/evidence/upload" method="post" enctype="multipart/form-data" class="row">
                @csrf
                <div class="col-lg-4" style="box-shadow: none;border: none !important; ">
                    <div class="card p-2">
                        <input type="hidden" class="form-control" name="us_id" value="{{$us->id}}">
                        <div class="" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-12" style="font-size: 10px !important">
                                    ATTACH FORMATIVE ASSESSEMENT</label>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" name="formative">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="border: none !important;">
                    <div class="card p-2">
                        <div class="form-group row align-items-center mb-0">
                            <label class="form-label col-form-label col-sm-12" style="font-size: 10px !important">
                                ATTACH SUMMATIVE ASSESSMENT</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="summative">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="border: none !important;">
                    <div class="card p-2">
                        <div class="form-group row align-items-center mb-0">
                            <label class="form-label col-form-label col-sm-12" style="font-size: 10px !important">
                                ATTACH ADDITIONAL ASSESSSMENT
                            </label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="other">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="border: none !important;">
                    <div class="form-group row align-items-center mb-0">
                        <div class="col-md-3"></div>
                        <div class="col-sm-6">
                            <input type="submit" class="form-control btn btn-outline-secondary" value="Save">
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>

</div>

@else
<div class="row">

    <div class="col-lg-12 p-5">
        <div class="row" style="box-shadow: none;border: none !important; ">

            <div class="col-lg-4" style="border: none !important;">
                <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-3">
                        Formative</label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative mr-16pt">
                                        <div
                                            class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                            <i class="fa fa-file-word"
                                                style="color: rgb(0, 89, 255); font-size: 25px;"></i>
                                        </div>
                                        <canvas width="48" height="48" class="chart-canvas position-relative z-1"
                                            id="vacationProgressChart" data-chart-line-background-color="yellow;gray"
                                            data-chart-disable-tooltips="true" style="display: block;"></canvas>
                                    </div>
                                    <div class="flex">
                                        <strong>FORMATIVE</strong>
                                    </div>
                                    <div class="text-50">
                                        <a href="{{asset('storage/evidence/'.$unit_standard->formative)}}"
                                            class="btn btn-sm btn-outline-success"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="border: none !important;">
                <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-3">
                        Summative</label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative mr-16pt">
                                        <div
                                            class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                            <i class="fa fa-file-word"
                                                style="color: rgb(0, 89, 255); font-size: 25px;"></i>
                                        </div>
                                        <canvas width="48" height="48" class="chart-canvas position-relative z-1"
                                            id="vacationProgressChart" data-chart-line-background-color="yellow;gray"
                                            data-chart-disable-tooltips="true" style="display: block;"></canvas>
                                    </div>
                                    <div class="flex">
                                        <strong>Summative</strong>
                                    </div>
                                    <div class="text-50">
                                        <a href="{{asset('storage/evidence/'.$unit_standard->summative)}}"
                                            class="btn btn-sm btn-outline-success"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($unit_standard->other != null)
            <div class=" col-lg-4" style="border: none !important;">
                <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-3">
                        Other
                    </label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative mr-16pt">
                                        <div
                                            class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                            <i class="fa fa-file-word"
                                                style="color: rgb(0, 89, 255); font-size: 25px;"></i>
                                        </div>
                                        <canvas width="48" height="48" class="chart-canvas position-relative z-1"
                                            id="vacationProgressChart" data-chart-line-background-color="yellow;gray"
                                            data-chart-disable-tooltips="true" style="display: block;"></canvas>
                                    </div>
                                    <div class="flex">
                                        <strong>Other</strong>
                                    </div>
                                    <div class="text-50">
                                        <a href="{{asset('storage/evidence/'.$unit_standard->other)}}"
                                            class="btn btn-sm btn-outline-success">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            @endif
            
        </div>
    </div>
</div>
@endif
</div>
@endsection