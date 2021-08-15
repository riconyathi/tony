@extends('layout.main')
@section('content')

                <div class="container page__container page-section">
                    <div class="alert alert-soft-secondary mb-lg-32pt">
                        <div class="card-body pl-16pt">
                            <div class="media flex-wrap align-items-center">
                               <div class="media-body" style="min-width: 180px">
                                     <strong><h4 class="text-muted">ELETRONIC PORTIFOLIO OF EVIDENCE (EPOE)</h4></strong>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-primary border-right-primary">
                                 <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">SECTION 1</h5></span> <span><a href="{{ route('section_1') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-success border-right-success">
                                 <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">SECTION 2</h5></span> <span><a href="{{ route('section_2') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-warning border-right-warning">
                                  <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">SECTION 3</h5></span> <span><a href="{{ route('section_3') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-danger border-right-danger">
                                  <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">SECTION 4</h5></span> <span><a href="{{ route('section_4') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="card border-left-4 border-left-accent border-right-accent  ">
                                <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">SECTION 5</h5></span> <span><a href="{{ route('section_5') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                    </div>



                      <div class="alert alert-soft-secondary mb-lg-32ptt">
                        <div class="card-body pl-16pt">
                            <div class="media flex-wrap align-items-center">
                               <div class="media-body" style="min-width: 180px">
                                     <strong><h4 class="text-muted">Welcome Back Assessor Name</h4></strong>
                                </div>
                               
                            </div>
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-primary border-right-primary">
                                 <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">Classes</h5></span> <span><a href="{{ route('classes') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-success border-right-success">
                                 <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">Profile</h5></span> <span><a href="{{ route('section_2') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>


                         <div class="col-md-4">
                            <div class="card border-left-4 border-left-success border-right-success">
                                 <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">Users</h5></span> <span><a href="{{ route('users') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-success border-right-success">
                                 <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">Learners</h5></span> <span><a href="{{ route('learners/view') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-left-4 border-left-success border-right-success">
                                 <div class="card-body text-70 flex" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <span> <h5 class="text-muted">Schools</h5></span> <span><a href="{{ route('schools') }}" class="btn btn-outline-secondary">Get started</a></span>
                                </div>
                            </div>
                        </div>
                     
                       
                    </div>

                </div>
@endsection