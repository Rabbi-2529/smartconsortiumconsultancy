@extends('frontend.master')
@php
   
   $currentPage = 'Contact Us';
@endphp

@section('custom_css')
<link rel="stylesheet" href="{{ asset('assets/css/about-us.css') }}">
<link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.html">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- font-awesome -->
  <link rel="stylesheet" href="assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- flag-icons -->
  <link href="assets/cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">

  <!-- swiper css -->
  <link rel="stylesheet" href="assets/css/swiper.min.css">

  <!-- magnific-popup css -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">

  <!-- common css -->
  <link rel="stylesheet" href="assets/css/common.css">

  <!-- nav-1 css -->
  <link rel="stylesheet" href="assets/css/nav-1.css">

  <!-- footer-1 css -->
  <link rel="stylesheet" href="assets/css/footer-1.css">
  <!-- service css -->
  <link rel="stylesheet" href="assets/css/contact.css">
  <style>
        .banner .banner-img {
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        overflow: hidden;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-image: url('{{ isset($coverImages[$currentPage]) ? asset( $coverImages[$currentPage]->image) : asset('images/home-1/banner.png') }}') !important;
    }
    .service-details .right-bar .main-service .contact-address .contact-address-item a, .service-details .right-bar .main-service .contact-address .contact-address-item span {
        font-size: 16px;
    }
  </style>
@endsection

@section('banner-content')

<div class="banner-section">
                <h1 class="heading split-collab">Contact Us</h1>
                <p class="description">
                  <a href="index.html">Home</a> <i class="fa-solid fa-chevron-right"></i>
                  <span>Contact Us</span>
                </p>
              </div>

