@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

     <!-- About Start -->
     <div class="col-md-12">
            <div class="card card-new-task">
                
     <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
               
                <div class="col-lg-7">
                    <div class="mb-4">
                    <form method="post">
                    <a  class="d-inline-block text-primary text-uppercase " href="{{route('trainings.edit', $trainings)}}">Edit->Trainings List</a>
                    <h3>Training Informations:</h3>
                    </form>
                    </div>
                    <div>

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                     <!-- Details Show List -->
                                     <div class="row">
                                            <div class="col-md-6">
                                                <label>Training ID:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$trainings['id'}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Island ID:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$trainings['id']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Training Types ID:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$trainings['id']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Training Date:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$trainings['training_date']}}</p>
                                            </div>
                                        </div>
                                 
                                      
                                       
                            </div>
                           
                                       
                                       
                        </div>
                    </div>


                    </div>
                  
                   
                </div>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    <!-- About End -->
  
      

</div>
@endsection

