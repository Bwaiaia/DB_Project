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
                    <a  class="d-inline-block text-primary text-uppercase " href="{{route('$trainings.edit',$training)}}">Edit Profile</a>
                        <h1>Training Infor:</h1>
                    </form>
                    </div>
                    <div>

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                     
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Island Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$training['island_name']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Village Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$training['village_name']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Training Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$training['training_name']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$training['participant_first_name']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$training['participant_last_name']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Age:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$training['age']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$training['gender']}}</p>
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

