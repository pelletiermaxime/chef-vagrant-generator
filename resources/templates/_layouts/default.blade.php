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
                    @include('_layouts.messages')
                    @yield('main')
                </div>
            </div>
        </div>
        @if (App::environment('local'))
        <script src="{{ asset("assets/js/jquery-2.1.1.min.js") }}"></script>
        <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
        @else
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-49943403-2', 'auto');
          ga('send', 'pageview');
        </script>
        @endif
        @yield('script')
    </body>
</html>
