<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('tittle')</title>
    @include('lingkungan::includes.style')


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    @include('lingkungan::includes.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
        @include('lingkungan::includes.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

       <!-- BEGIN: Footer-->
   @include('lingkungan::includes.footer')
    <!-- END: Footer-->

     <!-- BEGIN: Vendor JS-->
 <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
 {{-- <script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script> --}}
 <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="../../../app-assets/js/core/app-menu.js"></script>
 <script src="../../../app-assets/js/core/app.js"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="../../../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
 <script src="../../../app-assets/js/scripts/pages/app-invoice-list.js"></script>
 <!-- END: Page JS-->

 <!-- BEGIN: Page JS-->
 <script src="../../../app-assets/js/scripts/forms/form-repeater.js"></script>
 <!-- END: Page JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="../../../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
 <!-- END: Page Vendor JS-->


      <script>
     $(window).on('load', function() {
         if (feather) {
             feather.replace({
                 width: 14,
                 height: 14
             });
         }
     })
 </script>


</body>
<!-- END: Body-->

</html>
