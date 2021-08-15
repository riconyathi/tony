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
                               Observation
                            </li>
                        <li class="breadcrumb-item active">
                            Tools
                        </li>
                    </ol>
                </div>


<div class="container page__container page-section">
                <div class="page-separator">
                        <div class="page-separator__text">  Observation</div>
                    </div>

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-lg-32pt">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist">
                                <div class="col-auto">
                                    <a href="{{ route('section_5') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">1</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">BookLog</strong>
                                            <small class="card-subtitle text-50">Obsevation CheckList</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="{{ route('observation') }}"  class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">2</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Behavoural </strong>
                                            <small class="card-subtitle text-50">Obsevation</small>
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

                                    </div>

                                
                          
                                </div>
                            </div>

                            
                        </div>
                        	

                        </div>       
            </div> 





     <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values="[&quot;js-lists-values-name&quot;, &quot;js-lists-values-department&quot;, &quot;js-lists-values-status&quot;, &quot;js-lists-values-type&quot;, &quot;js-lists-values-phone&quot;, &quot;js-lists-values-date&quot;]">

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Assessment Creteria</a>
                                        </th>

                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-department">Required/ Model Evidence</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Description of observed </a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-type">Action required if not yet</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">Requrements Meet</a>
                                        </th>

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

                                        
                                        
                                         <td class="pr-0">
                                            
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>


                          <div class="row p-1">
                                               <div class="col-12">
                                                <label class="form-label col-form-label text-underline">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                              </label>
                                                      
                                         <div class="list-group-item">
                                           <div class="list-group-item" style="border: none !important;">
                                            <div class="form-group row align-items-center mb-0">

                                                   <div class="col-sm-5">
                                                 <label class="form-label col-form-label">
                                                   Comments From Learner
                                              </label>
                                                    <textarea type="text" class="form-control" placeholder="signature"></textarea>
                                                </div>
                                                <div class="col-sm-5">
                                                     <label class="form-label col-form-label">
                                                     Assessor's Feedback Remarks
                                              </label>
                                                    <textarea type="date" class="form-control" placeholder="Credit"></textarea>
                                                </div>
                                               
                                               <div class="col-sm-5">
                                                 <label class="form-label col-form-label">
                                                    Learner Signature
                                              </label>
                                                    <input type="text" class="form-control" placeholder="signature">
                                                </div>
                                                <div class="col-sm-5">
                                                     <label class="form-label col-form-label">
                                                      Learner Date
                                              </label>
                                                    <input type="date" class="form-control" placeholder="Credit">
                                                </div>

                                                 <div class="col-sm-5">
                                                 <label class="form-label col-form-label">
                                                    Assessor Signature
                                              </label>
                                                    <input type="text" class="form-control" placeholder="signature">
                                                </div>
                                                <div class="col-sm-5">
                                                     <label class="form-label col-form-label">
                                                      Assessor Date
                                              </label>
                                                    <input type="date" class="form-control" placeholder="Credit">
                                                </div>

                                              

                                              
                                            </div>
                                        </div>
                                    </div>






                                   </div>
                            </div>
                    </div>

</div>






@endsection