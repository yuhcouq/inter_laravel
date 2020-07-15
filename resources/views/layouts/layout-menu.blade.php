<html>
<head>
    <title>All Laravel - @yield('title')</title>
    <!-- CSS được tối ưu và biên dịch mới nhất -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div id="menu">
    <ul>
        <li><a href="/">Trang chủ</a></li>
        <li><a href="/first-blade-example">Ví dụ</a></li>
        <li><a href="/contact">Liên hệ </a></li>
    </ul>
</div>

@section('sidebar')
    Phần chính trong sidebar.
@show
    Phần test
<div class="container">
    @yield('content')
</div>
</body>
</html>
