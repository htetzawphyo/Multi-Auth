@extends('back.master')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-3">                
                <div class="h3 d-inline">Users</div>
                <a href="/admin/users" class="btn btn-primary float-end mb-3"><< Back</a>

                <form action="/admin/users/{{ $user->id }}/update" method="POST">
                    @csrf
                    <input type="text" class="form-control mb-3" value="{{ $user->name }}" disabled>
                        @foreach ($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="role_ids[]" value="{{ $role->id }}" id="checkRole{{ $role->id }}"
                                    @foreach ($user->roles as $userRole)
                                        @if($userRole->name === $role->name)
                                            checked
                                        @endif
                                    @endforeach
                                >
                                <label class="form-check-label" for="checkRole{{ $role->id }}">
                                    {{ $role->name }}
                                </label>
                            </div>
                        @endforeach      
                        
                        <button type="submit" class="btn btn-success mt-3">Add Role</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection