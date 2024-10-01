
@extends('admin/master/master')

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">

<!-- Apex Chart CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/apexcharts.css') }}">

<!-- Data Table CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/dataTables.min.css') }}">

<!-- Text Editor CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/editor-katex.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lib/editor.atom-one-dark.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lib/editor.quill.snow.css') }}">

<!-- Date Picker CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/flatpickr.min.css') }}">

<!-- Calendar CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/full-calendar.css') }}">

<!-- Vector Map CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/jquery-jvectormap-2.0.5.css') }}">

<!-- Popup CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/magnific-popup.css') }}">

<!-- Slick Slider CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/slick.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/smart.css') }}">
<style>
/* Internal CSS for styling the password visibility toggle */
.btn-light {
    background-color: transparent;
    border: none;
    padding: 0;
    font-size: 1.25rem;
    cursor: pointer;
    position: absolute;
    right: 0;
    top: 70% !important;
    transform: translateY(-50%);
}

.position-relative {
    position: relative;
}
</style>

@section('content')
  
<div class="container">
    <div class="row gy-4">
        <div class="col-lg-4">
            <div class="user-grid-card position-relative border radius-16 overflow-hidden bg-base h-100">
                <img src="{{ asset('assets/images/1721036506.jpg') }}" alt="" class="w-100 object-fit-cover">
                <div class="pb-24 ms-16 mb-24 me-16 mt--100">
                    <div class="text-center border border-top-0 border-start-0 border-end-0">
                        <!-- Display the current profile image -->
                        <img id="profileImage" src="{{ $user->profile_image ? asset('public/upload/profile_images/' . basename($user->profile_image)) : asset('assets/images/default-profile.png') }}" alt="" class="border br-white border-width-2-px w-200-px h-200-px rounded-circle object-fit-cover">
                        <h6 class="mb-0 mt-16">{{ $user->first_name }} {{ $user->last_name }}</h6>
                        <span class="text-secondary-light mb-16">{{ $user->email }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-body p-24">
                @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <ul class="nav border-gradient-tab nav-pills mb-20 d-inline-flex" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center px-24 active" id="pills-edit-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-edit-profile" type="button" role="tab" aria-controls="pills-edit-profile" aria-selected="true">
                                Edit Profile
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center px-24" id="pills-change-password-tab" data-bs-toggle="pill" data-bs-target="#pills-change-password" type="button" role="tab" aria-controls="pills-change-password" aria-selected="false" tabindex="-1">
                                Change Password
                            </button>
                        </li>
                    </ul>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-edit-profile" role="tabpanel" aria-labelledby="pills-edit-profile-tab" tabindex="0">
                            <h6 class="text-md text-primary-light mb-16">Profile Image</h6>
                            <!-- Upload Image Start -->
                            <div class="mb-24 mt-16">
                            <div class="avatar-upload">
                                    <div class="avatar-edit position-absolute bottom-0 end-0 me-24 mt-16 z-1 cursor-pointer">
                                        <input type="file" id="profile_image" name="profile_image" accept=".png, .jpg, .jpeg" hidden>
                                        <label for="profile_image" class="w-32-px h-32-px d-flex justify-content-center align-items-center bg-primary-50 text-primary-600 border border-primary-600 bg-hover-primary-100 text-lg rounded-circle">
                                            <span class="iconify" data-icon="solar:camera-outline" data-inline="false"></span>
                                        </label>
                                    </div>
                                    <div class="avatar-preview">
                                    <div id="imagePreview" class="rounded-circle object-fit-cover" style="background-image: url('{{ $user->profile_image ? asset('public/upload/profile_images/' . basename($user->profile_image)) : asset('assets/images/default-profile.png') }}');"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload Image End -->
                          
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="first_name" class="form-label fw-semibold text-primary-light text-sm mb-8">First Name <span class="text-danger-600">*</span></label>
                                            <input type="text" class="form-control radius-8" id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="last_name" class="form-label fw-semibold text-primary-light text-sm mb-8">Last Name <span class="text-danger-600">*</span></label>
                                            <input type="text" class="form-control radius-8" id="last_name" name="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                            <input type="email" class="form-control radius-8" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="address" class="form-label fw-semibold text-primary-light text-sm mb-8">Address</label>
                                            <input type="text" class="form-control radius-8" id="address" name="address" value="{{ old('address', $user->address) }}" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="city" class="form-label fw-semibold text-primary-light text-sm mb-8">City</label>
                                            <input type="text" class="form-control radius-8" id="city" name="city" value="{{ old('city', $user->city) }}" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="state" class="form-label fw-semibold text-primary-light text-sm mb-8">State</label>
                                            <input type="text" class="form-control radius-8" id="state" name="state" value="{{ old('state', $user->state) }}" placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="postal_code" class="form-label fw-semibold text-primary-light text-sm mb-8">Postal Code</label>
                                            <input type="text" class="form-control radius-8" id="postal_code" name="postal_code" value="{{ old('postal_code', $user->postal_code) }}" placeholder="Enter Postal Code">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="website" class="form-label fw-semibold text-primary-light text-sm mb-8">Website</label>
                                            <input type="url" class="form-control radius-8" id="website" name="website" value="{{ old('website', $user->website) }}" placeholder="Enter Website URL">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="phone_number" class="form-label fw-semibold text-primary-light text-sm mb-8">Phone Number</label>
                                            <input type="text" class="form-control radius-8" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-20">
                                            <label for="bio" class="form-label fw-semibold text-primary-light text-sm mb-8">Bio</label>
                                            <textarea class="form-control radius-8" id="bio" name="bio" rows="4" placeholder="Enter Bio">{{ old('bio', $user->bio) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <button type="submit" class="btn btn-primary border border-primary-600 text-md px-56 py-12 radius-8">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="pills-change-password" role="tabpanel" aria-labelledby="pills-change-password-tab" tabindex="0">
    <form action="{{ route('profile.updatePassword') }}" method="POST">
        @csrf

        <div class="mb-20 position-relative">
            <label for="current_password" class="form-label fw-semibold text-primary-light text-sm mb-8">
                Current Password <span class="text-danger-600">*</span>
            </label>
            <input type="password" class="form-control radius-8" id="current_password" name="current_password" placeholder="Enter Current Password">
            <button type="button" class="btn btn-light position-absolute end-0 top-70 translate-middle-y" onclick="togglePasswordVisibility('current_password')">
                <span class="iconify" data-icon="ic:round-visibility" data-inline="false"></span>
            </button>
        </div>

        <div class="mb-20 position-relative">
            <label for="new_password" class="form-label fw-semibold text-primary-light text-sm mb-8">
                New Password <span class="text-danger-600">*</span>
            </label>
            <input type="password" class="form-control radius-8" id="new_password" name="new_password" placeholder="Enter New Password">
            <button type="button" class="btn btn-light position-absolute end-0 top-70 translate-middle-y" onclick="togglePasswordVisibility('new_password')">
                <span class="iconify" data-icon="ic:round-visibility" data-inline="false"></span>
            </button>
        </div>

        <div class="mb-20 position-relative">
            <label for="new_password_confirmation" class="form-label fw-semibold text-primary-light text-sm mb-8">
                Confirm New Password <span class="text-danger-600">*</span>
            </label>
            <input type="password" class="form-control radius-8" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm New Password">
            <button type="button" class="btn btn-light position-absolute end-0 top-70 translate-middle-y" onclick="togglePasswordVisibility('new_password_confirmation')">
                <span class="iconify" data-icon="ic:round-visibility" data-inline="false"></span>
            </button>
        </div>

        <div class="d-flex align-items-center justify-content-center gap-3">
            <button type="submit" class="btn btn-primary border border-primary-600 text-md px-56 py-12 radius-8">
                Change Password
            </button>
        </div>
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  </main>
  <!-- jQuery library js -->
<script src="{{ asset('assets/js/lib/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap js -->
<script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>

<!-- Apex Chart js -->
<script src="{{ asset('assets/js/lib/apexcharts.min.js') }}"></script>

<!-- Data Table js -->
<script src="{{ asset('assets/js/lib/dataTables.min.js') }}"></script>

<!-- Iconify Font js -->
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>


<!-- jQuery UI js -->
<script src="{{ asset('assets/js/lib/jquery-ui.min.js') }}"></script>

<!-- Vector Map js -->
<script src="{{ asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- Popup js -->
<script src="{{ asset('assets/js/lib/magnific-popup.min.js') }}"></script>

<!-- Slick Slider js -->
<script src="{{ asset('assets/js/lib/slick.min.js') }}"></script>

<!-- Main js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
function togglePasswordVisibility(inputId) {
    const passwordInput = document.getElementById(inputId);
    const button = passwordInput.nextElementSibling;
    const isPassword = passwordInput.type === 'password';

    passwordInput.type = isPassword ? 'text' : 'password';
    button.querySelector('.iconify').setAttribute('data-icon', isPassword ? 'ic:round-visibility-off' : 'ic:round-visibility');
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('profile_image');
    const imagePreview = document.getElementById('imagePreview');

    fileInput.addEventListener('change', function(event) {
        if (event.target.files && event.target.files[0]) {
            const file = event.target.files[0];
            console.log('Selected file:', file);
            console.log('File name:', file.name);
            console.log('File size:', file.size);
            console.log('File type:', file.type);

            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.style.backgroundImage = `url(${e.target.result})`;
            };

            reader.readAsDataURL(file);
        }
    });
});
</script>
  @endsection