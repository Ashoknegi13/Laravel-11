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
                <col-7>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                             <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                        </tr>

                   
                        
                        @foreach($users as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->age}}</td>
                                <td>{{ $item->city}}</td>
                            </tr>   
                        @endforeach
                    </table>
                </col-7>
            </div>
        </div>
 </body>
 </html>