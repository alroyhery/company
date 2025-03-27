<!DOCTYPE html>
<html lang=en>
<!-- Mirrored from html.merku.love/axial/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Mar 2025 05:02:14 GMT -->

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <title>Home | Axial Construct</title>
   

        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/landingpage/css/bootstrap.min.css') }}" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/landingpage/css/materialdesignicons.min.css') }}" />

        <!-- pe-7 Icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/landingpage/css/pe-icon-7-stroke.css') }}" />

        <!-- owl carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/landingpage/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/landingpage/css/owl.theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/landingpage/css/owl.transitions.css') }}">

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/landingpage/css/style.css') }}" />
    </head> 
    <body>

        <!-- Begin page -->
        <div id="wrapper">
            {{-- topbar --}}

                    @include('top')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
    
            <div class="content-page" >
                <div class="content">
    
                    <!-- Start Content-->
                    
    
    
                        @yield('content-landing')
    
                    </div> <!-- container-fluid -->
    
                 <!-- content -->
    
                {{-- footer --}}
    
                @include('foot')
              
                        
    
    
    
    
    
            </div>


            
    
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
    
   
    
        </div>
        <!-- END wrapper -->
        <!-- Vendor js -->
    
    
        <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
        <script src="{{ asset('assets/js/lightbox.js') }}"></script>
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    
        <!-- datatable js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    
        <!-- Datatables init -->
        <script src=" {{ asset('assets/js/jszip.min.js') }}"></script>
    
        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/libs/chart-js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    
        <!-- Chart JS -->
        <script src="{{ asset('assets/libs/chart-js/Chart.bundle.min.js') }}"></script>


         <!-- Javascript -->
         <script src="{{ asset('assets/landingpage/js/jquery.min.js') }}"></script>
         <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
         <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
         <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>
 
         <!-- owl-carousel -->
         <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 
         <!-- custom js -->
         <script src="{{ asset('assets/js/app.js') }}"></script>
    
        {{-- <!-- Init js -->
        <script src="{{ asset('assets/js/pages/chartjs.init.js') }} "></script> --}}
        {{-- <script>
            document.addEventListener('contextmenu', (e) => {
                e.preventDefault();
            });
            document.onkeydown = function(e) {
                if (event.keyCode == 123) {
                    return false;
                }
                if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                    return false;
                }
                if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                    return false;
                }
                if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                    return false;
                }
                if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                    return false;
                }
            }
        </script> --}}
    
    
        @stack('js')
    
    </body>
    <!-- Mirrored from html.merku.love/axial/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Mar 2025 05:02:14 GMT -->

</html>