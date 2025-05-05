<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        nav .w-5{
            display: none;
        }
    </style>
</head>
  <body>
    
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>All user data </h1>
                    
                    <table class="table table-bordered table-striped">
                        <tr><a href="/newuser" class="btn btn-success btn-sm mb-3">Add New </a></tr>
                        <tr>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Show</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        @foreach($data as $items) 
                        <tr>
                            <td> {{ $items->id }}</td>
                            <td> {{ $items->name }}</td>
                            <td> {{ $items->email }}</td>
                            <td> {{ $items->age }}</td>
                            <td> {{ $items->city }}</td>
                            {{-- <td> {{ $items->id }}</td> --}}
                            <td><a href="">sh</a></td>
                            <td><a href="">del</a></td>
                            <td><a href="">upd</a></td>
                        </tr>
                    @endforeach
                    </table>
                     
                </div>
            </div>
        </div> 
  </body>
</html>




 
 