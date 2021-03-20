<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head_admin')
</head>

<body>
@if(!Route::is(['login','register','forgot-password','lock-screen','error-404','error-500']))
    @include('layouts.partials.header_admin')
    @include('layouts.partials.nav_admin')
@endif
@yield('content')
@include('layouts.partials.footer_admin-scripts')


</body>
</html>
