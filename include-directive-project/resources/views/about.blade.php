@extends('layout.master_layout')

@section('content')
   <h2> About Page</h2> 
        
          @verbatim
         <h1 id="app">  {{  message }}</h1>
          @endverbatim
   @endsection

@section('title')
About
@endsection


@section('sidebar')
  @parent
    <p>This is dynamic sidebar section</p>
  @endsection


  @push('scripts')
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <script>
      const { createApp } = Vue

        createApp({
          data() {
            return {
              message : "hello ashok and anita"
            }
          }
        }).mount('#app')

  </script>
  @endpush