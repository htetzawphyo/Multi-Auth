@extends('back.master')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                
                <div class="h3 d-inline">Users</div>
                <a href="/admin/managers" class="btn btn-primary float-end"><< Back</a>

                <table class="table table-hover table-bordered border-dark mt-3">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            @foreach(Auth::user()->roles as $role)
                                @if ($role->name === "Manager")
                                    <th>Action</th>
                                @endif                                    
                             @endforeach                             
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $i = 1; 
                        ?>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <span class="badge bg-danger rounded-pill">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                @foreach(Auth::user()->roles as $role)
                                    @if ($role->name === "Manager")
                                        <td>
                                            <a href="/admin/users/{{ $user->id }}/edit" 
                                                class="btn btn-success btn-sm">
                                            Manage Roles</a>
                                        </td>
                                    @endif                                    
                                @endforeach                                
                            </tr>
                        <?php
                         $i++; 
                        ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection