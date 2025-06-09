 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

 </head>
 <body>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1 style="background-color:gray; text-align:center;color:white"> Eloquent  CRUD</h1>
                    <p style=" text-align:center">
                        <b><u>@yield('title')</u></b>
                    </p>
                
                    <div class="row">
                        <div class="col-8">
                            @if(session('status'))
                             <div class="alert alert-success">
                                 {{ session('status')}} 
                             </div>
                            @endif
                        </div>
                    </div>

                 @yield('content') 
                </div>
            </div>  
        </div>
 </body>
 </html>