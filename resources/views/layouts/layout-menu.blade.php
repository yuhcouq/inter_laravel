<html>
<head>
    <title>All Laravel - @yield('title')</title>
    <!-- CSS được tối ưu và biên dịch mới nhất -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
