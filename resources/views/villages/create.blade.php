@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-new-task">
                <div class="card-header"></div>
                <div class="card-body">
                <div class="content-wrapper">
                <!-- Content Header (Page header) -->
              

                    <!-- Main content -->
                    <section class="content">
                        <!-- Default box -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{ __('ENTER VILLAGE DETAILS') }}</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ route('village.store') }}" >
                                                                    @csrf
                                       
                                          <div class="box-body">
                                          <h4 class="box-title text-info"> VILLAGE SECTION</h4>
                                                <hr class="my-15">

                                                <div class="row">
                                               
                                                   <div class="form-group col-md-6">
                                                      <label for="island_id"><span class="text-danger">*</span> Island Name:</label>
                                                   
                                                      <select name="island_id" id="island_id" class="form-control">
                                                        <option value="" selected disabled>{{ __('Select one') }}</option>
                                                        @foreach($islands as $island)
                                                        <option value="{{ $island['id'] }}">{{ $island['island_name'] }}</option>
                                                        @endforeach
                                                      </select>
                                                           @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                               {{ session()->get('error') }}
                                                            </div>
                                                         @endif
                                                   
                                                   </div>

                                                <div class="row">
                                               
                                                   <div class="form-group col-md-6">
                                                      <label for="village_name"><span class="text-danger">*</span> VILLAGE NAME</label>
                                                   
                                                            <input type="text" class="form-control {{ $errors->has('village_name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" id="village_name" placeholder="Enter a village name..............." name="village_name" autocomplete="off">
                                                           @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                               {{ session()->get('error') }}
                                                            </div>
                                                         @endif
                                                   
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                      <label for="village_description"><span class="text-danger">*</span> DESCRIPTION</label>
                                                     
                                                            <input type="village_description" class="form-control {{ $errors->has('village_description') ? ' is-invalid' : '' }}" value="{{ old('village_description') }}" id="village_description" placeholder="Enter description..............." name="village_description" autocomplete="off">
                                                            @if ($errors->has('village_description'))
                                                               <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $errors->first('village_description') }}</strong>
                                                            </span>
                                                            @endif
                                                   
                                                   </div>
                                                   
                                                </div>
                                                <!-- new input -->
                                                <!-- /.box-body -->
                                          <div class="box-footer text-right">
                                                <button type="submit" class="btn btn-primary btn-outline">
                                                   <i class="ti-save-alt"></i> Save
                                                </button>
                                                <a class="btn btn-warning btn-outline mr-1" href="">
                                                   <i class="ti-trash"></i> Cancel
                                                </a>
                                          </div>
                                          <!-- /.box-footer -->
                                       </form>
                                       </div>
                                                   <!-- /.box-body -->
                                                </div>
                                                <!-- /.box -->
                                          </section>
                                          <!-- /.content -->

                                       </div>
                                    </div>
                              </div>
                           </div>

                        </div>

                       
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
@endsection
   