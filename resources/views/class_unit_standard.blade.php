@extends('layout.main')
@section('content')
<div class="container page__container page-section pb-0">
                  
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">
                           Unit Standard
                        </li>

                    </ol>
                    

                </div>
        <div class="page-separator">
                <div class="page-separator__text"> </div>
          </div>
          <div class="mb-lg-32pt">

            <div class="row">
                @foreach ($unit_standards as $unit_standard)
                <div class="col-lg-3">
                    <div class="alert alert-soft-secondary mb-lg-32pt">
                        <div class="d-flex flex-wrap align-items-start">
                           <div class="mr-8pt">
                              <div style="width: 2rem;height: 2rem; border-radius: 50px;
                               border: 1px solid #dddfe2; display: flex; align-items: center; justify-content: center;"><i class="fas fa-folder"></i></div>
                           </div>
                           <div class="flex">
                              <small class="text-100">
                              <strong class="text-muted">  {{$unit_standard->us_title}}</strong><br>
                              <span class="badge badge-pill text-muted" style="border: 1px solid #ebe6e6">  {{$unit_standard->us_name}}</span>
                              </small>
                           </div>
                           <div class="flex">
                              <small class="text-100 mt-1 float-right">
                             <a href="{{ route('unit_standard/details',$unit_standard->us_name) }}" class="btn btn-outline-secondary rounded"><i class="fas fa-eye"></i></a>
                              </small>
                           </div>
                        </div>
                     </div>
                </div>
                @endforeach
            </div>


         

                    </div>



@endsection