@endsection
    <!-- navbar ends -->
    <!-- service details -->
    @section('main-content')
    <div class="service-details">
      <div class="animated-circle right"></div>
      <div class="animated-circle left"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="right-bar position-sticky top-0">
              <div class="main-service">
                <div class="contact-address">
                  <div class="contact-address-item">
                    <div class="row">
                      <div class="col-12 col-lg-2">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M35.5627 27.876C34.6414 26.9168 33.5302 26.4039 32.3525 26.4039C31.1843 26.4039 30.0636 26.9073 29.1044 27.8665L26.1031 30.8583C25.8562 30.7253 25.6093 30.6018 25.3718 30.4784C25.0299 30.3074 24.707 30.1459 24.4316 29.975C21.6203 28.1894 19.0654 25.8625 16.6151 22.8518C15.4279 21.3512 14.6301 20.088 14.0507 18.8059C14.8295 18.0935 15.5514 17.3527 16.2542 16.6404C16.5201 16.3745 16.786 16.0991 17.052 15.8331C19.0465 13.8386 19.0465 11.2553 17.052 9.26082L14.4591 6.66798C14.1647 6.37356 13.8608 6.06964 13.5759 5.76571C13.006 5.17687 12.4077 4.56902 11.7903 3.99917C10.8691 3.0874 9.76734 2.60303 8.60864 2.60303C7.44993 2.60303 6.32922 3.0874 5.37947 3.99917C5.36997 4.00867 5.36997 4.00867 5.36047 4.01816L2.1313 7.27583C0.915614 8.49151 0.222292 9.97313 0.070331 11.6922C-0.15761 14.4655 0.65918 17.0488 1.28602 18.7394C2.82462 22.8898 5.12303 26.7363 8.55165 30.8583C12.7116 35.8255 17.7168 39.748 23.4343 42.5118C25.6188 43.547 28.5345 44.7722 31.7922 44.9811C31.9916 44.9906 32.2006 45.0001 32.3905 45.0001C34.5845 45.0001 36.427 44.2118 37.8706 42.6447C37.8801 42.6257 37.8991 42.6162 37.9086 42.5972C38.4025 41.9989 38.9723 41.4575 39.5707 40.8782C39.9791 40.4888 40.397 40.0804 40.8054 39.653C41.7456 38.6748 42.2395 37.535 42.2395 36.3668C42.2395 35.1892 41.7361 34.0589 40.7769 33.1092L35.5627 27.876ZM38.9628 37.877C38.9533 37.877 38.9533 37.8865 38.9628 37.877C38.5924 38.2759 38.2125 38.6368 37.8041 39.0357C37.1868 39.6245 36.56 40.2419 35.9711 40.9352C35.0118 41.9609 33.8816 42.4453 32.4 42.4453C32.2576 42.4453 32.1056 42.4453 31.9631 42.4358C29.1424 42.2553 26.521 41.1536 24.555 40.2134C19.1794 37.611 14.4591 33.9165 10.5366 29.2342C7.29797 25.3307 5.13253 21.7216 3.6984 17.8466C2.81513 15.4817 2.49221 13.6392 2.63467 11.9011C2.72965 10.7899 3.15704 9.86866 3.94533 9.08036L7.184 5.84169C7.64938 5.40481 8.14326 5.16737 8.62763 5.16737C9.22598 5.16737 9.71035 5.52828 10.0143 5.8322C10.0238 5.84169 10.0333 5.85119 10.0428 5.86069C10.6221 6.40205 11.173 6.96241 11.7523 7.56075C12.0468 7.86468 12.3507 8.1686 12.6546 8.48202L15.2474 11.0749C16.2542 12.0816 16.2542 13.0124 15.2474 14.0191C14.972 14.2945 14.7061 14.57 14.4306 14.8359C13.6328 15.6527 12.873 16.4125 12.0468 17.1533C12.0278 17.1723 12.0088 17.1818 11.9993 17.2008C11.1825 18.0176 11.3344 18.8154 11.5054 19.3567C11.5149 19.3852 11.5244 19.4137 11.5339 19.4422C12.2082 21.0758 13.158 22.6144 14.6016 24.4474L14.6111 24.4569C17.2324 27.6861 19.9962 30.2029 23.0449 32.1309C23.4343 32.3779 23.8332 32.5773 24.2131 32.7673C24.555 32.9382 24.878 33.0997 25.1534 33.2706C25.1914 33.2896 25.2294 33.3181 25.2674 33.3371C25.5903 33.4986 25.8942 33.5746 26.2076 33.5746C26.9959 33.5746 27.4898 33.0807 27.6512 32.9192L30.8994 29.6711C31.2223 29.3482 31.7352 28.9588 32.3335 28.9588C32.9224 28.9588 33.4068 29.3292 33.7012 29.6521C33.7107 29.6616 33.7107 29.6616 33.7202 29.6711L38.9533 34.9042C39.9316 35.873 39.9316 36.8702 38.9628 37.877Z"
                            fill="white" />
                          <path
                            d="M24.3171 10.7042C26.8055 11.1221 29.0659 12.2997 30.8704 14.1043C32.675 15.9088 33.8432 18.1692 34.2705 20.6576C34.375 21.2844 34.9164 21.7213 35.5337 21.7213C35.6097 21.7213 35.6762 21.7118 35.7522 21.7023C36.455 21.5884 36.9204 20.9235 36.8064 20.2207C36.2935 17.21 34.8689 14.4652 32.694 12.2903C30.519 10.1153 27.7742 8.69068 24.7635 8.17781C24.0607 8.06384 23.4053 8.52922 23.2819 9.22254C23.1584 9.91586 23.6143 10.5902 24.3171 10.7042Z"
                            fill="white" />
                          <path
                            d="M44.9452 19.8504C44.0999 14.8927 41.7635 10.3814 38.1734 6.79131C34.5833 3.20123 30.072 0.86483 25.1143 0.0195474C24.421 -0.103921 23.7656 0.370957 23.6422 1.06428C23.5282 1.7671 23.9936 2.42243 24.6964 2.5459C29.1222 3.2962 33.1587 5.39516 36.3689 8.59584C39.5791 11.806 41.6685 15.8425 42.4188 20.2683C42.5233 20.8952 43.0647 21.3321 43.682 21.3321C43.758 21.3321 43.8245 21.3226 43.9004 21.3131C44.5938 21.2086 45.0686 20.5438 44.9452 19.8504Z"
                            fill="white" />
                        </svg>
                      </div>
                      <div class="col-12 col-lg-10">
                        <p>Any Questions? Call us</p>
                        <a href="callto:{{ $contactus->phone_number }}">{{ $contactus->phone_number }}</a>
                      </div>
                    </div>
                  </div>
                  <div class="contact-address-item">
                    <div class="row">
                      <div class="col-12 col-lg-2">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M23.4294 25.4925C21.7483 25.4847 20.078 25.2213 18.4761 24.7114C15.9164 23.855 14.0153 21.6881 13.4992 19.0388C12.9345 16.319 13.9636 13.4431 16.322 11.1488C16.575 10.9024 16.838 10.6663 17.1108 10.4406C19.5256 8.41901 22.7811 7.71646 25.8146 8.5623C28.7514 9.49966 30.7807 12.1836 30.8822 15.2647C30.9921 17.0382 30.4141 18.7859 29.2683 20.1441C28.3845 21.2573 26.9527 21.7831 25.5585 21.5064C24.9884 21.3881 24.4909 21.0428 24.1807 20.55C23.9024 20.0713 23.831 19.4999 23.983 18.9675C24.6389 16.4883 25.3057 12.7207 25.3123 12.6825C25.3589 12.4186 25.5427 12.1995 25.7946 12.1079C26.0465 12.0163 26.3281 12.066 26.5334 12.2383C26.7386 12.4106 26.8364 12.6793 26.7898 12.9433C26.762 13.1 26.1054 16.8112 25.4334 19.3509C25.3854 19.4916 25.3974 19.6459 25.4667 19.7775C25.5704 19.921 25.7268 20.0174 25.9017 20.0456C26.7551 20.188 27.6172 19.8456 28.1403 19.1564C29.0301 18.0919 29.476 16.7257 29.3853 15.3413C29.312 12.8887 27.7037 10.7476 25.3688 9.99375C22.8201 9.29273 20.0896 9.89161 18.0682 11.595C17.8272 11.795 17.5929 12.0044 17.368 12.2234C16.2021 13.3576 14.3402 15.7109 14.9676 18.7334C15.3891 20.845 16.8972 22.5756 18.9314 23.2818C22.4489 24.4039 27.5033 24.539 30.1664 21.2277C30.428 20.9126 30.8941 20.8657 31.2133 21.1223C31.5325 21.3789 31.5868 21.8441 31.3353 22.1674C29.3661 24.6164 26.3694 25.4925 23.4294 25.4925Z"
                            fill="white" />
                          <path
                            d="M20.8605 21.604C20.0678 21.6176 19.2945 21.3577 18.671 20.8679C17.2314 19.7158 17.1918 17.7144 17.5954 16.3514C17.7313 15.8975 17.9138 15.4589 18.14 15.0425C18.7027 13.9071 19.6025 12.9733 20.7163 12.3689C22.1033 11.6492 23.798 11.9221 24.8889 13.0409C25.4301 13.634 25.8378 14.3363 26.0844 15.1004C26.215 15.4882 26.0107 15.9091 25.6252 16.0464C25.2398 16.1837 24.8154 15.9866 24.6715 15.6036C24.4937 15.0391 24.1981 14.5187 23.8044 14.0768C23.1683 13.4264 22.1773 13.2784 21.379 13.7147C20.5437 14.1857 19.8725 14.9009 19.4553 15.7643C19.2799 16.0878 19.1383 16.4285 19.0326 16.781C18.7412 17.7668 18.8052 19.0535 19.6095 19.6975C20.4887 20.4035 21.972 20.105 22.8065 19.3851C23.4284 18.8252 23.9628 18.1752 24.3918 17.4566C24.5307 17.2239 24.7844 17.0842 25.0554 17.0913C25.3263 17.0983 25.5724 17.2511 25.699 17.4908C25.8256 17.7305 25.813 18.0198 25.666 18.2476C25.1579 19.0942 24.5253 19.8596 23.7895 20.5181C22.9694 21.21 21.9335 21.5941 20.8605 21.604Z"
                            fill="white" />
                          <path
                            d="M42.75 45.0005H2.25C1.00792 44.9991 0.00136403 43.9926 0 42.7505V15.0005C1.179e-05 14.7096 0.168163 14.445 0.431462 14.3215C0.694762 14.198 1.00574 14.2378 1.2294 14.4237L19.6322 29.7181C21.2974 31.0933 23.7043 31.0928 25.3689 29.7171L43.77 14.4237C43.9936 14.2374 44.3049 14.1974 44.5684 14.321C44.8319 14.4445 45.0002 14.7094 45 15.0005V42.7505C44.9986 43.9926 43.9921 44.9991 42.75 45.0005ZM1.5 16.599V42.7505C1.50054 43.1645 1.83601 43.4999 2.25 43.5005H42.75C43.1641 43.5001 43.4996 43.1645 43.5 42.7505V16.599L26.3266 30.8715C24.1061 32.7065 20.8956 32.707 18.6746 30.8726L1.5 16.599Z"
                            fill="white" />
                          <path
                            d="M0.750734 15.7503C0.424057 15.7506 0.134763 15.5394 0.0355086 15.2282C-0.0637457 14.9169 0.0498726 14.5772 0.316409 14.3884L7.06641 9.60337C7.40436 9.36914 7.86788 9.45069 8.1056 9.78619C8.34331 10.1217 8.26657 10.586 7.93356 10.8272L1.18356 15.6122C1.05717 15.7022 0.905862 15.7504 0.750734 15.7503Z"
                            fill="white" />
                          <path
                            d="M44.2508 15.7503C44.0956 15.7504 43.9443 15.7022 43.8179 15.6122L37.0679 10.8272C36.7349 10.586 36.6582 10.1217 36.8959 9.78619C37.1336 9.45069 37.5971 9.36914 37.9351 9.60337L44.6851 14.3884C44.9516 14.5772 45.0652 14.9169 44.966 15.2282C44.8667 15.5394 44.5774 15.7506 44.2508 15.7503Z"
                            fill="white" />
                          <path
                            d="M29.4297 5.25024C29.2744 5.25032 29.123 5.20207 28.9964 5.11217L25.4114 2.56967C23.7472 1.16341 21.3154 1.14876 19.6344 2.53487L16.0044 5.11224C15.7858 5.26728 15.5011 5.2939 15.2575 5.18209C15.014 5.07028 14.8485 4.83701 14.8236 4.57017C14.7986 4.30332 14.9179 4.04343 15.1365 3.88839L18.7215 1.34589C20.9368 -0.465384 24.1254 -0.450977 26.3241 1.38024L29.8641 3.88809C30.1309 4.07693 30.2447 4.41677 30.1454 4.72815C30.046 5.03953 29.7565 5.25074 29.4297 5.25024Z"
                            fill="white" />
                          <path
                            d="M1.23897 44.5951C0.9229 44.5954 0.640577 44.3975 0.533052 44.1002C0.425527 43.803 0.515881 43.4703 0.758974 43.2683L17.874 29.0483C18.0796 28.8734 18.3634 28.8225 18.617 28.9151C18.8706 29.0077 19.0549 29.2294 19.0995 29.4956C19.1441 29.7619 19.0422 30.0316 18.8327 30.2018L1.7177 44.4218C1.58332 44.5338 1.41392 44.5951 1.23897 44.5951Z"
                            fill="white" />
                          <path
                            d="M43.761 44.595C43.5862 44.5951 43.4169 44.5338 43.2828 44.4218L26.1678 30.2018C25.9582 30.0316 25.8563 29.7619 25.901 29.4956C25.9456 29.2294 26.1299 29.0077 26.3835 28.9151C26.6371 28.8225 26.9208 28.8734 27.1265 29.0483L44.241 43.2683C44.4841 43.4703 44.5745 43.803 44.467 44.1002C44.3594 44.3975 44.0771 44.5953 43.761 44.595Z"
                            fill="white" />
                          <path
                            d="M37.5 21.36C37.0858 21.36 36.75 21.0242 36.75 20.61V5.25586C36.7478 5.27161 36.7178 5.25038 36.6675 5.25001H8.3325C8.29935 5.24797 8.26681 5.25963 8.2425 5.28226L8.25 20.61C8.25 21.0242 7.91421 21.36 7.5 21.36C7.08579 21.36 6.75 21.0242 6.75 20.61V5.25001C6.7742 4.39943 7.48185 3.72867 8.3325 3.75001H36.6675C37.5181 3.72875 38.2257 4.39947 38.25 5.25001V20.61C38.25 21.0242 37.9142 21.36 37.5 21.36Z"
                            fill="white" />
                        </svg>
                      </div>
                      <div class="col-12 col-lg-10">
    <p>
        @php
            // Original text and email
            $text = "Any Questions? Email us"; // You can replace this with dynamic text if necessary
            $email = $contactus->email; // Dynamically fetched email
            
            // Split the text into words
            $words = explode(' ', $text);
            // Count the number of words
            $wordCount = count($words);
            // Get the first 21 words
            $firstPart = implode(' ', array_slice($words, 0, 21));
        @endphp

        {{ $firstPart }}
        
        @if($wordCount > 21)
            <br>
        @endif

        {{-- Split the email into two parts --}}
        @php
            $emailParts = explode('@', $email);
        @endphp
        
        <span style="display: block;">{{ $emailParts[0] }}@</span>
        <span style="display: block;">{{ $emailParts[1] }}</span>
    </p>
