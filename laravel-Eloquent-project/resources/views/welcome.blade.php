 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
 </head>
 <body>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1 style="background-color:gray; text-align:center;color:white"> Eloquent  CRUD</h1>
                    <p style=" text-align:center"><b><u>All User Data</u></b></p>
                    
              <a class="btn btn-primary m-2" href="{{ route('addUser') }}"> Add User </a>
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
                                <td><a class="btn btn-primary btn-sm">View</a></td>
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