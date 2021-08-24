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
                                <a href="javascript:void(0)" class="sort text-muted"
                                    data-sort="js-lists-values-name">User
                                    Name</a>
                            </th>

                            <th>
                                <a href="javascript:void(0)" class="sort text-muted"
                                    data-sort="js-lists-values-department">User
                                    Surname</a>
                            </th>

                            <th>
                                <a href="javascript:void(0)" class="sort text-muted"
                                    data-sort="js-lists-values-status">Identinty</a>
                            </th>


                            <th>
                                <a href="javascript:void(0)" class="sort text-muted"
                                    data-sort="js-lists-values-phone">Role</a>
                            </th>

                            <th>
                                <a href="javascript:void(0)" class="sort desc text-muted"
                                    data-sort="js-lists-values-date">View</a>
                            </th>

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

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="card-footer p-8pt">

                {{$users->links()}}

            </div>



        </div>

    </div>

</div>



@endsection