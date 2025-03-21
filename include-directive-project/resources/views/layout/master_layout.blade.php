<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashok - @yield('title','website')</title>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    @stack('style')
</head>
<body>
<div>
  <div id='main'>
    <h1>Ashoknegi</h1>
    <div class="header">
        
        <nav>
            <a href="/">Home</a> | 
            <a href="about">About</a> | 
            <a href="post">Post</a>
        </nav>
    </div>

    <div class="container">
      
        <div class="content">

            @hasSection ('content')
                   @yield('content')
            @else
                <h2>.....No content found.../...</h2>
            @endif
                
        
        
        </div>
        <div class="sidebar">
            @section('sidebar')
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="post">Post</a></li>
            </ul>
            @show
        </div> 
    </div>
    <div class="footer">
        <p>ashoknegi@copyright 2023.</p>
      </div>
      </div>
      </div> 
      
     @stack('scripts')
     

      
      </body>
      </html>
        
      