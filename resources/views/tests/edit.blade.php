@extends('tests.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

    <form action="{{ url('test/' .$tests->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <label>Kurs</label></br>
      <input type="text" name="curse" id="curse" value="{{$tests->curse}}" class="form-control"></br>
      <label>Dars</label></br>
      <input type="text" name="lesson" id="lesson"  value="{{$tests->lesson}}" class="form-control"></br>
      <label>Savol</label></br>
      <input type="text" name="question" id="question"  value="{{$tests->curse}}"  class="form-control"></br>
      <!-- Variant start -->
      <div class="row justify-content-center">
        <div class="col-1">
          <input class="form-check-input" onclick="variant1()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
          </label>
        </div>
        <div class="col-11">
          <label>Variant A</label></br>
          <input type="text" name="variant_1" id="variant_1"   value="{{$tests->variant_1}}" class="form-control"></br>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-1">
          <input class="form-check-input" onclick="variant2()" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
          </label>
        </div>
        <div class="col-11">
          <label>Variant B</label></br>
          <input type="text" name="variant_2" id="variant_2"  value="{{$tests->variant_2}}"  class="form-control"></br>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-1">
          <input class="form-check-input" onclick="variant3()" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
          <label class="form-check-label" for="flexRadioDefault3">
          </label>
        </div>
        <div class="col-11">
          <label>Variant C</label></br>
          <input type="text" name="variant_3" id="variant_3"  value="{{$tests->variant_3}}"  class="form-control"></br>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-1">
          <input class="form-check-input" onclick="variant4()" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
          <label class="form-check-label" for="flexRadioDefault4">
          </label>
        </div>
        <div class="col-11">
          <label>Variant D</label></br>
          <input type="text" name="variant_4" id="variant_4"  value="{{$tests->variant_4}}"  class="form-control"></br>
        </div>
      </div>

      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop