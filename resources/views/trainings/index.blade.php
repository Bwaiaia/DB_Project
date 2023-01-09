@extends('layouts.app')
<<<<<<< HEAD
@section('title', __('Training'))
=======
@section('title', __('Training Types'))
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700

@section('content')
<div class="container">
<div class="content-wrapper">

    <section class="content-header">
        <h1>
<<<<<<< HEAD
            {{ __('TRAININGS') }}
=======
            {{ __('Trainings') }}
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
        </h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
<<<<<<< HEAD
                <li class="breadcrumb-item"><a href="{{ url('/island') }}">Island List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Employee List</li>
=======
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/island') }}">Island List</a></li>
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/village') }}">Village List</a></li>
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/employee') }}">Employee List</a></li>
                <li class="breadcrumb-item"><a href="{{ url('http://localhost/project/public/training_types') }}">Training_Types List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Training List</li>
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
            </ol>
        </nav>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
<<<<<<< HEAD
                <h3 class="box-title">{{ __('Manage Training') }}</h3>

                <div class="box-header with-border">
                        <div class="alert alert-info clearfix">
                            <a href="{{ route('training.create') }}" class="alert-link"><button type="button" class="btn btn-primary btn-sm float-end">{{ __(' Add Training Information') }}</button></a> 
=======
                <h3 class="box-title">{{ __('Manage Trainings') }}</h3>

                <div class="box-header with-border">
                        <div class="alert alert-info clearfix">
                            <a href="{{ route('trainings.create') }}" class="alert-link"><button type="button" class="btn btn-primary btn-sm float-end">{{ __(' Add Trainings') }}</button></a> 
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
                        </div>
                     </div>
            </div>
            <div class="box-body">
                
            
            </div>
                
                <div  class="col-md-6">
<<<<<<< HEAD
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search..') }}">
=======
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search.......') }}">
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
                </div>

                <!-- Notification Box -->
                <div class="col-md-12">
                    @if (!empty(Session::get('message')))
                    <div class="alert alert-success alert-dismissible" id="notification_box">
<<<<<<< HEAD
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
=======
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Inbox</button>
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                    </div>
                    @elseif (!empty(Session::get('exception')))
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
<<<<<<< HEAD
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
=======
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Inbox</button>
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
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
<<<<<<< HEAD
                            <th>{{ __(' Island name') }}</th>
                            <th>{{ __(' Village name') }}</th>
                             <th>{{ __(' Training name') }}</th>
                            <th>{{ __(' First name') }}</th>
                            <th>{{ __(' Last name') }}</th>
                            <th>{{ __(' Age') }}</th>
                            <th>{{ __(' Gender') }}</th>
                            <th>{{ __(' Training Date') }}</th>
                           {{--<th>{{ __(' Created At') }}</th>--}}
=======
                            <th>{{ __(' Training ID:') }}</th>
                            <th>{{ __(' Island ID:') }}</th>
                            <th>{{ __(' Training_Types ID:') }}</th>
                            <th>{{ __(' Training Date') }}</th>
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
                            <th class="text-center">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @php $sl = 1; @endphp
<<<<<<< HEAD
                      {{--{{dd($trainings)}}--}}
                        @foreach($trainings as $training)
                        <tr>
                            <td>{{ $sl++ }}</td> 
                            <td>{{ $training->island_name }}</td> 
                            <td>{{ $training->village_name }}</td>                       
                            <td>{{ $training->training_name }}</td>
                            <td>{{ $training->participant_first_name }}</td>
                            <td>{{ $training->participant_last_name }}</td>
                            <td>{{ $training->age }}</td>
                            <td>{{ $training->gender ?'Male':'Female' }}</td>
                            <td class="text-center">{{ date("Y", strtotime($training->training_date)) }}</td>         
                           {{--<td class="text-center">{{ date("d F Y", strtotime($training->created_at)) }}</td>--}}
                           
                            <td class="text-center">
                            <a class="btn btn-info text-center" href="{{route('training.show', $training->id)}}">Show</a>      
                               <a href="{{ route('training.edit', $training->id) }}"><i class="icon fa fa-edit"></i> {{ __('Edit') }}</a>
=======
                        @php $Tl = 1; @endphp
                        @php $Il = 1; @endphp
                        @php $tl = 1; @endphp
                      
                        @foreach($training as $trainings)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $trainings['$Tl++'] }}</td>
                            <td>{{ $trainings['$Il++'] }}</td>
                            <td>{{ $trainings['$tl++'] }}</td>
                            <td>{{ $trainings['training_date'] }}</td>
                        
                            <td class="text-center">{{ date("d F Y", strtotime($trainings['created_at'])) }}</td>
                           
                           
                            <td class="text-center">
                            <a class="btn btn-info text-center" href="{{route('trainings.show', $trainings['id'])}}">Show</a>      
                               <a href="{{ route('trainings.edit', $trainings['id']) }}"><i class="icon fa fa-edit"></i> {{ __('Edit') }}</a>
>>>>>>> 9f4c61fe8071bb5077adece19156ef2f34b19700
                              
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