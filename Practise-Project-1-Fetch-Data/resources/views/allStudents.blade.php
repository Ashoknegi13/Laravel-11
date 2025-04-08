<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <table class="table table-bordered table-striped">
                        <h1>All Students Records</h1>
                        <tr>
                           <th>User Id</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Age</th>
                           <th>City</th>
                           <th>Operation</th>
                        </tr>
                     
                        @foreach ($data as $item)
                                <tr>
                                    <td>{{  $item->id }}</td>
                                    <td>{{  $item->name }}</td>
                                    <td>{{  $item->email }}</td>
                                    <td>{{  $item->age }}</td>
                                    <td>{{  $item->city }}</td>
                                    <td ><a class="btn btn-success" href="{{ route('view.student',$item->id) }}">Show</a></td>
                                </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
  </body>
</html>




 
 