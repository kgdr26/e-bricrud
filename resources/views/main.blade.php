<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>e-BRI</title>
        <!-- Custom fonts for this template-->
        <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{ asset('assets/select2/select2.min.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.maskMoney.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/select2/select2.min.js')}}"></script>
        <script src="{{asset('assets/sweetalert2/sweetalert2.all.min.js')}}"></script>
        {{-- <script src="{{asset('assets/js/jssha25.js')}}"></script> --}}
        
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
            var delay = 500;
            $(window).on('load', function() {
                setTimeout(function(){
                    $(".preloader").hide();
                },delay);
            });
        </script>
    </head>
    <body id="page-top">

            <div class="preload-wrapper preloader">
                <div id="preloader_3"></div>
            </div>

            <!-- Page Wrapper -->
            <div id="wrapper">

                {{-- Sidebar --}}
                @include('Template.sidebar')
                {{-- End Sidebar --}}

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        {{-- Header --}}
                        @include('Template.header')
                        {{--End Header --}}

                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                        <!--End Begin Page Content -->
                    </div>
                    <!--End Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website {{date('Y')}}</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
                <!-- End Content Wrapper -->
            </div>
            <!-- End Page Wrapper -->
    
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
    </body>
</html>