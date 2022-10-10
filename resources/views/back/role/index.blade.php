@extends('back.master')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="h3 my-3 d-inline">Roles</div>
                <a href="/admin/managers" class="btn btn-primary float-end"><< Back</a>
                <table class="table table-hover table-bordered border-dark mt-3">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $i = 1; 
                        ?>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $role->name }}</td>
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