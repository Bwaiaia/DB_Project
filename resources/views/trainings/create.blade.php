@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-new-task">
                <div class="card-header">Test_Tera aio??</div>
                <div class="card-body">
                <div class="content-wrapper">
                <!-- Content Header(Page header) -->
                
                
                    <!-- Main Content -->
                    <section class="content">

                        <!-- Default box-->
                        <div class="box">
                        <div class="box-header with-border">
                                <h3 class="box-title">{{ __('ENTER TRAINING TYPES DETAILS') }}</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                            <div class="box-body">
                            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ route('trainings.store') }}" >
                                                                    @csrf
                                       
                                          <div class="box-body">
                                          <h4 class="box-title text-info"> TRAININGS SECTION</h4>
                                                <hr class="my-15">
                                                <div class="row">
                                               
                                                   <div class="form-group col-md-6">
                                                      <label for="training_date"><span class="text-danger">*</span>Island ID:</label>
                                                   
                                                         
                                                            <input type="text" class="form-control {{ $errors->has('training_date') ? ' is-invalid' : '' }}" value="{{ old('training_date') }}" id="training_date" placeholder="Enter a training date" name="training_date" autocomplete="off">
                                                           @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                               {{ session()->get('error') }}
                                                            </div>
                                                         @endif
                                                   
                                                   </div>

                                                   <div class="form-group col-md-6">
                                                      <label for="training_date"><span class="text-danger">*</span>Training Type ID:</label>
                                                   
                                                            <input type="text" class="form-control {{ $errors->has('training_date') ? ' is-invalid' : '' }}" value="{{ old('training_date') }}" id="training_date" placeholder="Enter a training date" name="training_date" autocomplete="off">
                                                           @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                               {{ session()->get('error') }}
                                                            </div>
                                                         @endif
                                                   
                                                   </div>

                                                   <div class="form-group col-md-6">
                                                      <label for="training_date"><span class="text-danger">*</span>Training Date:</label>
                                                   
                                                            <input type="text" class="form-control {{ $errors->has('training_date') ? ' is-invalid' : '' }}" value="{{ old('training_date') }}" id="training_date" placeholder="Enter a training date" name="training_date" autocomplete="off">
                                                           @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                               {{ session()->get('error') }}
                                                            </div>
                                                         @endif
                                                   
                                                   </div>
                                                   
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