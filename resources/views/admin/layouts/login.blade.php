<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title> Log in</title>

        
        <link href="{{ URL::to('src/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('src/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('src/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
        
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">LogIn</div>
            <form action="{{ Route('handleLogin') }}" method="post">
                {{ csrf_field() }}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User Name" value="{{ Request::old('username') }}" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" value="{{ Request::old('password') }}" required/>
                    </div>          
                    <div class="form-group">
                      <!--  <input type="checkbox" name="remember_me"/> Remember me-->
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="{{ Route('signform') }}" class="text-center">Register a new membership</a>
                </div>
              <!--<input type="hidden" name="_token" value="{{ Session::token() }}">-->
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="{{ URL::to('src/js/bootstrap.min.js') }}" type="text/javascript"></script>       

    </body>
</html>