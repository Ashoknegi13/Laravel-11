 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Laravel Cutome Validation </title>
 </head>
 <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>All User</h1>
                    <form action="">
                        @csrf
                        <div class="mb-3">
                          <label for="username">Name</label>
                          <input type="text" name="username" class="form-control" @error('username') is-invalid @enderror               value="{{ old('username')}}">
                            <span class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                          <label for="useremail">Email</label>
                          <input type="email" name="useremail" class="form-control" @error('useremail') is-invalid @enderror       value="{{ old('useremail')}}">
                            <span class="text-danger">
                                    @error('useremail')
                                        {{ $message }}
                                    @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 </body>    
 </html>