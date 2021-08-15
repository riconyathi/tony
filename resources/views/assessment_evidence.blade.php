@extends('layout.main')
@section('content')
<style type="text/css">
    .file{
            padding-bottom: 2rem !important;
        border: 1px dashed #f1f3f6 !important;
    }
</style>
<div class="container page__container page-section pb-0">
                    <h1 class="h2 mb-0"></h1>
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">
                                Assessment
                            </li>
                        <li class="breadcrumb-item active">
                            Evidence
                        </li>
                    </ol>
                    <button class="btn btn-outline-secondary float-right" data-toggle="modal" data-target="#assessment">add </button>
                </div>


<div class="container page__container page-section">
                <div class="page-separator">
                        <div class="page-separator__text  text-muted">Learner Assessment Evidence</div>
                    </div>

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-lg-32pt">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist">
                                <div class="col-auto">
                                    <a href="{{ route('section_3') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">3</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Assessment</strong>
                                            <small class="card-subtitle text-50">Instruments</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="{{ route('assessment_evidence') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
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



                                  <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values="[&quot;js-lists-values-name&quot;, &quot;js-lists-values-department&quot;, &quot;js-lists-values-status&quot;, &quot;js-lists-values-type&quot;, &quot;js-lists-values-phone&quot;, &quot;js-lists-values-date&quot;]">

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Unit Standard</a>
                                        </th>

                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-department">Unit Standard Title</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Unit Standard Level </a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-type">Unit Standard Credit</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">Caategory</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort desc" data-sort="js-lists-values-date">View Files</a>
                                        </th>
                                           <th style="width: 48px;">
                                           Learner Name
                                        </th>
                                        <th style="width: 24px;"> Remove</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="employees">
                                    <tr>
                                        <td>527217217
                                    
                                        </td>
                                     
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
                                            <small class="js-lists-values-date text-50"><a href="#" class="text-50 text-danger"><i class="fa fa-eye"></i></a></small>
                                        </td>
                                         <td>
                                            nkanyiso 
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="text-50 text-danger"><i class="fa fa-times"></i></a>
                                        </td>
                                         <td class="pr-0">
                                            
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer p-8pt">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                                        <span>Prev</span>
                                    </a>
                                </li>
                                <li class="page-item dropdown">
                                    <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                                        <span>1</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item active">1</a>
                                        <a href="#" class="dropdown-item">2</a>
                                        <a href="#" class="dropdown-item">3</a>
                                        <a href="#" class="dropdown-item">4</a>
                                        <a href="#" class="dropdown-item">5</a>
                                    </div>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span>Next</span>
                                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </div>


                        </div>
                        	

                        </div>

                       

                     
                   
</div> 

                    </div>

</div>






@endsection


