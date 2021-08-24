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

    <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#edit_unit_standard">
        Edit</button>
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
                                        <input name="us_name" type="text" class="form-control"
                                            value="{{$unit_standard->us_name}}">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard
                                        Title</label>
                                    <div class="col-sm-12">
                                        <input name="us_title" type="text" class="form-control"
                                            value="{{$unit_standard->us_title}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 list-group list-group-form">

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard
                                        Level</label>
                                    <div class="col-sm-12">
                                        <input name="us_level" type="text" class="form-control"
                                            value="{{$unit_standard->us_level}}">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard
                                        Credit</label>
                                    <div class="col-sm-12">
                                        <input name="us_credit" type="text" class="form-control"
                                            value="{{$unit_standard->us_credit}}">
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
                                                <div class="text-50"><a
                                                        href="{{asset('storage/us_docs/'.$unit_standard->us_copies)}}"
                                                        class=" btn-outline-secondary" target="_blank"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
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
                                                        href="{{asset('storage/us_docs/'.$unit_standard->us_alignment)}}"
                                                        class=" btn-outline-secondary" target="_blank"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
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
                                                        href="{{asset('storage/us_docs/'.$unit_standard->learner_guide)}}"
                                                        class=" btn-outline-secondary" target="_blank"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
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
                                                        href="{{asset('storage/us_docs/'.$unit_standard->formative)}}"
                                                        class=" btn-outline-secondary" target="_blank"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
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
                                                        href="{{asset('storage/us_docs/'.$unit_standard->summative)}}"
                                                        class=" btn-outline-secondary" target="_blank"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($unit_standard->other)


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
                                                <div class="text-50"><a
                                                        href="{{asset('storage/us_docs/'.$unit_standard->other)}}"
                                                        class=" btn-outline-secondary" target="_blank"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
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

</div>
</div>
@endsection


{{-- Edit unit Standard --}}

<div class="modal fade" id="edit_unit_standard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"
        style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">UNIT STANDARD </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/unit_standard/edit" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" class="form-control" value="{{$unit_standard->id}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 list-group list-group-form">
                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard</label>
                                    <div class="col-sm-12">
                                        <input name="us_name" type="text" class="form-control"
                                            value="{{$unit_standard->us_name}}">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard Title</label>
                                    <div class="col-sm-12">
                                        <input name="us_title" type="text" class="form-control"
                                            value="{{$unit_standard->us_title}}">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard Level</label>
                                    <div class="col-sm-12">
                                        <input name="us_level" type="text" class="form-control"
                                            value="{{$unit_standard->us_level}}">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Unit Standard Credit</label>
                                    <div class="col-sm-12">
                                        <input name="us_credit" type="text" class="form-control"
                                            value="{{$unit_standard->us_credit}}">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Copies of unit standard </label>
                                    <div class="col-sm-12">
                                        <input name="us_copies" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 list-group list-group-form">

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Copies of Alignment Metrics
                                    </label>
                                    <div class="col-sm-12">
                                        <input name="us_alignment" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Leaner Guide</label>
                                    <div class="col-sm-12">
                                        <input name="learner_guide" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Formative</label>
                                    <div class="col-sm-12">
                                        <input name="formative" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Summative</label>
                                    <div class="col-sm-12">
                                        <input name="summative" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-12">Other</label>
                                    <div class="col-sm-12">
                                        <input name="other" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>