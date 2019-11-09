<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ URL('css/backend_css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ URL('css/backend_css/bootstrap-responsive.min.css')}}"/>
<link rel="stylesheet" href="{{ URL('css/backend_css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ URL('css/backend_css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ URL('css/backend_css/select2.css')}}" />
<link rel="stylesheet" href="{{ URL('css/backend_css/uniform.css')}}" />
<link rel="stylesheet" href="{{ URL('css/backend_css/matrix-media.css')}}" />
<link href="{{ URL('fonts/backend_font/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ URL('css/backend_css/jquery.gritter.css')}}" />

<!-- ================================================================== -->
<!-- <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 --><!-- =============================search record===================================== -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="{{ URL('css/backend_css/search_records.css')}}" /> -->


<!-- ================================================================== -->
</head>
<body>

<!--Header-part-->
@include('layouts/adminLayout/admin_header')
<!--Header-part-->

<!--sidebar-menu-->
@include('layouts/adminLayout/admin_sidebar')
<!--sidebar-menu-->

@yield('content');

<!--Footer-part-->
@include('layouts/adminLayout/admin_footer')
<!--end-Footer-part-->

<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/backend_js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.tables.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.popover.js') }}"></script>
<!-- <script src="{{ asset('js/backend_js/user_table.js') }}"></script> -->

</script>
</body>
</html>
