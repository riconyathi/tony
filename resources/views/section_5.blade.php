@extends('layout.main')
@section('content')
<style type="text/css">
    .file{
            padding-bottom: 2rem !important;
        border: 1px dashed crimson !important;
    }
</style>
<div class="container page__container page-section pb-0">
                   
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">
                                Section
                            </li>
                        <li class="breadcrumb-item active">
                           5
                        </li>
                    </ol>
                </div>


<div class="container page__container page-section">
                <div class="page-separator">
                        <div class="page-separator__text">Section 5 </div>
                    </div>

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-lg-32pt">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist">
                                <div class="col-auto">
                                    <a href="{{ route('section_5') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">1</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">BookLog</strong>
                                            <small class="card-subtitle text-50">Obsevation CheckList</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="{{ route('observation') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">2</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Behavoural </strong>
                                            <small class="card-subtitle text-50">Obsevation</small>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        	<div class="col-md-12 col-12">
                            <div class="border rounded d-flex align-items-center p-16pt border-left-primary">
                                <div class="card-body text-70">
                                  <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values="[&quot;js-lists-values-name&quot;, &quot;js-lists-values-department&quot;, &quot;js-lists-values-status&quot;, &quot;js-lists-values-type&quot;, &quot;js-lists-values-phone&quot;, &quot;js-lists-values-date&quot;]">

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">NOF ID</a>
                                        </th>

                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-department">Date Done</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Activity </a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-type">Start Time</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">Finish Time</a>
                                        </th>

                                       
                                        <th style="width: 24px;"> total Minites</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="employees">
                                    <tr>
                                        <td>527217217
                                    
                                        </td>
                                        lorem ipsum
                                        <td>
                                            lorem ipsum
                                        </td>

                                        <td>
                                           lorem ipsum
                                        </td>

                                        <td>
                                            <small class="js-lists-values-type text-50">Temporary</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">239-721-3649</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">19/02/2019</small>
                                        </td>
                                        
                                         <td class="pr-0">
                                            
                                        </td>
                                    </tr>


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






@endsection