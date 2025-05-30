  @extends('layout')

  @section('titler')
        User Details
  @endsection



  @section('content')
  
  <table class="table table-striped table-bordered">
   <tr>
        <td width='80px'>User Id :</td>
        <td>{{ $stu->id }} </td>
    </tr>
   
    <tr>
        <td width='80px'>Name :</td>
        <td>{{ $stu->name }}</td>
    </tr>

    <tr>
        <td width='80px'>Email :</td>
        <td>{{ $stu->email }}</td>
    </tr>

    <tr>
        <td width='80px'>Age :</td>
        <td>{{ $stu->age}}</td>
    </tr>

    <tr>
        <td width='80px'>City :</td>
        <td>{{ $stu->city }}</td>
    </tr>

  </table>

  <a href="{{ route('user.index') }}" class="btn btn-danger">Home</a>
  
  
  @endsection