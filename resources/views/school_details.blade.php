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
                <a href="#" class="btn btn-outline-secondary" data-toggle='modal' data-target="#create_student">Add
                    Student</a>
            </div>
            <div class="col-auto border-left">
                <a href="#" class="btn btn-outline-secondary" data-toggle='modal' data-target="#add_moderator">Add
                    Moderator</a>
            </div>
            <div class="col-auto border-left">
                <a href="#" class="btn btn-outline-secondary" data-toggle='modal' data-target="#add_assessor">Add
                    Assessor</a>
            </div>

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
                        <small class="text-50">{{$school->admin[0]->user->name}}</small>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="mb-0"><strong>Admin Name</strong></p>
                        <small class="text-50">{{$school->admin[0]->user->surname}}</small>
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
                                        data-sort="js-lists-values-employee-name">Class Name</a>
                                </th>

                                <th style="width: 37px;">Status</th>


                            </tr>
                        </thead>
                        <tbody class="list" id="toggle">
                            @foreach ($school->classes as $class)


                            <tr>


                                <td>

                                    <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">

                                        <div class="media-body">

                                            <div class="d-flex flex-column">
                                                <p class="mb-0"><strong
                                                        class="js-lists-values-employee-name">{{$class->name}}</strong>
                                                </p>
                                                <small
                                                    class="js-lists-values-employee-email text-50">paolo.zieme@gmail.com</small>
                                            </div>

                                        </div>
                                    </div>

                                </td>

                                <td>

                                    <a href="" class="chip chip-outline-secondary">User</a>

                                </td>


                            </tr>
                            @endforeach

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
                                        <p class="mb-0"><strong
                                                class="js-lists-values-employee-name">{{$school->classes[0]->assessor->name}}</strong>
                                        </p>
                                        <small
                                            class="js-lists-values-employee-email text-50">{{$school->classes[0]->assessor->identinty}}</small>
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
                                        <p class="mb-0"><strong
                                                class="js-lists-values-employee-name">{{$school->classes[0]->moderator->name}}</strong>
                                        </p>
                                        <small
                                            class="js-lists-values-employee-email text-50">{{$school->classes[0]->moderator->identinty}}</small>
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


{{-- create class --}}

<div class="modal fade" id="classes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"
        style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
        <div class="modal-content">
            <form method="post" action="/class/create">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Create Class </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                        <input name="school_id" type="hidden" class="form-control" value="{{$school->id}}">
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Class Name</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control" placeholder="Name ">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Assessor
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder=" Assessor Name">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Moderator</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Moderrator Name">
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


{{-- Add Assessor --}}

<div class="modal fade" id="add_assessor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"
        style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
        <div class="modal-content">
            <form method="post" action="/class/add_assessor">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Assessor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                        <input name="school_id" type="hidden" class="form-control" value="{{$school->id}}">
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Class Name</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control form-custom" name="class_id">
                                        <option value="">Select Class</option>
                                        @foreach ($school->classes as $class)
                                        <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Assessor</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control form-custom" name="assessor_id">
                                        <option value="">Select Class</option>
                                        @foreach ($users as $user)
                                        @if($user->role == 'assessor'){
                                        <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}
                                            {{$user->identinty}}
                                        </option>
                                        }
                                        @endif
                                        @endforeach
                                    </select>
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


{{-- Add Moderator --}}

<div class="modal fade" id="add_moderator" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"
        style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
        <div class="modal-content">
            <form method="post" action="/class/add_moderator">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Moderator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                        <input name="school_id" type="hidden" class="form-control" value="{{$school->id}}">
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Class Name</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control form-custom" name="class_id">
                                        <option value="">Select Class</option>
                                        @foreach ($school->classes as $class)
                                        <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Assessor</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control form-custom" name="moderator_id">
                                        <option value="">Select Class</option>
                                        @foreach ($users as $user)
                                        @if($user->role == 'moderator'){
                                        <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}
                                            {{$user->identinty}}
                                        </option>
                                        }
                                        @endif
                                        @endforeach
                                    </select>
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

{{-- Add Student --}}

<div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"
        style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
        <div class="modal-content">
            <form method="post" action="/class/add_student">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                        <input name="school_id" type="hidden" class="form-control" value="{{$school->id}}">
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Class Name</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control form-custom" name="class_id">
                                        <option value="">Select Class</option>
                                        @foreach ($school->classes as $class)
                                        <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Assessor</label>
                                <div class="col-sm-9">
                                    <select type="text" class="form-control form-custom" name="moderator_id">
                                        <option value="">Select Class</option>
                                        @foreach ($users as $user)
                                        @if($user->role == 'moderator'){
                                        <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}
                                            {{$user->identinty}}
                                        </option>
                                        }
                                        @endif
                                        @endforeach
                                    </select>
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



{{-- create student --}}

<div class="modal fade" id="create_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"
        style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
        <div class="modal-content">
            <form action="/school/{{$school->slug}}/add_learner" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Create </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">

                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Student Name</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control" placeholder="John Peter">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Student Surname</label>
                                <div class="col-sm-9">
                                    <input name="surname" type="text" class="form-control" placeholder="Doe">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Student ID/Passport
                                </label>
                                <div class="col-sm-9">
                                    <input name="identinty" type="text" class="form-control"
                                        placeholder="00000000000000/CN44444">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item" style="border: none !important;">
                            <div class="form-group row align-items-center mb-0">
                                <label class="form-label col-form-label col-sm-3">
                                    Email</label>
                                <div class="col-sm-9">
                                    <input name="email" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- create student end --}}