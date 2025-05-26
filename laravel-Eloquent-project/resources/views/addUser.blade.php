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
                <div class="col3">
                    <h1>Add users</h1>
                    <form action="" method="POST">
                        @csrf

                    <div class="mb-3">
                        <label for="username">Name </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter User name" >
                    </div>         
                    
                    
                    <div class="mb-3">
                        <label for="useremail">Email </label>
                        <input type="email" name="useremail" class="form-control" placeholder="Enter User Email" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="userage">Age </label>
                        <input type="number" name="userage" class="form-control" placeholder="Enter User age" >
                    </div>
                    
                    <div class="mb-3">
                        <label>City </label>
                        <select>
                            <option value="Rudraprayag">Rudraprayag</option>
                            <option value="Srinager">Srinager</option>
                            <option value="Delhi">Delhi</option>
                        </select>
                         
                    </div>

                    <button type="submit" class="btn btn-primary "> Save</button>

                    </form>
                </div>
            </div>
        </div>
</body>
</html>