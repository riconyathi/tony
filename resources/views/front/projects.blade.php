@extends('front.main')
@section('content')
<div class="home-banner text-white mb-4">
    <div class="container page__container">
        <h1 class="display-4 bold" data-aos="fade-up" data-aos-duration="800">
            Projects </h1>
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">               
        </div>
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header card-header-tabs-basic nav border-top" role="tablist">
                    <a href="#overview" class="" data-toggle="tab" role="tab" aria-controls="overview" aria-selected="false">Projects </a>
                    
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="overview">
                        <div class="card-body" id="course_content">
                            <p>Currently involved in a number of ICT projects  </p>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    @endsection