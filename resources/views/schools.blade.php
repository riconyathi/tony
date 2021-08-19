@extends('layout.main')
@section('content')
<div class="container page__container page-section pb-0">
    
    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        
        <li class="breadcrumb-item active">
            Schools
        </li>
        
    </ol>
    <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#school">Create School</button>
    <br><br>
    
</div>
<div class="page-separator">
    <div class="page-separator__text"> </div>
</div>
<div class="row card-group-row mb-lg-8pt">

@foreach ($schools as $school)

<div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card">
                                    <div class="card-header d-flex">
                                        <div class="flex row">
                                            <p>{{$school->name}}</p>
                                        </div>
                                        
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">

                                        <div class="mb-8pt">
                                            <p class="d-flex align-items-center mb-4pt">
                                                <small class="flex lh-24pt"><strong>Social Media API</strong></small>
                                                <small class="text-50 lh-24pt">due in 12 days</small>
                                            </p>
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div>
                                            <p class="d-flex align-items-center mb-4pt">
                                                <small class="flex lh-24pt"><strong>Advertising Platform</strong></small>
                                                <small class="text-50 lh-24pt">due in 30 days</small>
                                            </p>
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-accent" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                    <div >
                                          
                                         <span><a href="{{ route('school/view',$school->slug) }}" class="btn btn-outline-secondary">Get started</a></span>
                                   </div>
                                </div>

                            </div>
 
@endforeach
</div>
</div>



@endsection