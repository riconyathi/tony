@extends('layout.main')
@section('content')
<div class="border-bottom-2 py-32pt position-relative">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
            <div class="mb-24pt mb-sm-0 mr-sm-24pt">

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">
                        Classes
                    </li>
                </ol>
            </div>

        </div>
        <div class="row">

            <div class="col-auto border-left">
                <a href="#" class="btn btn-outline-secondary" data-toggle='modal' data-target="#classes">Create
                    Class</a>
            </div>
        </div>
    </div>
</div>

<div class="row m-3">
    {{-- 1 --}}
    <div class="col-lg-12 card-group-row__col">

        <div class="card card-group-row__card">
            <div class="card-header d-flex">
                <div class="flex d-flex align-items-center">

                    <div class="d-flex flex-column">
                        <p class="mb-0"><strong>School Name</strong></p>
                        <small class="text-50">{{$school->name}}</small>
                    </div>
                </div>

            </div>


        </div>
        <div class="card card-group-row__card">
            <div class="card-header d-flex">
                <div class="flex d-flex align-items-center">

                    <div class="d-flex flex-column">
                        <p class="mb-0"><strong>Admin Name</strong></p>
                        <small class="text-50">{{$school->name}}</small>
                    </div>
                </div>

            </div>


        </div>


    </div>
    {{-- 2 --}}
    <div class="col-lg-6 card-group-row__col">

        <div class="card card-group-row__card">
            <div class="card-header d-flex">
                <div class="flex row">
                    <div class="col-auto d-flex flex-column">

                        <p class="mb-0"><strong>Classes</strong></p>
                    </div>
                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                        <thead>
                            <tr>



                                <th>
                                    <a href="javascript:void(0)" class="sort asc"
                                        data-sort="js-lists-values-employee-name">Employee</a>
                                </th>

                                <th style="width: 37px;">Status</th>

                                <th style="width: 120px;">
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-activity">Activity</a>
                                </th>
                                <th style="width: 51px;">
                                    <a href="javascript:void(0)" class="sort"
                                        data-sort="js-lists-values-earnings">Earnings</a>
                                </th>
                                <th style="width: 24px;" class="pl-0"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="toggle">
                            <tr>


                                <td>

                                    <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                        <div class="avatar avatar-32pt mr-8pt">

                                            <span class="avatar-title rounded-circle">CS</span>

                                        </div>
                                        <div class="media-body">

                                            <div class="d-flex flex-column">
                                                <p class="mb-0"><strong class="js-lists-values-employee-name">Connie
                                                        Smith</strong></p>
                                                <small
                                                    class="js-lists-values-employee-email text-50">paolo.zieme@gmail.com</small>
                                            </div>

                                        </div>
                                    </div>

                                </td>

                                <td>

                                    <a href="" class="chip chip-outline-secondary">User</a>

                                </td>

                                <td class="text-50 js-lists-values-activity small">1 week ago</td>
                                <td class="js-lists-values-earnings small">$1,943</td>

                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>
    <div class="col-lg-6 card-group-row__col">

        <div class="card card-group-row__card">
            <div class="card-header d-flex">
                <div class="flex row">
                    <div class="col-auto d-flex flex-column">

                        <p class="mb-0"><strong>Assessors</strong></p>
                    </div>

                </div>


            </div>
            <table class="table mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>

                        <th>
                            <a href="javascript:void(0)" class="sort asc"
                                data-sort="js-lists-values-employee-name">Employee</a>
                        </th>

                        <th style="width: 37px;">Status</th>

                        <th style="width: 120px;">
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-activity">Activity</a>
                        </th>
                        <th style="width: 51px;">
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-earnings">Earnings</a>
                        </th>
                        <th style="width: 24px;" class="pl-0"></th>
                    </tr>
                </thead>
                <tbody class="list" id="toggle">
                    <tr>

                        <td>

                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                <div class="avatar avatar-32pt mr-8pt">

                                    <span class="avatar-title rounded-circle">CS</span>

                                </div>
                                <div class="media-body">

                                    <div class="d-flex flex-column">
                                        <p class="mb-0"><strong class="js-lists-values-employee-name">Connie
                                                Smith</strong></p>
                                        <small
                                            class="js-lists-values-employee-email text-50">paolo.zieme@gmail.com</small>
                                    </div>

                                </div>
                            </div>

                        </td>

                        <td>

                            <a href="" class="chip chip-outline-secondary">User</a>

                        </td>

                        <td class="text-50 js-lists-values-activity small">1 week ago</td>
                        <td class="js-lists-values-earnings small">$1,943</td>

                    </tr>

                </tbody>
            </table>

        </div>


    </div>
    {{-- 3 --}}
    <div class="col-lg-6 card-group-row__col">

        <div class="card card-group-row__card">
            <div class="card-header d-flex">
                <div class="flex row">
                    <div class="col-auto d-flex flex-column">

                        <p class="mb-0"><strong>Studenst</strong></p>
                    </div>

                </div>


            </div>
            <table class="table mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>

                        <th>
                            <a href="javascript:void(0)" class="sort asc"
                                data-sort="js-lists-values-employee-name">Employee</a>
                        </th>

                        <th style="width: 37px;">Status</th>

                        <th style="width: 120px;">
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-activity">Activity</a>
                        </th>
                        <th style="width: 51px;">
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-earnings">Earnings</a>
                        </th>
                        <th style="width: 24px;" class="pl-0"></th>
                    </tr>
                </thead>
                <tbody class="list" id="toggle">
                    <tr>

                        <td>

                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                <div class="avatar avatar-32pt mr-8pt">

                                    <span class="avatar-title rounded-circle">CS</span>

                                </div>
                                <div class="media-body">

                                    <div class="d-flex flex-column">
                                        <p class="mb-0"><strong class="js-lists-values-employee-name">Connie
                                                Smith</strong></p>
                                        <small
                                            class="js-lists-values-employee-email text-50">paolo.zieme@gmail.com</small>
                                    </div>

                                </div>
                            </div>

                        </td>

                        <td>

                            <a href="" class="chip chip-outline-secondary">User</a>

                        </td>

                        <td class="text-50 js-lists-values-activity small">1 week ago</td>
                        <td class="js-lists-values-earnings small">$1,943</td>

                    </tr>

                </tbody>
            </table>

        </div>


    </div>
    <div class="col-lg-6 card-group-row__col">

        <div class="card card-group-row__card">
            <div class="card-header d-flex">
                <div class="flex row">
                    <div class="col-auto d-flex flex-column">

                        <p class="mb-0"><strong>Moderators</strong></p>
                    </div>

                </div>


            </div>
            <table class="table mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>

                        <th>
                            <a href="javascript:void(0)" class="sort asc"
                                data-sort="js-lists-values-employee-name">Employee</a>
                        </th>

                        <th style="width: 37px;">Status</th>

                        <th style="width: 120px;">
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-activity">Activity</a>
                        </th>
                        <th style="width: 51px;">
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-earnings">Earnings</a>
                        </th>
                        <th style="width: 24px;" class="pl-0"></th>
                    </tr>
                </thead>
                <tbody class="list" id="toggle">
                    <tr>

                        <td>

                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                <div class="avatar avatar-32pt mr-8pt">

                                    <span class="avatar-title rounded-circle">CS</span>

                                </div>
                                <div class="media-body">

                                    <div class="d-flex flex-column">
                                        <p class="mb-0"><strong class="js-lists-values-employee-name">Connie
                                                Smith</strong></p>
                                        <small
                                            class="js-lists-values-employee-email text-50">paolo.zieme@gmail.com</small>
                                    </div>

                                </div>
                            </div>

                        </td>

                        <td>

                            <a href="" class="chip chip-outline-secondary">User</a>

                        </td>

                        <td class="text-50 js-lists-values-activity small">1 week ago</td>
                        <td class="js-lists-values-earnings small">$1,943</td>

                    </tr>

                </tbody>
            </table>

        </div>


    </div>
</div>

@endsection