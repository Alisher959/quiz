@extends('products.layout')

     

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Product</h2>

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

    

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 

        @csrf

        @method('PUT')

     

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Kurs:</strong>

                    <input type="text" name="curse" value="{{ $product->curse }}" class="form-control" placeholder="Kurs">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Dars:</strong>

                    <input type="text" name="lesson" value="{{ $product->lesson }}" class="form-control" placeholder="Dars">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Savol:</strong>

                    <input type="text" name="question" value="{{ $product->question }}" class="form-control" placeholder="question">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Javob:</strong>

                    <input type="text" name="answer" value="{{ $product->answer }}" class="form-control" placeholder="Javob">

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Variant A:</strong>

                    <input type="text" name="variant_1" value="{{ $product->variant_1 }}" class="form-control" placeholder="Variant">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Variant B:</strong>

                    <input type="text" name="variant_2" value="{{ $product->variant_2 }}" class="form-control" placeholder="Variant">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Variant C:</strong>

                    <input type="text" name="variant_3" value="{{ $product->variant_3 }}" class="form-control" placeholder="Variant">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Variant D:</strong>

                    <input type="text" name="variant_4" value="{{ $product->variant_4 }}" class="form-control" placeholder="Variant">

                </div>

            </div>
            
            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image" class="form-control" placeholder="image">

                    <img src="/public/image/{{ $product->image }}" width="300px">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

     

    </form>

@endsection