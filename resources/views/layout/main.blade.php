<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }} - Advanced Customer Relationship Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Streamline your business with our advanced CRM template. Easily integrate and customize to manage sales, support, and customer interactions efficiently. Perfect for any business size">
        <meta name="keywords"
            content="Advanced CRM template, customer relationship management, business CRM, sales optimization, customer support software, CRM integration, customizable CRM, business tools, enterprise CRM solutions">
        <meta name="author" content="Dreams Technologies">
        <meta name="robots" content="index, follow">
        @yield('meta')
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
        <!-- Apple Icon -->
        <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }}">

        <!-- Theme Config Js -->
        <script src="{{ asset('assets/js/theme-script.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Quill CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/quill/quill.snow.css') }}">
        <!-- Daterangepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/css/dataTables.bootstrap5.min.css') }}">
        <!-- Flatpickr CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}">
        <!-- Tabler Icon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.min.css') }}">
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

        <!-- Choices CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/choices.js/public/assets/styles/choices.min.css') }}">

        <!-- Mobile CSS-->
        <link rel="stylesheet" href="{{ asset('assets/plugins/intltelinput/css/intlTelInput.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/intltelinput/css/demo.css') }}">

        <!-- Simplebar CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/simplebar/simplebar.min.css') }}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="app-style">
    </head>
    <body>
        <!-- Begin Wrapper -->
        <div class="main-wrapper">
            <!-- Topbar Start -->
            @include('layout.common.header')
            <!-- Topbar End -->

            <!-- Search Modal -->
            @include('layout.common.search')
            <!-- Search Modal End -->

            <!-- Sidenav Menu Start -->
            @include('layout.common.sidebar')
            <!-- Sidenav Menu End -->

            <!-- ========================
                Start Page Content
            ========================= -->

            <div class="page-wrapper">
                <!-- Start Content -->
                @yield('content')
                <!-- End Content -->

                <!-- Start Footer -->
                @include('layout.common.footer')
                <!-- End Footer -->

            </div>

            <!-- ========================
                End Page Content
            ========================= -->

        </div>
        <!-- End Wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Simplebar JS -->
        <script src="{{ asset('assets/plugins/simplebar/simplebar.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Datatable JS -->
        <script src="{{ asset('assets/plugins/datatables/js/jquery.dataTables.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <script src="{{ asset('assets/plugins/datatables/js/dataTables.bootstrap5.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Daterangepicker JS -->
        <script src="{{ asset('assets/js/moment.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Choices JS -->
        <script src="{{ asset('assets/plugins/choices.js/public/assets/scripts/choices.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Select2 JS -->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Quill JS -->
        <script src="{{ asset('assets/plugins/quill/quill.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Mobile JS -->
        <script src="{{ asset('assets/plugins/intltelinput/js/intlTelInput.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Flatpickr JS -->
        <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Apexchart JS -->
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <script src="{{ asset('assets/json/deals-project.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <!-- Main JS -->
        <script src="{{ asset('assets/js/script.js') }}" type="3a1910e81f9f9b9575a9aaef-text/javascript"></script>
        <script src="{{ asset('assets/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
            data-cf-settings="3a1910e81f9f9b9575a9aaef-|49" defer></script>
        <script defer
            src="{{ asset('assets/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015.js') }}"
            integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
            data-cf-beacon='{"rayId":"9715e3427d274199","version":"2025.8.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
            crossorigin="anonymous"></script>
        <script src="{{ asset('assets/json/contacts-list.js') }}" type="d538c7e3797b528ee14d44a3-text/javascript"></script>
    </body>
</html>
