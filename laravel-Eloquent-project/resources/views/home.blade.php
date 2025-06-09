

@extends('layout')

@section('title')
All Users
@endsection

 
@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary  mb-3"> Add User</a>                    
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
                                <td><a class="btn btn-primary btn-sm" href="{{ route('user.show',$item->id) }}"><ion-icon name="eye-outline"></ion-icon></a></td>
                                <td><a class="btn btn-success btn-sm" href="{{ route('user.edit',$item->id) }}"><ion-icon name="create-outline"></ion-icon></a></td>
                                <td>
                                <form action="{{ route('user.destroy',$item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                                </form>
                                </td>
                            </tr>   
                        @endforeach
                    </table>
                    {{ $users->links() }}
                </div>  
            </div>
        </div>
 </body>
 </html>

 @endsection