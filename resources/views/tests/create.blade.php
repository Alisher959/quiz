@extends('tests.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Test project</div>
  <div class="card-body">
      
      <form action="{{ url('test') }}" method="post">
        {!! csrf_field() !!}
        <label>Kurs</label></br>
        <input type="text" name="curse" id="curse" class="form-control"></br>
        <label>Dars</label></br>
        <input type="text" name="lesson" id="lesson" class="form-control"></br>
        <label>Savol</label></br>
        <input type="text" name="question" id="question" class="form-control"></br>
        <label>Javob</label></br>
        <input type="text" name="answer" id="answer" class="form-control"></br>
        <label>Variant A</label></br>
        <input type="text" name="variant_1" id="variant_1" class="form-control"></br>
        <label>Variant B</label></br>
        <input type="text" name="variant_2" id="variant_2" class="form-control"></br>
        <label>Variant C</label></br>
        <input type="text" name="variant_3" id="variant_3" class="form-control"></br>
        <label>Variant D</label></br>
        <input type="text" name="variant_4" id="variant_4" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop