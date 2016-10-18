<!DOCTYPE html>
<html lang="en">
<head>

    @yield('title')
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    {{-- sidebar style --}}
    <link href='/css/sidebar.css' rel="stylesheet">

</head>

<body>

    @include('partials.navbar')
    
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

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
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