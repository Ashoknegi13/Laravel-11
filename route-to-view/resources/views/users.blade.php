@foreach ($user as $id=>$item)
        <h3>{{ $id }} | {{ $item['name'] }} | {{ $item['age'] }} | {{ $item['city'] }}
            <a href="{{route('view.user.profile' , $id) }}">show</a>
        </h3>
@endforeach


{{-- <h1>{{ $user}}</h1>
<h3>{{ $city }}</h3>
<h2>{{ $address }}</h2>
 
{!!  $age !!} --}}