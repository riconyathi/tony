@extends('layout.main')
@section('content')
<div class="container page__container page-section pb-0">

    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>

        <li class="breadcrumb-item active">
            Users
        </li>

    </ol>
    <button class="btn float-right btn-outline-secondary mb-2" data-toggle="modal" data-target="#user">Create
        user</button>
    <br><br>

</div>
<div class="page-separator">
    <div class="page-separator__text"> </div>
</div>

    <div class="row m-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users</h4>
                </div>
                <div class="progress rounded-0" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="100"
                       aria-valuemin="100" aria-valuemax="100"></div>
                 </div>
                <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                    data-lists-sort-desc="true"
                    data-lists-values="[&quot;js-lists-values-name&quot;, &quot;js-lists-values-department&quot;, &quot;js-lists-values-status&quot;, &quot;js-lists-values-type&quot;, &quot;js-lists-values-phone&quot;, &quot;js-lists-values-date&quot;]">
            
                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                        <thead>
                            <tr>
            
            
            
                                <th>
                                    <a href="javascript:void(0)" class="sort text-muted" data-sort="js-lists-values-name">User
                                        Name</a>
                                </th>
            
                                <th>
                                    <a href="javascript:void(0)" class="sort text-muted" data-sort="js-lists-values-department">User
                                        Surname</a>
                                </th>
            
                                <th>
                                    <a href="javascript:void(0)" class="sort text-muted"
                                        data-sort="js-lists-values-status">Identinty</a>
                                </th>
            
            
                                <th>
                                    <a href="javascript:void(0)" class="sort text-muted" data-sort="js-lists-values-phone">Role</a>
                                </th>
            
                                <th>
                                    <a href="javascript:void(0)" class="sort desc text-muted"
                                        data-sort="js-lists-values-date">suspend</a>
                                </th>
                                <th style="width: 24px;" class="text-muted"> Delete</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="employees">
                            @foreach ($users as $user)
            
            
                            <tr>
                                <td>
            
                                    <small class="js-lists-values-type text-50">{{$user->name}}</small>
            
                                </td>
            
                                <td>
                                    <small class="js-lists-values-type text-50">{{$user->surname}}</small>
                                </td>
            
                                <td>
                                    <small class="js-lists-values-type text-50">{{$user->identinty}}</small>
                                </td>
            
                                <td>
                                    <small class="js-lists-values-phone text-50">{{$user->role}}</small>
                                </td>
            
                                <td>
                                    <a href="" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="text-50 text-danger"><i class="far fa-trash"></i></a>
                                </td>
                                <td class="pr-0">
            
                                </td>
                            </tr>
                            @endforeach
            
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



@endsection