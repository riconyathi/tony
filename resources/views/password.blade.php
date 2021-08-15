@extends('layout.main')
@section('content')

<div class="border-bottom-2 py-32pt position-relative ">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>

                                    <li class="breadcrumb-item">

                                        <a href="#">Account</a>

                                    </li>

                                    <li class="breadcrumb-item active">

                                        Change Password

                                    </li>

                                </ol>

                            </div>

                         

                        </div>

                    </div>
                </div>



                <div class="container page__container">
                    <form action="/">
                        <div class="row">
                        	 <div class="col-lg-1 pr-lg-0"></div>
                            <div class="col-lg-10 pr-lg-0">

                                <div class="page-section">
                                   
                                    <div class="list-group list-group-form">

                                    	<div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">Old Password</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  placeholder="Old Password ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                               New Password</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="New Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">Confirm New Password</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  placeholder="Confirm New Password">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-9"></label>
                                                <div class="col-sm-3">
                                                   <button type="submit" class="btn btn-outline-secondary">Save changes</button>
                                                   
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>

                                  
                                </div>

                            </div>
                           
                        </div>
                    </form>
                </div>


@endsection