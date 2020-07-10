<html>
<head>
    <title>Contact us - Allaravel.com Example</title>
    <link href = "https://fonts.googleapis.com/css?family=Arial:100" rel = "stylesheet" type = "text/css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Arial';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class = "container">
    <div class = "content">
        <div>
            @if (count($errors)>0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <strong>{{$error}}</strong>
                    </div>
                @endforeach
            @endif
            @if(isset($message))
                {{$message}}
            @endif
        </div>
        <form action = "/registerpost" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <table>
                <tr>
                    <td>tên</td>
                    <td><input type = "text" name = "name" /></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type = "text" name = "email" /></td>
                </tr>

                <tr>
                    <td>password</td>
                    <td>
                        <input type="text" name="password" />
                    </td>
                </tr>
                <tr>
                    <td>confirm password</td>
                    <td>
                        <input type="text" name="password_confirmation" />
                    </td>
                </tr>
                <tr>
                    <td>website</td>
                    <td>
                        <input type="text" name="website" />
                    </td>
                </tr>
                <tr>
                    <td colspan = "2" align = "center">
                        <input type = "submit" value = "Gửi" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>
