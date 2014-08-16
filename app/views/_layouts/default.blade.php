<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link href="{{ asset("assets/css/slate-bootstrap.min.css") }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-3 main">
                    @include('_layouts/menu')
                    @yield('main')
                </div>
            </div>
        </div>
        <!-- <script src="//code.jquery.com/jquery-2.1.1.min.js"></script> -->
        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
        <script src="{{ asset("assets/js/jquery-2.1.1.min.js") }}"></script>
        <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
        @yield('script')
    </body>
</html>
