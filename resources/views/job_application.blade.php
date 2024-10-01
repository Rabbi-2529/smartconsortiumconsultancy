@extends('frontend.master')

@section('custom_css')
    <link href="{{ asset('assets/css/service-details.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('banner-content')
    <div class="banner-section">
        <h1 class="heading split-collab">Job Application for <br>
        {{ $job_opportunity->title }}</h1>
    </div>
@endsection

@section('main-content')
    <!-- service details -->
    <div class="service-details">
        <div class="animated-circle right"></div>
        <div class="animated-circle left"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 order-2 order-lg-1">
                    <div class="left-bar">
                        <div class="service-1">
                            <div class="col-12">
                                <div class="left-bar">
                                    <div class="user-comment">
                                        <p>Apply here</p>
                                        <h2 class="comment-title">Job Application for {{ $job_opportunity->title }}</h2>

                                        {{-- Success Message --}}
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        {{-- Error Message --}}
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        {{-- Validation Errors --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="comment-box">
                                            <form action="{{ route('job_applicantion_store.client', $job_opportunity->id) }}" class="row g-4" method="POST" enctype="multipart/form-data" id="job-application-form">
                                                @csrf
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                                </div>
                                                <div class="col-md-6">
    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ old('phone') }}">
    <div id="phone-error" class="invalid-feedback" style="display: none;"></div>
</div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="experience" placeholder="Experience in years" value="{{ old('experience') }}" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="expected_salary" placeholder="Expected salary" value="{{ old('expected_salary') }}" required>
                                                </div>
                                                <div class="col-6">
                                                    <input type="file" class="form-control" name="resume" required>
                                                </div>

                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="button primary-link-btn">
                                                        Submit
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
            </div>
        </div>
    </div>
    <!-- service details -->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('job-application-form');
        const phoneInput = form.querySelector('input[name="phone"]');
        const emailInput = form.querySelector('input[name="email"]');
        const phoneError = document.getElementById('phone-error');

        // Validate phone number format
        phoneInput.addEventListener('input', function() {
            const validPrefixes = ['012', '013', '014', '015', '016', '017', '018', '019'];
            const value = this.value.replace(/[^0-9]/g, ''); // Allow only numbers

            // Limit to 11 digits
            if (value.length > 11) {
                this.value = value.slice(0, 11);
            } else {
                this.value = value;
            }

            // Check if it starts with a valid prefix
            const startsWithValidPrefix = validPrefixes.some(prefix => value.startsWith(prefix));
            if (value.length >= 3 && value.length < 11 && !startsWithValidPrefix) {
                phoneError.textContent = 'Invalid format';
                phoneError.style.display = 'block';
                this.classList.add('is-invalid'); // Bootstrap class for invalid input
                this.setCustomValidity('Invalid phone number format.');
            } else if (value.length === 11 && !startsWithValidPrefix) {
                phoneError.textContent = 'Invalid format';
                phoneError.style.display = 'block';
                this.classList.add('is-invalid');
                this.setCustomValidity('Invalid phone number format.');
            } else {
                phoneError.style.display = 'none';
                this.classList.remove('is-invalid'); // Remove invalid class
                this.setCustomValidity('');
            }
        });

        // Validate email format
        emailInput.addEventListener('input', function() {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(this.value)) {
                this.classList.add('is-invalid'); // Bootstrap class for invalid input
                this.setCustomValidity('Please enter a valid email address.');
            } else {
                this.classList.remove('is-invalid'); // Remove invalid class
                this.setCustomValidity('');
            }
        });
    });
</script>

@endsection
