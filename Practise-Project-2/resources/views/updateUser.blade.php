<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>Add new User</h1>
                    <form  method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="username">Name</label>
                            <input type="text" class="form-control" name="username" value="{{ $data->name }}"><br>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="useremail" value="{{ $data->email }}"><br>
                        </div>
                        <div class="mb-3">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" name="userage" value="{{ $data->age }}"><br>
                        </div>
                      <div class="mb-3">
                            <option>>City</option>
                            <select value="{{ $data->city_name }}"></select>
                            <input type="text" class="form-control" name="usercity"><br>
                      </div>
                     <div class="mb-3">     
                         <button type="submit"  class="btn btn-primary">Submit</button>
                      </div>   
                 </form>   
                </div>
            </div>
        </div>
</body>
</html>