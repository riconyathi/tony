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
                        <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#add_us">Add Us</button>
                    <br><br>
                    <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#add_student">Add Student</button>
                    <br><br>
                     </div>
                    
                  </div>
                
               </div>
            </div>

         <div class="row m-3">
            <div class="col-lg-4">
               <div class="alert alert-soft-secondary mb-lg-32pt">
                     <div class="d-flex flex-wrap align-items-start">
                        <div class="mr-8pt">
                           <div style="width: 2rem;height: 2rem; border-radius: 50px;
                            border: 1px solid #dddfe2; display: flex; align-items: center; justify-content: center;"><i class="fas fa-user"></i></div>
                        </div>
                        <div class="flex">
                           <small class="text-100">
                           <strong class="text-muted">Nkanyiso</strong><br>
                           <span class="text-muted">Assessor</span>
                           </small>
                        </div>
                        <div class="flex">
                           <small class="text-100 mt-1 float-right">
                          <a href="" class="btn btn-outline-secondary rounded"><i class="fas fa-eye"></i></a>
                           </small>
                        </div>
                     </div>
                  </div>
               
            </div>

            <div class="col-lg-4">
               <div class="alert alert-soft-secondary mb-lg-32pt">
                     <div class="d-flex flex-wrap align-items-start">
                        <div class="mr-8pt">
                           <div style="width: 2rem;height: 2rem; border-radius: 50px;
                            border: 1px solid #dddfe2; display: flex; align-items: center; justify-content: center;"><i class="fas fa-user"></i></div>
                        </div>
                        <div class="flex">
                           <small class="text-100">
                           <strong class="text-muted">Rico</strong><br>
                           <span class="text-muted">Moderator</span>
                           </small>
                        </div>
                        <div class="flex">
                           <small class="text-100 mt-1 float-right">
                          <a href="" class="btn btn-outline-secondary rounded"><i class="fas fa-eye"></i></a>
                           </small>
                        </div>
                     </div>
                  </div>
               
            </div>

            <div class="col-lg-4">
               <div class="alert alert-soft-secondary mb-lg-32pt">
                     <div class="d-flex flex-wrap align-items-start">
                        <div class="mr-8pt">
                           <div style="width: 2rem;height: 2rem; border-radius: 50px;
                            border: 1px solid #dddfe2; display: flex; align-items: center; justify-content: center;"><i class="fa fa-folder" aria-hidden="true"></i></div>
                        </div>
                        <div class="flex">
                           <small class="text-100">
                           <strong class="text-muted">Unit Standards</strong><br>
                           <span class="text-muted">{{$class->unit_standard_count}}</span>
                           </small>
                        </div>
                        <div class="flex">
                           <small class="text-100 mt-1 float-right">
                          <a href="{{ route('class/unit_standard',$class->slug) }}" class="btn btn-outline-secondary rounded"><i class="fas fa-eye"></i></a>
                           </small>
                        </div>
                     </div>
                  </div>
               
            </div>



            <div class="col-lg-4">
               <div class="alert alert-soft-secondary mb-lg-32pt">
                     <div class="d-flex flex-wrap align-items-start">
                        <div class="mr-8pt">
                           <div style="width: 2rem;height: 2rem; border-radius: 50px;
                            border: 1px solid #dddfe2; display: flex; align-items: center; justify-content: center;"><i class="fas fa-users"></i></div>
                        </div>
                        <div class="flex">
                           <small class="text-100">
                           <strong class="text-muted">Students</strong><br>
                           <span class="text-muted">300</span>
                           </small>
                        </div>
                        <div class="flex">
                           <small class="text-100 mt-1 float-right">
                          <a href="{{ route('class/students',$class->slug) }}" class="btn btn-outline-secondary rounded"><i class="fas fa-eye"></i></a>
                           </small>
                        </div>
                     </div>
                  </div>
               
            </div>






         </div>


@endsection

 {{-- add unit standards --}}
                          
 <div class="modal fade" id="add_us" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
     <div class="modal-content">
       <form  method="post" action="/class/{{$class->slug}}/add_us" >
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
                   
                   <input name="unit_standards[]" type="checkbox" value="{{$unit_standard->id}}" class="form-control col-sm-1"> 
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

{{-- create student
                        
<div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
     <div class="modal-content">
       <form action="/leaner/create" method="post" enctype="multipart/form-data">
         @csrf
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalCenterTitle">Add Studemnts</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
             
             <div class="list-group-item" style="border: none !important;" >
               <div class="form-group row align-items-center mb-0">
                 <label class="form-label col-form-label col-sm-3">
                   Student Name</label>
                   <div class="col-sm-9">
                     <select name="" >
                        <option value="">Select Studemnt</option>
                        @foreach ($learners as $learner)
                        <option value="{{$learner->id}}">{{$learner->name}}</option>   
                        @endforeach  
                     </select>
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
     </div> --}}
     
     {{-- create student end --}}