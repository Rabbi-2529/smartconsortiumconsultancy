<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 20:18:20 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | Smart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.ico') }}">

        <!-- plugin css -->
        <link href="{{ asset('assets/admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/preloader.min.css') }}" type="text/css" />
        
        <!--fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        
        @yield('custom_css')
    </head>

    <body>
@php
    $newMessagesCount = App\Models\Message::where('created_at', '>=', now()->startOfDay())->count();
@endphp
    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{ route('admin') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/admin/assets/images/logo.png') }}" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/admin/assets/images/logo.png') }}" alt="" height="50"> <span class="logo-txt">Smart</span>
                                </span>
                            </a>

                            <a href="{{ route('admin') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/admin/assets/images/logo.png') }}" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/admin/assets/images/logo.png') }}" alt="" height="50"> <span class="logo-txt">Smart</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                        
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell" class="icon-lg"></i>
                                <span class="badge bg-danger rounded-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="rounded-circle header-profile-user" src="{{ Auth::user()->profile_image ? asset('public/upload/profile_images/' . basename(Auth::user()->profile_image)) : asset('assets/images/default-profile.png') }}" alt="Profile Image">

                                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{ route('profile') }}">
    <i class="mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile
</a>
                              
                                <div class="dropdown-divider"></div>
                                             <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
    <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout
</a>

<!-- Hidden Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                        @if(auth()->user()->user_type == 1)
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="{{ route('admin') }}">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">About Us</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('about_ceos.index') }}" data-key="t-login">About CEO</a></li>
                                    <li><a href="{{ route('team.index') }}" data-key="t-register">Our Team</a></li>
                                    <li><a href="{{ route('achievements.index') }}" data-key="t-recover-password">Our Achievement</a></li>
                                    <li><a href="{{ route('clients.index') }}" data-key="t-lock-screen">Our Client</a></li>
                           
                                </ul>
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">About Company</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('our_vision.create') }}" data-key="t-login">Our Vision</a></li>
                                    <li><a href="{{ route('our_promise.create') }}" data-key="t-login">Our Promise</a></li>
                                    <li><a href="{{ route('our_goal.create') }}" data-key="t-login">Our Goal and KPI Status</a></li>
                                    <li><a href="{{ route('why_different.create') }}" data-key="t-login">Why Are We Different</a></li>
                                    <li><a href="{{ route('why_choose_us.create') }}" data-key="t-login">Why Choose Us</a></li>
                                </ul>
                            </li>
               <li>
    <a href="{{ route('videos.index') }}" class="nav-link">
        <i data-feather="video"></i>
        <span data-key="t-dashboard">Video Gallery</span>
    </a>
</li>
                            
<li>
    <a href="{{ route('photo_gallery.create') }}">
        <i data-feather="image"></i> <!-- Changed icon for Photo Gallery -->
        <span data-key="t-dashboard">Photo Gallery</span>
    </a>
</li>

<li>
    <a href="{{ route('product_and_services.index') }}">
        <i data-feather="box"></i> <!-- Changed icon for Products And Services -->
        <span>Products And Services</span>
    </a>
</li>

<li>
    <a href="{{ route('upcoming_events.index') }}">
        <i data-feather="calendar"></i> <!-- Changed icon for Upcoming Event -->
        <span>Upcoming Event</span>
    </a>
</li>

<li>
    <a href="{{ route('job-opportunities.index') }}">
        <i data-feather="briefcase"></i> <!-- Changed icon for Job Opportunities -->
        <span>Job Opportunities</span>
    </a>
</li>

<li>
    <a href="{{ route('social_links.index') }}">
        <i data-feather="link-2"></i> <!-- Changed icon for Social Links -->
        <span>Social Links</span>
    </a>
</li>

<li>
    <a href="{{ route('cover_images.index') }}">
        <i data-feather="image"></i> <!-- Changed icon for Cover Images -->
        <span>Cover Images</span>
    </a>
</li>

<li>
    <a href="{{ route('employers_corners.index') }}">
        <i data-feather="users"></i> <!-- Changed icon for Employers Corner -->
        <span>Employers Corner</span>
    </a>
</li>

<li>
    <a href="{{ route('news.index') }}">
        <i data-feather="file-text"></i> <!-- Changed icon for News -->
        <span>News</span>
    </a>
</li>

