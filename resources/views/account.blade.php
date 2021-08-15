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

                                        Edit Account

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
                                                <label class="form-label col-form-label col-sm-3">ID/Passport number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  placeholder="Your id ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">First name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Your first name ...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">Last name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  placeholder="Your last name ...">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                Date of Birth</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                        Gender</label>
                                        
                                         
                                                    <select class="custom-control custom-select form-control col-sm-9">
                                                        <option value="1">Male</option>
                                                        <option value="29">Female</option>
                                                        <option value="3">Other</option>                                          
                                                    </select>
                                    </div>
                                </div>

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