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
                    <form action="{{ route('addUser')}}" method="post">
                        @csrf           
                        <div class="mb-3">
                            <label for="username">Name</label>
                            <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" name="username">
                            <span class="text-danger">
                                @error('username')
                                    {{ $message}}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="email">Password</label>
                            <input type="password" value="{{ old('userpass') }}" class="form-control @error('userpass') is-invalid @enderror" name="userpass">
                            <span class="text-danger">
                                @error('userpass')
                                    {{ $message}}
                                @enderror
                            </span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" value="{{ old('useremail') }}" class="form-control @error('useremail') is-invalid @enderror" name="useremail">
                            <span class="text-danger">
                                @error('useremail')
                                    {{ $message}}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="age">Age</label>
                            <input type="number" value="{{ old('userage') }}" class="form-control @error('userage') is-invalid @enderror" name="userage">
                           <span class="text-danger">
                                @error('userage')
                                    {{ $message}}
                                @enderror
                            </span>
                        </div>

                      <div class="mb-3">
                            <label  class="form-label">City</label>
                            <select class="form-control" name="usercity">
                                <option value="delhi">Delhi</option>
                                <option value="mumbai">Mumbai</option>    
                                <option value="Goa">Goa</option>
                            </select> 
                            <span class="text-danger">
                                @error('usercity')
                                    {{ $message}}
                                @enderror
                            </span>
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