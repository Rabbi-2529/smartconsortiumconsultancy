<!DOCTYPE html>
<html>
<head>
    <title>New Job Application for {{ $jobTitle }}</title>
</head>
<body>
    <h1>New  Job Application Received for {{ $jobTitle }}</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    <p><strong>Experience:</strong> {{ $experience }} years</p>
    <p><strong>Expected Salary:</strong> {{ $expected_salary }}</p>
    <!--<p><strong>Job Opportunity:</strong> {{ $jobTitle }}</p> <!-- Display job title -->-->
    <!--<p><strong>Resume:</strong> <a href="{{ asset($resume) }}">View Resume</a></p>-->
</body>
</html>
