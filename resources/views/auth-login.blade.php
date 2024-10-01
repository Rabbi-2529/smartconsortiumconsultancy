<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | Smart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Multipurpose Admin & Dashboard Template">
    <meta name="author" content="Themesbrand">
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TAGCODE"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.ico') }}">

    <!-- Preloader CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}"  rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/admin/assets/css/login.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/css/default.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/css/flaticon.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Google Fonts -->
 

    <style>
        .password-container {
            position: relative;
        }
        .password-container input {
            padding-right: 2.5rem; /* Space for the eye icon */
        }
        .password-container .toggle-password {
            position: absolute;
            top: 50%;
            right: 0.75rem;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            cursor: pointer;
            color: #007bff;
            font-size: 1.1rem;
        }
    </style>
</head>
<body id="top">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="page_loader"></div>

    <!-- Login 3 start -->
    <div class="login-3 tab-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 bg-img">
                    <div class="informeson">
                        <div class="typing">
                            <h1>Welcome To Smart</h1>
                        </div>
                        <p>We are warmly welcoming you to join with us for your better career and prosperous life in the journey of your career development and growing of the business.
This consortium is absolutely the digitalized platform to showcase your performance in the training and presentation to the employers of your resume as well as what you have achieved so far in your efforts or the fresh graduates who want to join in the work place specially the 100% RMG industry.
 Also, the young entrepreneurs who want to do his/her own business, please come and see the difference how best we can help you with this platform.
</p>
                        <div class="social-list">
                        <div class="buttons">
                            @foreach ($socialLinks as $link)
                                @switch(strtolower($link->title))
                                    @case('facebook')
                                        <a href="{{ $link->link }}" class="facebook-bg" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        @break

                                    @case('twitter')
                                        <a href="{{ $link->link }}" class="twitter-bg" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                        @break

                                    @case('google')
                                        <a href="{{ $link->link }}" class="google-bg" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-google"></i>
                                        </a>
                                        @break

                                    @case('linkedin')
                                        <a href="{{ $link->link }}" class="dribbble-bg" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                        @break

                                    @default
                                        <!-- Optionally handle unknown platforms -->
                                        <!-- <p>Unknown platform: {{ $link->title }}</p> -->
                                @endswitch
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 form-section">
                    <div class="login-inner-form">
                        <div class="details">
                            <a href="login-3.html">
                                <img src="{{ asset('assets/admin/assets/images/logo.png') }}" alt="Logo">
                            </a>
                            <h3>Sign Into Your Account</h3>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="list-style-type: none; padding-left: 0;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                                                    <form class="mt-4 pt-2" method="POST" action="{{ route('custom.login') }}">
                                @csrf
                                <div class="form-group form-box">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                </div>
                                <div class="form-group form-box password-container">
                                    <input id="password" type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                    <button type="button" id="toggle-password" class="toggle-password">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>
                                <div class="form-group form-box checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                  <a href="{{ route('password.request') }}">Forgot Password</a>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme w-100">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 3 end -->

    <!-- External JS libraries -->
    <script src="{{ asset('assets/admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom JS Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('#toggle-password');
            const passwordField = document.querySelector('#password');
            if (togglePassword && passwordField) {
                togglePassword.addEventListener('click', function () {
                    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);
                    this.innerHTML = type === 'password' ? '<i class="fa-solid fa-eye"></i>' : '<i class="fa-solid fa-eye-slash"></i>';
                });
            }
        });
    </script>
</body>
</html>
