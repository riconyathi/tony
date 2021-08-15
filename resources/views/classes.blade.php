@extends('layout.main')
@section('content')
<div class="border-bottom-2 py-32pt position-relative">
               <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                  <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                     <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                      
                        <ol class="breadcrumb p-0 m-0">
                           <li class="breadcrumb-item"><a href="/">Home</a></li>
                           <li class="breadcrumb-item active">
                         Classes
                           </li>
                        </ol>
                     </div>
                    
                  </div>
                  <div class="row">
                    
                     <div class="col-auto border-left">
                        <a href="#" class="btn btn-outline-secondary" data-toggle='modal'  data-target="#classes">Create Class</a>
                     </div>
                  </div>
               </div>
            </div>

         <div class="row m-3">
            @foreach ($classes as $class)
          
            <div class="col-lg-4">
               <div class="alert alert-soft-secondary mb-lg-32pt">
                     <div class="d-flex flex-wrap align-items-start">
                        <div class="mr-8pt">
                           <div style="width: 2rem;height: 2rem; border-radius: 50px;
                            border: 1px solid #dddfe2; display: flex; align-items: center; justify-content: center;"><i class="fas fa-users"></i></div>
                        </div>
                        <div class="flex">
                           <small class="text-100">
                           <strong class="text-muted">{{$class->name}}</strong><br>
                           <span class="text-muted">students  25</span>
                           </small>
                        </div>
                        <div class="flex">
                           <small class="text-100 mt-1 float-right">
                          <a href="{{ route('class/view',$class->slug) }}" class="btn btn-outline-secondary rounded"><i class="fas fa-eye"></i></a>
                           </small>
                        </div>
                     </div>
                  </div>
               
            </div>
            @endforeach
         </div>

@endsection