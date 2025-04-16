<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
       <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Update Student </h1>
                <form action="{{ route('updateStudent',$data->id)  }}" method="POST">
                    @csrf
                    
                    <div class="row-3">
                        <label for="username">Name </label>
                        <input type="text" class="form-control" name="username" value="{{ $data->name }}">
                    </div>

                    <div class="row-3">
                        <label for="useremail">Email </label>
                        <input type="text" class="form-control" name="useremail" value="{{ $data->email }}">
                    </div>

                    <div class="row-3">
                        <label for="userage">Age </label>
                        <input type="number" class="form-control" name="userage" value="{{ $data->age }}">
                    </div>

                    <div class="row-3">
                        <label for="usercity">City </label>
                        <input type="text" class="form-control" name="usercity"  value="{{ $data->city }}"> 
                    </div>

                    <button type="submit " class="btn btn-primary mt-2">Update </button>
                </form>
            </div>
        </div>
       </div>
</body>
</html>