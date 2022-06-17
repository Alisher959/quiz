@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Kurs:</strong>
                <input type="text" name="curse" class="form-control" placeholder="Kurs">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Dars:</strong>
                <input type="text" name="lesson" class="form-control" placeholder="Dars">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Savol:</strong>
                <input type="text" name="question" class="form-control" placeholder="Savol">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Javob:</strong>
                <input type="text" name="answer" class="form-control" placeholder="Javob">
            </div>
        </div>
        <div class="col-1">
            <input class="form-check-input" onclick="variant1()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            </label>
        </div>
        <div class="col-11">
            <label>Variant A</label></br>
            <input type="text" name="variant_1" id="variant_1" class="form-control"></br>
        </div>


        <div class="col-1">
            <input class="form-check-input" onclick="variant2()" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
            </label>
        </div>
        <div class="col-11">
            <label>Variant B</label></br>
            <input type="text" name="variant_2" id="variant_2" class="form-control"></br>
        </div>


        <div class="col-1">
            <input class="form-check-input" onclick="variant3()" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
            </label>
        </div>
        <div class="col-11">
            <label>Variant C</label></br>
            <input type="text" name="variant_3" id="variant_3" class="form-control"></br>
        </div>


        <div class="col-1">
            <input class="form-check-input" onclick="variant4()" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
            </label>
        </div>
        <div class="col-11">
            <label>Variant D</label></br>
            <input type="text" name="variant_4" id="variant_4" class="form-control"></br>
        </div>

        <div class="col-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection