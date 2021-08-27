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

    <div class="page-separator">
        <div class="page-separator__text"> Evidence</div>
    </div>
    @if ($unit_standard)

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
                                                id="vacationProgressChart"
                                                data-chart-line-background-color="yellow;gray"
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
                                                id="vacationProgressChart"
                                                data-chart-line-background-color="yellow;gray"
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
                                                id="vacationProgressChart"
                                                data-chart-line-background-color="yellow;gray"
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
            </div>
        </div>
    </div>
    @else
    <div class="page-separator">
        <div class="page-separator__text"> No Evidence by Learner</div>
    </div>
    @endif
</div>
@endsection