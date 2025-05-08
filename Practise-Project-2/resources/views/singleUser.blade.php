<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <!-- Font Awesome CDN -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

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
                    <h1 class="m-4">Single User Data (*^_^*)</h1>
                    
                    <table class="table table-bordered table-striped">
                        {{-- <tr><a href="" class="btn btn-success btn-sm mb-3">Add New </a></tr> --}}
                        <tr>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                             
                        </tr>
                        @foreach($data as $items) 
                        <tr>
                            <td> {{ $items->id }}</td>
                            <td> {{ $items->name }}</td>
                            <td> {{ $items->email }}</td>
                            <td> {{ $items->age }}</td>
                            <td> {{ $items->city_name }}</td>
                            {{-- <td> {{ $items->id }}</td> --}}
                        </tr>
                        @endforeach
                    </table>
                    <h1><a href="{{ route('home')}}"><ion-icon name="chevron-back-circle"></ion-icon></a>
                    </h1>
                </div>
            </div>
        </div> 
  </body>
</html>




 
 