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
            margin-bottom: 40px;
        }
        .result{
            text-align: center;
        }
    </style>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script language="javascript">

        function load_ajax()
        {

            $.ajax({
                url : "{{ route('loginpost') }}", // gửi ajax đến file result.php
                type : "post", // chọn phương thức gửi là get
                dateType:"text", // dữ liệu trả về dạng text
                data : { // Danh sách các thuộc tính sẽ gửi đi
                    email : $('#email').val(),
                    _token: '{{csrf_token()}}',
                    password : $('#password').val()

                },
                success : function (result){
                    // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                    // đó vào thẻ div có id = result
                    var result = "<div class='alert alert-success' role='alert'>"+result+"</div>";
                    $('#result').html(result);
                }
            });
        }

    </script>
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
                        <a href="{{ route('getregister') }}">Click here to
                            register</a>
                    </strong>
                </h4>

            </div>
            <div class="log-boby">
                <div class="form">
                    <div class="result alert-success" role="alert" id="result"></div>
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="md-form">
                        <input id= "email" type="email" class="form-control" name="email" value="" required="" autocomplete="email" autofocus="" placeholder="Email Address">
                        <i class="fa fa-envelope icon active"></i>
                    </div>
                    <!-- Password -->
                    <div class="md-form">
                        <input id="password" type="password" class="form-control" name="password" required="" autocomplete="current-password" placeholder="Password">
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
                    <input class="btn" type="submit" id="submit" onclick="load_ajax()" value="login">
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
