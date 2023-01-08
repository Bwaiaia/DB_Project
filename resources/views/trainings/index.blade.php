@extends('layouts.app')
@section('title', __('Training Types'))

@section('content')
<div class="container">
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            {{ __('Trainings') }}
        </h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/island') }}">Island List</a></li>
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/village') }}">Village List</a></li>
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/employee') }}">Employee List</a></li>
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/training_types') }}">Training_Types List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Training List</li>
            </ol>
        </nav>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Manage Trainings') }}</h3>

                <div class="box-header with-border">
                        <div class="alert alert-info clearfix">
                            <a href="{{ route('trainings.create') }}" class="alert-link"><button type="button" class="btn btn-primary btn-sm float-end">{{ __(' Add Trainings') }}</button></a> 
                        </div>
                     </div>
            </div>
            <div class="box-body">
                
            
            </div>
                
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search.......') }}">
                </div>

                <!-- Notification Box -->
                <div class="col-md-12">
                    @if (!empty(Session::get('message')))
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Inbox</button>
                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                    </div>
                    @elseif (!empty(Session::get('exception')))
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Inbox</button>
                        <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                    </div>
                    @endif
                </div>
                <!-- /.Notification Box -->
        <div id="printable_area" class="col-md-12 table-responsive">
               <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __(' SL#') }}</th>
                            <th>{{ __(' Training ID:') }}</th>
                            <th>{{ __(' Island ID:') }}</th>
                            <th>{{ __(' Training_Types ID:') }}</th>
                            <th>{{ __(' Training Date') }}</th>
                            <th class="text-center">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @php $sl = 1; @endphp
                        @php $Tl = 1; @endphp
                        @php $Il = 1; @endphp
                        @php $tl = 1; @endphp
                      
                        @foreach($trainings as $trainings)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $trainings['$Tl++'] }}</td>
                            <td>{{ $trainings['$Il++'] }}</td>
                            <td>{{ $trainings['$tl++'] }}</td>
                            <td>{{ $training_types['training_date'] }}</td>
                        
                            <td class="text-center">{{ date("d F Y", strtotime($trainings['created_at'])) }}</td>
                           
                           
                            <td class="text-center">
                            <a class="btn btn-info text-center" href="{{route('trainings.show', $trainings['id'])}}">Show</a>      
                               <a href="{{ route('trainings.edit', $trainings['id']) }}"><i class="icon fa fa-edit"></i> {{ __('Edit') }}</a>
                              
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
</div>
@endsection