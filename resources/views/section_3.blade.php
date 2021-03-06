@extends('layout.main')
@section('content')
<style type="text/css">
    .file{
            padding-bottom: 2rem !important;
        border: 1px dashed #f1f3f6 !important;
    }
</style>
<div class="container page__container page-section pb-0">
                   
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">
                                Assessment
                            </li>
                        <li class="breadcrumb-item active">
                            Tools
                        </li>
                    </ol>
                </div>


<div class="container page__container page-section">
                <div class="page-separator">
                        <div class="page-separator__text text-muted">Learner Assessment Tools</div>
                    </div>

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-lg-32pt">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist">
                                <div class="col-auto">
                                    <a href="{{ route('section_3') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">3</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Assessment</strong>
                                            <small class="card-subtitle text-50">Instruments</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="{{ route('assessment_evidence') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">2</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">learner</strong>
                                            <small class="card-subtitle text-50">Assessment Evidence</small>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row m-5">
                            <div class="col-md-1 col-12"></div>
                        	<div class="col-md-12 col-12">
                            <div class="border rounded d-flex align-items-center p-16pt border-left-primary">
                                <div class="card-body text-70">
                                 

                                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">

                                        <div class="list-group-item" style="border: none !important;" >
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                Learner ID</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  placeholder="ID ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                    Learner Name
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                              Unit Standard Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="list-group-item" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                Unit Standard Id</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="list-group-item" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                              Unit Standard Level</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Level">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="list-group-item" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                              Unit Standard Credit</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Credit">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                         <div class="list-group-item" style="border: none !important;border-top: 1px solid #e5e5e5 !important">
                                            <div class="form-group row align-items-center mb-0">
                                                
                                                <div class="col-sm-6">
                                                    <label class="form-label col-form-label">
                                              Learner Guide</label>
                                                    <input type="file" class="form-control file" placeholder="Title">
                                                </div>


                                                 <div class="col-sm-6">
                                                    <label class="form-label col-form-label">
                                              Attach Summative Assessment</label>
                                                    <input type="file" class="form-control file" placeholder="Title">
                                                </div>

                                                 <div class="col-sm-6">
                                                    <label class="form-label col-form-label">
                                              Attach Formative Assessement </label>
                                                    <input type="file" class="form-control file" placeholder="Title">
                                                </div>


                                                 <div class="col-sm-6">
                                                    <label class="form-label col-form-label">
                                              Attach Additional Assesssment Instrument</label>
                                                    <input type="file" class="form-control file" placeholder="Title">
                                                </div>
                                            </div>
                                        </div>


                                     

                                    </div>

                                
                          
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex align-items-center p-3">
                            <div class="flex" style="max-width: 100%">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-sm ">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true" class="material-icons">chevron_left</span>
                                                <span>Prev</span>
                                            </a>
                                        </li>

                                        <li class="page-item active">
                                            <a class="page-link" href="#" aria-label="1">
                                                <span>1</span>
                                            </a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="2">
                                                <span>2</span>
                                            </a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span>Next</span>
                                                <span aria-hidden="true" class="material-icons">chevron_right</span>
                                            </a>
                                        </li>

                                    </ul>
                                </nav>

                            </div>
                        </div>
                        </div>
                        	

                        </div>

                       

                     
                   
</div> 

                    </div>

</div>






@endsection