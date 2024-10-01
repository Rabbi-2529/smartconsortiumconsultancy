@extends('admin.master.master')
@section('custom_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<style>

.datepicker{
    padding: 8px;
}
.datepicker-dropdown {
  top: 0;
  left: 0;
}

.datepicker table tr td.today, span.focused {
  border-radius: 50% !important;
}

thead tr:nth-child(2) {
    /* background-color: #FF80AB !important; */
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

.datepicker td, .datepicker th{
    padding: 10px;
}

.datepicker table tr td.day:hover{
    color: rgb(46, 46, 46);
}

.time-edit-btn{
    color: rgb(247, 247, 247);
    font-size: 18px;
    border-radius: 10px;
    padding: 10px 15px;
    background-color: #095dac;
    transition: .3s linear;
}

.time-edit-btn:hover{
    background-color: #6116da;
}

.time-edit-btn span{
    color: rgb(247, 247, 247);
    font-size: 18px;
}

.custom-submit-btn{
    color: rgb(247, 247, 247);
    font-size: 18px;
    border-radius: 10px;
    padding: 0;
    background-color: #026d80;
    transition: 0.3s linear;
    opacity: 0;
    pointer-events: none;
}

.custom-submit-btn:hover{
    background-color: #009bb6;
    opacity: 1;
}

.button-show{
    padding: 10px 25px;
    opacity: 1;
    pointer-events: auto;
}

.date-time-submit-div{
    max-height: 0;
    transition: 0.3s;
}

.custom-show{
    max-height: 200px;
}

.dropdown-menu{
    color: blue;
}

.set-today-date-div{
    max-height: 0;
}

.set-today-date{
    font-size: 14px;
    font-weight: 600;
    color: #347abd;
    opacity: 0;
    cursor: pointer;
}

.set-today-date:hover{
    transform: scale(1.02);
}

.set-today-date-div-show{
    max-height: 50px;
}

.set-today-date-show{
    opacity: 1;
}


.device-date-div{
    position: relative;
}

.date-calendar-icon{
    position: absolute;
    font-size: 20px;
    right: 15px;
    top: 38px;
}

.form-group{
    margin-bottom: 20px;
}

</style>
@endsection
@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Add New Job Opportunity</h1>

    {{-- Display validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Display success message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('job-opportunities.store') }}" method="POST" enctype="multipart/form-data" class="p-4 shadow-sm rounded" style="background-color: #f9f9f9;">
        @csrf

        <div class="row">
            <div class="form-group col-md-6">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="vacancy">Vacancy</label>
                <input type="number" class="form-control" id="vacancy" name="vacancy" value="{{ old('vacancy') }}" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="experience">Experience (in years)</label>
                <input type="text" class="form-control" id="experience" name="experience" value="{{ old('experience') }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="job_type">Job Type</label>
                <input type="text" class="form-control" id="job_type" name="job_type" value="{{ old('job_type') }}" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="salary">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" value="{{ old('salary') }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="deadline">Application Deadline</label>
                <input type="text" id="device-date" name="deadline" class="network-info-input datepicker form-control" placeholder="mm-dd-yyyy" value="{{ old('deadline') }}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="image">Job Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        </div>

        <div class="form-group">
            <label for="description">Job Description</label>
            <textarea class="form-control" id="ckeditor-classic" name="description">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-3">Add Job</button>
    </form>
</div>
@endsection

@section('custom_js')

    <script src={{ asset ('assets/admin/assets/js/bootstrap-datepicker.js')}}></script>
    <script src={{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}></script>
    <script src={{ asset('assets/admin/assets/js/pages/form-editor.init.js')}}></script>
    <script>
        $(document).ready(function (){
            // Datepicker initialization
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                //dateFormat: 'mm/dd/yy',
                todayHighlight: true,
                autoclose: true
            });
        })
    </script>
@endsection
