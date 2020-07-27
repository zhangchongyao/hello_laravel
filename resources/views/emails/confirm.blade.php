<html>
<head>
    <meta charset="UTF-8">
    <title>注册确认链接</title>
</head>
<body>
    <h1>欢迎在Weibo APP 网站进行注册</h1>
    <p>
        请点击下面的链接完成注册：
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        如果这不是您本人的操作，请忽略次邮件。
    </p>
</body>
</html>
