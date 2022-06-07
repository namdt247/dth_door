<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        @csrf
        <div>
            Username:
            <input type="text" name="user_name" id="" />
        </div>
        <div>
            Password:
            <input type="text" name="password" />
        </div>
        <button>Login</button>
    </form>
</body>
</html>