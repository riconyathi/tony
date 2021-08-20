@extends('layout.main')
@section('content')
<div class="border-bottom-2 py-32pt position-relative">
   <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
      <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
         <div class="mb-24pt mb-sm-0 mr-sm-24pt">

            <ol class="breadcrumb p-0 m-0">
               <li class="breadcrumb-item"><a href="/">Home</a></li>
               <li class="breadcrumb-item">
                  Class
               </li>
               <li class="breadcrumb-item active">
                  View
               </li>
            </ol>
            <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#add_us">Add
               Us</button>
            <br><br>
            <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal"
               data-target="#add_student">Add Student</button>
            <br><br>
         </div>

      </div>

   </div>
</div>

<div class="row m-3">
   <div class="col-lg-6 card-group-row__col">
      <div class="card card-group-row__card">
         <div class="card-header d-flex align-items-center">
            <strong class="flex">Class Details</strong>

         </div>
         <div class="progress rounded-0" style="height: 4px;">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="40"
               aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         <div class="card-body">
            <ul class="list-unstyled list-todo" id="todo">
               <li>
                  <div class="custom-control custom-checkbox">

                     {{$class->name}}
                  </div>
               </li>
               <li>
                  <div class="custom-control custom-checkbox">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title">{{$class->name}}</h4>
                           <p class="card-subtitle mb-3">Titles can go in body as well</p>

                           <p class="text-70">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="#" class="btn btn-outline-secondary">Get started</a>
                        </div>
                        <div class="card-footer d-flex align-items-center">

                           <div class="dropup">
                              <a href="#" class="dropdown-toggle" data-caret="false" data-toggle="dropdown">
                                 <i class="material-icons">more_horiz</i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                           </div>
                        </div>
                     </div>


                  </div>
               </li>
               <li>
                  <div class="custom-control custom-checkbox">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title">{{$class->name}}</h4>
                           <p class="card-subtitle mb-3">Titles can go in body as well</p>

                           <p class="text-70">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="#" class="btn btn-outline-secondary">Get started</a>
                        </div>
                        <div class="card-footer d-flex align-items-center">

                           <div class="dropup">
                              <a href="#" class="dropdown-toggle" data-caret="false" data-toggle="dropdown">
                                 <i class="material-icons">more_horiz</i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                           </div>
                        </div>
                     </div>


                  </div>
               </li>

            </ul>
         </div>

      </div>
   </div>

   <div class="col-lg-6 card-group-row__col">
      <div class="card card-group-row__card">
         <div class="card-header d-flex align-items-center">
            <strong class="flex">Checklist</strong>

         </div>
         <div class="progress rounded-0" style="height: 4px;">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="40"
               aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         <div class="card-body">
            <table class="table mb-0 thead-border-top-0 table-nowrap">
               <thead>
                  <tr>



                     <th style="width: 150px;">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-project">Us ID</a>
                     </th>

                     <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lead">US Title</a>
                     </th>

                     <th style="width: 48px;">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">US Credits</a>
                     </th>

                     <th style="width: 48px;">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-budget">US Level</a>
                     </th>

                     <th style="width: 48px;">
                        <a href="javascript:void(0)" class="sort desc" data-sort="js-lists-values-date">View</a>
                     </th>


                  </tr>
               </thead>
               <tbody class="list" id="projects">
                  @foreach ($class->unit_standard as $unit_standard)

                  <tr>
                     <td>

                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                           <div class="avatar avatar-sm mr-8pt">

                           </div>
                           <div class="media-body">
                              <div class="d-flex flex-column">
                                 <small
                                    class="js-lists-values-project"><strong>{{$unit_standard->us_name}}</strong></small>

                              </div>
                           </div>
                        </div>

                     </td>

                     <td>

                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">

                           <div class="media-body">

                              <div class="d-flex align-items-center">
                                 <div class="flex d-flex flex-column">
                                    <small class="js-lists-values-location text-50">{{$unit_standard->us_title}}</small>

                                 </div>
                              </div>

                           </div>
                        </div>

                     </td>

                     <td>
                        <div class="d-flex flex-column">
                           <small class="js-lists-values-email text-50">{{$unit_standard->us_level}}</small>
                        </div>
                     </td>

                     <td>
                        <div class="d-flex flex-column">
                           <small class="js-lists-values-budget"><strong>$1,200</strong></small>
                           <small class="text-50">Invoice Sent</small>
                        </div>
                     </td>

                     <td>
                        <div class="d-flex flex-column">
                           <a href="{{route('unit_standard/details',$unit_standard->us_name)}}"><i
                                 class="fas fa-eye"></i></a>


                        </div>
                     </td>

                  </tr>

                  @endforeach
               </tbody>
            </table>
         </div>

      </div>
   </div>

   <div class="col-lg-12 card-group-row__col">
      <div class="card card-group-row__card">
         <div class="card-header d-flex align-items-center">
            <strong class="flex">Students</strong>

         </div>
         <div class="progress rounded-0" style="height: 4px;">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="40"
               aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         <div class="card-body">
            <table class="table mb-0 thead-border-top-0 table-nowrap">
               <thead>
                  <tr>



                     <th style="width: 150px;">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-project">Project</a>
                     </th>

                     <th>
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lead">Lead / Team</a>
                     </th>

                     <th style="width: 48px;">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Status</a>
                     </th>

                     <th style="width: 48px;">
                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-budget">Budget</a>
                     </th>

                     <th style="width: 48px;">
                        <a href="javascript:void(0)" class="sort desc" data-sort="js-lists-values-date">Due</a>
                     </th>


                  </tr>
               </thead>
               <tbody class="list" id="projects">
                  @foreach ($class->learner as $learner)

                  <tr>
                     <td>

                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                           <div class="avatar avatar-sm mr-8pt">

                           </div>
                           <div class="media-body">
                              <div class="d-flex flex-column">
                                 <small class="js-lists-values-project"><strong>{{$learner->name}}</strong></small>
                                 <small class="js-lists-values-location text-50">{{$learner->surname}}</small>
                              </div>
                           </div>
                        </div>

                     </td>

                     <td>

                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">

                           <div class="media-body">

                              <div class="d-flex align-items-center">
                                 <div class="flex d-flex flex-column">
                                    <p class="mb-0"><strong
                                          class="js-lists-values-lead">{{$learner->identinty}}</strong></p>
                                    <small class="js-lists-values-email text-50">{{$learner->email}}</small>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </td>

                     <td>
                        <div class="d-flex flex-column">
                           <small class="js-lists-values-status text-50 mb-4pt">QA</small>
                           <span class="indicator-line rounded bg-warning"></span>
                        </div>
                     </td>

                     <td>
                        <div class="d-flex flex-column">
                           <small class="js-lists-values-budget"><strong>$1,200</strong></small>
                           <small class="text-50">Invoice Sent</small>
                        </div>
                     </td>

                     <td>
                        <div class="d-flex flex-column">
                           <small class="js-lists-values-date"><strong>19/02/2019</strong></small>
                           <small class="text-50">18 days</small>
                        </div>
                     </td>

                  </tr>

                  @endforeach
               </tbody>
            </table>

         </div>

      </div>
   </div>

