@extends('layouts.admin', ['title' => 'Products'])

@section('mainContent')
    <div class="container">
        <div class="products mb-3">
           
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
        
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
        
                <div class="mb-3">
                    <label for="description" class="form-label">Product Description</label>
                    <textarea name="description" class="form-control" id="description" required></textarea>
                </div>
        
                <div class="mb-3">
                    <label for="features" class="form-label">Product Features</label>
                    <div id="featureList">
                        <input type="text" name="features[]" class="form-control mb-2" placeholder="Feature 1" required>
                    </div>
                    <button type="button" id="addFeature" class="btn btn-secondary">Add Feature</button>
                </div>
        
                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
        
                <button type="submit" class="btn btn-primary">Create Product</button>
            </form>
        </div>

       
    </div>

    <script>
        $("#imgSrc").attr('src', "https://ui-avatars.com/api/?background=random&color=fff&name={{ auth()->user()->name }}")
    </script>
@endsection
