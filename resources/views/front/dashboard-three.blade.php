@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6">                
            <div class="card border-0 my-4">
                <div class="card-header">
                    <h3>Dashboard Three</h3>
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
            
        </div>
        <div class="col-md-3 my-4">
            @foreach (Auth::user()->roles as $role)
                @if ($role->name === "Manager" || $role->name === "Supervisor")
                    <a href="/admin/managers" class="d-block btn btn-sm btn-primary mb-3">Go To Dashboard One >></a>                        
                @endif
            @endforeach
            @foreach (Auth::user()->roles as $role)
                @if ($role->name === "Staff")
                    <a href="/admin/staffs" class="d-block btn btn-sm btn-primary">Got To Dashboard Two >></a>                        
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
