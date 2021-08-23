@extends('layout.main')
@section('content')
<div class="container page__container page-section pb-0">

    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>

        <li class="breadcrumb-item active">
            Schools
        </li>

    </ol>
    <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#school">Create
        School</button>
    <br><br>


    <div class="page-separator">
        <div class="page-separator__text"> </div>
    </div>
    <div>
        @if($errors->any())
        {{ implode('', $errors->all('message')) }}
        @endif
    </div>
    <div class="row card-group-row mb-lg-8pt">

        @foreach ($schools as $school)

        <div class="col-lg-4 card-group-row__col">


            <div class="card card-group-row__card">
                <div class="card-header d-flex">
                    @if (auth()->user()->role == 'super-admin')
                    <div class="dropup float-right pull-right" style="margin-top: -1rem">
                        <a href="#" class="dropdown-toggle" data-caret="false" data-toggle="dropdown">
                            <i class="material-icons">more_horiz</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form
                                onclick="return confirm('Are you sure you want to delete this School all data associated will delete this action can not be reversed?')"
                                action="/school" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="School_id" value="{{$school->id}}">
                                <button class="dropdown-item"><i class="fas fa-trash"></i></button>
                            </form>

                        </div>
                    </div>
                    @endif

                    <div class="flex row">
                        <p>{{$school->name}}</p>
                    </div>

                </div>
                <div class="card-body d-flex flex-column justify-content-center">


                    <div class="mb-8pt">
                        <p class="d-flex align-items-center mb-4pt">
                            <small class="flex lh-24pt"><strong>Classes</strong></small>
                            <small class="text-50 lh-24pt">{{$school->classes_count}}</small>
                        </p>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    @if (!$school->admin->isEmpty())

                    @foreach ($school->admin as $admin)

                    <div>

                        <p class="d-flex align-items-center mb-4pt">
                            <small class="flex lh-24pt"><strong>School Admin</strong></small>
                            <small class="text-50 lh-24pt">{{$admin->user->name}}</small>
                        </p>
                        <p class="d-flex align-items-center mb-4pt">
                            <small class="flex lh-24pt"><strong>School Admin Email</strong></small>
                            <small class="text-50 lh-24pt">{{$admin->user->email}}</small>
                        </p>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-accent" role="progressbar" style="width: 100%;"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>
                    @endforeach
                    @endif
                </div>
                <div>

                    <span><a href="{{ route('school/view',$school->slug) }}" class="btn btn-outline-secondary">Get
                            started</a></span>
                </div>
            </div>

        </div>

        @endforeach
    </div>
</div>



@endsection