</div>

                    </div>
                  </div>
                  <div class="contact-address-item">
                    <div class="row">
                      <div class="col-12 col-lg-2">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M44.957 44.1067L38.3652 26.7422C38.3105 26.5979 38.2068 26.4775 38.0725 26.4019L31.0513 22.4463L33.1012 19.1961C34.3592 17.1997 35.0243 14.8927 35.0243 12.5244C35.0243 5.6184 29.4059 0 22.4999 0C15.5939 0 9.97554 5.6184 9.97554 12.5244C9.97554 14.8933 10.6409 17.2004 11.8996 19.1962C11.9333 19.2498 13.949 22.4464 13.949 22.4464L6.9275 26.4019C6.79312 26.4775 6.68949 26.5979 6.63474 26.7422L0.042953 44.1067C-0.0555722 44.3661 0.0190468 44.6595 0.229369 44.8405C0.439954 45.0215 0.740979 45.0513 0.982766 44.915L11.5795 38.945L22.1763 44.915C22.3771 45.0281 22.6226 45.0281 22.8235 44.915L33.4202 38.945L44.017 44.915C44.1181 44.972 44.2296 44.9999 44.3405 44.9999C44.4949 44.9999 44.648 44.9459 44.7705 44.8406C44.981 44.6595 45.0555 44.3661 44.957 44.1067ZM23.1592 34.164C23.5716 34.0184 23.9291 33.7381 24.1718 33.3539C24.2053 33.3012 29.8169 24.4037 29.8169 24.4037L32.675 37.8516L23.1592 43.2126V34.164ZM13.0148 18.4929C11.889 16.7078 11.294 14.644 11.294 12.5243C11.294 6.34525 16.321 1.31827 22.5 1.31827C28.6791 1.31827 33.7061 6.34525 33.7061 12.5243C33.7061 14.6435 33.1112 16.7075 31.9861 18.4929C31.8981 18.6323 23.2126 32.4058 23.0611 32.6437C23.0597 32.6458 23.0585 32.6479 23.0572 32.6499C22.9349 32.8433 22.7267 32.9588 22.5 32.9588C22.2732 32.9588 22.064 32.8427 21.9416 32.6502C21.8535 32.5106 13.1507 18.7099 13.0178 18.4977C13.0168 18.4961 13.0158 18.4945 13.0148 18.4929ZM7.7825 27.4332L13.9274 23.9715L12.8569 29.008C12.7813 29.3641 13.0086 29.7141 13.3646 29.7899C13.4108 29.7997 13.457 29.8044 13.5023 29.8044C13.8069 29.8044 14.0806 29.592 14.1464 29.2822L15.1832 24.4041L20.8276 33.3557C21.0712 33.7388 21.429 34.0185 21.8407 34.1639V43.2127L12.325 37.8517L13.5983 31.8612C13.674 31.505 13.4467 31.1551 13.0906 31.0793C12.7342 31.0032 12.3844 31.231 12.3088 31.5869L10.9967 37.76L1.92144 42.873L7.7825 27.4332ZM34.0033 37.7601L31.0728 23.9714L37.2174 27.4332L43.0786 42.873L34.0033 37.7601Z"
                            fill="white" />
                          <path
                            d="M29.752 12.5244C29.752 8.52627 26.4991 5.27344 22.501 5.27344C18.5028 5.27344 15.25 8.52627 15.25 12.5244C15.25 16.5226 18.5028 19.7754 22.501 19.7754C26.4991 19.7754 29.752 16.5226 29.752 12.5244ZM16.5684 12.5244C16.5684 9.25312 19.2297 6.5918 22.501 6.5918C25.7723 6.5918 28.4336 9.25312 28.4336 12.5244C28.4336 15.7957 25.7723 18.457 22.501 18.457C19.2297 18.457 16.5684 15.7957 16.5684 12.5244Z"
                            fill="white" />
                          <path
                            d="M27.1152 12.5244C27.1152 9.98016 25.0452 7.91016 22.501 7.91016C19.9567 7.91016 17.8867 9.98016 17.8867 12.5244C17.8867 15.0687 19.9567 17.1387 22.501 17.1387C25.0452 17.1387 27.1152 15.0687 27.1152 12.5244ZM19.2051 12.5244C19.2051 10.707 20.6836 9.22852 22.501 9.22852C24.3184 9.22852 25.7969 10.707 25.7969 12.5244C25.7969 14.3418 24.3184 15.8203 22.501 15.8203C20.6836 15.8203 19.2051 14.3418 19.2051 12.5244Z"
                            fill="white" />
                        </svg>
                      </div>
                      <div class="col-12 col-lg-10">
                        <p> {{ $contactus->address }}</p>
                        <span>Bangladesh</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="customer-rating">
                  <h4>Customer Ratings</h4>
                  <ul>
                    <li>
                      <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_487_4590)">
                          <path
                            d="M44.8827 17.2616C44.5881 16.3504 43.7799 15.7032 42.8237 15.617L29.8355 14.4377L24.6996 2.41659C24.3209 1.53561 23.4585 0.965332 22.5002 0.965332C21.542 0.965332 20.6795 1.53561 20.3008 2.41865L15.165 14.4377L2.17466 15.617C1.22019 15.7052 0.414052 16.3504 0.117757 17.2616C-0.178538 18.1728 0.0950972 19.1722 0.817124 19.8022L10.6347 28.4123L7.73972 41.1647C7.52788 42.1023 7.89181 43.0715 8.6698 43.6339C9.08798 43.936 9.57723 44.0898 10.0706 44.0898C10.496 44.0898 10.9179 43.9752 11.2966 43.7486L22.5002 37.0526L33.6997 43.7486C34.5192 44.2416 35.5523 44.1966 36.3286 43.6339C37.1069 43.0698 37.4705 42.1002 37.2587 41.1647L34.3637 28.4123L44.1813 19.8039C44.9033 19.1722 45.179 18.1745 44.8827 17.2616Z"
                            fill="#FFC107" />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="45" height="45" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </li>
                    <li>
                      <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_487_4590)">
                          <path
                            d="M44.8827 17.2616C44.5881 16.3504 43.7799 15.7032 42.8237 15.617L29.8355 14.4377L24.6996 2.41659C24.3209 1.53561 23.4585 0.965332 22.5002 0.965332C21.542 0.965332 20.6795 1.53561 20.3008 2.41865L15.165 14.4377L2.17466 15.617C1.22019 15.7052 0.414052 16.3504 0.117757 17.2616C-0.178538 18.1728 0.0950972 19.1722 0.817124 19.8022L10.6347 28.4123L7.73972 41.1647C7.52788 42.1023 7.89181 43.0715 8.6698 43.6339C9.08798 43.936 9.57723 44.0898 10.0706 44.0898C10.496 44.0898 10.9179 43.9752 11.2966 43.7486L22.5002 37.0526L33.6997 43.7486C34.5192 44.2416 35.5523 44.1966 36.3286 43.6339C37.1069 43.0698 37.4705 42.1002 37.2587 41.1647L34.3637 28.4123L44.1813 19.8039C44.9033 19.1722 45.179 18.1745 44.8827 17.2616Z"
                            fill="#FFC107" />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="45" height="45" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </li>
                    <li>
                      <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_487_4590)">
                          <path
                            d="M44.8827 17.2616C44.5881 16.3504 43.7799 15.7032 42.8237 15.617L29.8355 14.4377L24.6996 2.41659C24.3209 1.53561 23.4585 0.965332 22.5002 0.965332C21.542 0.965332 20.6795 1.53561 20.3008 2.41865L15.165 14.4377L2.17466 15.617C1.22019 15.7052 0.414052 16.3504 0.117757 17.2616C-0.178538 18.1728 0.0950972 19.1722 0.817124 19.8022L10.6347 28.4123L7.73972 41.1647C7.52788 42.1023 7.89181 43.0715 8.6698 43.6339C9.08798 43.936 9.57723 44.0898 10.0706 44.0898C10.496 44.0898 10.9179 43.9752 11.2966 43.7486L22.5002 37.0526L33.6997 43.7486C34.5192 44.2416 35.5523 44.1966 36.3286 43.6339C37.1069 43.0698 37.4705 42.1002 37.2587 41.1647L34.3637 28.4123L44.1813 19.8039C44.9033 19.1722 45.179 18.1745 44.8827 17.2616Z"
                            fill="#FFC107" />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="45" height="45" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </li>
                    <li>
                      <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_487_4590)">
                          <path
                            d="M44.8827 17.2616C44.5881 16.3504 43.7799 15.7032 42.8237 15.617L29.8355 14.4377L24.6996 2.41659C24.3209 1.53561 23.4585 0.965332 22.5002 0.965332C21.542 0.965332 20.6795 1.53561 20.3008 2.41865L15.165 14.4377L2.17466 15.617C1.22019 15.7052 0.414052 16.3504 0.117757 17.2616C-0.178538 18.1728 0.0950972 19.1722 0.817124 19.8022L10.6347 28.4123L7.73972 41.1647C7.52788 42.1023 7.89181 43.0715 8.6698 43.6339C9.08798 43.936 9.57723 44.0898 10.0706 44.0898C10.496 44.0898 10.9179 43.9752 11.2966 43.7486L22.5002 37.0526L33.6997 43.7486C34.5192 44.2416 35.5523 44.1966 36.3286 43.6339C37.1069 43.0698 37.4705 42.1002 37.2587 41.1647L34.3637 28.4123L44.1813 19.8039C44.9033 19.1722 45.179 18.1745 44.8827 17.2616Z"
                            fill="#FFC107" />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="45" height="45" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </li>
                    <li>
                      <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_487_4590)">
                          <path
                            d="M44.8827 17.2616C44.5881 16.3504 43.7799 15.7032 42.8237 15.617L29.8355 14.4377L24.6996 2.41659C24.3209 1.53561 23.4585 0.965332 22.5002 0.965332C21.542 0.965332 20.6795 1.53561 20.3008 2.41865L15.165 14.4377L2.17466 15.617C1.22019 15.7052 0.414052 16.3504 0.117757 17.2616C-0.178538 18.1728 0.0950972 19.1722 0.817124 19.8022L10.6347 28.4123L7.73972 41.1647C7.52788 42.1023 7.89181 43.0715 8.6698 43.6339C9.08798 43.936 9.57723 44.0898 10.0706 44.0898C10.496 44.0898 10.9179 43.9752 11.2966 43.7486L22.5002 37.0526L33.6997 43.7486C34.5192 44.2416 35.5523 44.1966 36.3286 43.6339C37.1069 43.0698 37.4705 42.1002 37.2587 41.1647L34.3637 28.4123L44.1813 19.8039C44.9033 19.1722 45.179 18.1745 44.8827 17.2616Z"
                            fill="#FFC107" />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="45" height="45" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </li>
                  </ul>
                  <h2>4.8 / 5.0</h2>
                  <p>By 700+ logistics Customers</p>
                </div>
              </div>
            </div>
          </div>
    <div class="col-lg-8">
    <div class="left-bar">
        <div class="user-comment">
            <p>Need Any Help?</p>
            <h2 class="comment-title">Get in Touch With Us</h2>
            <div class="comment-box">
                <form id="contact-us-form" action="{{ route('send.contact.us') }}" method="POST" class="row g-4">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name *" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name *" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" class="form-control" placeholder="Phone *" required>
                        <div id="phone-error" class="text-danger" style="display: none;"></div>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Email Address *" required>
                        <div id="email-error" class="text-danger" style="display: none;"></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="subject" class="form-control" placeholder="Subject *" required>
                    </div>
                    <div class="col-6">
                        <input type="url" name="website" class="form-control" placeholder="Website">
                    </div>
                    <div class="col-12">
                        <textarea name="message" class="form-control" placeholder="Message *" required rows="4"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="button primary-link-btn" data-abc="true">
                            Send Message
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
    <!-- service details -->
    <!-- map section -->
    <div class="map">
      <div class="row">
        <div class="col-12">
        {{ $contactus->map }}
          <!-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1894882214233!2d90.37361868660015!3d23.74062133418649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b5c0611207%3A0xed7ed8cceed1d7ad!2sIGL%20Web%20Ltd!5e0!3m2!1sen!2sbd!4v1720518487053!5m2!1sen!2sbd"
            width="100%" height="800" frameborder="0" style="border:0"></iframe> -->
        </div>
      </div>
    </div>
    <!-- map section -->
    <!-- footer -->

    <!-- footer -->

    <!-- progress area start -->
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                  transition: stroke-dashoffset 10ms linear 0s;
                  stroke-dasharray: 307.919, 307.919;
                  stroke-dashoffset: 307.919;
                "></path>
      </svg>
    </div>
    <!-- progress area end -->
  </div>
  <!-- main -->

  <!-- pre loader start -->
  <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- pre loader end -->
  <!-- jquery -->
  <script defer src="assets/code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- bootstrap js -->
  <script defer src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- gsap js -->
  <script defer src="assets/js/swiper.js"></script>

  <!-- gsap js -->
  <script defer src="assets/js/gsap.min.js"></script>

  <!-- split-text js -->
  <script defer src="assets/js/split-text.js"></script>

  <!-- split-text js -->
  <script defer src="assets/js/scrolltigger.js"></script>

  <!-- split-type js -->
  <script defer src="assets/js/split-type.js"></script>

  <!-- waw js -->
  <script defer src="assets/js/waw.js"></script>

  <!-- counter-up js -->
  <script defer src="assets/js/counter-up.js"></script>

  <!-- metismenu js -->
  <script defer src="assets/js/metismenu.js"></script>

  <!-- metismenu js -->
  <script defer src="assets/js/magnific-popup.js"></script>

  <!-- metismenu js -->
  <script defer src="assets/js/waypoint.js"></script>

  <!-- main js -->
  <script defer src="assets/js/main.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-us-form');
    const phoneInput = form.querySelector('input[name="phone"]');
    const emailInput = form.querySelector('input[name="email"]');
    const phoneError = document.getElementById('phone-error');
    const emailError = document.getElementById('email-error');

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
            emailError.textContent = 'Please enter a valid email address.';
            emailError.style.display = 'block';
            this.classList.add('is-invalid'); // Bootstrap class for invalid input
            this.setCustomValidity('Please enter a valid email address.');
        } else {
            emailError.style.display = 'none';
            this.classList.remove('is-invalid'); // Remove invalid class
            this.setCustomValidity('');
        }
    });
});
</script>


  @endsection