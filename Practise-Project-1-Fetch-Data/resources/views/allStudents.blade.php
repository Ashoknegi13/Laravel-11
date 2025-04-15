<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
          <div id="container">
            <div class="row">
              <div class="col-6">  
                
                <table class="table table-borderd table-striped"> 
                  <h1>All Students</h1>
                   
                  <tr>
                    <th> User ID</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Show</th>
                    <th>Delete</th>
                  </tr>
                  @foreach ($data as $stu)
                            
                        <tr>
                          <td> {{ $stu->id}}</td>
                          <td>{{ $stu->name}}</td>
                          <td>{{ $stu->email}}</td>
                          <td>{{ $stu->age}}</td>
                          <td>{{ $stu->city}}</td>
                          <td><a href="{{ route('singleStudent',$stu->id)  }}" class="btn btn-success btn-sm"> show</a></td>
                          <td><a href="{{ route('deleteStudent',$stu->id)  }}" class="btn btn-danger btn-sm">delete</a></td>
                        </tr>
                @endforeach

                </table>
               </div>
            </div>
          </div>
  </body>
</html>