      @extends('layout')

  @section('title')
      Update User Data
  @endsection



  @section('content')
  <form action="  " method="" autocomplete="off">
    @csrf

    <div class="mb-3">
        <label for="username" class="form-label">UserName :</label>
        <input type="text" name="username" class="form-control" value=""  @error('username') is-invalid @enderror >
        <span class="text-danger">
            @error('username')
                {{ $message}}
            @enderror
        </span>
    
    </div>

<div class="mb-3">
        <label for="useremail" class="form-label">Email :</label>
        <input type="email" name="useremail" class="form-control"  >
    </div>

    <div class="mb-3">
        <label for="userage" class="form-label">Age :</label>
        <input type="number" name="userage" class="form-control"   >
    </div>

    <div class="mb-3">
<label for="usercity" class="form-label">City :</label>

            <select name="usercity" class="form-control">
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