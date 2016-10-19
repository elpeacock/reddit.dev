<nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

            <span class="sr-only">Toggle navigation</span>
            
            <span class="icon-bar"></span>
            
            <span class="icon-bar"></span>
            
            <span class="icon-bar"></span>
        
        </button>

        <a class="navbar-brand" href="{{ action('PostsController@index') }}">Lassen Reddit</a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <ul class="nav navbar-nav">
            
            <li class="active"><a href="{{ action('Auth\AuthController@getRegister') }}">Sign Up</a></li>
            
            <li><a href="{{ action('Auth\AuthController@getLogin') }}">Log In</a></li>
            
            @if (Auth::check())
            <li class="dropdown">
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="caret"></b></a>
                
                <ul class="dropdown-menu">
                    
                    <li><a href="{{ action('UsersController@show', Auth::id()) }}">Account Info</a></li>
                    
                    <li><a href="{{ action('PostsController@create') }}">Create A Post</a></li>
                    
                    <li class="divider"></li>
                    
                    <li><a href="{{ action('Auth\AuthController@getLogout') }}">Log Out</a></li>                   
                
                </ul>
            
            </li>
            @endif
       
        </ul>
        
        <div class="col-sm-3 col-md-3 pull-right">
            
            <form class="navbar-form" role="search" method="GET" action="{{ action('PostsController@index') }}">
                
                <div class="input-group">
                    
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ isset($searchTerm) ? $searchTerm : '' }}">
                    
                    <div class="input-group-btn">
                        
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    
                    </div>
                
                </div>
            
            </form>
        
        </div>        
    
    </div>

</nav>