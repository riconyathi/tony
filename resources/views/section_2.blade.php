@extends('layout.main')
@section('content')

<div class="border-bottom-2 py-32pt position-relative">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                               
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                   
                                    <li class="breadcrumb-item active">
                                      Unit Standards
                                    </li>
                                </ol>
                            </div>                      
                      </div>
                    </div>
                </div>



<div class="container page__container page__container page-section">
                    <div class="page-separator">
                        <div class="page-separator__text">Unit Standards</div>
                    </div>

                    <div class="posts-cards mb-24pt row">

                        <div class="card posts-card col-lg-5 col-12 mr-4">
                            <div class="posts-card__content d-flex align-items-center flex-wrap">
                                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                                    <div class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center">
                                        <i class="material-icons text-muted-light mr-1">folder_open</i> 
                                    </div>
                                </div>
                                <div class="posts-card__title flex d-flex flex-column">
                                    <h5 class="card-title m-0"><a href="#" class="headings-color">
                                    Unit Standard Selection 1</a></h5>
                                    <small class="text-50">12/12/2007</small>
                                </div>
                               
                                <div class="dropdown ml-auto">
                                    <a href="{{ route('unit_standard') }}" class="text-muted btn btn-outline-secondary btn-rounded btn-sm"> view</a>
                                  
                                </div>
                            </div>
                        </div>
                          <div class="card posts-card col-lg-5 col-12">
                            <div class="posts-card__content d-flex align-items-center flex-wrap">
                                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                                    <div class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center">
                                        <i class="material-icons text-muted-light mr-1">folder_open</i> 
                                    </div>
                                </div>
                                <div class="posts-card__title flex d-flex flex-column">
                                    <h5 class="card-title m-0"><a href="#" class="headings-color">
                                    Unit Standard Selection 2</a></h5>
                                    <small class="text-50">12/12/2007</small>
                                </div>
                               
                                <div class="dropdown ml-auto">
                                    <a href="#" class="text-muted btn btn-outline-secondary btn-rounded btn-sm"> view</a>
                                  
                                </div>
                            </div>
                        </div>
                     

                    </div>

                </div>
@endsection