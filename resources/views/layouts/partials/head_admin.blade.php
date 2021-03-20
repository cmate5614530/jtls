<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>{{ config('app.name', 'Laravel') }}</title>
<link rel="icon" href="{{asset('/images/myicon.png')}}" type="image/x-icon">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/font-awesome.min.css')}}"> -->
@if(Route::is(['blog','blog-details','add-blog','edit-blog','pending-blog']))
    <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/all.min.css')}}">
@endif
<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets_admin/plugins/morris/morris.css')}}">
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/select2.min.css')}}">
<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-datetimepicker.min.css')}}">

<!-- Full Calander CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')}}">
<!-- Datatables CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">

<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->

<!-- Main CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/style.css')}}">
