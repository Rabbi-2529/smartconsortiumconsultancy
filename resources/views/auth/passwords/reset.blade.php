<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password | Smart</title>
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/css/custom-styles.css') }}" rel="stylesheet" type="text/css" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            max-width: 150px;
        }
        .alert {
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s, border-color 0.3s, box-shadow 0.3s;
            text-transform: uppercase;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-primary:focus, .btn-primary:active {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .form-group input {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 10px;
        }
        .text-center {
            text-align: center;
        }
        .mb-4 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('assets/admin/assets/images/logo.png') }}" alt="Company Logo" class="logo">
        <h2 class="text-center mb-4">Reset Your Password</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control" id="password-confirm" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
        </form>
    </div>
</body>
</html>
