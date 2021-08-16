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
                                                <a href="{{ route('section_one') }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center  justify-content-start">
                                                    <span class="h2 mb-0 mr-3">1</span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="card-title">Personal</strong>
                                                        <small class="card-subtitle text-50"> Details</small>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-auto border-left border-right">
                                                <a href="{{ route('school_details') }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center  justify-content-start ">
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
                                                <a href="{{ route('employment') }}" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center active justify-content-start ">
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
                            <div class="col-lg-12 col-12 pr-lg-0">

                                <div class="page-section">
                                    <h4>Employent History</h4>
                                  <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values="[&quot;js-lists-values-lead&quot;, &quot;js-lists-values-project&quot;, &quot;js-lists-values-status&quot;, &quot;js-lists-values-budget&quot;, &quot;js-lists-values-date&quot;]">

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                       

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-project">Company Name</a>
                                        </th>

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lead">Position Held

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Duration</a>
                                        </th>

                                        

                                        <th>
                                            <a href="javascript:void(0)" class="sort desc" data-sort="js-lists-values-date">reference</a>
                                        </th>
                                      
                                    </tr>
                                </thead>
                                <tbody class="list" id="projects"><tr>

                                      

                                        <td>
                                            lorem ipsum

                                        </td>

                                        <td>
                                             lorem ipsum
                                        </td>

                                        <td>
                                             lorem ipsum
                                        </td>

                                        <td class="text-right">
                                            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  reference
</button>
                                        </td>
                                    </tr>





</tbody>
                            </table>
                        </div>

                                </div>

                            </div>
                           
                        </div>
                    </form>
                                        </div>
                                       
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>


@endsection