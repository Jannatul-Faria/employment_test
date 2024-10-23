@extends('layouts.admin', ['title' => 'My Profile'])

@section('mainContent')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="d-flex gap-3">
                <div class="rounded-lg">
                    <img class="rounded" width="100px" id="imgSrc" alt="profile_image" 
                    src="{{ auth()->check() && auth()->user()->image ? asset('uploads/'.auth()->user()->image) : asset('default.jpg') }}" />
               
                </div>
                <div>
                    <h2 class="fw-bold font-bold">{{ auth()->user()->name }}</h2>
                    <span class="badge bg-warning fs-6 text-capitalize">{{ auth()->user()->user_type }}</span>
                </div>
            </div>
           
            <div>
                <p>Upload Profile</p>
                <div class="upload-container">
                    <form id="imageUploadForm" enctype="multipart/form-data">
                        @csrf
                        <label for="image" class="file-uploader">
                            <input type="file" name="image" id="image" />
                        </label>
                    </form>
                </div>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
              $(document).ready(function() {
                    $('#image').on('change', function(e) {
                    e.preventDefault();

        var formData = new FormData($('#imageUploadForm')[0]);

        $.ajax({
            url: '{{ route("imageUpload") }}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response.success) {
                    alert('Image uploaded successfully!');
                    // Update the image source
                    $('#imgSrc').attr('src', '/' + response.imagePath);
                }
            },
            error: function(response) {
                alert('Failed to upload image.');
            }
        });
    });
});

            </script>
            


        </div>

    </div>

    
@endsection
