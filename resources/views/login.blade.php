<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        body{
            background-color: darkkhaki;
        }

        .log-header{
            padding: 30px 40px;
            margin-bottom: 0;
            text-align: center;
            color: #44b4b8;
        }
        .log-body{
            padding: 100px 50px ;
            margin-bottom: 0;
            text-align: left;
            margin-top: 100px;
        }
        .log-1{
            margin-top: 83px;
            background-color:white ;
        }
        .md-form{
            padding: 30px 40px;
        }
        form{
            margin:80px 40px ;
        }
        .link{
            padding-bottom: 30px ;
        }
        .btn{
            height: 50px;
            width: 100%;
            text-align: center;
            background-color:cornflowerblue;
        }
    </style>
</head>
<body>
<div class="container">
    @if(isset($message))
        <div class="alert alert-success" role="alert">{{ $message }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 log-1">
            <div class="log-header">
                <h1 >LOGIN</h1>
                <h4>
                    <strong>
                        Don't have an account?
                        <a href="https://dev.cbetflashcards.com/login">Click here to
                            register</a>
                    </strong>
                </h4>
            </div>
            <div class="log-boby">
                <form style="color: #757575;" method="POST" action="{{ route('loginpost') }}">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                            <!-- Email -->
                    <div class="md-form">
                        <input type="email" class="form-control" name="email" value="" required="" autocomplete="email" autofocus="" placeholder="Email Address">
                        <i class="fa fa-envelope icon active"></i>
                    </div>
                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" class="form-control" name="password" required="" autocomplete="current-password" placeholder="Password">
                        <i class="fa fa-key icon active"></i>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="link">
                            <!-- Forgot password -->
                            <a href="">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                    <!-- Sign in button -->
                    <button class="btn" type="submit">Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
