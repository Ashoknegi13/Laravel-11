 {{ "aSHOK" }}

@php
    $name = "annu";  
    $user = ['ashok','annu','ayush','karan'];  
@endphp
<br>
 {{ $name }}

 <br>


 @if (21>= 18)
     {{"ashok"}}
  @else
   {{ "undeage" }}   
 @endif
 <br>


 This is value :
 @for ($i = 1; $i <=5 ; $i++)
      {{ $i }}
 @endfor

 <br>
 <ul>
 @foreach ($user as $value )
    @if ($loop->even)
    <li style="color:red"> {{ $value }}</li>       
    @elseif($loop->odd)
    <li style="color:green"> {{ $value }}</li>
    @else
    <li > {{ $value }}</li>
    @endif       
 
 @endforeach
 </ul>
 {{--ji--}}