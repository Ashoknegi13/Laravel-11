@extends('layout')

@section('title')
All Users
@endsection

 
@section('content')
    <a href="" class="btn btn-primary  mb-3"> Add User</a>                    
<table class="table table-striped table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                             <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
     
                        @foreach($users as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->age}}</td>
                                <td>{{ $item->city}}</td>
                                <td><a class="btn btn-primary btn-sm" href="">View</a></td>
                                <td><a class="btn btn-success btn-sm">edit</a></td>
                                <td><a class="btn btn-danger btn-sm">delete</a></td>
                            </tr>   
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
 </body>
 </html>

 @endsection