<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="StaycationAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- style --}}
    @stack('after-style')
    @include('layouts.style')
    @stack('before-style')
</head>

<body>
    <!-- Left Panel -->
    @include('layouts.headerLeft')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('layouts.header')
        <!-- /#header -->
        <!-- Content -->
            @yield('content')
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->
    <!-- Scripts -->
    @stack('after-script')
    @include('layouts.script')
    @stack('before-script')
</body>
</html>
