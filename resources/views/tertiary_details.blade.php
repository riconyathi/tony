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
    <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#add_tertiary">Add Tertiary Instituation</button>
    <br><br>
    
</div>



<div class="container page__container page-section">
    <div class="row mb-32pt">
        
        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">
                
                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                    <div class="card-header p-0 nav">
                        <div class="row no-gutters" role="tablist">
                            <div class="col-auto">
                                <a href="{{ route('section_one') }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center  justify-content-start">
                                    <span class="h2 mb-0 mr-3">1</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Personal</strong>
                                        <small class="card-subtitle text-50"> Details</small>
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto border-left border-right">
                                <a href="{{ route('school_details',auth()->user()->id) }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center  justify-content-start ">
                                    <span class="h2 mb-0 mr-3">2</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">School</strong>
                                        <small class="card-subtitle text-50"> Details</small>
                                    </span>
                                </a>
                            </div>
                            
                            <div class="col-auto border-left border-right">
                                <a href="{{ route('tertiary_details',auth()->user()->id) }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center active justify-content-start ">
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
                            
                            
                                <div class="row">
                                    <div class="col-lg-1 pr-lg-0"></div>
                                    <div class="col-lg-12 col-12 pr-lg-0">
                                        
                                        <div class="page-section">
                                            <h4>Tertiary Information</h4>
                                            <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values="[&quot;js-lists-values-lead&quot;, &quot;js-lists-values-project&quot;, &quot;js-lists-values-status&quot;, &quot;js-lists-values-budget&quot;, &quot;js-lists-values-date&quot;]">
                                                
                                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                                    <thead>
                                                        <tr>
                                                           
                                                            <th style="width: 150px;">
                                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-project">Institution</a>
                                                            </th>
                                                            
                                                            <th>
                                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lead">Course
                                                                    
                                                                    <th style="width: 48px;">
                                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Duration</a>
                                                                    </th>
                                                                    
                                                                    <th style="width: 48px;">
                                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-budget">Modules</a>
                                                                    </th>
                                                                    
                                                                    <th style="width: 48px;">
                                                                        <a href="javascript:void(0)" class="sort desc" data-sort="js-lists-values-date">Year Obtained</a>
                                                                    </th>
                                                                    <th style="width: 24px;">
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list" id="projects">
                                                                @foreach ($datas as $data)
                                                                
                                                                <tr>  
                                                                <td>
                                                                    {{$data->institution}}                                                                    
                                                                </td>
                                                                
                                                                <td>
                                                                    {{$data->institution}}
                                                                </td>
                                                                
                                                                <td>
                                                                    {{$data->institution}}
                                                                </td>
                                                                
                                                                <td>
                                                                    {{$data->institution}}
                                                                </td>
                                                                
                                                                <td>
                                                                    {{$data->institution}}
                                                                </td>
                                                                
                                                            </tr>
   
                                                            @endforeach 
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <div class="page-separator">
            <div class="page-separator__text">Attachments</div>
        </div>
        
        <div class="row mb-lg-8pt">
    
    @foreach ($datas as $data)
        
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="position-relative mr-16pt">
                                <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                    <i class="fa fa-file-pdf" style="color: crimson; font-size: 25px;"></i>
                                </div>
                                <canvas width="48" height="48" class="chart-canvas position-relative z-1 js-update-chart-progress" id="inTimeProgressChart" data-chart-line-background-color="primary;gray" data-chart-disable-tooltips="true" style="display: block;" data-chart-line-background-opacity="1"></canvas>
                            </div>
                            <div class="flex">
                                <strong>document one </strong>
                            </div>
                            <div class="text-50"></div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

            
        </div>
        
        
    </div>
    @endsection