</div>


@endsection

{{-- add unit standards --}}

<div class="modal fade" id="add_us" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document"
      style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
      <div class="modal-content">
         <form method="post" action="/class/{{$class->slug}}/add_us">
            @csrf
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Add Unit Standard</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="list-group-item" style="border: none !important;">
                  <div class="form-group row align-items-center mb-0">
                     <label class="form-label col-form-label col-sm-12">
                        Unit Standard</label>
                     @foreach ($unit_standards as $unit_standard)

                     <div class="col-sm-6 row">
                        <label class="text-muted col-sm-9">{{$unit_standard->us_name}}</label>

                        <input name="unit_standards[]" type="checkbox" value="{{$unit_standard->id}}"
                           class="form-control col-sm-1">
                     </div>
                     @endforeach
                  </div>
               </div>

            </div>
            <div class="modal-footer">
               <button class="btn btn-outline-secondary">Add</button>
            </div>
         </form>
      </div>
   </div>
</div>

{{-- end  --}}

{{-- create student --}}

<div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document"
      style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
      <div class="modal-content">
         <form action="/learner/{{$class->slug}}/add_to_class" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Add Studemnts</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">

                  <div class="list-group-item" style="border: none !important;">
                     <div class="form-group row align-items-center mb-0">
                        <label class="form-label col-form-label col-sm-3">
                           Student Name</label>
                        <div class="col-sm-9">
                           <div class="form-group row align-items-center mb-0">
                              <label class="form-label col-form-label col-sm-12">
                                 Students </label>
                              @foreach ($learners as $learner)

                              <div class="col-sm-6 row">
                                 <label class="text-muted col-sm-9">{{$learner->user->name}}</label>

                                 <input name="learners[]" type="checkbox" value="{{$learner->user_id}}"
                                    class="form-control col-sm-1">
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
            <div class="modal-footer">
               <button class="btn btn-outline-secondary">Add</button>
            </div>
         </form>
      </div>
   </div>
</div>

{{-- create student end --}}