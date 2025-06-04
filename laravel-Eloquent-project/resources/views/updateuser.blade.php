      @extends('layout')

  @section('title')
      Update User Data
  @endsection



  @section('content')
  <form action="{{ route('user.update',$user->id) }}" method="" autocomplete="off">
    @csrf

    <div class="mb-3">
        <label for="username" class="form-label">UserName :</label>
        <input type="text" name="username" class="form-control" value="{{ $user->name}}"  @error('username') is-invalid @enderror >
        <span class="text-danger">
            @error('username')
                {{ $message}}
            @enderror
        </span>
    
    </div>

<div class="mb-3">
        <label for="useremail" class="form-label">Email :</label>
        <input type="email" name="useremail" class="form-control" value="{{ $user->email}}" @error('useremail') is-invalid @enderror>
    <span class="text-danger">
            @error('useremail')
                {{ $message}}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="userage" class="form-label">Age :</label>
        <input type="number" name="userage" class="form-control"   value="{{ $user->age}}" @error('userage') is-invalid @enderror>
     <span class="text-danger">
            @error('userage')
                {{ $message}}
            @enderror
        </span>
    </div>

    <div class="mb-3">
<label for="usercity" class="form-label">City :</label>

            <select name="usercity" class="form-control">
                <option value="{{ $user->city}}">{{ $user->city}}</option>

                <option value="Rudraprayag">Rudraprayag</option>

                 <option value="Srinager">Srinager</option>
                  <option value="Devprayag">Devprayag</option>
            </select>
    </div>

    <div>
        <button type="submit" class="btn btn-success" value="save">Submit</button>
    </div>

  </form>
  
  @endsection