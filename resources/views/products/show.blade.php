@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kurs:</strong>
                {{ $product->curse }}
            </div>
        </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dars:</strong>
                {{ $product->lesson }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Savol:</strong>
                {{ $product->question }}
            </div>
        </div>   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Javob:</strong>
                {{ $product->answer }}
            </div>
        </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Javob:</strong>
                {{ $product->answer }}
            </div>
        </div>     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Variant A:</strong>
                {{ $product->variant_1 }}
            </div>
        </div>     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Variant B:</strong>
                {{ $product->variant_2 }}
            </div>
        </div>     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Variant C:</strong>
                {{ $product->variant_3 }}
            </div>
        </div>      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Variant D:</strong>
                {{ $product->variant_4 }}
            </div>
        </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/public/image/{{ $product->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection