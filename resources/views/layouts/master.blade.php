<!DOCTYPE html>
<html lang="en">
<head>

    @yield('title')
    
    {{-- bootstrap cdn --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    {{-- sidebar style --}}
    <link href='/css/sidebar.css' rel="stylesheet">

</head>

<body>

    {{-- @include('partials.navbar') --}}
    
    <div class="container">

        @if(session()->has('SUCCESS_MESSAGE'))

            <div class="alert alert-success">

                <p>{{ session('SUCCESS_MESSAGE') }}</p>

            </div>

        @endif

        @if(session()->has('ERROR_MESSAGE'))

            <div class="alert alert-danger">

                <p>{{ session('ERROR_MESSAGE') }}</p>

            </div>

        @endif
        
        @yield('content')
    
    </div>
    
    {{-- jquery --}}
    <script src='/js/jquery.js' type="text/javascript"></script>

    {{-- bootstrap javascript cdn --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        console.log('working');
    });
    </script>
</body>
</html>