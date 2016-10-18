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
            
            <li class="active"><a href="#">Sign Up</a></li>
            
            <li><a href="#">Log In</a></li>
            
            @if (Auth::check())
            <li class="dropdown">
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                
                <ul class="dropdown-menu">
                    
                    <li><a href="#">Account Info</a></li>
                    
                    <li><a href="#">Your Posts</a></li>
                    
                    <li class="divider"></li>
                    
                    <li><a href="#">Create A Post</a></li>                   
                
                </ul>
            
            </li>
            @endif
       
        </ul>
        
        <div class="col-sm-3 col-md-3 pull-right">
            
            <form class="navbar-form" role="search">
                
                <div class="input-group">
                    
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    
                    <div class="input-group-btn">
                        
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    
                    </div>
                
                </div>
            
            </form>
        
        </div>        
    
    </div>

</nav>