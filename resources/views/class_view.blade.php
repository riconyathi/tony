@extends('layout.main')
@section('content')

<div class="container page__container page-section">

    <div class="alert alert-soft-secondary mb-lg-32ptt">
        <div class="card-body pl-16pt">
            <div class="media flex-wrap align-items-center">
                <div class="media-body" style="min-width: 180px">
                    <strong>
                        <h4 class="text-muted">Welcome Back Assessor Name</h4>
                    </strong>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        @foreach ($classes as $class)
        <div class="col-md-4">
            <div class="card border-left-4 border-left-primary border-right-primary">
                <div class="card-body text-70 flex"
                    style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <span>
                        <h5 class="text-muted">{{$class->name}}</h5>
                    </span> <span><a href="{{route('class/view',$class->slug)}}" class="btn btn-outline-secondary">Get
                            started</a></span>
                </div>
            </div>
        </div>

        @endforeach



    </div>

</div>
@endsection