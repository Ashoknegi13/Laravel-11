 @extends('layout.master_layout')

 @section('content')
    <h2> Home Page</h2> 
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro illum veritatis temporibus et? Nobis optio, dicta rerum iure omnis distinctio voluptate asperiores temporibus quod rem voluptatibus quisquam inventore quas delectus, enim, fugit soluta repellendus error sint blanditiis iste. Reprehenderit omnis assumenda ut qui sequi quaerat?</p>     
 @endsection

 @section('title')
    Home
 @endsection

 @push('style')
   <link rel="stylesheet" href="css/bootstrap.css">
 @endpush

 @prepend('style')
   <style>    
 .container{
         background-color: tan;
      }
      </style>
 @endprepend


 