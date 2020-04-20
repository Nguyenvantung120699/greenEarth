
<!DOCTYPE html>
<html lang="en">
@include('themes.admin.html.head')
<body class="">
<div class="wrapper ">
@include('themes.admin.html.aside')
    <div class="main-panel">
       @include('themes.admin.html.header')
       @yield('content')
       @include('themes.admin.html.footer')
    </div>
</div>
@include('themes.admin.html.scripts')
</body>

</html>