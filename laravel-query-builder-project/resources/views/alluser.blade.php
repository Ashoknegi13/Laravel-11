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
                    <h1>All user data </h1>
                    <table class="table table-bordered table-striped">
                        @foreach($data as $user)
                                <tr>
                                    <td> {{ $user->id }} </td>
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }}</td>
                                    <td> {{ $user->age }}</td>
                                    <td> {{ $user->city }}</td>
                                </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div> 
  </body>
</html>




 
 