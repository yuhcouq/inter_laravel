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
        .register-1{
            margin: 83px 0px;
            background-color:white ;
        }
        .reg-header{
            padding: 83px 40px;
            margin-bottom: 0;
            text-align: center;
            color: #44b4b8;
        }
        .reg-body{
            padding: 100px 50px ;
            margin-bottom: 0;
            text-align: left;
            margin-top: 100px;
        }
        .register-4{
            height: 50px;
            width: 100%;
        }
        .register-5{
            margin-bottom: 20px;
            display: block;
        }
        form{
            margin:80px 40px ;
        }
        .btn{
            height: 50px;
            width: 100%;
            text-align: center;
            background-color:cornflowerblue;
            margin: 50px 0px;
        }
    </style>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script language="javascript">

        function load_ajax()
        {

            $.ajax({
                url : "{{route('registerpost')}}", // gửi ajax đến file result.php
                type : "post", // chọn phương thức gửi là get
                dateType:"json", // dữ liệu trả về dạng text
                data : { // Danh sách các thuộc tính sẽ gửi đi
                    name : $('#name').val(),
                    email : $('#email').val(),
                    _token: '{{csrf_token()}}',
                    password : $('#password').val(),
                    password_confirmation : $('#password_confirmation').val()
                },
                success : function (result){
                    // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                    // đó vào thẻ div có id = result
                    $('#result').html(result.error);
                }
            });
        }

    </script>
</head>
<body>
<div class="container">
    @if(isset($messages))
        <div class="alert alert-success" role="alert">{{ $messages }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 register-1">
            <div class="reg-header">
                <h1 >REGISTER</h1>
                <h4>
                    <strong>
                        Already have an account?
                        <a href="{{ route('getlogin') }}">Click here to
                            login</a>
                    </strong>
                </h4>

            </div>
            <div class="reg-boby">
                <div class="form">
                    <div class="result alert-success" role="alert" id="result"></div>
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                        <!-- Name -->
                    <div class="form-group register-2">
                        <span class="register-5">FULL NAME</span>
                        <input id="name" id="name" type="text" class="register-4" name="name" value="" required="" autofocus="">
                    </div>
                    <!-- Email -->
                    <div class="form-group register-2">
                        <span class="register-5">EMAIL ADDRESS</span>
                        <input id="email" type="email" class="register-4" name="email" value="" required="" autocomplete="email">
                    </div>
                    <!-- Password -->
                    <!-- Email -->
                    <div class="form-group register-2">
                        <span class="register-5">PASSWORD</span>
                        <input id="password" type="password" class="register-4" name="password" required="" autocomplete="current-password">
                    </div>

                    <!-- Password -->
                    <div class="form-group register-2">

                        <span class="register-5">CONFIRM PASSWORD</span>
                        <input id="password_confirmation" type="password" class="register-4" name="password_confirmation" required="">
                    </div>
                    <!-- Plan -->
                    <input type="hidden" value="" name="plan" id="plan">
                    <!-- Sign in button -->
                    <input class="btn" type="submit" id="submit" onclick="load_ajax()" value="register">
                </div>

            </div>
        </div>

    </div>

</div>

</body>
</html>
