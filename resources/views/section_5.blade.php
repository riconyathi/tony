@extends('layout.main')
@section('content')

<style type="text/css">
    .file {
        padding-bottom: 2rem !important;
        border: 1px dashed crimson !important;
    }
</style>
<div class="container page__container page-section pb-0">

    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">
            Section
        </li>
        <li class="breadcrumb-item active">
            5
        </li>
    </ol>
    @if (auth()->user()->role != 'learner' )
    <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#logbook">Add</button>
    <br><br>
    @endif
</div>


<div class="container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Logbook</div>
    </div>

    <div class="card dashboard-area-tabs p-relative o-hidden mb-lg-32pt">
        <div class="card-header p-0 nav">
            <div class="row no-gutters" role="tablist">
                <div class="col-auto">
                    <a href="{{ route('section_5') }}"
                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                        <span class="h2 mb-0 mr-3">1</span>
                        <span class="flex d-flex flex-column">
                            <strong class="card-title">BookLog</strong>
                            <small class="card-subtitle text-50">Obsevation CheckList</small>
                        </span>
                    </a>
                </div>
                <div class="col-auto border-left border-right">
                    <a href="{{ route('observation') }}"
                        class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                        <span class="h2 mb-0 mr-3">2</span>
                        <span class="flex d-flex flex-column">
                            <strong class="card-title">Behavoural </strong>
                            <small class="card-subtitle text-50">Obsevation</small>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 col-12">
                <div class="border rounded d-flex align-items-center p-16pt border-left-primary">
                    <div class="card-body text-70">
                        <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                            data-lists-sort-desc="true"
                            data-lists-values="[&quot;js-lists-values-name&quot;, &quot;js-lists-values-department&quot;, &quot;js-lists-values-status&quot;, &quot;js-lists-values-type&quot;, &quot;js-lists-values-phone&quot;, &quot;js-lists-values-date&quot;]">

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>


                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)" class="sort"
                                                data-sort="js-lists-values-department">Date Done</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort"
                                                data-sort="js-lists-values-status">Activity </a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort"
                                                data-sort="js-lists-values-type">Start Time</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort"
                                                data-sort="js-lists-values-phone">Finish Time</a>
                                        </th>


                                        <th style="width: 24px;"> total Minutes</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="employees">
                                    @foreach ($logbook as $log)
                                    @php
                                    $startTime = Carbon\Carbon::parse($log->date_done.''.$log->start_time);
                                    $endTime = Carbon\Carbon::parse($log->date_done.''.$log->end_time);
                                    $totalDuration = $endTime->diffForHumans($startTime);
                                    @endphp
                                    <tr>


                                        <td>
                                            {{$log->activity}}
                                        </td>

                                        <td>
                                            {{$log->date_done}}
                                        </td>

                                        <td>
                                            <small class="js-lists-values-type text-50">{{$log->start_time}}</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">{{$log->end_time}}</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">{{$totalDuration}}</small>
                                        </td>

                                        <td class="pr-0">

                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>




                    </div>
                </div>


            </div>


        </div>





    </div>

</div>

</div>






@endsection


{{-- add booklog --}}

<div class="modal fade" id="logbook" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"
        style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
        <div class="modal-content">
            <form action="/section_5" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Logbook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">


                        <input name="user_id" type="hidden" class="form-control" value="1">

                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Date Done
                                </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date_done">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Activity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="activity">
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Start Time</label>
                                <div class="col-sm-9">
                                    <input type="time" class="form-control" name="start_time">
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    End Time </label>
                                <div class="col-sm-9">
                                    <input type="time" class="form-control" name="end_time">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>