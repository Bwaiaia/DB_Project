@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">


                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Enter Name...</label>
                            <div class="col-sm-10">
                            <input type="text" name='name' class="form-control-plaintext" id="staticEmail" value="">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="age" class="col-sm-2 col-form-label">Enter age...</label>
                            <div class="col-sm-10">
                            <input type="number" name='age' class="form-control-plaintext" id="staticEmail" value="">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="island" class="col-sm-2 col-form-label">Enter island...</label>
                            <div class="col-sm-10">
                            <input type="text" name='island' class="form-control-plaintext" id="staticEmail" value="">
                            </div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection