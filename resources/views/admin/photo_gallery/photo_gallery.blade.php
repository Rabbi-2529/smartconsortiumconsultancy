<!-- resources/views/admin/about_ceos/create.blade.php -->

@extends('admin.master.master')
@section('custom_css')
    <!-- dropzone css -->
    <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/css/custom_style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Photo Upload</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('photo_gallery.create') }}">Photo Gallery</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="">
                    <!-- Form for adding images -->
                    <form method="POST" enctype="multipart/form-data" action="{{ route('photo_gallery.store') }}">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="photo-upload-div">
                                <div class="photos-div">
                                    <p class="text-center add-pics py-3 my-auto"><span>Add Picture</span></p>
                                    <input class="" type="file" name="photo_url" id="photos">
                                    <img id="wizardPicturePreview" class="img-account-profile mb-2">
                                </div>
                            </div>
                            <div class="right-caption-div col-md-4 col-12">
                                <label for="caption" class="form-label text-center">Caption:</label>
                                <input type="text" name="caption" id="caption" value="{{ old('caption') }}" required>
                                <!-- Error message display for caption -->
                                <small class="text-muted" style="color: #FFB6C1;">Supported image formats: JPG, JPEG, PNG, GIF</small>
                                <div id="caption-error" class="text-danger"></div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="form-submit submit-btn custom-submit-btn ms-2" id="submit-btn">Save Image</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row gx-4 justify-content-center">
                        <div>
                            <h2 class="text-center mt-5 mb-4">Photo Gallery</h2>
                        </div>
                        @forelse ($photos as $photo)
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="card">
                                   
                                    <!--<img src="{{ $photo->photo_url }}" class="card-img-top" alt="{{ $photo->caption }}" onclick="openPopup('{{ $photo->photo_url }}')">-->
                                   
                                    <img src="{{asset('storage/app/public/' . $photo->photo_url) }}" class="card-img-top" alt="{{ $photo->caption }}" onclick="openPopup('{{asset('storage/app/public/' . $photo->photo_url) }}')">
                                 <div class="card-body">
    <p class="card-text">{{ $photo->caption }}</p>
    
    <!-- Form for deleting the photo -->
    <form action="{{ route('photo_gallery.destroy', $photo->id) }}" method="POST" class="delete-form" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-button">Delete</button>
    </form>
    
    <!-- Button for editing the photo -->
    <a href="{{ route('photo_gallery.edit', $photo->id) }}" class="btn btn-primary">Edit</a>
</div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">No photos available.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div id="popup-container" class="popup-container">
        <div class="popup">
            <img id="popup-image" src="{% static 'img/404-tick.png' %}" alt="" class="success-tick popup-image-gallery">

            {{-- <button class="slideshow-arrow left-arrow" onclick="prevImage()"><i class="fa-solid fa-angle-left"></i></button>
            <button class="slideshow-arrow right-arrow" onclick="nextImage()"><i class="fa-solid fa-angle-right"></i></button> --}}

            <div class="close-icon-div">
                <span class="close-icon mx-auto"><i class="fa-solid fa-xmark fa-xl"></i></span>
            </div>
        </div>
    </div>
@endsection


@section('custom_js')
<!-- ckeditor -->
<script src="{{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

<!-- init js -->
<script src="{{ asset('assets/admin/assets/js/pages/form-editor.init.js') }}"></script>
<!-- dropzone js -->
<script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $("#photos").change(function(){
        readURL(this);
    });

    var imagesArray = [
                @foreach ($photos as $photo)
                    {
                        imageUrl: '{{ asset('storage/' . $photo->photo_url) }}',
                        caption: '{{ $photo->caption }}'
                    },
                @endforeach
            ];
    // console.log('imagesArray: ', imagesArray);

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('.img-account-profile').on('click', function(){
        $('#photos').click()
        console.log('clicked')
    })

    function showImage(index, imageUrl) {
        // Set the image and caption based on the current index
        $('#popup-image').attr('src', imageUrl);
        //$('#popupCaption').text(caption);

        // Add and remove the 'show' class to trigger the transition
        $('.popup-image').removeClass('show');
        setTimeout(function () {
            $('.popup-image').addClass('show');
        }, 50);

        // Disable left arrow if it's the first image
        $('.left-arrow').prop('disabled', index === 0);

        // Disable right arrow if it's the last image
        $('.right-arrow').prop('disabled', index === imagesArray.length - 1);
    }

    var currentImageIndex = 0;

    function nextImage() {
        console.log('nextImage clicked')
        // Show the next image in the slideshow
        if (currentImageIndex < imagesArray.length - 1) {
            currentImageIndex++;
            showImage(currentImageIndex, imagesArray[currentImageIndex].imageUrl);
        }
    }

    function prevImage() {
        console.log('prevImage clicked')
        // Show the previous image in the slideshow
        if (currentImageIndex > 0) {
            currentImageIndex--;
            showImage(currentImageIndex, imagesArray[currentImageIndex].imageUrl);
        }
    }


    function openPopup(imageUrl) {
        console.log('clicked')
        //$('#popup-image').attr('src', imageUrl);
        currentImageIndex = 0;
        showImage(currentImageIndex, imageUrl);

        // Add and remove the 'show' class to trigger the transition
        $('.popup').removeClass('show');
        setTimeout(function () {
            $('.popup').addClass('show');
        }, 50);

        $('#popup-container').addClass('show');
        //$('#popupCaption').text(caption);
    }

    $('.close-icon').on('click', function(){
        $('#popup-container').removeClass('show');
    })
</script>

<script>
    $(document).ready(function() {
        $('.delete-button').on('click', function(event) {
            event.preventDefault();
            var form = $(this).closest('.delete-form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection

