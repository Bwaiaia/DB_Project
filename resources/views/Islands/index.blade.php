<html>


<ul class="list-group">
    @foreach($employees as $employee)
  <li class="list-group-item">{{$employee->name}}</li>
  <li class="list-group-item">{{$employee->age}}</li>
  <li class="list-group-item">{{$employee->island}}</li>
  @endforeach
</ul>



<!-- <ul class="list-group"> -->

<!-- <ul class="list-group"> -->

</html>