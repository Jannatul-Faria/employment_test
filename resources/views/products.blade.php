@extends('layouts.admin', ['title' => 'Products'])

@section('mainContent')
    <div class="container">
        <div class="products mb-3">
            <div class="text-end">
                <span class="btn btn-primary"><a class="page-link" href="{{ route('products.create') }}">create</a></span>
            </div>
           
           
            <div class="row">
                @foreach($products as $product)
                <div class="__single  mb-3">
                    <div class="image">
                        <img src="{{ asset('storage/'.$product->image) }}" class="w-100" alt="{{ $product->name }}">
                    </div>
                    <div>
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <div>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div>
                            <p class="fw-bold m-0">Features:</p>
                            <ul>
                                @foreach($product->features as $feature)
                                    <li>{{ $feature->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
              
                @endforeach
            </div>


           
        </div>

        <nav aria-label="Page navigation example mt-2">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <script>
        $("#imgSrc").attr('src', "https://ui-avatars.com/api/?background=random&color=fff&name={{ auth()->user()->name }}")
    </script>
@endsection
