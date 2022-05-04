<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="description" content="">
            
        <title>@lang('site.app_name')</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
           <!-- Template Main CSS File -->
           <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
          <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
          <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
          <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
          <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
          <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
          <link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
          <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        
          <link rel="shortcut icon" href="assets/images/browser-tab.png" type="image/x-icon">
          
           
          <!-- Template Main JS File -->
          <script src="assets/js/jquery-3.2.1.min.js"></script>
          <script src="assets/js/jquery-3.6.0.min.js"></script>
          <script src="assets/js/popper.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script src="assets/js/isotope.pkgd.min.js"></script>
          <script src="assets/js/owl.carousel.js"></script>
            <script src="assets/js/owl.carousel.min.js"></script>
        
          <script src="assets/js/easing.js"></script>
          <script src="assets/js/custom.js"></script>
        
         <!-- Font-icon css-->
         <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
            
         @if (app()->getLocale() == 'ar')
        
             {{--google font--}}
             <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:400,600&display=swap">
        
             <style>
                 body {
                     font-family: 'cairo', 'sans-serif';
                 }
        
                 .breadcrumb-item + .breadcrumb-item {
                     padding-left: .5rem;
                 }
        
                 .breadcrumb-item + .breadcrumb-item::before {
                     padding-left: .5rem;
                 }
        
                 div.dataTables_wrapper div.dataTables_paginate ul.pagination {
                     margin: 2px 2px;
                 }
             </style>
         @endif
        
        
        
         {{--noty--}}
         <link rel="stylesheet" href="{{ asset('assets/plugins/noty/noty.css') }}">
         <script src="{{ asset('assets/plugins/noty/noty.min.js') }}"></script>
        </head>
        <body class="app main">

            <main class="app-content">
                @include('partials._session')

                @yield('content')
            
                <div class="modal fade general-modal" id="add-brand" aria-labelledby="add-brand" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
            
                            </div>
            
                        </div>
                    </div>
                </div>
            
            </main><!-- end of main -->

            @stack('scripts')
    </body>
</html>
