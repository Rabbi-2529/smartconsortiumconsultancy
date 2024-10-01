@extends('admin.master.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<style>
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
</style>
@section('content')
<div class="container">
    <h1>Add Course</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required>
        </div>
        <div class="form-group">
            <label for="course_teacher_name">Teacher Name</label>
            <input type="text" class="form-control" id="course_teacher_name" name="course_teacher_name" required>
        </div>
        <div class="form-group">
            <label for="course_teacher_image">Teacher Image</label>
            <input type="file" class="form-control" id="course_teacher_image" name="course_teacher_image">
        </div>
        <div class="form-group">
            <label for="course_price">Course Price</label>
            <input type="number" step="0.01" class="form-control" id="course_price" name="course_price" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="text"  class="network-info-input datepicker form-control" id="start_date" name="start_date" required>
            
        </div>
        <div class="form-group">
            <label for="deadline_date">Deadline Date</label>
            <input type="text" class="network-info-input datepicker form-control" id="deadline_date" name="deadline_date" required>
        </div>
        <div class="form-group">
            <label for="course_description">Course Description</label>
            <textarea class="form-control" id="course_description" name="course_description"></textarea>
        </div>
      
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
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
