@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-new-task">
                <div class="card-header"></div>
                <div class="card-body"></div>
                <div class="content-wrapper"></div>

                <!-- Content Header (Page Header) -->

                    <!-- Main Content -->
                    <section class="content">
                        <!-- Default Box -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{_('EDIT TRAINING TYPES DETAILS')}}</h3>
                                <div class="box-tools pull-right">
                                    <!--button-->
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            
                            <div class="box-body">
                                <form action="{{ route('training_type.update', $trainingType['id']) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="_method" value="PATCH">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="box-body">
                                            <h4 class="box-title text-info"> TRAINING TYPES EDITION SECTION </h4>
                                                <hr class="my-15">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="training_types"><span class="text-danger">*</span>Training Name:</label>

                                                        <input type="text" class="form-control {{ $errors->has('training_name') ? ' is-invalid' : '' }}"  value="{{$trainingType['training_name']}}" id="training_name" placeholder="Enter a Training Name" name="training_name" autocomplete="off">
                                                           @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                               {{ session()->get('error') }}
                                                            </div>
                                                         @endif
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="training_types"><span class="text-danger">*</span>Training Description:</label>

                                                        <input type="text" class="form-control {{ $errors->has('training_description') ? ' is-invalid' : '' }}"  value="{{$trainingType['training_description']}}" id="training_description" placeholder="Enter a Training Description" name="training_description" autocomplete="off">
                                                           @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                               {{ session()->get('error') }}
                                                            </div>
                                                         @endif
                                                    </div>

                                                    <!-- /.box-body -- Update&&Cancel Button -->
                                                    <div class="box-footer text-right">
                                                        <button type="submit" class="btn btn-primary btn-outline"><i class="ti-save-alt"></i> Update</button>
                                                        <a class="btn btn-warning btn-outline mr-1" href=""><i class="ti-trash"></i> Cancel</a>
                                                    </div>

                                                </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </div>
</div>