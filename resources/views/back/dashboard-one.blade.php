@extends('back.master')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">                
                <div class="card border-0 my-4">
                    <div class="card-header">
                        <h3>Dashboard One</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <strong>Name : </strong> {{ Auth::user()->name }}
                        </div>
                        <div class="mb-2">
                            <strong>Email : </strong> {{ Auth::user()->email }}
                        </div>
                        <div class="">
                            <strong>Role : </strong>
                            @foreach (Auth::user()->roles as $role)
                                <span class="badge bg-danger">{{ $role->name }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/admin/roles" class="btn btn-primary btn-sm">View for role >></a>
                    <a href="/admin/users" class="btn btn-primary btn-sm">View for users >></a>
                    <button class="btn btn-danger btn-sm float-end" onclick="return confirm('Are you sure you want to logout?')">Logout</button>
                </form>
                
            </div>
            <div class="col-md-3 my-4">
                @foreach (Auth::user()->roles as $role)
                    @if ($role->name === "Staff")
                        <a href="/admin/staffs" class="d-block btn btn-sm btn-primary mb-3">Go To Dashboard Two >></a>                        
                    @endif
                @endforeach
                @foreach (Auth::user()->roles as $role)
                    @if ($role->name === "User")
                        <a href="/admin/normal_users" class="d-block btn btn-sm btn-primary">Got To Dashboard Three >></a>                        
                    @endif
                @endforeach
            </div>

        </div>
    </div>

@endsection