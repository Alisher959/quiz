@extends('tests.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">tests Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Kurs : {{ $tests->curse }}</h5>
        <p class="card-text">Dars : {{ $tests->lesson }}</p>
        <p class="card-text">Savol : {{ $tests->question }}</p>
        <p class="card-text">Javob : {{ $tests->answer }}</p>
        <p class="card-text">Variant A : {{ $tests->variant_1 }}</p>
        <p class="card-text">Variant B : {{ $tests->variant_2 }}</p>
        <p class="card-text">Variant C : {{ $tests->variant_3 }}</p>
        <p class="card-text">Variant D : {{ $tests->variant_4 }}</p>
  </div>
       
    </hr>
  
  </div>
</div>