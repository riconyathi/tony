@extends('layout.main')
@section('content')
 <div class="container page__container page-section pb-0">
                    <h1 class="h2 mb-0">Section</h1>

                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>

                        <li class="breadcrumb-item">

                            <a href="#">section</a>

                        </li>

                        <li class="breadcrumb-item active">

                            Section one

                        </li>

                    </ol>
                    <button class="btn btn-info float-right" data-toggle="modal" data-target="#auth"> Authenticity</button>

                </div>



              <div class="container page__container page-section">
                <div class="row mb-32pt">
                       
                        <div class="col-lg-12 d-flex align-items-center">
                            <div class="flex" style="max-width: 100%">

                                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                                    <div class="card-header p-0 nav">
                                        <div class="row no-gutters" role="tablist">
                                            <div class="col-auto">
                                                <a href="#1"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center active justify-content-start">
                                                    <span class="h2 mb-0 mr-3">1</span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="card-title">Personal</strong>
                                                        <small class="card-subtitle text-50"> Details</small>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-auto border-left border-right">
                                                <a href="{{ route('school_details') }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start ">
                                                    <span class="h2 mb-0 mr-3">2</span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="card-title">School</strong>
                                                        <small class="card-subtitle text-50"> Details</small>
                                                    </span>
                                                </a>
                                            </div>

                                               <div class="col-auto border-left border-right">
                                                <a href="{{ route('tertiary_details') }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start ">
                                                    <span class="h2 mb-0 mr-3">3</span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="card-title">Tertiary</strong>
                                                        <small class="card-subtitle text-50"> Details</small>
                                                    </span>
                                                </a>
                                            </div>

                                             <div class="col-auto border-left border-right">
                                                <a href="{{ route('employment') }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start ">
                                                    <span class="h2 mb-0 mr-3">4</span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="card-title">Employment</strong>
                                                        <small class="card-subtitle text-50"> History</small>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active text-70" id="1">
                                        	
                                        	 <form action="/">
                        <div class="row">
                        	 <div class="col-lg-1 pr-lg-0"></div>
                            <div class="col-lg-10 pr-lg-0">

                                <div class="page-section">
                                    <h4>Personal Information</h4>
                                   

                                  <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                        Race</label>
                                        
                                         
                                                    <select class="custom-control custom-select form-control col-sm-9">
                                                        <option value="1">Black</option>
                                                        <option value="29">Indian</option>
                                                        <option value="29">White</option>
                                                        <option value="3">Other</option>                                          
                                                    </select>
                                    </div>
                                </div>


                                  <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                CitizenShip</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="citizenship">
                                                </div>
                                            </div>
                                  </div>

                                     <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                        Marital Status</label>
                                        
                                         
                                                    <select class="custom-control custom-select form-control col-sm-9">
                                                        <option value="1">Married</option>
                                                        <option value="29">Single</option>
                                                        <option value="29">Divorced</option>
                                                        <option value="3">widow</option>
                                                         <option value="3">Widower</option>
                                                          <option value="3">Other</option>                                          
                                                    </select>
                                    </div>
                                </div>

                                 <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                Residential Address</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control"> </textarea>
                                                </div>
                                            </div>
                                  </div>
                                    <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                Work Address</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control"> </textarea>
                                                </div>
                                            </div>
                                  </div>

                                   <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">Home Tel</label>
                                                <div class="col-sm-9">
                                                    <input type="tel" class="form-control" value="077887552" placeholder="home tel">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                         <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">Cell Number</label>
                                                <div class="col-sm-9">
                                                    <input type="tel" class="form-control" value="077887552" placeholder="cell number">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">Email address</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" value="alexander.watson@fake-mail.com" placeholder="Your email address ...">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                           
                        </div>
                    </form>
                                        </div>
                                        <div class="tab-pane  text-70" id="2">2</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
@endsection