@extends('layout.master_layout')
@php
    $fruits = ['apple','banana','mango','graphs'];    
@endphp

<script>
    var data = @json($fruits);
    console.log(data);
    data.forEach(function(entry) {
            console.log(entry);
    });
</script>


@push('scripts')
    <script src='jquery.js'></script>   
@endpush

@push('scripts')
    <script src='bootstrap.js'></script>   
@endpush