<!-- Main menu item for Courses with a submenu -->
                <li class="menu-item">
                    <a href="#coursesMenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="coursesMenu">
                        <i data-feather="book"></i>
                        <span>Courses</span>
                        <i data-feather="chevron-down" class="ms-auto"></i> <!-- Arrow icon for dropdown -->
                    </a>
                    <ul id="coursesMenu" class="collapse submenu">
                        <li>
                            <a href="{{ route('courses.index') }}">
                                <i data-feather="tag"></i>
                                <span>Course List</span>
                            </a>
                        </li>
                            <li>
                            <a href="{{ route('course-users.index') }}">
                                <i data-feather="tag"></i>
                                <span>Course User</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course_files.index') }}">
                                <i data-feather="file-text"></i>
                                <span>Course Files</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course_tutorials.index') }}">
                                <i data-feather="video"></i>
                                <span>Course Tutorials</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('messages.index') }}">
                                <i data-feather="message-square"></i> <!-- Icon for Messages -->
                                <span>Messages</span>
                            </a>
                        </li>
                    </ul>
                </li>
                                                
                <li>
    <a href="{{ route('contact-us-admin.index') }}">
        <i data-feather="mail"></i> <!-- Changed icon for Contact Us -->
        <span>Contact Us</span>
    </a>
</li>

<li class="menu-item">
    <a href="#membershipMenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="membershipMenu">
        <i data-feather="users"></i> <!-- Icon for Memberships -->
        <span>Memberships</span>
        <i data-feather="chevron-down" class="ms-auto"></i> <!-- Arrow icon for dropdown -->
    </a>
    <ul id="membershipMenu" class="collapse">
        <li>
            <a href="{{ route('memberships.index') }}">
                <i data-feather="book-open"></i> <!-- Icon for Memberships -->
                <span>Memberships</span>
            </a>
        </li>
        <li>
            <a href="{{ route('membership-users.index') }}">
                <i data-feather="user-check"></i> <!-- Changed icon for Membership Users -->
                <span>Membership Users</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="{{ route('faqs.index') }}">
        <i data-feather="help-circle"></i> <!-- Changed icon for FAQs -->
        <span>FAQs</span>
    </a>
</li>

                            @endif
       @if(auth()->user()->user_type == 2)
                            <li>
    @if (Auth::user()->membership_id === 1)
        <a href="{{ route('ads.index') }}">
            <i data-feather="layout"></i>
            <span>Ads</span>
        </a>
    @endif
</li>

    @endif
                            @if(auth()->user()->user_type == 3)
                            <li>
                                <a href="{{ route('index') }}">
                                    <i data-feather="grid"></i>
                                    <span>Main Smart</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i data-feather="home"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                            <li>
                                <a href="{{ route('learners.tutorials', ['learner_id' => auth()->user()->id]) }}">
                                    <i data-feather="book"></i>
                                    <span>Tutorials</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('learner.files', ['learner_id' => auth()->user()->id]) }}">
                                    <i data-feather="file-text"></i>
                                    <span>File</span>
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('learner.messages', ['learner_id' => Auth::id()]) }}">
                                <i data-feather="message-square"></i>
                                <span>Messages</span>
                                @if($newMessagesCount > 0)
                                    <span class="badge badge-danger">{{ $newMessagesCount }}</span>
                                @endif
                            </a>
                        </li>
                        @foreach($socialLinks as $link)
        @if(strcasecmp($link->title, 'Facebook') == 0)
            <li>
                <a href="{{ $link->link }}">
                    <i data-feather="facebook"></i>
                    <span>{{ $link->title }}</span>
                </a>
            </li>
        @elseif(strcasecmp($link->title, 'Whatsapp') == 0)
            <li>
                <a href="{{ $link->link }}">
                    <i data-feather="message-circle"></i>
                    <span>{{ $link->title }}</span>
                </a>
            </li>
        @endif
        <!-- Add more conditions for different titles if needed -->
    @endforeach
                            <li>
                                <a href="">
                                    <i data-feather="user"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            @endif


                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © IGL Web Ltd.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="https://iglweb.com/" target="_b" class="text-decoration-underline">IGL Web Ltd.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">

                    <h5 class="m-0 me-2">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/admin/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('assets/admin/assets/libs/pace-js/pace.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('assets/admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- dashboard init -->
        <script src="{{ asset('assets/admin/assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('assets/admin/assets/js/app.js') }}"></script>
        @yield('custom_js')
    </body>


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 20:18:46 GMT -->
</html>
