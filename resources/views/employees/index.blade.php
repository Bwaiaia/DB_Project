@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

              <ul class="list-group">
                  @foreach($employees as $employee)
                <li class="list-group-item">{{$employee->name}}</li>
                <li class="list-group-item">{{$employee->age}}</li>
                <li class="list-group-item">{{$employee->island}}</li>
                @endforeach
              </ul>
            
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
