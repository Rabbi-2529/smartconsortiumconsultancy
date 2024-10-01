@extends('admin.master.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<style>
    /* Custom CSS for Create User with Membership Form */
 

/* Your custom styles here */
.datepicker-dropdown {
  top: 0;
  left: 0;
}

.datepicker table tr td.today, span.focused {
  border-radius: 50% !important;
}

thead tr:nth-child(2) {
    background: rgb(171,0,255);
    background: radial-gradient(circle, rgba(171,0,255,0.6166841736694677) 33%, rgba(134,21,219,0.6166841736694677) 90%);
}

thead tr:nth-child(3) th {
  color: #FF80AB !important;
  padding-top: 20px;
  padding-bottom: 10px;
}

.dow, .old-day, .day, .new-day {
  width: 46px !important;
  height: 46px !important;
  border-radius: 0px !important;
}

.old-day:hover, .day:hover, .new-day:hover, .month:hover, .year:hover, .decade:hover, .century:hover {
  border-radius: 50% !important;
  background-color: #eee;
}

.date-active {
  border-radius: 50% !important;
  background-image: linear-gradient(#90CAF9, #64B5F6) !important;
  color: #fff !important;
}

.prev, .next, .datepicker-switch {
  border-radius: 0 !important;
  padding: 20px 10px !important;
  text-transform: uppercase;
  font-size: 20px;
  color: #fff;
  opacity: 0.8; 
}

.prev:hover, .next:hover, .datepicker-switch:hover {
  background-color: inherit !important;
  opacity: 1;
}

.datepicker td, .datepicker th {
    padding: 10px;
}

.datepicker table tr td.day:hover {
    color: rgb(46, 46, 46);
}

.time-edit-btn {
    color: rgb(247, 247, 247);
    font-size: 18px;
    border-radius: 10px;
    padding: 10px 15px;
    background-color: #095dac;
    transition: .3s linear;
}

.time-edit-btn:hover {
    background-color: #6116da;
}

.time-edit-btn span {
    color: rgb(247, 247, 247);
    font-size: 18px;
}

.custom-submit-btn {
    color: rgb(247, 247, 247);
    font-size: 18px;
    border-radius: 10px;
    padding: 0;
    background-color: #026d80;
    transition: 0.3s linear;
    opacity: 0;
    pointer-events: none;
}

.custom-submit-btn:hover {
    background-color: #009bb6;
    opacity: 1;
}

.button-show {
    padding: 10px 25px;
    opacity: 1;
    pointer-events: auto;
}

.date-time-submit-div {
    max-height: 0;
    transition: 0.3s;
}

.custom-show {
    max-height: 200px;
}

.dropdown-menu {
    color: blue;
}

.set-today-date-div {
    max-height: 0;
}

.set-today-date {
    font-size: 14px;
    font-weight: 600;
    color: #347abd;
    opacity: 0;
    cursor: pointer;
}

.set-today-date:hover {
    transform: scale(1.02);
}

.set-today-date-div-show {
    max-height: 50px;
}

.set-today-date-show {
    opacity: 1;
}

.device-date-div {
    position: relative;
}

.date-calendar-icon {
    position: absolute;
    font-size: 20px;
    right: 15px;
    top: 38px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-control {
    border-radius: 0.5rem;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

.form-check-input {
    margin-top: 0.3rem;
}

.form-check-label {
    margin-left: 0.5rem;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 0.5rem;
    padding: 0.75rem 1.25rem;
    font-size: 1rem;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.text-danger {
    font-size: 0.875rem;
    color: #dc3545;
}

.card {
    border-radius: 0.5rem;
    overflow: hidden;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 2rem;
}

.card-header {
    background-color: #f8f9fa;
    padding: 1rem;
    font-size: 1.25rem;
    border-bottom: 1px solid #ddd;
}

.mt-4 {
    margin-top: 2rem;
}
</style>
@section('content')
    <div class="container mt-4">
        <h1>Create User with Membership</h1>
        <form action="{{ route('membership-users.store') }}" method="POST">
            @csrf
            <div class="row">
                <!-- First Name -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" required>
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Last Name -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

    

                <!-- Password -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            <!-- Email -->
            <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Membership -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="membership_id">Membership</label>
                        <select name="membership_id" id="membership_id" class="form-control" required>
                            <option value="">Select Membership</option>
                            @foreach ($memberships as $membership)
                                <option value="{{ $membership->id }}" {{ old('membership_id') == $membership->id ? 'selected' : '' }}>
                                    {{ $membershipTypes[$membership->membership_type] ?? 'Unknown' }}
                                </option>
                            @endforeach
                        </select>
                        @error('membership_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Membership Start Date -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="membership_start_date">Membership Start Date</label>
                       
                        <input type="text" name="membership_start_date" id="date" class="network-info-input datepicker form-control"  placeholder="yyyy-mm-dd" readonly>
                        @error('membership_start_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Membership End Date -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="membership_end_date">Membership End Date</label>
                        <input type="text" name="membership_end_date" id="date" class="network-info-input datepicker form-control"  placeholder="yyyy-mm-dd" readonly>
             
                        @error('membership_end_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Status -->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-check">
                            <input type="radio" id="status_active" name="status" value="1" class="form-check-input" required>
                            <label for="status_active" class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="status_inactive" name="status" value="0" class="form-check-input" required>
                            <label for="status_inactive" class="form-check-label">Inactive</label>
                        </div>
                        @error('status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection
@section('custom_js')
<script src="{{ asset('assets/admin/assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script>
    $(document).ready(function (){
        // Datepicker initialization
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });

        // CKEditor initialization
        ClassicEditor
            .create(document.querySelector('#ckeditor-classic'))
            .then(editor => {
                // Update the hidden input with CKEditor data before form submission
                $('#job-form').on('submit', function() {
                    document.querySelector('#description').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection