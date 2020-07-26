<!DOCUMENT html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - 我们的交友平台</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Weibo App</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">关于</a></li>
                <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
